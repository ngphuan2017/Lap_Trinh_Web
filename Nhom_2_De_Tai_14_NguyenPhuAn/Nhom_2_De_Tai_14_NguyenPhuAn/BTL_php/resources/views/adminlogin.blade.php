@extends('layout')
@section('content')
<div class="container">
  <h2>Đăng nhập</h2>
  <form action="{{URL::to('/admin-dashboard')}}" method="post">
    <div class="form-group">
      <label for="email">Email:</label> 
      <input type="email" class="form-control" id="email" placeholder="Nhập email" name="admin_email">
    </div>
    <div class="form-group">
      <label for="pwd">Mật khẩu:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="admin_password">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Nhớ đăng nhập
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Đăng nhập</button>
  </form>
</div>
@stop