<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index()

    {
        
        // Get the authenticated user
        $user = Auth::user();
    
        // Get the user's userinfo
        $userinfo = $user->userinfo;
    
        // Pass the user and userinfo data to the view
        return view('user-profile.index', compact('user', 'userinfo'));
    }

public function update(Request $request, $id)
{
    // Find the user by ID
    $user = User::findOrFail($id);

    // Validate the request data
    $validatedData = $request->validate([
        'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
        'name' => 'required|string|max:255',
        'usertype_id' => 'required|integer',
        'user_firstname' => 'required|string|max:255',
        'user_lastname' => 'required|string|max:255',
        'user_middlename' => 'required|string|max:255',
        'user_bdate' => 'required|date',
        'user_address' => 'required|string|max:255',
        'user_contact_num' => 'required|string|max:255',
    ]);

    // Update the user
    $user->update([
        'email' => $validatedData['email'],
        'name' => $validatedData['name'],
        'usertype_id' => $validatedData['usertype_id'],
    ]);

    // Update the user info
    $userInfo = $user->userinfo;
    $userInfo->update([
        'user_firstname' => $validatedData['user_firstname'],
        'user_lastname' => $validatedData['user_lastname'],
        'user_middlename' => $validatedData['user_middlename'],
        'user_bdate' => $validatedData['user_bdate'],
        'user_address' => $validatedData['user_address'],
        'user_contact_num' => $validatedData['user_contact_num'],
    ]);

    // Redirect back to the user profile page with a success message
    return redirect()->route('user-profile.index')->with('success', 'Account updated successfully.');
}
}