@extends('admin.index')
@section('content')
<div class="span9" id="content">
    <div class="row-fluid mgT12">
        @if(count($errors) > 0)
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>Success</h4>
            @foreach($errors->all() as $err)
                {{$err}}<br>
            @endforeach
        </div>
        @endif

        @if(session('thongbao'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4>Success</h4>
                {{session('thongbao')}}
            </div>
        @endif
        <div class="navbar">
            <div class="navbar-inner">
                <ul class="breadcrumb">
                    <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
                    <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
                    <li>
                        <a href="#">Dashboard</a> <span class="divider">/</span>    
                    </li>
                    <li>
                        <a href="#">Settings</a> <span class="divider">/</span> 
                    </li>
                    <li class="active">Tools</li>
                </ul>
            </div>
        </div>
    </div>
     <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left"> Danh Sách Đơn Hàng Hiện Có</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                        <thead>
                            <tr>
                                <th>Mã ĐH</th>
                                <th>Họ Tên</th>
                                <th>Địa Chỉ</th>
                                <th>Sổ Tiền</th>
                                <th>Sản Phẩm</th>
                                <th>Ngày Đặt</th>
                                <th>Trạng Thái</th>
                                <th>Cập Nhật</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listBill as $lb)
                                <tr class="odd gradeX">
                                    <td>{{$lb->id}}</td>
                                    <td>{{$lb->name}}</td>
                                    <td>{{$lb->address}}</td>
                                    <td>{{number_format($lb->total)}}</td>
                                    <td>{{$lb->email}}</td>
                                    <td>{{$lb->date_order}}</td>
                                    <td class="center">
                                        @if($lb->status == 1)
                                        <span class="label label-warning">Đang giao</span>
                                        @elseif($lb->status == 2)
                                        <span class="label label-success">Đã giao</span>
                                        @else
                                        <span class="label label-important">Chưa giao</span>
                                        @endif
                                    </td>
                                    <td class="center" width="40px">
                                        <a href="{{route('detail',$lb->id)}}">
                                        <button class="btn"><i class="icon-eye-open"></i></button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /block -->
    </div>
</div>
@endsection