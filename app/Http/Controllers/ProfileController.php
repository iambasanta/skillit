<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdateProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function show()
    {
        return view('user.profile');
    }

    public function update(UpdateProfileRequest $request)
    {
        if ($request->password) {

            auth()->user()->update([
                'password' => bcrypt($request->password)
            ]);
        }

        auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'institute' => $request->institute,
            'faculty' => $request->faculty,
            'level' => $request->level,
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    public function registerForWorkshop($workshopID)
    {

        auth()->user()->update([
            'workshop_id' => $workshopID
        ]);

        return redirect()->back()->with('success', 'You are registered successfully!');
    }

    public function registerForSession($sessionID)
    {

        auth()->user()->update([
            'session_id' => $sessionID
        ]);

        return redirect()->back()->with('success', 'You are registered successfully!');
    }
}
