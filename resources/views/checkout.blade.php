@extends('layouts.app')

@section('title','MAM | Inicio')

{{-- @section('body-class','landing-page sidebar-collapse') --}}

@section('styles')
 <style>
     
 </style>
@endsection


@section('content')

 <!-- Hero Section-->
    <section class="hero">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Checkout        </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
          <h1 class="hero-heading">Checkout</h1>
          <div class="row">   
            <div class="col-xl-8 offset-xl-2"><p class="lead text-muted">Please fill in your address.</p></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Checkout-->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <ul class="custom-nav nav nav-pills mb-5">
              <li class="nav-item w-25"><a href="checkout1.html" class="nav-link text-sm active">Address</a></li>
              <li class="nav-item w-25"><a href="#" class="nav-link text-sm disabled">Delivery Method</a></li>
              <li class="nav-item w-25"><a href="#" class="nav-link text-sm disabled">Payment Method </a></li>
              <li class="nav-item w-25"><a href="#" class="nav-link text-sm disabled">Order Review</a></li>
            </ul>
            <form action="#">
              <div class="block">
                <!-- Invoice Address-->
                <div class="block-header">
                  <h6 class="text-uppercase mb-0">Invoice address                    </h6>
                </div>
                <div class="block-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="fullname_invoice" class="form-label">Full Name</label>
                      <input type="text" name="fullname_invoice" placeholder="Joe Black" id="fullname_invoice" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="emailaddress_invoice" class="form-label">Email Address</label>
                      <input type="text" name="emailaddress_invoice" placeholder="joe.black@gmail.com" id="emailaddress_invoice" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="street_invoice" class="form-label">Street</label>
                      <input type="text" name="street_invoice" placeholder="123 Main St." id="street_invoice" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="city_invoice" class="form-label">City</label>
                      <input type="text" name="city_invoice" placeholder="City" id="city_invoice" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="zip_invoice" class="form-label">ZIP</label>
                      <input type="text" name="zip_invoice" placeholder="Postal code" id="zip_invoice" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="state_invoice" class="form-label">State</label>
                      <input type="text" name="state_invoice" placeholder="State" id="state_invoice" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="phonenumber_invoice" class="form-label">Phone Number</label>
                      <input type="text" name="phonenumber_invoice" placeholder="Phone Number" id="phonenumber_invoice" class="form-control">
                    </div>
                    <div class="form-group col-12 mt-3">
                      <div class="custom-control custom-checkbox">
                        <input id="show-shipping-address" type="checkbox" name="clothes-brand" class="custom-control-input">
                        <label for="show-shipping-address" data-toggle="collapse" data-target="#shippingAddress" aria-expanded="false" aria-controls="shippingAddress" class="custom-control-label align-middle">Use a different shipping address</label>
                      </div>
                    </div>
                  </div>
                  <!-- /Invoice Address-->
                </div>
                <!-- Shippping Address-->
                <div id="shippingAddress" aria-expanded="false" class="collapse">
                  <div class="block">
                    <div class="block-header">
                      <h6 class="text-uppercase mb-0">Shipping address </h6>
                    </div>
                    <div class="block-body">
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="street_shipping" class="form-label">Street</label>
                          <input type="text" name="street_shipping" placeholder="123 Main St." id="street_shipping" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="city_shipping" class="form-label">City</label>
                          <input type="text" name="city_shipping" placeholder="City" id="city_shipping" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="zip_shipping" class="form-label">ZIP</label>
                          <input type="text" name="zip_shipping" placeholder="Postal code" id="zip_shipping" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="state_shipping" class="form-label">State</label>
                          <input type="text" name="state_shipping" placeholder="State" id="state_shipping" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="phonenumber_shipping" class="form-label">Phone Number</label>
                          <input type="text" name="phonenumber_shipping" placeholder="Phone Number" id="phonenumber_shipping" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /Shipping Address-->
                </div>
              </div>
              <div class="mb-5 d-flex justify-content-between flex-column flex-lg-row"><a href="cart.html" class="btn btn-link text-muted"> <i class="fa fa-angle-left mr-2"></i>Back </a><a href="checkout2.html" class="btn btn-dark">Choose delivery method<i class="fa fa-angle-right ml-2"></i></a></div>
            </form>
          </div>
          <div class="col-lg-4">
            <div class="block mb-5">
              <div class="block-header">
                <h6 class="text-uppercase mb-0">Order Summary</h6>
              </div>
              <div class="block-body bg-light pt-1">
                <p class="text-sm">Shipping and additional costs are calculated based on values you have entered.</p>
                <ul class="order-summary mb-0 list-unstyled">
                  <li class="order-summary-item"><span>Order Subtotal </span><span>$390.00</span></li>
                  <li class="order-summary-item"><span>Shipping and handling</span><span>$10.00</span></li>
                  <li class="order-summary-item"><span>Tax</span><span>$0.00</span></li>
                  <li class="order-summary-item border-0"><span>Total</span><strong class="order-summary-total">$400.00</strong></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection