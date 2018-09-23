<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function catalog(){

    	return view('catalogue');
    }
    public function contact(){

    	return view('contact');
    }
     public function checkout(){

    	return view('checkout');
    }
     public function cart(){

    	return view('cart');
    }
}
