<?php

namespace App\Http\Controllers\Trix;

use App\Events\Trix\AppNarBar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class App extends Controller
{
    public $navbar;

    public function __construct()
    {
        dd(Route::current());
        $this->navbar=new AppNavBar;
    }

    public function __invoke()
    {   
        return view("Trix.app", ["navbar" => $this->navbar]);
    }
}
