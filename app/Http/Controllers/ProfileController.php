<?php
// app/Http/Controllers/ProfileController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * Display the user's profile page
     */
    public function index()
    {
        $user = Auth::user();
        
        return view('profile.index', compact('user'));
    }

    // /**
    //  * Show the profile edit form
    //  */
    // public function edit()
    // {
    //     $user = Auth::user();
        
    //     return view('profile.edit', compact('user'));
    // }

    // /**
    //  * Update the user's profile information
    //  */
    // public function update(Request $request)
    // {
    //     $user = Auth::user();
        
    //     $validated = $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => [
    //             'required', 
    //             'email', 
    //             'max:255', 
    //             Rule::unique('users')->ignore($user->id)
    //         ],
    //         'employee_id' => ['nullable', 'string', 'max:50'],
    //         'position' => ['nullable', 'string', 'max:255'],
    //         'department' => ['nullable', 'string', 'max:255'],
    //         'phone' => ['nullable', 'string', 'max:20'],
    //         'avatar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'],
    //     ]);

    //     // Handle avatar upload
    //     if ($request->hasFile('avatar')) {
    //         // Delete old avatar if exists
    //         if ($user->avatar && Storage::exists('public/' . $user->avatar)) {
    //             Storage::delete('public/' . $user->avatar);
    //         }
            
    //         // Store new avatar
    //         $path = $request->file('avatar')->store('avatars', 'public');
    //         $validated['avatar'] = $path;
    //     }

    //     $user->update($validated);

    //     return redirect()->route('profile')
    //         ->with('success', 'Profile updated successfully!');
    // }

    // /**
    //  * Show the password change form
    //  */
    // public function password()
    // {
    //     return view('profile.password');
    // }

    // /**
    //  * Update the user's password
    //  */
    // public function updatePassword(Request $request)
    // {
    //     $request->validate([
    //         'current_password' => ['required', 'current_password'],
    //         'password' => ['required', 'min:8', 'confirmed', 'different:current_password'],
    //     ], [
    //         'current_password.current_password' => 'The current password is incorrect.',
    //         'password.different' => 'New password must be different from current password.',
    //     ]);

    //     Auth::user()->update([
    //         'password' => Hash::make($request->password)
    //     ]);

    //     return redirect()->route('profile')
    //         ->with('success', 'Password updated successfully!');
    // }

    // /**
    //  * Update user preferences/notifications
    //  */
    // public function updatePreferences(Request $request)
    // {
    //     $user = Auth::user();
        
    //     $validated = $request->validate([
    //         'theme' => ['nullable', 'in:light,dark,auto'],
    //         'email_notifications' => ['nullable', 'boolean'],
    //         'sms_notifications' => ['nullable', 'boolean'],
    //         'attendance_reminder' => ['nullable', 'boolean'],
    //         'language' => ['nullable', 'in:en,bn'],
    //     ]);

    //     // Store preferences in user meta or separate table
    //     $user->update([
    //         'preferences' => array_merge(
    //             $user->preferences ?? [], 
    //             $validated
    //         )
    //     ]);

    //     return redirect()->route('profile')
    //         ->with('success', 'Preferences updated successfully!');
    // }
}