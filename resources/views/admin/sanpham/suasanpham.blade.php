@extends('Admin.index')
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
                        <a href="#">Sản Phẩm</a> <span class="divider">/</span>    
                    </li>
                    <li class="active">Thêm sản phẩm</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Thêm Sản Phẩm</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
                <form class="form-horizontal" id="form" action="admin/sanpham/sua-san-pham/{{$sanpham->id}}" method="POST" enctype="multipart/form-data">
                  <fieldset>
                    <legend>Form Components</legend>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="control-group">
                      <label class="control-label" for="typeahead">Tên Sản Phẩm </label>
                      <div class="controls">
                        <input type="text" class="span6" data-provide="typeahead" value="{{$sanpham->name}}" name="tensp" />
                        <p class="help-block">Start typing to activate auto complete!</p>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="select01">Loại Sản Phẩm</label>
                      <div class="controls">
                        <select id="select01" class="chzn-select" name="loaisp">
                           @foreach($loaisp as $lsp)
                                <option
                                    @if($sanpham->id_type == $lsp->id)
                                        {{"selected"}}
                                    @endif
                                     value="{{$lsp->id}}">{{$lsp->name}}
                                </option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Giá Bán </label>
                        <div class="controls">
                            <input type="text" class="span6" id="giaban" name="giaban" value="{{$sanpham->unit_price}}" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Giá Khuyến Mãi</label>
                        <div class="controls">
                            <input type="text" class="span6" id="giakhuyenmai" name="giakhuyenmai" value="{{$sanpham->promotion_price}}"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Đơn Vị</label>
                        <div class="controls">
                            <input type="text" class="span6" name="donvi" value="{{$sanpham->unit}}" />
                        </div>
                    </div>
                    <div class="control-group" id="img_hinh">
                        <div class="controls">
                            <img id="hienhinh" src="source/image/product/{{$sanpham->image}}" height="100px" width="150px" />
                        </div> 
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="fileInput">File input</label>
                      <div class="controls">
                        <input class="input-file uniform_on" id="file" name="hinh" value="{{$sanpham->image}}"  type="file" required>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="date01">Date input</label>
                      <div class="controls">
                        <input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
                        <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="optionsCheckbox">Sản Phấm Mới</label>
                      <div class="controls">
                        <label class="radio-inline">
                            <input class="uniform_on" type="radio" name="moi" value="1" checked  type="checkbox">
                            Mới
                           <input class="uniform_on" type="radio" name="moi" value="0" checked  type="checkbox">
                            Cũ
                        </label>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="textarea2">Ghi chủ</label>
                      <div class="controls">
                        <textarea class="input-xlarge textarea"  name="ghichu" placeholder="Enter text ..." style="width: 750px; height: 200px">{{$sanpham->description}}</textarea>
                      </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{route('dssanpham')}}">
                            <button type="reset" class="btn">Cancel</button>
                        </a>
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