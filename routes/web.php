<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("pages.home");
});
Route::get("/product", function () {
    return view("pages.products");
});
Route::resource("/blog", PostController::class);

Route::get("/daftar-santri", function () {
    return view("pages.daftar_online");
});

Route::get("/contact", function () {
    return view("pages.contact");
});

Route::get("/registrasi", function () {
    return view("/pages.register");
});
Route::get("/login", function () {
    return view("/pages.login");
});
Route::get("/checkout", function () {
    return view("/pages.checkout");
});
Route::get("/dashboard", function () {
    return view("/pages.dashboard");
});