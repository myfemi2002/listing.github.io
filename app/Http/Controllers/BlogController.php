<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Auth;

class BlogController extends Controller
{
    public function blog(){
        return view('frontend.pages.blog');
    } //End Method
}
