<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Portfolio');
});


Route::get('/header',function (){
    return View('header');
});
