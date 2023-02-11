<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{   
    public function index(){
        return view('pages.profile', [
            'genders' => Gender::all(),
        ]);
    }

    public function update(Request $request){
        $user_id = Auth::user()->account_id;
        $user = User::find($user_id);
        $validated = $request->validate([
            'first_name' => 'required|string|alpha_num:ascii|max:25',
            'last_name' => 'required|string|alpha_num:ascii|max:25',
            'email' => ['required', 'email:dns', Rule::unique('accounts')->ignore($user_id, 'account_id')],
            'gender' => 'required|exists:genders,gender_id',
            'password' => ['required', 'string', Password::min(8)->numbers()],
            'confirm_password' => 'required|same:password',
            'display_picture' => 'file|mimes:jpg,jpeg,png',
        ]);
        $file_path = '';
        if($request->file('display_picture')){
            Storage::delete($user->display_picture_link);
            $file_path = $request->file('display_picture')->store('accounts');
        } else{
            $file_path = $user->display_picture_link;
        }
        $validated['password'] = bcrypt($validated['password']);
        $user->update([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'display_picture_link' => $file_path,
            'gender_id' => $validated['gender'],
            'password' => $validated['password'],
        ]);
        return redirect()->back()->with('result', __('Saved!'));
    }
}
