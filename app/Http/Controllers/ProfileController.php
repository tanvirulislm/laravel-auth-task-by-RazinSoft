<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'bio' => 'required|string',
            'profile_image' => 'required|image|mimes:jpg,png|max:2048',
            'hobbies' => 'required|string',
            'date_of_birth' => 'required|date',
        ]);

        $imagePath = $request->file('profile_image')->store('profile', 'public');

        auth()->user()->profile()->create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'bio' => $request->bio,
            'profile_image' => $imagePath,
            'hobbies' => $request->hobbies,
            'date_of_birth' => $request->date_of_birth,
        ]);

        return redirect()->route('profile.show')->with('success', 'Profile created successfully!');
    }

    public function showProfileForm()
    {
        return view('profiles.create');
    }

    public function show()
    {
        $profile = auth()->user()->profile;
        if (!$profile) {
            return redirect()->route('profile.create')->with('info', 'Please create your profile first.');
        }
        return view('profiles.show', compact('profile'));
    }

    public function index()
    {
        $profiles = Profile::all();
        return view('profiles.index', compact('profiles'));
    }
}
