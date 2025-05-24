<?php

namespace App\Http\Controllers\Trix;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class App extends Controller
{
    public function __invoke()
    {   
        return view("Trix.app");
    }
}
