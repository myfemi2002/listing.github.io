<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Image;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AdminDashboard(){
        return view('admin.index');
    } // End Mehtod

    public function AdminDestroy(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Logout Successfully',
            'alert-type' => 'success'
        );
        return redirect('/')->with($notification);
    } // End Mehtod

    public function allAgent(){
        // $allData = User::where('role','agent')->get();
        $allData = User::where('role', 'agent')->paginate(10);
        $colors = ['table-primary', 'table-secondary', 'table-success', 'table-danger', 'table-warning', 'table-info', 'table-light'];
        return view('backend.agent.index',compact('allData','colors'));

    }// End Mehtod

    // public function changeStatus(Request $request)
    // {
    //     $request->validate([
    //         'user_id' => 'required|exists:users,id',
    //         'status' => 'required|in:active,inactive,suspended',
    //     ]);

    //     $user = User::find($request->user_id);
    //     $user->status = $request->status;
    //     $user->save();

    //     return response()->json(['success' => 'Status Change Successfully']);
    // }

    public function changeStatus(Request $request)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'status' => 'required|in:active,inactive,suspended',
    ]);

    $user = User::find($request->user_id);
    $user->status = $request->status;
    $user->save();

    return response()->json(['status' => $user->status]);
}

}
