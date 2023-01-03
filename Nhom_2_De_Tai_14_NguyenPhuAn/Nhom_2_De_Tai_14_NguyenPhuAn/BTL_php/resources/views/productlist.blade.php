@extends('adminlayout')
@section('content')
    <div class="container-fluid">
        <h3 class="center">Danh sách sản phẩm</h3>
        <table class="table table-dark table-hover">
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Đơn vị tính</th>
                <th>Đơn giá</th>
                <th>Loại</th>
                <th>Hình sản phẩm</th>
                <th></th>
            </tr>
            @foreach ($product as $p)
            <tr>
                <td>{{$p->ProductId}}</td>
                <td>{{$p->ProductName}}</td>
                <td>{{$p->Unit}}</td>
                <td>@php echo number_format($p->Price, 0); @endphp VND</td>
                <td>{{$p->Category->CategoryName}}</td>
                <td>
                    <img src="images/{{$p->Img}}" width="50px" height="50px" />
                </td>
                <td>
                    <a href="{{route('deleteproduct', ['ProductId'=>$p->ProductId])}}">
                        <button type="submit" class="btn btn-success">Xóa</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    {{$product->links()}}
@stop