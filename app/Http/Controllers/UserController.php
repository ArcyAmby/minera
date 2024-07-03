<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('accounts.index');
    }

    public function usersTable(Request $request)
    {
        if ($request->ajax()) {
            $users = User::with('userinfo') // Eager load the userinfo relationship
                ->select('users.id', 'users.name', 'users.email', 'users.usertype_id', 'users.created_at');

            return DataTables::of($users)
                ->addColumn('user_firstname', function ($user) {
                    return $user->userinfo->user_firstname ?? 'N/A';
                })
                ->addColumn('user_lastname', function ($user) {
                    return $user->userinfo->user_lastname ?? 'N/A';
                })
                ->addColumn('user_middlename', function ($user) {
                    return $user->userinfo->user_middlename ?? 'N/A';
                })
                ->addColumn('user_bdate', function ($user) {
                    return $user->userinfo->user_bdate ?? 'N/A';
                })
                ->addColumn('user_address', function ($user) {
                    return $user->userinfo->user_address ?? 'N/A';
                })
                ->addColumn('user_contact_num', function ($user) {
                    return $user->userinfo->user_contact_num ?? 'N/A';
                })
                ->addColumn('action', function ($user) {
                    $editUrl = route('accounts.edit', $user->id);
                    $deleteUrl = route('accounts.destroy', $user->id);

                    return '<a href="' . $editUrl . '" class="btn btn-primary">Edit</a> 
                            <form method="POST" action="' . $deleteUrl . '" style="display:inline;">
                                '. csrf_field() . method_field("DELETE") .'
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>';
                })
                ->make(true);
        }

        return view('accounts.index');
    }

    public function store()
    {
        return view('accounts.store');
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'usertype_id' => 'required|integer',
            'user_firstname' => 'required|string|max:255',
            'user_lastname' => 'required|string|max:255',
            'user_middlename' => 'required|string|max:255',
            'user_bdate' => 'required|date',
            'user_address' => 'required|string|max:255',
            'user_contact_num' => 'required|string|max:255',
        ]);

        $account = User::create([
            'email' => $validatedData['email'],
            'name' => $validatedData['name'],
            'password' => Hash::make($validatedData['password']),
            'usertype_id' => $validatedData['usertype_id'],
        ]);

        if ($account) {
            UserInfo::create([
                'user_firstname' => $validatedData['user_firstname'],
                'user_lastname' => $validatedData['user_lastname'],
                'user_middlename' => $validatedData['user_middlename'],
                'user_bdate' => $validatedData['user_bdate'],
                'user_address' => $validatedData['user_address'],
                'user_contact_num' => $validatedData['user_contact_num'],
                'user_id' => $account->id,
            ]);

            return redirect()->route('accounts.index')->with('success', 'User created successfully.');
        } else {
            return redirect()->route('accounts.create')->with('error', 'Failed to create user.');
        }
    }

    public function edit(User $account)
    {
        $userinfo = $account->userinfo;
        return view('accounts.edit', compact('account', 'userinfo'));
    }

    public function update(User $account, Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string|email|max:255|unique:users,email,'.$account->id,
            'name' => 'required|string|max:255',
            'usertype_id' => 'required|integer',
            'user_firstname' => 'required|string|max:255',
            'user_lastname' => 'required|string|max:255',
            'user_middlename' => 'required|string|max:255',
            'user_bdate' => 'required|date',
            'user_address' => 'required|string|max:255',
            'user_contact_num' => 'required|string|max:255',
        ]);

        $account->update([
            'email' => $validatedData['email'],
            'name' => $validatedData['name'],
            'usertype_id' => $validatedData['usertype_id'],
        ]);

        $account->userinfo->update([
            'user_firstname' => $validatedData['user_firstname'],
            'user_lastname' => $validatedData['user_lastname'],
            'user_middlename' => $validatedData['user_middlename'],
            'user_bdate' => $validatedData['user_bdate'],
            'user_address' => $validatedData['user_address'],
            'user_contact_num' => $validatedData['user_contact_num'],
        ]);

        return redirect()->route('accounts.index')->with('success', 'Account updated successfully.');
    }

    public function destroy(User $account)
{
    $userinfo = $account->userinfo;
    $userinfo->delete();
    $account->delete();
    return redirect()->route('accounts.index')->with('success', 'Account deleted successfully.');
}
}
