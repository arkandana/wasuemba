<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Berita;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/berita', function () {
    return view('berita',['posts'=>Berita::all()]);
});

Route::get('/berita/{post:slug}', function(Berita $post){

    return view('berita1',['title'=>'Single Post','post'=>$post]);
});

Route::get('/data', function () {
    return view('data');
});

Route::get('/contact', function () {
    return view('contact');
});
