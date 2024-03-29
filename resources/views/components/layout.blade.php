<!doctype html>

<title>Udev - Latest Web Dev News</title>
{{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
<script defer src="/lib/alpine.min.js"></script>
{{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
<link href="/lib/tailwind.min.css" rel="stylesheet">
<meta name="viewport" content="initial-scale=1,width=device-width" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<body style="font-family: Open Sans, sans-serif">


    @if (Session::has('success'))
        <x-flash-alert>
            {{ Session::get('success') }}
        </x-flash-alert>
    @endif

    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.png" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>


            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                    <span class="px-5">Welcome, <span class="font-bold">{{ Auth::user()->username }}</span></span>
                    {{-- <a href="/logout" class="text-sm font-bold uppercase">Logout</a> --}}
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="font-bold text-indigo-500">Log Out</button>
                    </form>

                @else
                    <div>
                        <a href="/register" class="text-xs font-bold uppercase">Register</a>  
                        <span>⚫</span> 
                        <a href="/login" class="text-xs font-bold uppercase">Login</a>   
                    </div> 
                @endauth

                <a href="#"
                    class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>


        {{ $slot }}


        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/newsletter-icon.png" alt="" class="mx-auto mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address"
                                class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
</body>
