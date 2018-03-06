@if(Session::has('cart'))
<h2>Giỏ hàng của bạn (3)SP</h2>
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
		            <img src="home/images/{{$cart['item']['image']}}" style="width: 100px">
		            <p class="text-green mgT10">
		               <strong>{{$cart['item']['name']}}</strong>
		            </p>
		        </td>
		        <td class="text-center">M</td>
		        <td class="text-right">{{number_format($cart['item']['unit_price'])}}đ</td>
		        <td class="text-center">{{$cart['qty']}}</td>
		        <td class="text-right">{{number_format($cart['item']['unit_price'] * $cart['qty'])}}</td>
		        <td class="text-center">
		            <a class="btn btn-danger btn-sm remove-from-cart" href="javascript:void(0)">
		            <i class="fa fa-remove xoaitemcart" data-id="{{$cart['item']['id']}}" style="margin-right: 0;"></i>
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
@else
<h2>Giỏ hàng của bạn đang trống..</h2><a href="{{route('trang-chu')}}"><button type="button" class="btn btn-warning">Quay lại mua hàng</button></a>
@endif