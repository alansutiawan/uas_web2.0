<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Sport Center </title>
  <meta charset="UTF-8">
  <meta name="description" content=" Divisima | eCommerce Template">
  <meta name="keywords" content="SPORT CENTER, eCommerce, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="shortcut icon"/>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


  <!-- Stylesheets -->
  <link rel="stylesheet" href="css1/bootstrap.min.css"/>
  <link rel="stylesheet" href="css1/font-awesome.min.css"/>
  <link rel="stylesheet" href="css1/flaticon.css"/>
  <link rel="stylesheet" href="css1/slicknav.min.css"/>
  <link rel="stylesheet" href="css1/jquery-ui.min.css"/>
  <link rel="stylesheet" href="css1/owl.carousel.min.css"/>
  <link rel="stylesheet" href="css1/animate.css"/>
  <link rel="stylesheet" href="css1/style.css"/>


  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body style="font-family: Arial " >
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header section -->
  <header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 text-center text-lg-left">
            <!-- logo -->
            <a href="#" class="site-logo">
              <img src="img/logo4.png" alt="" width="1000" height="50">
            </a>
          </div>
          <div class="col-xl-6 col-lg-5">
            <form class="header-search-form">
              <input type="text" placeholder="cari barang disini ....">
              <button><i class="flaticon-search"></i></button>
            </form>
          </div>
          @guest
           
          <div class="col-xl-4 col-lg-5">
            <div class="user-panel">
              <div class="up-item">
                <i class="flaticon-profile"></i>
                <a href="login"=>Masuk</a> atau <a href="register ">Buat Akun</a>
              </div>
              <div class="up-item">
                <div class="shopping-card">
                  <i class="flaticon-bag"></i>
                  <span>0</span>
                </div>
                <a href="#">Keranjang Belanja</a>
              </div>
            </div>
          </div>
           @else
           <div style="width: 200px; height: 50px; border: 0px solid">
          
            <div style="width: 90px; float: left;">
                                <a id="navbar" class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre><i class="fa fa-user"></i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                </div>
                                <div style="width: 100px; float: right; padding-top: 8px">
                                     <a class="nav-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> {{ __('Keluar') }}
                                    </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> {{ __('Keluar') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                </div>
                           
                            </div>
                           

          @endguest
        </div>
      </div>
    </div>
    <nav class="main-navbar">
      <div class="container">
        <!-- menu -->
        <ul class="main-menu">
        <li class="nav-item" style="margin-left:150px">
                                <a class="nav-link   " href="{{ url('/') }}">
                                <i class="fa fa-home"></i> Home</a>
                        </li>
                        @if (Auth::check())
                           <li class="nav-item" style="margin-left:150px">
                                <a class="nav-link   " href="admin/products">
                                <i class="fa fa-home"></i> Produk</a>
                        </li>
                          <li class="nav-item" style="margin-left:150px">
                                <a class="nav-link   " href="admin/orders">
                                <i class="fa fa-home"></i> Order</a>
                        </li>
                        <li class="nav-item" style="margin-left:150px">
                            <a class="nav-link " href="admin/carts"><i class="fa fa-shopping-cart"></i> Cart <span class="badge badge-pill badge-danger">
                            @if(session('cart'))
                                {{ count(session('cart')) }}
                            @else
                                0
                            @endif
                            </span></a>
                        </li>
                        @endif
        </ul>
      </div>
    </nav>
  </header>
  <!-- Header section end -->
   <main class="py-4">
        <div class="container mt-4">
    <div class="row ml-4">
        <div class="col-md-3">
            <div class="form-group">
                <form action="{{url('/')}}">
                    <select class="custom-select mr-sm-2" id="categories" name="filter_category">
                        <option hidden>Choose Category...</option>
                        @foreach($category as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach                       
                    </select>
                    </form>
                </div>

            </div>
            <div class="col-md-4 ">
                <div class="form-group">
                <form action="{{url('/')}}">
                    <select name="sorting" id="sorting" class="form-control">
                        <option hidden> Sort By</option>
                        <option value="best_seller">Best Seller</option>
                        <option value="terbaik">Terbaik</option>
                        <option value="termurah">Termurah</option>
                        <option value="termahal">Termahal</option>
                        <option value="terbaru">Terbaru</option>
                        <option value="most_viewed">View</option>
                    </select>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container">

            @yield('content')
            </div>
</div>
        </main>



  <!-- Hero section -->
  <section class="hero-section">
    <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/bg1.jpg">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-7 text-white">
              <span>New Arrivals</span>
              <a href="#" class="site-btn sb-line">DISCOVER</a>
              <a href="carts" class="site-btn sb-white">ADD TO CART</a>
            </div>
          </div>
        </div>
      </div>
                  <div class="hs-item set-bg" data-setbg="img/bg2.jpg">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-7 text-white">
              <span>New Arrivals</span>
              <a href="#" class="site-btn sb-line">DISCOVER</a>
              <a href="carts" class="site-btn sb-white">ADD TO CART</a>
            </div>
          </div>
        </div>
      </div>
                  <div class="hs-item set-bg" data-setbg="img/bg3.jpg">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-7 text-white">
              <span>New Arrivals</span>
              <a href="#" class="site-btn sb-line">DISCOVER</a>
              <a href="carts" class="site-btn sb-white">ADD TO CART</a>
            </div>
          </div>
        </div>
      </div>
                  <div class="hs-item set-bg" data-setbg="img/bg4.jpg">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-7 text-black">
              <span>New Arrivals</span>
              <a href="#" class="site-btn sb-line">DISCOVER</a>
              <a href="carts" class="site-btn sb-white">ADD TO CART</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="slide-num-holder" id="snh-1"></div>
    </div>
  </section>
  <!-- Hero section end -->



  <!-- Features section -->
 
  <!-- Features section end -->


  <!-- letest product section -->

    
    @include('layouts.script')


  <!-- Footer section -->
  <section class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget about-widget">
            <h2>About</h2>
            <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
            <img src="img/cards.png" alt="">
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget about-widget">
            <h2>Questions</h2>
            <ul>
              <li><a href="">About Us</a></li>
              <li><a href="">Track Orders</a></li>
              <li><a href="">Returns</a></li>
              <li><a href="">Jobs</a></li>
              <li><a href="">Shipping</a></li>
              <li><a href="">Blog</a></li>
            </ul>
            <ul>
              <li><a href="">Partners</a></li>
              <li><a href="">Bloggers</a></li>
              <li><a href="">Support</a></li>
              <li><a href="">Terms of Use</a></li>
              <li><a href="">Press</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="social-links-warp">
      <div class="container">
        <div class="social-links">
          <a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
          <a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
          <a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
          <a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
          <a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
          <a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
          <a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
        </div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

      </div>
    </div>
  </section>
  <!-- Footer section end -->



  <!--====== Javascripts & Jquery ======-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.slicknav.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/jquery.zoom.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>
