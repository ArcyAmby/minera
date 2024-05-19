<x-guest-layout>
    <!-- component -->
    <div class="flex h-screen w-full items-center justify-center bg-white bg-cover bg-no-repeat">
        <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
            <div class="text-white">
                <div class="mb-8 flex flex-col items-center">
                    <img src="{{ asset('storage/img/android-chrome-512x512.png') }}" width="150" alt="" />
                    <h1 class="mb-2 text-2xl">Minera</h1>
                    <span class="text-gray-300">Enter Login Details</span>
                </div>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4 text-lg">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="rounded-3xl border-none bg-white bg-opacity-50 px-6 py-2 text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mb-4 text-lg">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="rounded-3xl border-none bg-white bg-opacity-50 px-6 py-2 text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mb-4 text-lg">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-primary-button class="rounded-3xl bg-red-600 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-red-800">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>

                <!-- Register link moved here -->
                <div class="flex justify-center mt-4">
                    <a class="text-xs my-3" href="{{ route('register') }}">
                        {{ __("Don't have an account?") }} <span class="font-semibold hover:text-yellow-800">{{ __('Register') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
