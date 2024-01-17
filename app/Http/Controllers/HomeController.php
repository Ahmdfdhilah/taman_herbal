<?php

namespace App\Http\Controllers;
use App\Models\Tanaman;


class HomeController extends Controller
{  
    public function __invoke()
    {
        $tanaman = Tanaman::all();       
        return view('welcome', compact('tanaman'));
    }
    
}
