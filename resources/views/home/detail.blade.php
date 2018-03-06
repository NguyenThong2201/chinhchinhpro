@extends('pagelayout')
@section('content')
<!--banner-->
<div class="banner1">
    <div class="container">
        <h3><a href="{{route('trang-chu')}}">Trang Chủ</a> / <span>Chi Tiết</span></h3>
    </div>
</div>
<!--banner-->
<div class="content">
    <!--single-->
    <div class="single-wl3">
        <div class="container">
            <div class="single-grids">
                <div class="col-md-12 text-danger">
                    Địa chỉ: Shop ChinhChinh 22 Nguyễn Trãi, P2, Q5, TPHCM.
                </div>
                <hr>
                <!-- <div class="col-md-3"></div> -->
                <div class="col-md-8 single-grid mgT10">
                    <div clas="single-top">
                        <div class="single-left">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li data-thumb="/home/images/{{$product_detail->image}}">
                                        <div class="thumb-image"> <img src="/home/images/{{$product_detail->image}}" data-imagezoom="true" class="img-responsive"> </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-right simpleCart_shelfItem">
                            <h4>{{$product_detail -> name}}</h4>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <p class="price item_price">{{number_format($product_detail->promotion_price)}}đ</p>
                            <div class="description">
                                <p><span>Mô tả: </span>{{$product_detail->description}}</p>
                            </div>
                            <div class="color-quality">
                                <div class="quantity">
                                    <div class="quantity-select">Sổ Lượng:
                                        <div class="entry value-minus1">&nbsp;</div>
                                        <div class="entry value1"><span>1</span></div>
                                        <div class="entry value-plus1 active">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                            <div class="women">
								<span class="size">Size:
									<label class="radio-inline"><input type="radio" name="optradio">M</label>
									<label class="radio-inline"><input type="radio" name="optradio">S</label>
									<label class="radio-inline"><input type="radio" name="optradio">L</label>
								</span>
                                <a href="javascript:void(0)" data-id="{{$product_detail->id}}" data-text="Add To Cart" class="my-cart-b item_add them-giohang">Add To Cart</a>
                            </div>
                            <div class="social-icon">
                                <a href="#"><i class="icon"></i></a>
                                <a href="#"><i class="icon1"></i></a>
                                <a href="#"><i class="icon2"></i></a>
                                <a href="#"><i class="icon3"></i></a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-4 single-grid1">
                    <h3>Sản Phẩm Yêu Thích</h3>
                    <div class="recent-grids">
                        <div class="recent-left">
                            <a href="single.html"><img class="img-responsive " src="/home/images/r.jpg" alt=""></a>
                        </div>
                        <div class="recent-right">
                            <h6 class="best2"><a href="#">Lorem ipsum dolor </a></h6>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <span class=" price-in1"> $ 29.00</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!--Product Description-->
            <div class="product-w3agile">
                <h3 class="tittle1">Mô Tả</h3>
                <div class="product-grids">
                    <div class="col-md-4 product-grid">
                        <div id="owl-demo" class="owl-carousel">
                            <div class="item">
                                <div class="recent-grids">
                                    <div class="recent-left">
                                        <a href="single.html"><img class="img-responsive " src="/home/images/r.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-right">
                                        <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <span class=" price-in1"> $ 29.00</span>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="recent-grids">
                                    <div class="recent-left">
                                        <a href="single.html"><img class="img-responsive " src="/home/images/r1.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-right">
                                        <h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <span class=" price-in1"> $ 19.00</span>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="recent-grids">
                                    <div class="recent-left">
                                        <a href="single.html"><img class="img-responsive " src="/home/images/r2.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-right">
                                        <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <span class=" price-in1"> $ 19.00</span>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="recent-grids">
                                    <div class="recent-left">
                                        <a href="single.html"><img class="img-responsive " src="/home/images/r3.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-right">
                                        <h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <span class=" price-in1">$ 45.00</span>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="recent-grids">
                                    <div class="recent-left">
                                        <a href="single.html"><img class="img-responsive " src="/home/images/r4.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-right">
                                        <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <span class=" price-in1"> $ 29.00</span>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="recent-grids">
                                    <div class="recent-left">
                                        <a href="single.html"><img class="img-responsive " src="/home/images/r5.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-right">
                                        <h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <span class=" price-in1"> $ 19.00</span>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="recent-grids">
                                    <div class="recent-left">
                                        <a href="single.html"><img class="img-responsive " src="/home/images/r2.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-right">
                                        <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <span class=" price-in1"> $ 19.00</span>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="recent-grids">
                                    <div class="recent-left">
                                        <a href="single.html"><img class="img-responsive " src="/home/images/r3.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-right">
                                        <h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <span class=" price-in1">$ 45.00</span>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 product-grid1">
                        <div class="tab-wl3">
                            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
                                    <li role="presentation"><a href="#reviews" role="tab" id="reviews-tab" data-toggle="tab" aria-controls="reviews">Reviews (1)</a></li>

                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                        <div class="descr">
                                            <h4>{{$product_detail -> name}}</h4>
                                            <p>{{$product_detail->description}}</p>
                                            <ul>
                                                <li> Twin button front fastening</li>
                                                <li> Length:65cm</li>
                                                <li> Regular fit</li>
                                                <li> Notched lapels</li>
                                                <li> Internal pockets</li>
                                                <li> Centre-back vent </li>
                                                <li> Material : Outer: 40% Linen &amp; 40% Polyamide; Body Lining: 100% Cotton; Lining: 100% Acetate</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="reviews" aria-labelledby="reviews-tab">
                                        <div class="descr">
                                            <div class="reviews-top">
                                                <div class="reviews-left">
                                                    <img src="/home/images/men3.jpg" alt=" " class="img-responsive">
                                                </div>
                                                <div class="reviews-right">
                                                    <ul>
                                                        <li><a href="#">Admin</a></li>
                                                        <li><a href="#"><i class="glyphicon glyphicon-share" aria-hidden="true"></i>Reply</a></li>
                                                    </ul>
                                                    <p>Nội dung bình luận</p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="reviews-bottom">
                                                <h4>Bình Luận</h4>
                                                <p>Your Rating</p>
                                                <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="1"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="custom" aria-labelledby="custom-tab">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!--Product Description-->
        </div>
    </div>
    <!--single-->
    <div class="new-arrivals-w3agile">
        <div class="container">
            <h3 class="tittle1">Sản Phẩm Cùng Loại</h3>
            <div class="arrivals-grids">
                @foreach($product_same_kind as $prs)
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div  class="grid-arrival">
                            <figure>
                                <a href="{{route('chi-tiet',$prs->name_sale)}}">
                                    <div class="grid-img">
                                        <img  src="/home/images/p27.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="grid-img">
                                        <img  src="/home/images/{{$prs->image}}" class="img-responsive"  alt="">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="ribben">
                            <p>NEW</p>
                        </div>
                        @if($prs->unit_price - $prs->promotion_price > 0)
                            <div class="ribben1">
                                <p>SALE</p>
                            </div>
                        @endif
                        <div class="block">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="women mgB10">
                            <h6><a href="{{route('chi-tiet',$prs->name_sale)}}">{{$prs->name}}</a></h6>
                            <p >
                                @if($prs->unit_price - $prs->promotion_price > 0)
                                    <del>{{number_format($prs->unit_price)}}</del>
                                @endif
                                <em class="item_price">{{$prs->unit_price}}</em></p>
                            <a href="#" data-toggle="modal" data-target="#view-{{$prs->id}}" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                @include('page.modals',['pr'=>$prs])
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--new-arrivals-->
</div>
<script>
    var token ='{{csrf_token()}}';
    $(document).on('click', ".them-giohang", function() {
        var id = $(this).attr('data-id');
        $.ajax({
            type: "POST",
            url: "{{route('them-gio-hang')}}",
            data: { id: id, _token: token }
        }).done(function(data) {
          $("#sp-cart").html(data);
        });    
    });
</script>
 @endsection