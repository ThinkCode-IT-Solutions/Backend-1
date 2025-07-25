<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function homePage (){
        return view("website.landing");
    }

    public function shopPage () {
        $products = Product::all();
        return view("website.shop",[
            'cars' => $products
        ]);
    }

    public function productPage (){
        return view("website.product");
    }

    public function checkoutPage () {
        return view("website.checkout");
    }

    public function thankyouPage () {
        return view("website.thank-you");
    }
}
