<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("pages.home");
});
Route::get("/product", function () {
    return view("pages.products");
});