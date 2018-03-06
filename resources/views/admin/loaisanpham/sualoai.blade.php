@extends('Admin.index')
@section('content')
<div class="span9" id="content">
    <div class="row-fluid mgT12">
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>Error</h4>
            @foreach($errors->all() as $err)
                {{$err}}<br>
            @endforeach
        </div>
        @endif

        @if(session('thongbao'))
            <div class="alert alert-success">
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
                        <a href="{{route('dsloaisanpham')}}">Danh Sách Loại</a> <span class="divider">/</span>    
                    </li>
                    <li class="active">Sửa Loại sản phẩm</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Sửa Loại Sản Phẩm</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
                <form class="form-horizontal" id="form" action="admin/loaisanpham/sua-loai-san-pham/{{$loaisp->id}}" method="POST" enctype="multipart/form-data">
                  <fieldset>
                    <legend>Form Components</legend>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="control-group">
                      <label class="control-label" for="typeahead">Tên Sản Phẩm <span class="required">*</span> </label>
                      <div class="controls">
                        <input type="text" class="span6" data-provide="typeahead" value="{{$loaisp->name}}" name="tenloai" />
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="textarea2">Ghi chủ <span class="required">*</span></label>
                      <div class="controls">
                        <textarea class="input-xlarge textarea" name="ghichu" placeholder="Enter text ..." style="width: 750px; height: 200px">{{$loaisp->description}}</textarea>
                      </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn"><a href="{{route('dsloaisanpham')}}">Cancel</a></button>
                    </div>
                  </fieldset>
                </form>

            </div>
        </div>
    </div>
    <!-- /block -->
    </div>
</div>
@endsection