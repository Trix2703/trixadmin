<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Trix\App;

    Route::get("/{i?}", App::class)
        ->name("app");
    Route::get("/main", function(){
        return "ad";
    });