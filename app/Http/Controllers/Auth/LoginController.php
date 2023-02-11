<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function login(Request $request){
        $validated = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|string'
        ]);
        // create a session
        if(Auth::attempt($validated)){
            $user = Auth::user();
            $request->session()->put('account', $user);
            return redirect(route('view-home'))->with('success', __('Successfully login!'));
        }
        return redirect()->back()->with('error', __('Wrong email or password. Please check again!'));
    }
}
