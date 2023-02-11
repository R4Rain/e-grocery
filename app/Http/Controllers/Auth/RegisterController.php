<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Models\Role;
use App\Models\User;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register', [
            'genders' => Gender::all(),
            'roles' => Role::all(),
        ]);
    }

    public function register(Request $request){
        $validated = $request->validate([
            'first_name' => 'required|string|alpha_num:ascii|max:25',
            'last_name' => 'required|string|alpha_num:ascii|max:25',
            'email' => 'required|email:dns|unique:accounts',
            'gender' => 'required|exists:genders,gender_id',
            'role' => 'required|exists:roles,role_id',
            'password' => ['required', 'string', Password::min(8)->numbers()],
            'confirm_password' => 'required|same:password',
            'display_picture' => 'required|file|mimes:jpg,jpeg,png',
        ]);
        if($request->file('display_picture')){
            $file_path = $request->file('display_picture')->store('accounts');
        } else{
            $file_path = null;
        }
        $validated['password'] = bcrypt($validated['password']);
        User::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'display_picture_link' => $file_path,
            'role_id' => $validated['role'],
            'gender_id' => $validated['gender'],
        ]);
        return redirect(route('view-login'))->with('success', __('Successfully registered, please login!'));
    }
}
