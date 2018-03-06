@extends('pagelayout')
@section('content')
<!--banner-->
<div class="banner1">
    <div class="container">
        <h3><a href="{{route('trang-chu')}}">Trang Chủ</a> / <span>Đăng Kí</span></h3>
    </div>
</div>
<!--banner-->

<div class="content">
    <!--login-->
    <div class="login">
        <div class="main-agileits">
            <div class="form-w3agile form1">
                <h3>Đăng kí tài khoản</h3>
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}}<br>
                        @endforeach
                    </div>
                @endif
                @if(session('thongbao'))
                    <div class="alert alert-danger">
                        {{session('thongbao')}}
                    </div>
                @endif
                <form action="{{route('dang-ki')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="key">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input  type="text" value="{{old('username')}}"  name="username" placeholder="Họ tên" required>
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input  type="text" value="{{old('email')}}"  name="email" placeholder="Email" required>
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input  type="text" value="{{old('address')}}"  name="address" placeholder="Địa chỉ" required>
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input  type="password" value="{{old('password')}}" name="password" placeholder="Mật khẩu" required>
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input  type="password" value="{{old('confirm_password')}}" name="confirm_password" placeholder="Nhập lại mật khẩu" required>
                        <div class="clearfix"></div>
                    </div>
                    <input type="submit" value="Đăng Kí">
                </form>
            </div>
            
        </div>
    </div>
    <!--login-->
</div>
@endsection