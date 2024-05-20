<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <style>
        .scroller {
            scrollbar-color: #a0aec0 #141b2a;
            scrollbar-width: none !important;
        }

        /* width */
        .scroller::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        /* Track */
        .scroller::-webkit-scrollbar-track {
            border-radius: 100vh;
            background: #141b2a;
        }

        /* Handle */
        .scroller::-webkit-scrollbar-thumb {
            background: #181818;
            border-radius: 100vh;
            border: 1px solid #181818;
        }

        /* Handle on hover */
        .scroller::-webkit-scrollbar-thumb:hover {
            background: #a0aec0;
        }

        .scrollerlight {
            scrollbar-color: #cfcfcf #ffffff;
            scrollbar-width: none !important;
        }

        /* width */
        .scrollerlight::-webkit-scrollbar {
            width: 2px;
            height: 6px;
        }

        /* Track */
        .scrollerlight::-webkit-scrollbar-track {
            border-radius: 100vh;
            background: #ffffff;
        }

        /* Handle */
        .scrollerlight::-webkit-scrollbar-thumb {
            background: #cecece;
            border-radius: 100vh;
            border: 1px solid #cecece;
        }

        /* Handle on hover */
        .scrollerlight::-webkit-scrollbar-thumb:hover {
            background: #cecece;
        }

    </style>
    <body class="font-sans antialiased">
        <div class="md:flex">
            <!-- sidebar -->
            <div class="sidebar max-h-screen top-0 h-screen bg-gray-800 text-blue-100 w-64 fixed inset-y-0 left-0 transform transition duration-200 ease-in-out z-50"
                x-data="{ open: true }" x-on:togglesidebar.window=" open = !open" x-show="true"
                :class="open === true ? 'md:translate-x-0 md:sticky ':'-translate-x-full' ">
     
                <header class=" h-[64px] py-2 shadow-lg px-4 md:sticky top-0 bg-gray-800 z-40">
                    <!-- logo -->
                    <a href="#" class="text-white flex items-center space-x-2 group hover:text-white">
                        <div>
                            <img class="h-8 w-8 transition-transform duration-300 group-hover:-rotate-45 " src="{{ asset('storage/img/android-chrome-512x512.png') }}" alt="image"/>
                   
                        </div>
                
                        <div>
                            <span class="text-2xl font-extrabold">{{ config('app.name', 'GoldEver') }}</span>
                            <span class="text-xs block">Hardware Store</span>
                        </div>
                    </a>
                </header>
                

            

        <!-- nav -->
        <nav class="px-4 pt-4 scroller overflow-y-scroll max-h-[calc(100vh-64px)]" x-data="{selected:'Tasks'}">
            <ul class="flex flex-col space-y-2">

                <!-- ITEM -->
                <li class="text-sm text-gray-500 ">
                    <a href="#"
                        class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700 ">
                        <div class="pr-2">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>Dashboard </div>
                    </a>
                </li>

                <!-- Section Devider -->
                <div class="section border-b pt-4 mb-4 text-xs text-gray-600 border-gray-700 pb-1 pl-3">
                    Work
                </div>

                <!-- ITEM -->
                <li class="text-sm text-gray-500 ">
                    <a href="#"
                        class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700 ">
                        <div class="pr-2">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <div>Tasks </div>
                    </a>
                </li>

                <!-- ITEM -->
                <li class="text-sm text-gray-500 ">
                    <a href="#"
                        class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700 ">
                        <div class="pr-2">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>Errors & Bugs </div>
                    </a>
                </li>

                <!-- Section Devider -->
                <div class="section border-b pt-4 mb-4 text-xs text-gray-600 border-gray-700 pb-1 pl-3">
                    Managment
                </div>

                <!-- List ITEM -->
                <li class="text-sm text-gray-500 ">
                    <a href="#" @click.prevent="selected = (selected === 'Team' ? '':'Team')"
                        class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700">
                        <div class="pr-2">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div>Accounts</div>
                        <div class="absolute right-1.5 transition-transform duration-300"
                            :class="{ 'rotate-180': (selected === 'Team') }">
                            <svg class=" h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </a>


                    <div class="pl-4 pr-2 overflow-hidden transition-all transform translate duration-300 max-h-0 "
                        :style="(selected === 'Team') ? 'max-height: ' + $el.scrollHeight + 'px':''">
                        <ul class="flex flex-col mt-2 pl-2 text-gray-500 border-l border-gray-700 space-y-1 text-xs">
                            <!-- Item -->
                            <li class="text-sm text-gray-500 ">
                                <a href="{{ route('accounts.index') }}"
                                    class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700">
                                    <div> User Accounts </div>
                                </a>
                            </li>
                            <!-- Item -->
                            <li class="text-sm text-gray-500 ">
                                <a href="{{ route('accounts.store') }}"
                                    class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700">
                                    <div> Create User </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- List ITEM -->
                <li class="text-sm text-gray-500 ">
                    <a href="#" @click.prevent="selected = (selected === 'Projects' ? '':'Projects')"
                        class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700">
                        <div class="pr-2">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                        </div>
                        <div>Inventory Management</div>
                        <div class="absolute right-1.5 transition-transform duration-300"
                            :class="{ 'rotate-180': (selected === 'Projects') }">
                            <svg class=" h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </a>


                    <div class="pl-4 pr-2 overflow-hidden transition-all transform translate duration-300 max-h-0 "
                        :style="(selected === 'Projects') ? 'max-height: ' + $el.scrollHeight + 'px':''">
                        <ul class="flex flex-col mt-2 pl-2 text-gray-500 border-l border-gray-700 space-y-1 text-xs">
                            <!-- Item -->
                            <li class="text-sm text-gray-500 ">
                                <a href="{{ route('inventories.index') }}"
                                    class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700">
                                    <div>Inventory Table </div>
                                </a>
                            </li>
                            <!-- Item -->
                            <li class="text-sm text-gray-500 ">
                                <a href="{{ route('inventories.store') }}"
                                    class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700">
                                    <div> Create Inventory Entry </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <!-- List ITEM -->
                <li class="text-sm text-gray-500 ">
                    <a href="#" @click.prevent="selected = (selected === 'Tasks' ? '':'Tasks')"
                        class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700">
                        <div class="pr-2">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <div>Order Management</div>
                        <div class="absolute right-1.5 transition-transform duration-300"
                            :class="{ 'rotate-180': (selected === 'Tasks') }">
                            <svg class=" h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </a>


                    <div class="pl-4 pr-2 overflow-hidden transition-all transform translate duration-300 max-h-0 "
                        :style="(selected === 'Tasks') ? 'max-height: ' + $el.scrollHeight + 'px':''">
                        <ul class="flex flex-col mt-2 pl-2 text-gray-500 border-l border-gray-700 space-y-1 text-xs">
                            <!-- Item -->
                            <li class="text-sm text-gray-500 ">
                                <a href="#"
                                    class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700">
                                    <div>Orders Table </div>
                                </a>
                            </li>
                            <!-- Item -->
                            <li class="text-sm text-gray-500 ">
                                <a href="#"
                                    class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700">
                                    <div>Purchase Table</div>
                                </a>
                            </li>
                            <li class="text-sm text-gray-500 ">
                                <a href="#"
                                    class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700">
                                    <div> Create Order </div>
                                </a>
                            </li>

                            <li class="text-sm text-gray-500 ">
                                <a href="#"
                                    class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700">
                                    <div> Archived Orders </div>
                                </a>
                            </li>
                            <li class="text-sm text-gray-500 ">
                                <a href="#"
                                    class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700">
                                    <div> In Progress </div>
                                </a>
                            </li>
                            <li class="text-sm text-gray-500 ">
                                <a href="#"
                                    class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700">
                                    <div> Closed Task </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
















































            </ul>
        </nav>
    </div>


         

            <!-- Page Content -->
                
                <div class="flex-1 flex-col flex">
                    <nav class="bg-gray-800 shadow-xl sticky w-full top-0 text-black z-50" x-data="{ mobilemenue: false }">
                        <div class="mx-auto ">
                            <div class="flex items-stretch justify-between h-16">
            
                                <div class="flex items-center md:hidden">
                                    <div class="-mr-2 flex" x-data>
                                        <!-- Mobile menu button -->
                                        <button type="button" @click="$dispatch('togglesidebar')"
                                            class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                            aria-controls="mobile-menu" aria-expanded="false">
                                            <span class="sr-only">Open main menu</span>
            
                                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 6h16M4 12h16M4 18h16" />
                                            </svg>
            
                                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
            
                                <div class="flex items-center pl-6">
                                    <div class="flex-shrink-0 md:hidden">
            
                                        <a href="#" class="text-white flex items-center space-x-2 group">
                                            <div>
                                                <svg class="h-8 w-8 transition-transform duration-300 group-hover:-rotate-45 "
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                </svg>
                                            </div>
            
                                            <div>
                                                <span class="text-2xl font-extrabold">GoldEver</span>
                                                <span class="text-xs block">Hardware Store</span>
                                            </div>
                                        </a>
                                    </div>
            
                                    <!-- toggel sidebar -->
                                    <div class="text-white cursor-pointer hidden md:block" @click="$dispatch('togglesidebar')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6h16M4 12h16M4 18h7" />
                                        </svg>
                                    </div>
            
            
                                    <div class="hidden lg:block">
                                        <!-- Search -->
                                        <form action="" class="app-search" method="GET">
                                            <div class="relative group ">
                                                <input type="text"
                                                    class="form-input rounded-md bg-gray-700 text-sm text-gray-300 pl-10 py-1.5 ml-5 border-transparent border-none outline-none focus:ring-0 focus:text-white transition-all duration-300 ease-in-out focus:w-60 w-48"
                                                    placeholder="Search..." autocomplete="off">
                                                <span
                                                    class="absolute left-44 bottom-2 text-gray-400 transition-all duration-300 ease-in-out group-focus-within:left-8">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="hidden md:flex items-stretch">
                                    <!-- Profile Menu DT -->
                                    <div class="ml-4 flex md:ml-6 ">
                                        <div class="relative flex justify-center items-center mr-4">
                                            <div class="bg-gray-700 block hover:text-white p-1 rounded-full text-gray-400">
                                                <span class="sr-only">View notifications</span>
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                                </svg>
                                            </div>
                                        </div>
            
                                        <!-- Profile dropdown -->
                                        <div class="relative bg-gray-700 px-4 text-gray-400 hover:text-white text-sm cursor-pointer"
                                            x-data="{open: false}">
                                            <div class="flex items-center min-h-full" @click="open = !open">
            
                                                <div class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                                    <span class="sr-only">Open user menu</span>
                                                    <img class="h-8 w-8 rounded-full"
                                                        src="https://assets.codepen.io/3321250/internal/avatars/users/default.png?fit=crop&format=auto&height=512&version=1646800353&width=512"
                                                        alt="">
                                                </div>
            
                                                <div class="flex flex-col ml-4">
                                                    <span>{{ Auth::user()->name }}</span>
                                                    @if(Auth::user()->usertype_id == 1)
                                                        <span>Admin</span>
                                                    @elseif(Auth::user()->usertype_id == 2)
                                                        <span>Guest</span>
                                                    @else
                                                        <span>Unknown</span>
                                                    @endif
                                                </div>
                                                
                                            </div>
            
                                            <div x-show="open" @click.away="open = false"
                                                class="origin-top-right absolute right-0 mt-0 min-w-full rounded-b-md shadow py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                x-transition:enter="transition ease-out duration-100"
                                                x-transition:enter-start="transform opacity-0 scale-95"
                                                x-transition:enter-end="transform opacity-100 scale-100"
                                                x-transition:leave="transition ease-in duration-75"
                                                x-transition:leave-start="transform opacity-100 scale-100"
                                                x-transition:leave-end="transform opacity-0 scale-95" role="menu"
                                                aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                                    role="menuitem" tabindex="-1" id="user-menu-item-0">My Profile</a>
            
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                                    role="menuitem" tabindex="-1" id="user-menu-item-1">Projects</a>
                                                <form method="POST" action="{{ route('logout') }}"> 
                                                    @csrf
                                                    <a :href="route('logout')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                                        role="menuitem" tabindex="-1" id="user-menu-item-1" onclick="event.preventDefault();
                                                        this.closest('form').submit();">{{ __('Log Out') }}</a>
                                                </form>
                                            </div>
                                        </div>
            
                                    </div>
                                </div>
            
            
                                <div class="-mr-2 flex md:hidden">
                                    <!-- Mobile menu button -->
                                    <button type="button" @click="mobilemenue = !mobilemenue"
                                        class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                        aria-controls="mobile-menu" aria-expanded="false">
                                        <span class="sr-only">Open main menu</span>
            
                                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6h16M4 12h16M4 18h16" />
                                        </svg>
                                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
            
                        <!-- Mobile menu, show/hide based on menu state. -->
                        <div class="md:hidden absolute bg-gray-800 w-full" id="mobile-menu" x-show="mobilemenue"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95" @click.away="mobilemenue = false
                            
                            ">
                            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                                <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                                    aria-current="page">Dashboard</a>
            
                                <a href="#"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>
                            </div>
            
                            <div class="pt-4 pb-3 border-t border-gray-700">
                                <!-- profile menue for mobile -->
                                <div class="flex items-center px-5">
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full"
                                            src="https://assets.codepen.io/3321250/internal/avatars/users/default.png?fit=crop&format=auto&height=512&version=1646800353&width=512"
                                            alt="">
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                                        <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                                    </div>
                                    <button type="button"
                                        class="ml-auto bg-gray-800 flex-shrink-0 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                                        <span class="sr-only">View notifications</span>
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                        </svg>
                                    </button>
            
                                </div>
                                <div class="mt-3 px-2 space-y-1">
                                    <a href="#"
                                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Your
                                        Profile</a>
            
                                        <form method="POST" action="{{ route('logout') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">
                                            @csrf
                        
                                            <x-responsive-nav-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-responsive-nav-link>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </nav>
                    @yield('content')
                </div>
       
        
        </div>
    </body>
</html>
