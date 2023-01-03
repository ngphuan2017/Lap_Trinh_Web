@extends('adminlayout')
@section('content')
    <div class="container-fluid">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{route('insert')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="ProductName">Tên sản phẩm</label>
                <input type="text" name="ProductName" id="ProductName" class="form-control" />
            </div>
            <div class="form-group">
                <label for="Unit">Đơn vị</label>
                <select name="Unit" id="Unit" class="form-control">
                    <option value="Cái" seclected>Cái</option>
                    <option value="Bộ">Bộ</option>
                    <option value="Chiếc">Chiếc</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Price">Đơn giá</label>
                <input type="text" name="Price" id="Price" class="form-control" />
            </div>
            <div class="form-group">
                <label for="Categoryid">Loại sản phẩm</label>
                <select name="CategoryId" id="CategoryId" class="form-control">
                    @foreach ($category as $c)
                    <option value="{{$c->CategoryId}}">{{$c->CategoryName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="fileUpload">Hình sản phẩm</label>
                <input type="file" name="fileUpload" id="fileUpload" class="form-control" />
            </div>
            <div class="form-group">
                <button type="submit" style="cursor:pointer" class="btn btn-primary">Thêm</button>
            </div>
        </form>
    </div>
@stop