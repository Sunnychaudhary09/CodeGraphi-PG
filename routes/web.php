<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/subscription', function (){
    return view('subscription');
});
Route::get('/checkout', function (){
    return view('checkout');
});

Route::get('/default-link', function(){
    return view ('default-link');
});

Route::get('/custom-link', function(){
    return view ('custom-link');
});

Route::get('/transaction', function(){
    return view ('transaction');
});
Route::get('/reports', function(){
    return view ('reports');
});
Route::get('/settlement', function(){
    return view ('settlement');
});
Route::get('/smart-route', function(){
    return view ('smart-route');
});
Route::get('/developer', function(){
    return view ('developer');
});
Route::get('/profile', function(){
    return view ('profile');
});
Route::get('/support', function(){
    return view ('support');
});



