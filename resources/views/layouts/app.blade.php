<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @livewireStyles
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body>

        <!-- Header -->
        <header class="header">
            <div class="container">
                <div class="navbar flex align-middle justify-between">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('storage/' . $settings->logo) }}" alt="Arena Logo">
                        </a>
                    </div>

                    <div class="menu">
                        <ul class="flex align-middle justify-center">
                            @foreach($headerMenu->links as $link)
                                <li>
                                    <a href="{{ $link->url }}">
                                        <span class="fix-font">{{ $link->label }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="cta">
                        <a href="#" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <span>{{ $settings->mobile_number }}</span>
                        </a>
                    </div>

                    <div class="mobile-icon">
                        <button type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!--/ Header -->

        {{ $slot }}

        @livewireScripts
    </body>
</html>
