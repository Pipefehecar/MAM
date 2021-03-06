@extends('layouts.app')

@section('title','MAM | Inicio')

{{-- @section('body-class','landing-page sidebar-collapse') --}}

@section('styles')
 <style>
     
 </style>
@endsection


@section('content')
     <section class="home-full-slider-wrapper mb-10px">
      <!-- Hero Slider-->
      <div class="owl-carousel owl-theme owl-dots-modern home-full-slider">
        <div style="background: #f8d5cf;" class="item home-full-item"><img src="https://cdn.hipwallpaper.com/i/42/84/BUxhjw.jpg" alt="" class="bg-image">
          <div class="container-fluid h-100 py-5">
            <div class="row align-items-center h-100">
              <div class="col-lg-8 col-xl-6 mx-auto text-white text-center">
                <h5 class="text-uppercase text-white font-weight-light mb-4 letter-spacing-5"> Just arrived</h5>
                <h1 class="mb-5 display-2 font-weight-bold text-serif">Cheise longue</h1>
                <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p> <a href="category.html" class="btn btn-light">View collection</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="item home-full-item bg-dark dark-overlay"><img src="https://images.pexels.com/photos/279719/pexels-photo-279719.jpeg?cs=srgb&dl=lamps-house-table-279719.jpg&fm=jpg" alt="" class="bg-image">
          <div class="container-fluid h-100">
            <div class="row align-items-center h-100">
              <div class="col-lg-8 col-xl-6 mx-auto text-white text-center overlay-content">
                <h1 class="mb-4 display-2 text-uppercase font-weight-bold">living room furniture</h1>
                <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p> <a href="category.html" class="btn btn-light">Start shopping</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="item home-full-item"><img src="https://www.gefen.com/sites/default/files/styles/rotato_transparent/public/_/rotatos/conference.jpg?itok=GitvJV0p" alt="" class="bg-image">
          <div class="container-fluid h-100">
            <div class="row align-items-center h-100">
              <div class="col-lg-8 col-xl-6 mx-auto text-white text-center">
                <h5 class="text-uppercase font-weight-light mb-4 letter-spacing-5"> Our bestseller</h5>
                <h1 class="mb-5 display-1 font-weight-bold text-serif">office furniture</h1>
                <p> <a href="category.html" class="btn btn-light">View collection</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container-fluid px-5px">
        <div class="row mx-0">
          <div class="col-md-6 mb-10px px-5px">
            <div class="card border-0 text-white text-center"><img src="https://www.homeinfatuation.com/assets/images/homepage/hero/vela_homepage.jpg" alt="Card image" class="card-img">
              <div class="card-img-overlay d-flex align-items-center"> 
                <div class="w-100 py-3">
                  <h2 class="display-3 font-weight-bold mb-4">Top picks</h2><a href="category.html" class="btn btn-light">Shop now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-10px px-5px">
            <div class="card border-0 text-white text-center"><img src="https://media.licdn.com/dms/image/C5612AQHnNs-0EkHcTw/article-inline_image-shrink_1500_2232/0?e=1541030400&v=beta&t=fWt8I34_3u9kAs__tj1xrT31UAIkIhQcUe_ue_eN_iQ" alt="Card image" class="card-img">
              <div class="card-img-overlay d-flex align-items-center"> 
                <div class="w-100 py-3">
                  <h2 class="display-3 font-weight-bold mb-4">New arrivals</h2><a href="category.html" class="btn btn-light">Shop now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mx-0">
          <div class="col-lg-4 mb-10px px-5px">
            <div class="card border-0 text-center text-white"><img src="http://ranchoavellanas.com/wp-content/uploads/2018/02/amazing-design-outdoor-log-furniture-deep-forest-other.jpg" alt="Card image" class="card-img">
              <div class="card-img-overlay d-flex align-items-center"> 
                <div class="w-100">
                  <h2 class="display-4 mb-4">Rustic</h2><a href="category.html" class="btn btn-link text-white">Shop now <i class="fa-arrow-right fa ml-2"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-10px px-5px">
            <div class="card border-0 text-center text-white"><img src="http://www.yunibali.com/wp-content/uploads/2017/09/two_seaters_sofa_02_yuni_bali_furniture_manufacturer_exporter_teakwood_indonesia-1.jpg" alt="Card image" class="card-img">
              <div class="card-img-overlay d-flex align-items-center"> 
                <div class="w-100">
                  <h2 class="display-4 mb-4">Armchair</h2><a href="category.html" class="btn btn-link text-white">Shop now <i class="fa-arrow-right fa ml-2"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-10px px-5px">
            <div class="card border-0 text-center text-dark"><img src="http://www.russellfrancis.co.uk/images/ww/ranges/dining/WOODEN%2072%20DPI.jpg" alt="Card image" class="card-img">
              <div class="card-img-overlay d-flex align-items-center"> 
                <div class="w-100">
                  <h2 class="display-4 mb-4">Try this</h2><a href="category.html" class="btn btn-link text-dark">Shop now <i class="fa-arrow-right fa ml-2"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection