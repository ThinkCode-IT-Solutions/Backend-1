<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function homePage()
    {
        return view("website.landing");
    }

    public function shopPage()
    {
        // fetch data from database from model
        $products = Product::all();


        // dd($products);
        $khali_products = collect([]);
        $name = "Shahzad Farooq";
        //    controller shows a page
        return view("website.shop",[
            'cars' => $products,
            'admin' => $name,
        ]);
    }

    public function productPage()
    {
        return view("website.product");
    }

    public function checkoutPage()
    {
        return view("website.checkout");
    }

    public function thankyouPage()
    {
        return view("website.thank-you");
    }
}
