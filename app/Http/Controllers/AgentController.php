<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Image;

class AgentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AgentDashboard(){
        return view('agent.index');
    } // End Mehtod

    public function AgentDestroy(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Logout Successfully',
            'alert-type' => 'success'
        );
        return redirect('/')->with($notification);
    } // End Mehtod
}
