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
                <ul class="mgT20 mgB20">
                	<li>Thông Tin Người Mua: </li>
                	<ul>
	                	<li>Họ Tên: {{$bills->name}}</li>
	                	<li>Email: {{$bills->email}}</li>
	                	<li>Điện Thoại: {{$bills->phone_number}}</li>
	                	<li>Địa Chỉ: {{$bills->address}}</li>
	                	<li>Trang Thái: 
	                		@if($bills->status == 1)
                            	<span class="label label-warning">Đang giao</span>
                            @elseif($bills->status == 2)
                            	<span class="label label-success">Đã giao</span>
                            @else
                            	<span class="label label-important">Chưa giao</span>
                            @endif
			            </li>
                	</ul>
                </ul>
            </div>
        </div>
    </div>
    <div class="row-fluid">
    	<div class="navbar">
            <div class="navbar-inner">
            	<form class="form-horizontal" action="admin/donhang/cap-nhat-status" method="POST" enctype="multipart/form-data">
                  <fieldset class="mgT12">
                    <div class="control-group success">
                      	<label class="control-label mgT6" for="selectError">Cập nhật trạng thái: </label>
			             <div class="controls">
			             	<input type="hidden" name="id_bill" value="{{$bills->id}}">
			             	<input type="hidden" name="_token" value="{{csrf_token()}}">
			                <select id="selectError" name="status" class="mgT6">
			                	<option value="0" 
			                	@if($bills->status == 0)
			                		{{'selected'}}
			                	@endif
			                	>Chưa giao</option>
			                  	<option value="1"
			                  	@if($bills->status == 1)
			                		{{'selected'}}
			                	@endif
			                  	>Đang giao</option>
			                  	<option value="2"
			                  	@if($bills->status == 2)
			                		{{'selected'}}
			                	@endif
			                  	>Đã giao</option>
                        	</select>
                        	<button type="submit" class="btn btn-primary">Cập nhật</button>
	                    </div>
                    </div>
                  </fieldset>
                </form>
            </div>
        </div>
    </div>
     <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left"> Danh Sách Sản Phẩm Hiện Có</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
					    <thead>
					        <tr>
					            <th>Mã ĐH</th>
					            <th>Tên Sản Phẩm</th>
					            <th>Hình Ảnh</th>
					            <th>Sổ Lượng</th>
					            <th>Giá Bán</th>
					            <th>Tống Tiền</th>
					        </tr>
					    </thead>
					    <tbody>
					        @foreach($listBillDetail as $lbd)
					            <tr class="odd gradeX">
					                <td width="70px">{{$lbd->id_bill}}</td>
					                <td>{{$lbd->name}}</td>
					                <td><img src="source/image/product/{{$lbd->image}}" height="50px" width="70px"></td>
					                <td>{{$lbd->quantity}}</td>
					                <td>{{number_format($lbd->unit_price)}}</td>
					                <td>{{number_format($lbd->quantity*$lbd->unit_price)}}</td>
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