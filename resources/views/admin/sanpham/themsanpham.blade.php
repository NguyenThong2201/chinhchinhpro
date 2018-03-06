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
                        <a href="{{route('dssanpham')}}">Sản Phẩm</a> <span class="divider">/</span>    
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
                <form class="form-horizontal" id="form" action="admin/sanpham/them-san-pham" method="POST" enctype="multipart/form-data">
                  <fieldset>
                    <legend>Form Components</legend>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="control-group">
                      <label class="control-label" for="typeahead">Tên Sản Phẩm <span class="required">*</span> </label>
                      <div class="controls">
                        <input type="text" class="span6" data-provide="typeahead" value="{{old('tensp')}}" name="tensp" />
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="select01">Loại Sản Phẩm <span class="required">*</span></label>
                      <div class="controls">
                        <select id="select01" class="chzn-select" name="loaisp">
                          @foreach($loaisp as $lsp)
                          <option value="{{$lsp->id}}">{{$lsp->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Giá Bán <span class="required">*</span></label>
                        <div class="controls">
                            <input type="text" class="span6" id="giaban" name="giaban" value="{{old('giaban')}}" placeholder="200,000"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Giá Khuyến Mãi <span class="required">*</span></label>
                        <div class="controls">
                            <input type="text" class="span6" id="giakhuyenmai" name="giakhuyenmai" value="{{old('giakhuyenmai')}}" placeholder="150,000"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Đơn Vị</label>
                        <div class="controls">
                            <input type="text" class="span6" name="donvi" value="{{old('donvi')}}" placeholder="Hộp, cái, ..." />
                        </div>
                    </div>
                    <div class="control-group" id="img_hinh">
                        <div class="controls">
                            <img id="hienhinh" src="" height="100px" width="150px" />
                        </div> 
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="fileInput">Hình SP <span class="required">*</span></label>
                      <div class="controls">
                        <input class="input-file uniform_on" id="fileInput" name="hinh" value="{{old('hinh')}}" class="form-control" type="file" required>
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
                      <label class="control-label" for="textarea2">Ghi chủ <span class="required">*</span></label>
                      <div class="controls">
                        <textarea class="input-xlarge textarea" name="ghichu" placeholder="Enter text ..." style="width: 750px; height: 200px">{{old('ghichu')}}</textarea>
                      </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn"><a href="{{route('dssanpham')}}">Cancel</a></button>
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

@section('script')
<script>
    $(function() {
    $("#fileInput").change(function() {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ["image/jpeg","image/png","image/jpg"];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
    {
        return false;
    }
    else
    { 
        var reader = new FileReader();
        reader.onload = imageIsLoaded;
        reader.readAsDataURL(this.files[0]);
    }
    });
    });
    function imageIsLoaded(e) {
    $("#fileInput").css("color","green");
    $('#img_hinh').css("display", "block");
    $('#hienhinh').attr('src', e.target.result);
    $('#hienhinh').attr('width', '250px');
    $('#hienhinh').attr('height', '230px');
    };
    // 1
    // var $this = $("giaban");
    // var input = $this.val();
     
    // // 2
    // var input = input.replace(/[\D\s\._\-]+/g, "");
     
    // // 3
    // input = input ? parseInt( input, 10 ) : 0;
     
    // // 4
    // $this.val( function() {
    //     return ( input === 0 ) ? "" : input.toLocaleString( "en-US" );
    // } );
    // document.getElementById("giaban").onblur =function (){    
    //     //number-format the user input
    //     this.value = parseFloat(this.value.replace(/,/g, ""))
    //                     .toFixed(2)
    //                     .toString()
    //                     .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    //     //set the numeric value to a number input
    //     document.getElementById("number").value = this.value.replace(/,/g, "")
    // }
    (function($, undefined) {

        "use strict";

        // When ready.
        $(function() {
            
            var $form = $( "#form" );
            var $giaban = $form.find( "#giaban" );
            var $giakhuyenmai = $form.find( "#giakhuyenmai" );
            $giaban.on( "keyup", function( event ) {
                // When user select text in the document, also abort.
                var selection = window.getSelection().toString();
                if ( selection !== '' ) {
                    return;
                }
                // When the arrow keys are pressed, abort.
                if ( $.inArray( event.keyCode, [38,40,37,39] ) !== -1 ) {
                    return;
                }
                var $this = $( this );
                // Get the value.
                var input = $this.val();
                var input = input.replace(/[\D\s\._\-]+/g, "");
                input = input ? parseInt( input, 10 ) : 0;

                $this.val( function() {
                    return ( input === 0 ) ? "" : input.toLocaleString( "en-US" );
                } );
            } );
            $giakhuyenmai.on( "keyup", function( event ) {
                // When user select text in the document, also abort.
                var selection = window.getSelection().toString();
                if ( selection !== '' ) {
                    return;
                }
                // When the arrow keys are pressed, abort.
                if ( $.inArray( event.keyCode, [38,40,37,39] ) !== -1 ) {
                    return;
                }
                var $this = $( this );
                // Get the value.
                var input = $this.val();
                var input = input.replace(/[\D\s\._\-]+/g, "");
                input = input ? parseInt( input, 10 ) : 0;

                $this.val( function() {
                    return ( input === 0 ) ? "" : input.toLocaleString( "en-US" );
                } );
            } );
        });
    })(jQuery);
</script>
@endsection