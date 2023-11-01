<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Auth;

class ContactController extends Controller
{
    public function contact(){
        return view('frontend.pages.contact');
    } //End Method
}
