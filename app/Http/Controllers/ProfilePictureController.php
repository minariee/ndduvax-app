<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilePictureController extends Controller
{
    public function profile()
    {
        return view('profile', ['user' => Auth::user()]);
    }

    public function avatar(User $user)
    {
        $path = $user->avatar;

        if (!Storage::exists($path)) {
            abort(404);
        }

        return Storage::response($path);
    }

    public function updateavatar(Request $request, User $user)
    {
        $request->validate([
            'avatar' => 'mimes:jpeg,jpg,png,gif|required',
        ]);

        $user->avatar = $request->file('avatar')->store('avatar');
        $user->save();

        // identify if user or admin
        if (Auth::user()->id == $user->id) {
            return redirect('my-vaccinerecord');
        }

        return redirect('/vaccinerecord/'.$user->id);
    }
}
