<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="top-left">
                <a href="{{route('lien-he')}}"> Liên Hệ  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> 0977970263</a>
            </div>
            <div class="top-right">
                <ul>
                    <li><a href="#">Gió Hàng</a></li>
                    @if(Auth::check())
                        <li><a href="#">Xin Chào {{Auth::user()->full_name}}</a></li>
                        <li><a href="{{route('dang-xuat')}}">Đăng Xuất</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Đăng Nhập</a></li>
                        <li><a href="{{ route('register') }}">Đăng Kí</a></li>
                    @endif
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="heder-bottom">
        <div class="container">
            <div class="logo-nav">
                <div class="logo-nav-left">
                    <h1><a href="{{route('trang-chu')}}">Vip Pro.Com<span>Shop anywhere</span></a></h1>
                </div>
                <div class="logo-nav-left1">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header nav_2">
                            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="{{route('trang-chu')}}" class="act">Trang Chủ</a></li>
                                <!-- Mega Menu -->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thời Trang Nữ<b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <div class="col-sm-3  multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Quần Áo </h6>
                                                    <li><a href="">Tất cả</a></li>
                                                    @foreach($type_products_women as $tpw)
                                                    <li><a href="{{route('thoi-trang',$tpw->sex)}}">{{$tpw->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Phụ Kiện</h6>
                                                    <li><a href="products.html">Sunglasses</a></li>
                                                    <li><a href="products.html">Wallets,Bags</a></li>
                                                    <li><a href="products.html">Footwear</a></li>
                                                    <li><a href="products.html">Watches</a></li>
                                                    <li><a href="products.html">Accessories</a></li>
                                                    <li><a href="products.html">Jewellery</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <a href="products.html"><img src="/home/images/woo.jpg" alt=" "/></a>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <a href="products.html"><img src="/home/images/woo1.jpg" alt=" "/></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thời Trang Nam<b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <div class="col-sm-3  multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Áo Quần</h6>
                                                    <li><a href="">Tất cả</a></li>
                                                    @foreach($type_products_man as $tpm)
                                                    <li><a href="{{route('thoi-trang',$tpm->sex)}}">{{$tpm->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Submenu2</h6>
                                                    <li><a href="products.html">Sunglasses</a></li>
                                                    <li><a href="products.html">Wallets,Bags</a></li>
                                                    <li><a href="products.html">Footwear</a></li>
                                                    <li><a href="products.html">Watches</a></li>
                                                    <li><a href="products.html">Accessories</a></li>
                                                    <li><a href="products.html">Jewellery</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <a href="products1.html"><img src="/home/images/woo3.jpg" alt=" "/></a>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <a href="products1.html"><img src="/home/images/woo4.jpg" alt=" "/></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>
                                <li><a href="{{route('lien-he')}}">Liên Hệ</a></li>
                                <li><a href="mail.html">Blog</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="logo-nav-right">
                    <ul class="cd-header-buttons">
                        <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                    </ul> <!-- cd-header-buttons -->
                    <div id="cd-search" class="cd-search">
                        <form action="#" method="post">
                            <input name="Search" type="search" placeholder="Search...">
                        </form>
                    </div>
                </div>
                <div class="header-right2">
                    <div class="cart box_1">
                        <a href="{{route('gio-hang')}}">
                            <h3>
                                <div class="total" id="sp-cart">
                                    <span class="simpleCart_total">
                                        {{ Session::has('cart')?Session('cart')->totalQty:'0'}} SP
                                    </span> 
                                    (<span class="simpleCart_quantity">
                                        {{ Session::has('cart')?number_format(Session('cart')->totalPrice):'0'}} đ
                                    </span>)
                                </div>
                                <img src="/home/images/bag.png" alt="" />
                            </h3>
                        </a>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>