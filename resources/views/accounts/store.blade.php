@extends('layouts.app')

@section('content')
<div class="h-full mt-14 mb-10">
    <div class="container mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h1 class="text-md font-semibold mb-6">User Credentials</h1>

            <form action="{{ route('accounts.create') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" required>
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                    <input type="password" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="password_confirmation" name="password_confirmation" required>
                </div>

                <div class="mb-4">
                    <label for="usertype_id" class="block text-gray-700 text-sm font-bold mb-2">User Type</label>
                    <select class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="usertype_id" name="usertype_id" required>
                        <option value="2" {{ old('usertype_id') == 2 ? 'selected' : '' }}>Admin</option>
                        <option value="3" {{ old('usertype_id') == 3 ? 'selected' : '' }}>User</option>
                    </select>
                </div>

             
        </div>

        <div>
            <h1 class="text-md font-semibold mb-6">User Information</h1>

            <div class="mb-4">
                <label for="user_firstname" class="block text-gray-700 text-sm font-bold mb-2">First Name</label>
                <input type="text" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="user_firstname" name="user_firstname" value="{{ old('user_firstname') }}" required>
            </div>

            <div class="mb-4">
                <label for="user_lastname" class="block text-gray-700 text-sm font-bold mb-2">Last Name</label>
                <input type="text" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="user_lastname" name="user_lastname" value="{{ old('user_lastname') }}" required>
            </div>

            <div class="mb-4">
                <label for="user_middlename" class="block text-gray-700 text-sm font-bold mb-2">Middle Name</label>
                <input type="text" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="user_middlename" name="user_middlename" value="{{ old('user_middlename') }}" required>
            </div>

            <div class="mb-4">
                <label for="user_bdate" class="block text-gray-700 text-sm font-bold mb-2">Birthdate</label>
                <input type="date" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="user_bdate" name="user_bdate" value="{{ old('user_bdate') }}" required>
            </div>

            <div class="mb-4">
                <label for="user_address" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                <input type="text" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="user_address" name="user_address" value="{{ old('user_address') }}" required>
            </div>

            <div class="mb-4">
                <label for="user_contact_num" class="block text-gray-700 text-sm font-bold mb-2">Contact Number</label>
                <input type="text" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="user_contact_num" name="user_contact_num" value="{{ old('user_contact_num') }}" required>
            </div>
        </div>
        <button type="submit" class="bg-green-500 hover:bg-green-700 text-sm text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add User</button>
        <button type="button" class="bg-gray-500 hover:bg-gray-700 text-sm text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" onclick="window.location.href='{{ route('accounts.index') }}'">Cancel</button>
    </form>
    </div>
</div>
@endsection
