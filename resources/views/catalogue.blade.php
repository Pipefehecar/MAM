@extends('layouts.app')

@section('title','MAM | Inicio')

{{-- @section('body-class','landing-page sidebar-collapse') --}}

@section('styles')
 <style>
     
 </style>
@endsection


@section('content')
 <section class="hero">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Catalogo        </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
          <h1 class="hero-heading">Furniture</h1>
          <div class="row">   
            <div class="col-xl-8 offset-xl-2"><p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p></div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="row">
        <!-- Grid -->
        <div class="products-grid col-xl-9 col-lg-8 order-lg-2">
          <header class="product-grid-header">
            <div class="mr-3 mb-3">
               
              Showing <strong>1-12 </strong>of <strong>158 </strong>products
            </div>
            <div class="mr-3 mb-3"><span class="mr-2">Show</span><a href="#" class="product-grid-header-show active">12    </a><a href="#" class="product-grid-header-show ">24    </a><a href="#" class="product-grid-header-show ">All    </a>
            </div>
            <div class="mb-3 d-flex align-items-center"><span class="d-inline-block mr-1">Sort by</span>
              <select class="custom-select w-auto border-0">
                <option value="orderby_0">Default</option>
                <option value="orderby_1">Popularity</option>
                <option value="orderby_2">Rating</option>
                <option value="orderby_3">Newest first</option>
              </select>
            </div>
          </header>
          <div class="row">
            <!-- product-->
            <div class="col-xl-4 col-sm-6">
              <div class="product">
                <div class="product-image">
                  <div class="ribbon ribbon-info">Fresh</div><img src="https://i0.wp.com/www.aylesburybathroomcentre.co.uk/wp-content/uploads/111706001_Set_1-2Final_width_N_height_612.jpg?zoom=2.625&fit=408%2C612&ssl=1" alt="product" class="img-fluid"/>
                  <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a><a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i class="fa fa-expand-arrows-alt"></i></a>
                    </div>
                  </div>
                </div>
                <div class="py-2">
                  <p class="text-muted text-sm mb-1">Bath</p>
                  <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">bathroom furniture</a></h3><span class="text-muted">$40.00</span>
                </div>
              </div>
            </div>
            <!-- /product-->
            <!-- product-->
            <div class="col-xl-4 col-sm-6">
              <div class="product">
                <div class="product-image"><img src="http://www.chairmanstore.com/image/data/Gnee%20Hong%20Chairs/Birdnest.jpg" alt="product" class="img-fluid"/>
                  <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a><a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i class="fa fa-expand-arrows-alt"></i></a>
                    </div>
                  </div>
                </div>
                <div class="py-2">
                  <p class="text-muted text-sm mb-1">Chair</p>
                  <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Yellow chairs</a></h3><span class="text-muted">$40.00</span>
                </div>
              </div>
            </div>
            <!-- /product-->
            <!-- product-->
            <div class="col-xl-4 col-sm-6">
              <div class="product">
                <div class="product-image">
                  <div class="ribbon ribbon-primary">Sale</div><img src="http://teoharovi.com/wp-content/gallery/gallery/dsc4932-copy.jpg" alt="product" class="img-fluid"/>
                  <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a><a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i class="fa fa-expand-arrows-alt"></i></a>
                    </div>
                  </div>
                </div>
                <div class="py-2">
                  <p class="text-muted text-sm mb-1">Chair</p>
                  <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Old Touch</a></h3><span class="text-muted">$40.00</span>
                </div>
              </div>
            </div>
            <!-- /product-->
            <!-- product-->
            <div class="col-xl-4 col-sm-6">
              <div class="product">
                <div class="product-image"><img src="http://www.giamac1.hospedagemdesites.ws/upload/products/775.1.jpg" alt="product" class="img-fluid"/>
                  <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a><a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i class="fa fa-expand-arrows-alt"></i></a>
                    </div>
                  </div>
                </div>
                <div class="py-2">
                  <p class="text-muted text-sm mb-1">Office</p>
                  <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Ergonomic Chair</a></h3><span class="text-muted">$40.00</span>
                </div>
              </div>
            </div>
            <!-- /product-->
            <!-- product-->
            <div class="col-xl-4 col-sm-6">
              <div class="product">
                <div class="product-image"><img src="https://cdn4.mystore4.no/thumb/377_566/paradisetinterir/67133_Riviera_Maison_RR_Outdoor_The_Hamptons_Dinin_4.jpg" alt="product" class="img-fluid"/>
                  <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a><a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i class="fa fa-expand-arrows-alt"></i></a>
                    </div>
                  </div>
                </div>
                <div class="py-2">
                  <p class="text-muted text-sm mb-1">Armchair</p>
                  <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">RR al aire libre The Hamptons Dining C</a></h3><span class="text-muted">$40.00</span>
                </div>
              </div>
            </div>
            <!-- /product-->
            <!-- product-->
            <div class="col-xl-4 col-sm-6">
              <div class="product">
                <div class="product-image"><img src="http://www.intersan-spb.ru/uploaded/image/laborlegno/regency.jpg" alt="product" class="img-fluid"/>
                  <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a><a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i class="fa fa-expand-arrows-alt"></i></a>
                    </div>
                  </div>
                </div>
                <div class="py-2">
                  <p class="text-muted text-sm mb-1">bathroom furniture</p>
                  <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">mirror and dressing table</a></h3><span class="text-muted">$40.00</span>
                </div>
              </div>
            </div>
            <!-- /product-->
            <!-- product-->
            <div class="col-xl-4 col-sm-6">
              <div class="product">
                <div class="product-image">
                  <div class="ribbon ribbon-danger">Sold out</div><img src="https://www.jfmankato.com/wp-content/uploads/dodge.jpg" alt="product" class="img-fluid"/>
                  <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a><a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i class="fa fa-expand-arrows-alt"></i></a>
                    </div>
                  </div>
                </div>
                <div class="py-2">
                  <p class="text-muted text-sm mb-1">Sweaters</p>
                  <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Ethnic Sweater</a></h3><span class="text-muted">$40.00</span>
                </div>
              </div>
            </div>
            <!-- /product-->
            <!-- product-->
            <div class="col-xl-4 col-sm-6">
              <div class="product">
                <div class="product-image"><img src="https://static.mijnwebwinkel.nl/winkel/Opnivo/image/cache/full/3e16a09c0c87b7cd93de5a08798086a40d54ab0e.jpg" alt="product" class="img-fluid"/>
                  <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a><a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i class="fa fa-expand-arrows-alt"></i></a>
                    </div>
                  </div>
                </div>
                <div class="py-2">
                  <p class="text-muted text-sm mb-1">Coats</p>
                  <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Beige</a></h3><span class="text-muted">$40.00</span>
                </div>
              </div>
            </div>
            <!-- /product-->
            <!-- product-->
            <div class="col-xl-4 col-sm-6">
              <div class="product">
                <div class="product-image"><img src="https://www.punk-d.com/topicsbk/pic/DSC01639.JPG" alt="product" class="img-fluid"/>
                  <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a><a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i class="fa fa-expand-arrows-alt"></i></a>
                    </div>
                  </div>
                </div>
                <div class="py-2">
                  <p class="text-muted text-sm mb-1">T-Shirts</p>
                  <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Skull Tee</a></h3><span class="text-muted">$40.00</span>
                </div>
              </div>
            </div>
            <!-- /product-->
            <!-- product-->
            <div class="col-xl-4 col-sm-6">
              <div class="product">
                <div class="product-image"><img src="http://tgi1.jia.com/zximg/201504/31bd7839e03e.jpg" alt="product" class="img-fluid"/>
                  <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a><a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i class="fa fa-expand-arrows-alt"></i></a>
                    </div>
                  </div>
                </div>
                <div class="py-2">
                  <p class="text-muted text-sm mb-1">Denim</p>
                  <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Trucker jacket</a></h3><span class="text-muted">$40.00</span>
                </div>
              </div>
            </div>
            <!-- /product-->
            <!-- product-->
            <div class="col-xl-4 col-sm-6">
              <div class="product">
                <div class="product-image"><img src="https://vouchmycouch.lu/wp-content/uploads/2018/06/dr-no-1.jpg" alt="product" class="img-fluid"/>
                  <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a><a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i class="fa fa-expand-arrows-alt"></i></a>
                    </div>
                  </div>
                </div>
                <div class="py-2">
                  <p class="text-muted text-sm mb-1">Denim</p>
                  <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Blouse</a></h3><span class="text-muted">$40.00</span>
                </div>
              </div>
            </div>
            <!-- /product-->
            <!-- product-->
            <div class="col-xl-4 col-sm-6">
              <div class="product">
                <div class="product-image"><img src="https://novocal.de/images/produkte/bestuhlung/novocal-relax-01.jpg" alt="product" class="img-fluid"/>
                  <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a><a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i class="fa fa-expand-arrows-alt"></i></a>
                    </div>
                  </div>
                </div>
                <div class="py-2">
                  <p class="text-muted text-sm mb-1">Denim</p>
                  <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Shirt</a></h3><span class="text-muted">$40.00</span>
                </div>
              </div>
            </div>
            <!-- /product-->
          </div>
          <nav aria-label="page navigation" class="d-flex justify-content-center mb-5 mt-3">
            <ul class="pagination">
              <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">Prev</span><span class="sr-only">Previous</span></a></li>
              <li class="page-item active"><a href="#" class="page-link">1       </a></li>
              <li class="page-item"><a href="#" class="page-link">2       </a></li>
              <li class="page-item"><a href="#" class="page-link">3       </a></li>
              <li class="page-item"><a href="#" class="page-link">4       </a></li>
              <li class="page-item"><a href="#" class="page-link">5 </a></li>
              <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">Next</span><span class="sr-only">Next     </span></a></li>
            </ul>
          </nav>
        </div>
        <!-- / Grid End-->
        <!-- Sidebar-->
        <div class="sidebar col-xl-3 col-lg-4 order-lg-1">
          <div class="sidebar-block px-3 px-lg-0 mr-lg-4"><a data-toggle="collapse" href="#categoriesMenu" aria-expanded="false" aria-controls="categoriesMenu" class="d-lg-none block-toggler">Product Categories</a>
            <div id="categoriesMenu" class="expand-lg collapse">
              <div class="nav nav-pills flex-column mt-4 mt-lg-0"> <a href="#" class="nav-link d-flex justify-content-between mb-2 "><span>Jackets</span><span class="sidebar-badge"> 120</span></a>
                <div class="nav nav-pills flex-column ml-3"><a href="#" class="nav-link mb-2">Lorem ipsum</a><a href="#" class="nav-link mb-2">Dolor</a><a href="#" class="nav-link mb-2">Sit amet</a><a href="#" class="nav-link mb-2">Donec vitae</a>
                </div><a href="#" class="nav-link d-flex justify-content-between mb-2 active"><span>Jeans &amp; chinos</span><span class="sidebar-badge"> 55</span></a>
                <div class="nav nav-pills flex-column ml-3"><a href="#" class="nav-link mb-2">Lorem ipsum</a><a href="#" class="nav-link mb-2">Dolor</a><a href="#" class="nav-link mb-2">Sit amet</a><a href="#" class="nav-link mb-2">Donec vitae</a>
                </div><a href="#" class="nav-link d-flex justify-content-between mb-2 "><span>Accessories</span><span class="sidebar-badge"> 80</span></a>
                <div class="nav nav-pills flex-column ml-3"><a href="#" class="nav-link mb-2">Sit amet</a><a href="#" class="nav-link mb-2">Donec vitae</a><a href="#" class="nav-link mb-2">Lorem ipsum</a><a href="#" class="nav-link mb-2">Dolor</a>
                </div>
              </div>
            </div>
          </div>
          <div class="sidebar-block px-3 px-lg-0 mr-lg-4"><a data-toggle="collapse" href="#priceFilterMenu" aria-expanded="false" aria-controls="priceFilterMenu" class="d-lg-none block-toggler">Filter by price</a>
            <div id="priceFilterMenu" class="expand-lg collapse">
              <h6 class="sidebar-heading d-none d-lg-block">Price  </h6>
              <div id="slider-snap" class="mt-4 mt-lg-0"> </div>
              <div class="nouislider-values">
                <div class="min">From $<span id="slider-snap-value-lower"></span></div>
                <div class="max">To $<span id="slider-snap-value-upper"></span></div>
              </div>
            </div>
          </div>
          <div class="sidebar-block px-3 px-lg-0 mr-lg-4"><a data-toggle="collapse" href="#brandFilterMenu" aria-expanded="true" aria-controls="brandFilterMenu" class="d-lg-none block-toggler">Filter by brand</a>
            <!-- Brand filter menu - this menu has .show class, so is expanded by default-->
            <div id="brandFilterMenu" class="expand-lg collapse show">
              <h6 class="sidebar-heading d-none d-lg-block">Brands </h6>
              <form action="#" class="mt-4 mt-lg-0"> 
                <div class="form-group mb-1">
                  <div class="custom-control custom-checkbox">
                    <input id="brand0" type="checkbox" name="clothes-brand" checked class="custom-control-input">
                    <label for="brand0" class="custom-control-label">Calvin Klein <small>(18)</small></label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-checkbox">
                    <input id="brand1" type="checkbox" name="clothes-brand" checked class="custom-control-input">
                    <label for="brand1" class="custom-control-label">Levi Strauss <small>(30)</small></label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-checkbox">
                    <input id="brand2" type="checkbox" name="clothes-brand" class="custom-control-input">
                    <label for="brand2" class="custom-control-label">Hugo Boss <small>(120)</small></label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-checkbox">
                    <input id="brand3" type="checkbox" name="clothes-brand" class="custom-control-input">
                    <label for="brand3" class="custom-control-label">Tomi Hilfiger <small>(70)</small></label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-checkbox">
                    <input id="brand4" type="checkbox" name="clothes-brand" class="custom-control-input">
                    <label for="brand4" class="custom-control-label">Tom Ford  <small>(110)</small></label>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="sidebar-block px-3 px-lg-0 mr-lg-4"> <a data-toggle="collapse" href="#sizeFilterMenu" aria-expanded="false" aria-controls="sizeFilterMenu" class="d-lg-none block-toggler">Filter by size</a>
            <!-- Size filter menu-->
            <div id="sizeFilterMenu" class="expand-lg collapse"> 
              <h6 class="sidebar-heading d-none d-lg-block">Size </h6>
              <form action="#" class="mt-4 mt-lg-0">  
                <div class="form-group mb-1">
                  <div class="custom-control custom-radio">
                    <input id="size0" type="radio" name="size" checked class="custom-control-input">
                    <label for="size0" class="custom-control-label">Small</label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-radio">
                    <input id="size1" type="radio" name="size" class="custom-control-input">
                    <label for="size1" class="custom-control-label">Medium</label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-radio">
                    <input id="size2" type="radio" name="size" class="custom-control-input">
                    <label for="size2" class="custom-control-label">Large</label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-radio">
                    <input id="size3" type="radio" name="size" class="custom-control-input">
                    <label for="size3" class="custom-control-label">X-Large</label>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="sidebar-block px-3 px-lg-0 mr-lg-4"><a data-toggle="collapse" href="#colourFilterMenu" aria-expanded="false" aria-controls="colourFilterMenu" class="d-lg-none block-toggler">Filter by colour</a>
            <!-- Size filter menu-->
            <div id="colourFilterMenu" class="expand-lg collapse">
              <h6 class="sidebar-heading d-none d-lg-block">Colour </h6>
              <div class="mt-4 mt-lg-0"> 
                <ul class="list-inline mb-0 colours-wrapper">
                  <li class="list-inline-item">
                    <label for="colour_sidebar_Blue" style="background-color: #668cb9" data-allow-multiple class="btn-colour"> </label>
                    <input type="checkbox" name="colour" value="value_sidebar_Blue" id="colour_sidebar_Blue" class="input-invisible">
                  </li>
                  <li class="list-inline-item">
                    <label for="colour_sidebar_White" style="background-color: #fff" data-allow-multiple class="btn-colour"> </label>
                    <input type="checkbox" name="colour" value="value_sidebar_White" id="colour_sidebar_White" class="input-invisible">
                  </li>
                  <li class="list-inline-item">
                    <label for="colour_sidebar_Violet" style="background-color: #8b6ea4" data-allow-multiple class="btn-colour"> </label>
                    <input type="checkbox" name="colour" value="value_sidebar_Violet" id="colour_sidebar_Violet" class="input-invisible">
                  </li>
                  <li class="list-inline-item">
                    <label for="colour_sidebar_Red" style="background-color: #dd6265" data-allow-multiple class="btn-colour"> </label>
                    <input type="checkbox" name="colour" value="value_sidebar_Red" id="colour_sidebar_Red" class="input-invisible">
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- /Sidebar end-->
      </div>
    </div>
    <!-- Quickview Modal    -->
    <div id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade quickview">
      <div role="document" class="modal-dialog modal-lg">
        <div class="modal-content">
          <button type="button" data-dismiss="modal" aria-label="Close" class="close modal-close">
            <svg class="svg-icon w-100 h-100 svg-icon-light align-middle">
              <use xlink:href="#close-1"> </use>
            </svg>
          </button>
          <div class="modal-body"> 
            <div class="ribbon ribbon-primary">Sale</div>
            <div class="row">
              <div class="col-lg-6">
                <div data-slider-id="1" class="owl-carousel owl-theme owl-dots-modern detail-full">
                  <div style="background: center center url('https://d19m59y37dris4.cloudfront.net/sell/1-2-1/img/photo/kyle-loftus-596319-detail-1.jpg') no-repeat; background-size: cover;" class="detail-full-item-modal">  </div>
                  <div style="background: center center url('https://d19m59y37dris4.cloudfront.net/sell/1-2-1/img/photo/kyle-loftus-596319-detail-2.jpg') no-repeat; background-size: cover;" class="detail-full-item-modal">  </div>
                  <div style="background: center center url('https://d19m59y37dris4.cloudfront.net/sell/1-2-1/img/photo/kyle-loftus-596319-detail-3.jpg') no-repeat; background-size: cover;" class="detail-full-item-modal">  </div>
                  <div style="background: center center url('https://d19m59y37dris4.cloudfront.net/sell/1-2-1/img/photo/kyle-loftus-594535-unsplash-detail-3.jpg') no-repeat; background-size: cover;" class="detail-full-item-modal">  </div>
                  <div style="background: center center url('https://d19m59y37dris4.cloudfront.net/sell/1-2-1/img/photo/kyle-loftus-594535-unsplash-detail-4.jpg') no-repeat; background-size: cover;" class="detail-full-item-modal">  </div>
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center">
                <div>
                  <h2 class="mb-4 mt-4 mt-lg-1">Modern Jacket</h2>
                  <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                    <ul class="list-inline mb-2 mb-sm-0">
                      <li class="list-inline-item h4 font-weight-light mb-0">$65.00</li>
                      <li class="list-inline-item text-muted font-weight-light"> 
                        <del>$90.00</del>
                      </li>
                    </ul>
                    <div class="d-flex align-items-center">
                      <ul class="list-inline mr-2 mb-0">
                        <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                        <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                        <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                        <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                        <li class="list-inline-item mr-0"><i class="fa fa-star text-gray-300"></i></li>
                      </ul><span class="text-muted text-uppercase text-sm">25 reviews</span>
                    </div>
                  </div>
                  <p class="mb-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                  <form action="#">
                    <div class="row">
                      <div class="col-sm-6 col-lg-12 detail-option mb-3">
                        <h6 class="detail-option-heading">Size <span>(required)</span></h6>
                        <label for="size_0" class="btn btn-sm btn-outline-secondary detail-option-btn-label">
                           
                          Small
                          <input type="radio" name="size" value="value_0" id="size_0" required class="input-invisible">
                        </label>
                        <label for="size_1" class="btn btn-sm btn-outline-secondary detail-option-btn-label">
                           
                          Medium
                          <input type="radio" name="size" value="value_1" id="size_1" required class="input-invisible">
                        </label>
                        <label for="size_2" class="btn btn-sm btn-outline-secondary detail-option-btn-label">
                           
                          Large
                          <input type="radio" name="size" value="value_2" id="size_2" required class="input-invisible">
                        </label>
                      </div>
                      <div class="col-sm-6 col-lg-12 detail-option mb-3">
                        <h6 class="detail-option-heading">Type <span>(required)</span></h6>
                        <label for="material_0" class="btn btn-sm btn-outline-secondary detail-option-btn-label">
                           
                          Hoodie
                          <input type="radio" name="material" value="value_0" id="material_0" required class="input-invisible">
                        </label>
                        <label for="material_1" class="btn btn-sm btn-outline-secondary detail-option-btn-label">
                           
                          College
                          <input type="radio" name="material" value="value_1" id="material_1" required class="input-invisible">
                        </label>
                      </div>
                      <div class="col-12 detail-option mb-3">
                        <h6 class="detail-option-heading">Colour <span>(required)</span></h6>
                        <ul class="list-inline mb-0 colours-wrapper">
                          <li class="list-inline-item">
                            <label for="colour_Blue" style="background-color: #668cb9" class="btn-colour"> </label>
                            <input type="radio" name="colour" value="value_Blue" id="colour_Blue" required class="input-invisible">
                          </li>
                          <li class="list-inline-item">
                            <label for="colour_White" style="background-color: #fff" class="btn-colour"> </label>
                            <input type="radio" name="colour" value="value_White" id="colour_White" required class="input-invisible">
                          </li>
                          <li class="list-inline-item">
                            <label for="colour_Violet" style="background-color: #8b6ea4" class="btn-colour"> </label>
                            <input type="radio" name="colour" value="value_Violet" id="colour_Violet" required class="input-invisible">
                          </li>
                          <li class="list-inline-item">
                            <label for="colour_Red" style="background-color: #dd6265" class="btn-colour"> </label>
                            <input type="radio" name="colour" value="value_Red" id="colour_Red" required class="input-invisible">
                          </li>
                        </ul>
                      </div>
                      <div class="col-12 detail-option mb-5">
                        <label class="detail-option-heading font-weight-bold">Items <span>(required)</span></label>
                        <input name="items" type="number" value="1" class="form-control detail-quantity">
                      </div>
                    </div>
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <button type="submit" class="btn btn-dark btn-lg mb-1"> <i class="fa fa-shopping-cart mr-2"></i>Add to Cart</button>
                      </li>
                      <li class="list-inline-item"><a href="#" class="btn btn-outline-secondary mb-1"> <i class="far fa-heart mr-2"></i>Add to wishlist</a></li>
                    </ul>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection