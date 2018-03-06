@extends('pagelayout')
@section('content')
<!--banner-->
<div class="banner1">
    <div class="container">
        <h3><a href="{{route('trang-chu')}}">Trang Chủ</a> / <span>Đăng Nhập</span></h3>
    </div>
</div>
<!--banner-->

<div class="content">
    <!--login-->
    <div class="login">
        <div class="main-agileits">
            <div class="form-w3agile">
                <h3>Đăng nhập</h3>
                @if(count($errors) > 0)
                    <div class="alert alert-danger error-custom">
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
                <form action="{{route('dang-nhap')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="key">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input  type="text" value="{{old('email')}}" name="email" placeholder="email" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input  type="password" value="{{old('password')}}" name="password" placeholder="Mật khẩu" required="">
                        <div class="clearfix"></div>
                    </div>
                    <input type="submit" value="Login">
                </form>
            </div>
            <div class="forg">
                <a href="{{ route('password.request') }}" class="forg-left">Quên mật khẩu</a>
                <a href="{{route('dang-ki')}}" class="forg-right">Đăng kí</a>
            <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--login-->
</div>
@endsection