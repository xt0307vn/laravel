<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>@yield('title', 'Custom layout')</title>
    @livewireStyles
    <style>
        .wrapper {
            width: 100%;
        }

        .main {
            min-height: 90vh;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light align-items-center px-5">
                <a class="navbar-brand" href="/">My Learning</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('developer') }}">User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('post') }}">Posts</a>
                        </li>
                    </ul>
                </div>
                @if (Auth::user())
                    <p class="h-100 my-0 px-5">{{ Auth::user()->name }}</p>
                @endif
                @if (Auth::user())
                    <a href="{{ route('logout') }}">Logout</a>
                @else
                    <div class="d-flex gap-5">
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('signup') }}">Signup</a>
                    </div>
                @endif
            </nav>
        </header>
        <main class="main d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                @yield('content')
            </div>
        </main>
        <footer class="footer">
        </footer>
    </div>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
