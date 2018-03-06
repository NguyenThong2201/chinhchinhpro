@foreach($products as $pr)
<div class="col-md-3 arrival-grid simpleCart_shelfItem bt-product" id="noidung">
    <div class="grid-arr">
        <div  class="grid-arrival">
            <figure>
                <a href="{{route('chi-tiet',$pr->name_sale)}}">
                    <div class="grid-img">
                        <img  src="source/image/product/p27.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="grid-img">
                        <img  src="source/image/product/{{$pr->image}}" class="img-responsive"  alt="">
                    </div>
                </a>
            </figure>
        </div>
        <div class="ribben">
            <p>NEW</p>
        </div>
        @if($pr->unit_price - $pr->promotion_price > 0)
        <div class="ribben1">
            <p>SALE</p>
        </div>
        @endif
        <div class="women mgB10">
            <h6><a href="{{route('chi-tiet',$pr->name_sale)}}">{{$pr->name}}</a></h6>
            <p>
                @if($pr->unit_price - $pr->promotion_price > 0)
                <del>{{number_format($pr->unit_price)}}</del>
                @endif
                <em class="item_price">{{number_format($pr->promotion_price)}}đ</em>
            </p>
            <a href="#" data-toggle="modal" data-target="#view-{{$pr->id}}" data-text="Add To Cart" class="my-cart-b item_add">Đặt Mua</a>
        </div>
    </div>
</div>
    @include('page.modals',['pr'=>$pr])
@endforeach