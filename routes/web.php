<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\NavigationController;
use Illuminate\Support\Facades\Route;

Route::get("/",[NavigationController::class,'homePage']);
Route::get("/products",[NavigationController::class,'shopPage']);
Route::get("/products/car-1",[NavigationController::class,'productPage']);
Route::get("/buy-now",[NavigationController::class,'checkoutPage']);
Route::get("thank-you",[NavigationController::class,'thankyouPage']);

