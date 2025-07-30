<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\NavigationController;
use Illuminate\Support\Facades\Route;

Route::get("/",[NavigationController::class,'homePage'])->name("home");
Route::get("/products",[NavigationController::class,'shopPage'])->name("shop");
Route::get("/products/1",[NavigationController::class,'productPage'])->name("product-detail");
Route::get("/buy-now",[NavigationController::class,'checkoutPage'])->name("checkout");
Route::get("thank-you",[NavigationController::class,'thankyouPage'])->name("thanks");

Route::get("/random",function () {
    return view("website.random");
});
