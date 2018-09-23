<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
      @yield('title','Muebles a la Medida')
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/sell/1-2-1/vendor/nouislider/nouislider.css">
    <!-- Google fonts - Playfair Display-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">
    
    <!-- owl carousel-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/sell/1-2-1/vendor/owl.carousel/assets/owl.carousel.css">
    <!-- Ekko Lightbox-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/sell/1-2-1/vendor/ekko-lightbox/ekko-lightbox.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style.default.css') }}" id="theme-stylesheet">
    
    
    <!-- Favicon-->

    <link rel="shortcut icon" href=https://imag.malavida.com/mvimgbig/download-s/sofascore-14045-0.jpg">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/solid.css" integrity="sha384-TbilV5Lbhlwdyc4RuIV/JhD8NR+BfMrvz4BL5QFa2we1hQu6wvREr3v6XSRfCTRp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/regular.css" integrity="sha384-avJt9MoJH2rB4PKRsJRHZv7yiFZn8LrnXuzvmZoD3fh1aL6aM6s0BBcnCvBe6XSD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/brands.css" integrity="sha384-7xAnn7Zm3QC1jFjVc1A6v/toepoG3JXboQYzbM0jrPzou9OFXm/fY6Z/XiIebl/k" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/fontawesome.css" integrity="sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG" crossorigin="anonymous">
    @yield('styles')
  </head>
  <body>
    <header class="header header-absolute">
      <!-- Top Bar-->
      <div class="top-bar">
        <div class="container-fluid">
          <div class="row d-flex align-items-center">
            <div class="col-sm-7 d-none d-sm-block">
              <ul class="list-inline mb-0">
                <li class="list-inline-item pr-3 mr-0">
                  <svg class="svg-icon mr-2">
                    <use xlink:href="#calls-1"> </use>
                  </svg>020-800-456-747
                </li>
                <li class="list-inline-item px-3 border-left d-none d-lg-inline-block">Free shipping on orders over $300</li>
              </ul>
            </div>
            <div class="col-sm-5 d-flex justify-content-end">
              <!-- Language Dropdown-->
              <div class="dropdown border-right px-3"><a id="langsDropdown" href="https://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle topbar-link"><img src="https://d19m59y37dris4.cloudfront.net/sell/1-2-1/img/united-kingdom.svg" alt="english" class="topbar-flag">English</a>
                <div aria-labelledby="langsDropdown" class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item text-sm"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/1200px-Flag_of_Spain.svg.png" alt="german" class="topbar-flag">Spanish</a><a href="#" class="dropdown-item text-sm"><img src="https://d19m59y37dris4.cloudfront.net/sell/1-2-1/img/france.svg" alt="french" class="topbar-flag">French</a></div>
              </div>
              <!-- Currency Dropdown-->
              <div class="dropdown pl-3 ml-0"><a id="currencyDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle topbar-link">USD</a>
                <div aria-labelledby="currencyDropdown" class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item text-sm">EUR</a><a href="#" class="dropdown-item text-sm"> GBP</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top Bar End-->
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg bg-transparent navbar-sticky navbar-airy navbar-dark bg-hover-white bg-fixed-white navbar-hover-light navbar-fixed-light">
        <div class="container-fluid">  
          <!-- Navbar Header  --><a href="{{url('/')}}" class="navbar-brand" >
          
            <span><img src="https://imag.malavida.com/mvimgbig/download-s/sofascore-14045-0.jpg"> MAM</span>
            <path class="text-primary" d="M62.0254 15.4219H64.418V18H62.0254V15.4219Z" transform="translate(0 -3)" fill="#9A6EE2"/>
            </a>
          <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
          <!-- Navbar Collapse -->
          <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="{{url('/catalog')}}" class="nav-link">Catalogue</a>
              </li>
             
              <!-- Multi level dropdown    -->
              <li class="nav-item"><a id="navbarDropdownMenuLink" href="http://configurator.joli.be/configurator/" class="nav-link">Design</a></li>
               
              <!-- Multi level dropdown end-->
              <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">Contact</a>
              </li>
               <!-- Megamenu-->
              <li class="nav-item dropdown position-static"><a href="#" data-toggle="dropdown" class="nav-link">Site<i class="fa fa-angle-down"></i></a>
                <div class="dropdown-menu megamenu py-lg-0">
                  <div class="row">
                    <div class="col-lg-9">
                      <div class="row p-3 pr-lg-0 pl-lg-5 pt-lg-5">
                        <div class="col-lg-3">
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">Homepage</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a href="index.html" class="megamenu-list-link">Fullscreen home</a></li>
                            
                          </ul>
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">Shop</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a href="category.html" class="megamenu-list-link">Category - left sidebar   </a></li>
                            <li class="megamenu-list-item"><a href="category-right.html" class="megamenu-list-link">Category - right sidebar   </a></li>
                            <li class="megamenu-list-item"><a href="category-no-sidebar.html" class="megamenu-list-link">Category - no sidebar   </a></li>
                            <li class="megamenu-list-item"><a href="category-full.html" class="megamenu-list-link">Category - full width   </a></li>
                            <li class="megamenu-list-item"><a href="category-masonry.html" class="megamenu-list-link">Category - masonry items   </a></li>
                            <li class="megamenu-list-item"><a href="category-banner.html" class="megamenu-list-link">Category - w/ banner   </a></li>
                            <li class="megamenu-list-item"><a href="detail.html" class="megamenu-list-link">Product detail   </a></li>
                            <li class="megamenu-list-item"><a href="detail-2.html" class="megamenu-list-link">Product detail - v.2   </a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3">
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">Order process</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a href="cart.html" class="megamenu-list-link">Shopping cart   </a></li>
                            <li class="megamenu-list-item"><a href="cart-2.html" class="megamenu-list-link">Shopping cart - v. 2 <span class="badge badge-info ml-1">New</span>   </a></li>
                            <li class="megamenu-list-item"><a href="checkout1.html" class="megamenu-list-link">Checkout 1 - Address   </a></li>
                            <li class="megamenu-list-item"><a href="checkout2.html" class="megamenu-list-link">Checkout 2 - Delivery   </a></li>
                            <li class="megamenu-list-item"><a href="checkout3.html" class="megamenu-list-link">Checkout 3 - Payment   </a></li>
                            <li class="megamenu-list-item"><a href="checkout4.html" class="megamenu-list-link">Checkout 4 - Review     </a></li>
                            <li class="megamenu-list-item"><a href="checkout5.html" class="megamenu-list-link">Checkout 5 - Confirmation   </a></li>
                          </ul>
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">Blog</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a href="blog.html" class="megamenu-list-link">Blog   </a></li>
                            <li class="megamenu-list-item"><a href="post.html" class="megamenu-list-link">Post   </a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3">
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">Pages</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a href="contact.html" class="megamenu-list-link">Contact   </a></li>
                            <li class="megamenu-list-item"><a href="contact-2.html" class="megamenu-list-link">Contact v.2   </a></li>
                            <li class="megamenu-list-item"><a href="text.html" class="megamenu-list-link">Text page   </a></li>
                            <li class="megamenu-list-item"><a href="faq.html" class="megamenu-list-link">F.A.Q.s  <span class="badge badge-info ml-1">New</span>   </a></li>
                            <li class="megamenu-list-item"><a href="coming-soon.html" class="megamenu-list-link">Coming soon   </a></li>
                          </ul>
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">Customer</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a href="customer-login.html" class="megamenu-list-link">Login/sign up   </a></li>
                            <li class="megamenu-list-item"><a href="customer-orders.html" class="megamenu-list-link">Orders   </a></li>
                            <li class="megamenu-list-item"><a href="customer-order.html" class="megamenu-list-link">Order detail   </a></li>
                            <li class="megamenu-list-item"><a href="customer-addresses.html" class="megamenu-list-link">Addresses   </a></li>
                            <li class="megamenu-list-item"><a href="customer-account.html" class="megamenu-list-link">Profile   </a></li>
                          </ul>
                        </div>
                       
                      </div>
                      <div class="row megamenu-services d-none d-lg-flex">
                        <div class="col-xl-3 col-lg-6 d-flex">
                          <div class="megamenu-services-item">
                            <svg class="svg-icon megamenu-services-icon">
                              <use xlink:href="#delivery-time-1"> </use>
                            </svg>
                            <div>
                              <h6 class="text-uppercase">Free shipping &amp; return</h6>
                              <p class="mb-0 text-muted text-sm">Free Shipping over $300</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 d-flex">
                          <div class="megamenu-services-item">
                            <svg class="svg-icon megamenu-services-icon">
                              <use xlink:href="#money-1"> </use>
                            </svg>
                            <div>
                              <h6 class="text-uppercase">Money back guarantee</h6>
                              <p class="mb-0 text-muted text-sm">30 Days Money Back</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 d-flex">
                          <div class="megamenu-services-item">
                            <svg class="svg-icon megamenu-services-icon">
                              <use xlink:href="#customer-support-1"> </use>
                            </svg>
                            <div>
                              <h6 class="text-uppercase">020-800-456-747</h6>
                              <p class="mb-0 text-muted text-sm">24/7 Available Support</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 d-flex">
                          <div class="megamenu-services-item">
                            <svg class="svg-icon megamenu-services-icon">
                              <use xlink:href="#secure-payment-1"> </use>
                            </svg>
                            <div>
                              <h6 class="text-uppercase">Secure Payment</h6>
                              <p class="mb-0 text-muted text-sm">Secure Payment</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block"><img src="http://www.yunibali.com/wp-content/uploads/2017/09/two_seaters_sofa_02_yuni_bali_furniture_manufacturer_exporter_teakwood_indonesia-1.jpg" alt="" class="bg-image"></div>
                  </div>
                </div>
              </li>
              <!-- /Megamenu end-->
              <!-- Search Button-->
              <div data-toggle="search" class="nav-item navbar-icon-link">
                <svg class="svg-icon">
                  <use xlink:href="#search-1"> </use>
                </svg>
              </div>
              <!-- User Not Logged - link to login page-->
              <div class="nav-item"><a href="customer-login.html" class="navbar-icon-link">
                  <svg class="svg-icon">
                    <use xlink:href="#male-user-1"> </use>
                  </svg><span class="text-sm ml-2 ml-lg-0 text-uppercase text-sm font-weight-bold d-none d-sm-inline d-lg-none">Log in    </span></a></div>
              <!-- Cart Dropdown-->
              <div class="nav-item dropdown"><a href="cart.html" class="navbar-icon-link d-lg-none"> 
                  <svg class="svg-icon">
                    <use xlink:href="#cart-1"> </use>
                  </svg><span class="text-sm ml-2 ml-lg-0 text-uppercase text-sm font-weight-bold d-none d-sm-inline d-lg-none">View cart</span></a>
                <div class="d-none d-lg-block"><a id="cartdetails" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="cart.html" class="navbar-icon-link dropdown-toggle">
                    <svg class="svg-icon">
                      <use xlink:href="#cart-1"> </use>
                    </svg>
                    <div class="navbar-icon-link-badge">3                         </div></a>
                  <div aria-labelledby="cartdetails" class="dropdown-menu dropdown-menu-right p-4">
                    <div class="navbar-cart-product-wrapper">
                      <!-- cart item-->
                      <div class="navbar-cart-product"> 
                        <div class="d-flex align-items-center"><a href="detail.html"><img src="https://novocal.de/images/produkte/bestuhlung/novocal-relax-01.jpg" alt="..." class="img-fluid navbar-cart-product-image"></a>
                          <div class="w-100"><a href="#" class="close text-sm mr-2"><i class="fa fa-times">                                                   </i></a>
                            <div class="pl-3"> <a href="detail.html" class="navbar-cart-product-link">Skull Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00 </strong></div>
                          </div>
                        </div>
                      </div>
                      <!-- cart item-->
                      <div class="navbar-cart-product"> 
                        <div class="d-flex align-items-center"><a href="detail.html"><img src="http://tgi1.jia.com/zximg/201504/31bd7839e03e.jpg" alt="..." class="img-fluid navbar-cart-product-image"></a>
                          <div class="w-100"><a href="#" class="close text-sm mr-2"><i class="fa fa-times">                                                   </i></a>
                            <div class="pl-3"> <a href="detail.html" class="navbar-cart-product-link">Transparent Blouse</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00 </strong></div>
                          </div>
                        </div>
                      </div>
                      <!-- cart item-->
                      <div class="navbar-cart-product"> 
                        <div class="d-flex align-items-center"><a href="{{url('/checkout')}}"><img src="https://static.mijnwebwinkel.nl/winkel/Opnivo/image/cache/full/3e16a09c0c87b7cd93de5a08798086a40d54ab0e.jpg" alt="..." class="img-fluid navbar-cart-product-image"></a>
                          <div class="w-100"><a href="#" class="close text-sm mr-2"><i class="fa fa-times">                                                   </i></a>
                            <div class="pl-3"> <a href="detail.html" class="navbar-cart-product-link">White Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00 </strong></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- total price-->
                    <div class="navbar-cart-total"><span class="text-uppercase text-muted">Total</span><strong class="text-uppercase">$75.00</strong></div>
                    <!-- buttons-->
                    <div class="d-flex justify-content-between"><a href="{{url('/cart')}}" class="btn btn-link text-dark mr-3">View Cart <i class="fa-arrow-right fa"></i></a><a href="{{url('/checkout')}}" class="btn btn-outline-dark">Checkout</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!-- /Navbar -->
      
     <div class="wrapper">
          @yield('content')
     </div>
    
    <!-- Footer-->
    <footer class="main-footer">
      <!-- Services block-->
      <div class="bg-gray-100 text-dark-700 py-6">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 service-column">
              <svg class="svg-icon service-icon">
                <use xlink:href="#delivery-time-1"> </use>
              </svg>
              <div class="service-text">
                <h6 class="text-uppercase">Free shipping &amp; return</h6>
                <p class="text-muted font-weight-light text-sm mb-0">Free Shipping over $300</p>
              </div>
            </div>
            <div class="col-lg-4 service-column">
              <svg class="svg-icon service-icon">
                <use xlink:href="#money-1"> </use>
              </svg>
              <div class="service-text">
                <h6 class="text-uppercase">Money back guarantee</h6>
                <p class="text-muted font-weight-light text-sm mb-0">30 Days Money Back Guarantee</p>
              </div>
            </div>
            <div class="col-lg-4 service-column">
              <svg class="svg-icon service-icon">
                <use xlink:href="#customer-support-1"> </use>
              </svg>
              <div class="service-text">
                <h6 class="text-uppercase">020-800-456-747</h6>
                <p class="text-muted font-weight-light text-sm mb-0">24/7 Available Support</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main block - menus, subscribe form-->
      <div class="py-6 bg-gray-300 text-muted"> 
        <div class="container">
          <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
              <div class="font-weight-bold text-uppercase text-lg text-dark mb-3">Sell<span class="text-primary">.</span></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#" target="_blank" title="twitter" class="text-muted text-hover-primary"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="facebook" class="text-muted text-hover-primary"><i class="fab fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="instagram" class="text-muted text-hover-primary"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="pinterest" class="text-muted text-hover-primary"><i class="fab fa-pinterest"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="vimeo" class="text-muted text-hover-primary"><i class="fab fa-vimeo"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
              <h6 class="text-uppercase text-dark mb-3">Shop</h6>
              <ul class="list-unstyled">
                <li> <a href="#" class="text-muted">For Women</a></li>
                <li> <a href="#" class="text-muted">For Men</a></li>
                <li> <a href="#" class="text-muted">Stores</a></li>
                <li> <a href="#" class="text-muted">Our Blog</a></li>
                <li> <a href="#" class="text-muted">Shop</a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
              <h6 class="text-uppercase text-dark mb-3">Company</h6>
              <ul class="list-unstyled">
                <li> <a href="#" class="text-muted">Login                    </a></li>
                <li> <a href="#" class="text-muted">Register                    </a></li>
                <li> <a href="#" class="text-muted">Wishlist                    </a></li>
                <li> <a href="#" class="text-muted">Our Products                    </a></li>
                <li> <a href="#" class="text-muted">Checkouts                    </a></li>
              </ul>
            </div>
            <div class="col-lg-4">
              <h6 class="text-uppercase text-dark mb-3">Daily Offers & Discounts</h6>
              <p class="mb-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
              <form action="#" id="newsletter-form">
                <div class="input-group mb-3">
                  <input type="email" placeholder="Your Email Address" aria-label="Your Email Address" class="form-control bg-transparent border-secondary border-right-0">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-secondary border-left-0"> <i class="fa fa-paper-plane text-lg text-dark"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright section of the footer-->
      <div class="py-4 font-weight-light bg-gray-800 text-gray-300">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-left">
              <p class="mb-md-0">&copy; 2018 Your company.  All rights reserved.</p>
            </div>
            <div class="col-md-6">
              <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-md-right">
                <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/sell/1-2-1/img/visa.svg" alt="..." class="w-2rem"></li>
                <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/sell/1-2-1/img/mastercard.svg" alt="..." class="w-2rem"></li>
                <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/sell/1-2-1/img/paypal.svg" alt="..." class="w-2rem"></li>
                <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/sell/1-2-1/img/western-union.svg" alt="..." class="w-2rem"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer end-->
    
    <!-- JavaScript files-->
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to Bootstrapious website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://demo.bootstrapious.com/sell/1-2-0/icons/orion-svg-sprite.svg'); 
      
    </script>
    <script src="https://d19m59y37dris4.cloudfront.net/sell/1-2-1/vendor/jquery/jquery.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/sell/1-2-1/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/sell/1-2-1/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/sell/1-2-1/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/sell/1-2-1/vendor/owl.carousel/owl.carousel.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/sell/1-2-1/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/sell/1-2-1/vendor/nouislider/nouislider.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/sell/1-2-1/vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/sell/1-2-1/vendor/ekko-lightbox/ekko-lightbox.min.js"></script>
    <script src="{{ asset('js/demo.js') }}"></script>
    <script>
      var basePath = ''
      
    </script>
    <script src="{{ asset('js/theme.js') }}"></script>
    <!-- Start of Async Drift Code-->
    <script>
      "use strict";
      
      !function() {
      var t = window.driftt = window.drift = window.driftt || [];
      if (!t.init) {
          if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
          t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
          t.factory = function(e) {
          return function() {
              var n = Array.prototype.slice.call(arguments);
              return n.unshift(e), t.push(n), t;
          };
          }, t.methods.forEach(function(e) {
          t[e] = t.factory(e);
          }), t.load = function(t) {
          var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
          o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
          var i = document.getElementsByTagName("script")[0];
          i.parentNode.insertBefore(o, i);
          };
      }
      }();
      drift.SNIPPET_VERSION = '0.3.1';
      drift.load('mbzrkz3k736r');
      
    </script>
    <!-- End of Async Drift Code-->
    <style>
      iframe#drift-widget {
          left: 24px !important;
          right: auto !important;
      }
    </style>
  </body>
</html>