<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profilepage', ['user' => $user, 'posts' => auth()->user()->timeline()]);
    }

    public function update(Request $request, $id)
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        $user->name = $request['newname'];
        if ($request->hasfile('avatar')) {
            $destination = 'uploads/avatars/' . $user->avatar;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/avatars/', $filename);
            $user->avatar = $filename;
        } else {
            $user->avatar = $user['avatar'];
        }
        $user->update();
        return back()->with('info', 'User Updated!');
    }
}
