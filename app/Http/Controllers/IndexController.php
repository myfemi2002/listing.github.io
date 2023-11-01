<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index(){
        return view('frontend.index');
    } // End Method

}
