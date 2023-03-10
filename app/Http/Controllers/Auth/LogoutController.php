<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request){
        $request->session()->forget('account');
        Auth::logout();
        return redirect(route('view-index'))->with('result', __('Log Out Success!'));
    }
}
