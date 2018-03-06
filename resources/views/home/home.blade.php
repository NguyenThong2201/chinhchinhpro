@extends('mainlayout')
@section('content')
    <!--banner-bottom-->
    <div class="ban-bottom-w3l">
        <div class="container">
            <div class="col-md-6 ban-bottom">
                <div class="ban-top">
                    <img src="home/images/p1.jpg" class="img-responsive" alt=""/>
                    <div class="ban-text">
                        <h4>Áo Khoác Nam</h4>
                    </div>
                    <div class="ban-text2 hvr-sweep-to-top">
                        <h4>50% <span>Off</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ban-bottom3">
                <div class="ban-top">
                    <img src="home/images/p2.jpg" class="img-responsive" alt=""/>
                    <div class="ban-text1">
                        <h4>Đầm Dạ Hội</h4>
                    </div>
                </div>
                <div class="ban-img">
                    <div class=" ban-bottom1">
                        <div class="ban-top">
                            <img src="home/images/p3.jpg" class="img-responsive" alt=""/>
                            <div class="ban-text1">
                                <h4>T - Shirt</h4>
                            </div>
                        </div>
                    </div>
                    <div class="ban-bottom2">
                        <div class="ban-top">
                            <img src="home/images/p4.jpg" class="img-responsive" alt=""/>
                            <div class="ban-text1">
                                <h4>Hand Bag</h4>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--banner-bottom-->
    <!--new-arrivals-->
    <div class="new-arrivals-w3agile">
        <div class="container">
            <h2 class="tittle">Sản phẩm mới</h2>
            <div ng-app="">
                <p>Name: <input type="text" ng-model="name"></p>
                <p ng-bind="name"></p>
            </div>
            <div class="arrivals-grids">
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div  class="grid-arrival">
                            <figure>
                                <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
                                    <div class="grid-img">
                                        <img  src="home/images/p6.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="grid-img">
                                        <img  src="home/images/p5.jpg" class="img-responsive"  alt="">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="ribben">
                            <p>NEW</p>
                        </div>
                        <div class="ribben1">
                            <p>SALE</p>
                        </div>
                        <div class="women mgB10">
                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                            <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div  class="grid-arrival">
                            <figure>
                                <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal2">
                                    <div class="grid-img">
                                        <img  src="home/images/p7.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="grid-img">
                                        <img  src="home/images/p8.jpg" class="img-responsive"  alt="">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="ribben2">
                            <p>OUT OF STOCK</p>
                        </div>
                        <div class="women mgB10">
                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                            <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                            <a href="#" data-text="Add To Cart" class=" my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div  class="grid-arrival">
                            <figure>
                                <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal3">
                                    <div class="grid-img">
                                        <img  src="home/images/p10.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="grid-img">
                                        <img  src="home/images/p9.jpg" class="img-responsive"  alt="">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="ribben1">
                            <p>SALE</p>
                        </div>
                        <div class="women mgB10">
                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                            <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div  class="grid-arrival">
                            <figure>
                                <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal4">
                                    <div class="grid-img">
                                        <img  src="home/images/p11.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="grid-img">
                                        <img  src="home/images/p12.jpg" class="img-responsive"  alt="">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="women mgB10">
                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                            <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--new-arrivals-->
    <div class="latest-w3">
        <div class="container">
            <h3 class="tittle1">Xu hướng thời trang mới</h3>
            <div class="latest-grids">
                <div class="col-md-4 latest-grid">
                    <div class="latest-top">
                        <img  src="home/images/l1.jpg" class="img-responsive"  alt="">
                        <div class="latest-text">
                            <h4>Nam</h4>
                        </div>
                        <div class="latest-text2 hvr-sweep-to-top">
                            <h4>-50%</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 latest-grid">
                    <div class="latest-top">
                        <img  src="home/images/l2.jpg" class="img-responsive"  alt="">
                        <div class="latest-text">
                            <h4>Shoes</h4>
                        </div>
                        <div class="latest-text2 hvr-sweep-to-top">
                            <h4>-20%</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 latest-grid">
                    <div class="latest-top">
                        <img  src="home/images/l3.jpg" class="img-responsive"  alt="">
                        <div class="latest-text">
                            <h4>Nữ</h4>
                        </div>
                        <div class="latest-text2 hvr-sweep-to-top">
                            <h4>-50%</h4>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="latest-grids">
                <div class="col-md-4 latest-grid">
                    <div class="latest-top">
                        <img  src="home/images/l4.jpg" class="img-responsive"  alt="">
                        <div class="latest-text">
                            <h4>Phụ Kiện</h4>
                        </div>
                        <div class="latest-text2 hvr-sweep-to-top">
                            <h4>-45%</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 latest-grid">
                    <div class="latest-top">
                        <img  src="home/images/l5.jpg" class="img-responsive"  alt="">
                        <div class="latest-text">
                            <h4>Bag</h4>
                        </div>
                        <div class="latest-text2 hvr-sweep-to-top">
                            <h4>-10%</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 latest-grid">
                    <div class="latest-top">
                        <img  src="home/images/l6.jpg" class="img-responsive"  alt="">
                        <div class="latest-text">
                            <h4>Cameras</h4>
                        </div>
                        <div class="latest-text2 hvr-sweep-to-top">
                            <h4>-30%</h4>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="new-arrivals-w3agile">
        <div class="container">
            <h3 class="tittle1">Tất Cả Sản Phẩm</h3>
            <div class="arrivals-grids"  id="noidung">
                @foreach($products as $pr)
                <div class="col-md-3 arrival-grid simpleCart_shelfItem bt-product">
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
                <div class="clearfix"></div>
            </div>
            <div class="col-md-12">
                @if($products->count() < 4)
                    <div class="row"><a href="javascript:void(0)"> Hết </a></div>
                @else
                    <div class="row"><a href="javascript:void(0)" id="xem-them"> Xem thêm </a></div>
                @endif
            </div>
        </div>
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
    <!--new-arrivals-->
    <script>
        var page = 1;
        var token ='{{csrf_token()}}';
        jQuery(document).ready(function ($) {
            $("#xem-them").click(function(){
                page++;
                $.ajax({
                  type: "POST",
                  url: "{{route('trang-chu')}}",
                  data: { page: page, _token: token }
                }).done(function(data) {
                  $("#noidung").append(data);
                });
            });
            var nav = $('.heder-bottom');
            var nha = $('.cd-header-buttons');
            var taa = $('.cd-search');
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    nav.addClass("addthong");
                    nha.addClass("bnt-seach-thong");
                    taa.addClass("cd-search-thong");
                } else {
                    nav.removeClass("addthong");
                    nha.removeClass("bnt-seach-thong");
                    taa.removeClass("cd-search-thong");
                }
            });
        });
    </script>
@endsection