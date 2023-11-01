<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Auth;

class PricingController extends Controller
{
    public function pricing(){
        return view('frontend.pages.pricing');
    } //End Method
}
