@extends('pagelayout')
@section('content')
<div class="banner1">
    <div class="container">
        <h3><a href="{{route('trang-chu')}}">Trang Chủ</a> / <span>Giỏ Hàng</span></h3>
    </div>
</div>
<!--banner-->

<!--content-->
<div class="content">
	<div class="cart-items">
		<div class="container" id="bodycart">
			@if(Session::has('cart'))
			<h2>Giỏ hàng của bạn</h2>
			<div class="cart-header">
				<table class="table table-bordered">
				   	<thead>
				      	<tr>
				         	<th class="text-center">Tên Sản Phẩm</th>
				         	<th class="text-center">Size</th>
				         	<th class="text-right">Giá</th>
				         	<th class="text-center">Số lượng</th>
				         	<th class="text-right">Tổng tiền</th>
				         	<th class="text-center">Thao tác</th>
					    </tr>
					</thead>
				   	<tbody>
					   	@foreach($product_cart as $cart)
					    <tr>
					        <td scope="row" rowspan="1" class="text-center">
					            <img src="source/image/product/{{$cart['item']['image']}}" style="width: 100px">
					            <p class="text-green mgT10">
					               <strong>{{$cart['item']['name']}}</strong>
					            </p>
					        </td>
					        <td class="text-center">M</td>
					        <td class="text-right">{{number_format($cart['item']['promotion_price'])}}đ</td>
					        <td class="text-center">{{$cart['qty']}}</td>
					        <td class="text-right">{{number_format($cart['item']['promotion_price'] * $cart['qty'])}}</td>
					        <td class="text-center">
					            <a class="btn btn-danger btn-sm remove-from-cart" href="{{route('xoa-item',$cart['item']['id'])}}">
					            <i class="fa fa-remove" data-id="{{$cart['item']['id']}}" style="margin-right: 0;"></i>
					            </a>
					        </td>
					    </tr>
					    @endforeach
					    <tr>
					        <td colspan="3" class="text-right">
					            <strong>Tổng tiền</strong>
					        </td>
					        <td class="text-center">
					            <strong>{{$totalQty}}</strong><br>
					        </td>
					        <td class="text-right">
					            <strong>{{number_format($totalPrice)}}</strong>
					        </td>
					        <td></td>
					    </tr>
				   	</tbody>
				</table>
			</div>
			<br>
			<div class="row">
				<div class="col-md-4 text-center">
					<a class="label btn btn-primary" href="{{route('trang-chu')}}">
          				<i class="fa fa-backward"></i> Tiếp tục mua hàng
        			</a>
        		</div>
				<div class="col-md-4"></div>
				<div class="col-md-4 text-center">
					<a class="label btn btn-primary checkout-right" href="javascript:void(0)">
          				<i class="fa fa-refresh"></i> Gửi đơn hàng
        			</a>
				</div>
			</div>
			@else
				@if(session('thongbao'))
	                <div class="alert alert-danger">
	                    {{session('thongbao')}}
	                </div>
		         @endif
			<h2>Giỏ hàng của bạn đang trống..</h2><a href="{{route('trang-chu')}}"><button type="button" class="btn btn-warning">Quay lại mua hàng</button></a>
			@endif
			<div class="col-md-12 mg-checkout" id="mg-checkout" style="display: none;">
           		<section class="checkout-step">
		            <h1 class="step-title h3">
		               <span class="step-number"></span>
		               Vui lòng điền đầy đủ thông tin
		            </h1>
		            <div class="row">
		            	<div class="col-md-9">
		            		<ul class="nav no-line nav-inline m-y-2">
			                  	<li class="nav-item">
			                     	<a class="nav-link active" data-toggle="tab" href="" role="tab">
			                     	Thông Tin Người Mua
			                     	</a>
			                  	</li>
			               	</ul>
			               	<br>
			               	@if(count($errors) > 0)
				                <div class="alert alert-danger error-custom">
				                    @foreach($errors->all() as $err)
				                    {{$err}}<br>
				                    @endforeach
				                </div>
				            @endif
	               			<div class="tab-content">
				                  <div class="tab-pane active" id="checkout-guest-form" role="tabpanel">
				                     <form action="{{route('dat-hang')}}" id="customer-form" class="js-customer-form" method="post">
				                        <section>
				                        	<input type="hidden" name="_token" value="{{csrf_token()}}">
				                            <div class="form-group row no-gutters">
				                              <label class="col-md-3 form-control-label">
				                              </label>
				                              <div class="col-md-9">
				                                 <span class="custom-checkbox d-inline-flex">
				                                 <input type="hidden" value="1">
				                              </div>
				                           </div>
				                           <div class="form-group row no-gutters">
				                              <label class="col-md-3 form-control-label">
				                              Họ Tên: 
				                              </label>
				                              <div class="col-md-9">
				                                 <input class="form-control" id="hoten" name="name" type="text" value="">
				                              </div>
				                           </div>
				                           <div class="form-group row no-gutters">
				                              <label class="col-md-3 form-control-label">
				                              Email: 
				                              </label>
				                              <div class="col-md-9">
				                                 <input class="form-control" name="email" type="text" value="">
				                              </div>
				                           </div>
				                           <div class="form-group row no-gutters">
				                              <label class="col-md-3 form-control-label">
				                              Địa chỉ: 
				                              </label>
				                              <div class="col-md-9">
				                                 <textarea class="form-control height-address" name="address" type="text"></textarea>
				                              </div>
				                           </div>
				                           <div class="form-group row no-gutters">
				                              <label class="col-md-3 form-control-label">
				                              Sổ điện thoại 1: 
				                              </label>
				                              <div class="col-md-9">
				                                 <input class="form-control" name="phone1" type="text" value="">
				                              </div>
				                           </div>
				                           <div class="form-group row no-gutters">
				                              <label class="col-md-3 form-control-label">
				                              Sổ điện thoại 2: 
				                              </label>
				                              <div class="col-md-9">
				                                 <input class="form-control" name="phone2" type="text" value="">
				                              </div>
				                           </div>
				                           <div class="hidden-comment">
				                              <div class="form-group row no-gutters">
				                                 <label class="col-md-3 form-control-label">
				                                 Ngày sinh: 
				                                 </label>
				                                 <div class="col-md-9">
				                                    <input class="form-control" name="birthday" type="text" value="">
				                                 </div>
				                              </div>
				                           </div>
				                           <div class="form-group row no-gutters">
				                              <label class="col-md-3 form-control-label">
				                              Chi Chủ: 
				                              </label>
				                              <div class="col-md-9">
				                                 <textarea class="form-control height-address" name="note" type="text"></textarea>
				                              </div>
				                           </div>
				                        </section>
				                        <footer class="form-footer clearfix">
				                           <div class="row no-gutters">
				                           	  <label class="col-md-3 form-control-label">
				                              </label>
				                              <div class="col-md-9">
				                                 <input type="hidden" name="submitCreate" value="1">
				                                 <button class="continue btn btn-primary pull-xs-right" name="continue" data-link-action="register-new-customer" type="submit" value="1">
				                                 Tiếp Tục
				                                 </button>
				                              </div>
				                           </div>
				                        </footer>
				                     </form>
				                  </div>
				               </div>
	               		</div>
	               		<div class="col-md-3"></div>
		            </div>
               	</section>
           	</div>
		</div>
	</div>
<!-- checkout -->	
</div>
@endsection