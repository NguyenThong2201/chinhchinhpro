@extends('Admin.index')
@section('content')
<div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Sửa</h1>
                </div>
                <!--end page header -->
            </div>



            
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Sửa Tài Khoản
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
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
                                    <form role="form" action="Admin/TaiKhoan/sua-tai-khoan" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <div class="form-group">
                                            <label>Tên Tài Khoản</label>
                                            <input class="form-control" name="tentk" value="{{$taikhoan->full_name}}" disabled />
                                        </div>
                                        <div class="form-group">
                                            <label>Loại Tài Khoản</label><br>
                                           <label class="radio-inline">
                                                <input type="radio" name="loaitaikhoan" id="optionsRadiosInline1" value="{{$taikhoan->type_use}}" checked />Khách Hàng
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="loaitaikhoan" id="optionsRadiosInline2" value="{{$taikhoan->type_use}}" />Admin
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Khóa Tài Khoản</label><br>
                                           <label class="radio-inline">
                                                <input type="radio" name="bixoa" id="optionsRadiosInline1" value="0" checked />Mớ
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="bixoa" id="optionsRadiosInline2" value="1" />Khóa
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" value="{{$taikhoan->email}}" disabled />
                                        </div>
                                        <div class="form-group">
                                            <label>Mật Khẩu</label>
                                            <input class="form-control" type="password" name="matkhau" value="{{$taikhoan->password}}" disabled />
                                        </div>
                                        <div class="form-group">
                                            <label>Số Điện Thoại</label>
                                            <input class="form-control" name="sodienthoai" value="{{$taikhoan->phone}}" disabled />
                                        </div>
                                        <div class="form-group">
                                            <label>Địa Chỉ</label>
                                            <input class="form-control" name="diachi" value="{{$taikhoan->address}}" disabled />
                                        </div>
                                        <button type="submit" class="btn btn-success">Thêm</button>
                                    </form>
                                </div>
                                <div id="message"></div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
@endsection