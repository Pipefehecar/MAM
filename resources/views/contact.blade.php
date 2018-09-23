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
          <li class="breadcrumb-item active">Contact        </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
          <h1 class="hero-heading">Contact</h1>
          <div class="row">   
            <div class="col-xl-8 offset-xl-2"><p class="lead text-muted">Are you curious about something?  As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.</p></div>
          </div>
        </div>
      </div>
    </section>
    <section style="background: #fafafa;" class="py-6">   
      <div class="container">       
        <div class="row">
          <div class="col-md-4 text-center text-md-left">
            <svg class="svg-icon svg-icon-light text-primary w-3rem h-3rem mb-3">
              <use xlink:href="#navigation-map-1"> </use>
            </svg>
            <h4 class="ff-base">Address</h4>
            <p class="text-muted">13/25 New Avenue<br>New Heaven, 45Y 73J<br>England, <strong>Great Britain</strong></p>
          </div>
          <div class="col-md-4 text-center text-md-left">
            <svg class="svg-icon svg-icon-light text-primary w-3rem h-3rem mb-3">
              <use xlink:href="#audio-call-1"> </use>
            </svg>
            <h4 class="ff-base">Call center</h4>
            <p class="text-muted">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p class="text-muted"><strong>+33 555 444 333</strong></p>
          </div>
          <div class="col-md-4 text-center text-md-left">
            <svg class="svg-icon svg-icon-light text-primary w-3rem h-3rem mb-3">
              <use xlink:href="#mail-1"> </use>
            </svg>
            <h4 class="ff-base">Electronic support</h4>
            <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
            <ul class="list-unstyled text-muted">
              <li>info@sell.com</li>
              <li>support@sell.com</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="py-6">
      <div class="container">
        <header class="mb-5">
          <h2 class="text-uppercase h5">Contact form</h2>
        </header>
        <div class="row">
          <div class="col-md-7 mb-5 mb-md-0">
            <form id="contact-form" method="post" action="contact.php" class="form">
              <div class="controls">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="name" class="form-label">Your firstname *</label>
                      <input type="text" name="name" id="name" placeholder="Enter your firstname" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="surname" class="form-label">Your lastname *</label>
                      <input type="text" name="surname" id="surname" placeholder="Enter your  lastname" required="required" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="form-label">Your email *</label>
                  <input type="email" name="email" id="email" placeholder="Enter your  email" required="required" class="form-control">
                </div>
                <div class="form-group">
                  <label for="message" class="form-label">Your message for us *</label>
                  <textarea rows="4" name="message" id="message" placeholder="Enter your message" required="required" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-dark">Send message</button>
              </div>
            </form>
          </div>
          <div class="col-md-5">
            <p class="text-muted">Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed. </p>
            <p class="text-muted">Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. </p>
            <div class="social">
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-vimeo"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="map" style="height: 400px;"></div>
    @endsection