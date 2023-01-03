@extends('layout')
@section('content')
    <div class="container-fluid">
        <div class="productdetail">
            <p>Mã sản phẩm: {{$pro->ProductId}}</p>
            <p>Tên sản phẩm: {{$pro->ProductName}}</p>
            <p>Đơn vị tính: {{$pro->Unit}}</p>
            <p>Đơn giá: @php echo number_format($pro->Price); @endphp VND</p>
            <img src="images/{{$pro->Img}}" width="200px" height="100%" />
        </div>
    </div>
@stop