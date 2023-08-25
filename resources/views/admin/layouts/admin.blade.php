<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arena</title>

    <!-- Scripts -->
    @livewireStyles
    @vite(['resources/scss/admin/admin.scss', 'resources/js/admin/admin.js'])
</head>
<body>

    <div id="admin">

        <!-- Sidebar -->
        <div class="sidebar open flex flex-col align-center">
            <div class="logo">
                <img src="{{ asset('storage/' . $settings->logo) }}" alt="">
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="{{ route('home') }}" target="_blank">
                            Go to website
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.home') }}" class="{{ Request::path() === 'admin' ? 'active' : '' }}">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.links.index') }}" class="{{ Request::path() === 'admin/links' || Request::is('admin/links/*') ? 'active' : '' }}">
                            Menu
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.properties.index') }}" class="{{ Request::path() === 'admin/properties' || Request::is('admin/properties/*') ? 'active' : '' }}">
                            Properties
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.content.edit') }}" class="{{ Request::path() === 'admin/content' ? 'active' : '' }}">
                            Landing Page
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.settings.edit') }}" class="{{ Request::path() === 'admin/settings' ? 'active' : '' }}">
                            Settings
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.querySelector('#logout-form').submit()">
                            Logout
                            <form action="{{ route('logout') }}" id="logout-form" method="post" style="display: none;">@csrf</form>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="wrapper open">
            <div class="container">

                <div class="content">
                    <div class="page-title flex align-middle justify-between">
                        <h1>
                            @yield('title')
                        </h1>

                        @yield('actions')
                    </div>

                    <!-- Alerts -->
                    <div class="alerts mb-1">

                        @if ($message = Session::get('success'))
                            <div class="row">
                                <div class="col-100">
                                    <div class="alert alert-success flex align-center">
                                        <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4 8-8z"/></svg>
                                        <p>
                                            {{ $message }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                    <!--/ Alerts -->

                    {{ $slot }}
                </div>
            </div>
        </div>

    </div>

    @livewireScripts
</body>
</html>
