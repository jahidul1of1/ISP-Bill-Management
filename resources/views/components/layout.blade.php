<!doctype html>

<title>JTN NETWORK</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="icon" href="/images/jtn-top.png">
<link rel="stylesheet" href="/app.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<style>
    html {
        scroll-behavior: smooth;
    }

    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center sticky top-0 bg-white">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts Logo" width="250" height="20">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                    <x-dropdown>
                        <x-slot name="trigger">
                            
                            <button class="text-xs font-bold uppercase">
                                Welcome, {{ auth()->user()->name }}!
                            </button>
                        </x-slot>

                        @admin
                            <x-dropdown-item
                                href="/admin/users"
                                :active="request()->is('admin/users')"
                            >
                                Dashboard
                            </x-dropdown-item>

                            <x-dropdown-item
                                href="/admin/posts"
                                :active="request()->is('admin/posts')"
                            >
                                All Posts
                            </x-dropdown-item>

                            <x-dropdown-item
                                href="/admin/posts/create"
                                :active="request()->is('admin/posts/create')"
                            >
                           
                                New Post
                            </x-dropdown-item>
                            
                            
                        @endadmin

                       


                        <x-dropdown-item
                            href="#"
                            x-data="{}"
                            @click.prevent="document.querySelector('#logout-form').submit()"
                        >
                            Log Out
                        </x-dropdown-item>

                        <form id="logout-form" method="POST" action="/logout" class="hidden">
                            @csrf
                        </form>
                    </x-dropdown>


                    <!-- my custom -->
                    @admin
                    <a href="/admin/users" class="bg-red-500 rounded-full text-white py-3 px-5 ml-6 text-xs font-bold {{ request()->is('admin/users') ? 'text-white-500' : '' }}">
                    <i class="fa fa-cog" aria-hidden="true"></i> DASHBOARD </a>
                    @endadmin



                    <a href="/porfile"
                         class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                         <i class="fa fa-user" aria-hidden="true"></i> Porfile
                    </a>
                    
                    <a href="#"
                         class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                         <i class="fa fa-money" aria-hidden="true"></i> Pay Bill
                    </a>

                @else
                    <a href="/register"
                       class="bg-blue-500 rounded-full text-white py-3 px-5 text-xs font-bold uppercase {{ request()->is('register') ? 'text-white-500 bg-blue-500' : '' }}">
                        Register
                    </a>

                    <a href="/login"
                       class="bg-red-500 rounded-full text-white py-3 px-5 ml-6 text-xs font-bold uppercase {{ request()->is('login') ? 'text-white-500' : '' }}">
                        Log In
                    </a>
                @endauth

                <!-- <a href="#newsletter"
                   class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a> -->
            </div>
        </nav>

        {{ $slot }}

        <footer id="newsletter"
                class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16"
        >
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">

            <h5 class="text-3xl">
                We are the first internet service provider in Jhalokathi city. 
            </h5>
            <p class="text-sm mt-3">Promise to give you better service.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="/newsletter" class="lg:flex text-sm">
                        @csrf

                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <div>
                                <input id="email"
                                       name="email"
                                       type="text"
                                       placeholder="Your email address"
                                       class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">

                                @error('email')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>

    <x-flash/>
    <div class="small text-center text-muted">
          Copyright &copy; 2021 All rights reserved | Developed
          <i class="fa fa-code text-blue-500" aria-hidden="true"></i> by
          <a href="#" class="text-blue-500 font-semibold pb-6">-> JAHIDUL ISLAM</a>
    </div>

<script src="/app.js"></script>
</body>
