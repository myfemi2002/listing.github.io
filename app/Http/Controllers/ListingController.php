<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Auth;

class ListingController extends Controller
{
    public function listing(){
        return view('frontend.pages.listing');
    } //End Method
}
