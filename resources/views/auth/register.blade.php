<x-guest-layout>
    <div class="flex h-screen w-full items-center justify-center bg-gray-100 dark:bg-gray-900">
        <div class="rounded-xl bg-white dark:bg-gray-800 bg-opacity-90 px-16 py-10 shadow-lg max-sm:px-8">
            <div class="text-gray-900 dark:text-gray-200">
                <div class="mb-8 flex flex-col items-center">
                    <img src="{{ asset('storage/img/android-chrome-512x512.png') }}" width="150" alt="Logo" />
                    <h1 class="mb-2 text-2xl">GoldEver</h1>
                    <span class="text-gray-600 dark:text-gray-300">Register</span>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <!-- User Type -->
                    <div class="mt-4">
                        <x-input-label for="usertype_id" :value="__('User Type')" />
                        <select id="usertype_id" name="usertype_id" class="block mt-1 w-full" required>
                            @foreach ($usertypes as $usertype)
                                @if ($usertype->id == 3)
                                    <option value="{{ $usertype->id }}">{{ $usertype->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('usertype_id')" class="mt-2" />
                    </div>
                    

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-primary-button class="ms-4 bg-red-600 hover:bg-red-800">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
