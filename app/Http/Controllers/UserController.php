<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){
        return view('pages.accounts', [
            'accounts' => User::all(),
        ]);
    }

    public function editRole($locale, User $user){
        return view('pages.edit-role', [
            'account' => $user,
            'roles' => Role::all(),
        ]);
    }

    public function updateRole(Request $request, $locale, User $user){
        $validated = $request->validate([
            'role' => 'required',
        ]);
        $user->update([
            'role_id' => $validated['role'],
        ]);
        return redirect(route('view-accounts'))->with('success', __('Successfully updated an account!'));
    }

    public function delete($locale, User $user){
        if($user->display_picture_link != NULL){
            Storage::delete($user->display_picture_link);
        }
        $user->delete();
        return redirect(route('view-accounts'))->with('success', __('Successfully deleted an account!'));
    }
}
