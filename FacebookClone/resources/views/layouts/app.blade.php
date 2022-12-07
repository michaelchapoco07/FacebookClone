<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/420f656f03.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- CSS -->
    <style>
        #allLinks:hover {
            box-shadow: inset 100px 0 0 0 #D3D3D3;
        }

        .sidebarlinks {
            color: blue;
        }

        .fa-solid:hover {
            box-shadow: inset 100px 0 0 0 #D3D3D3;
        }

        .profilepicture {
            top: 65%;
            left: 24%;
            position: absolute;
        }

        .foreditanddelete {
            border: 0px solid #000
        }
    </style>
</head>

<body>

    <div id="app">
        <nav class="navbar navbar-expand-lg border border-bottom-primary navbar-light bg-white shadow-sm m-0 p-0 fixed-top">
            <div class="container-fluid d-flex justify-content-between">
                <a class="navbar-brand" href="{{ url('/home') }}"><img class="img-fluid" src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" style="width:145px; height:50px;" alt="Facebook"></a>
                <form class="d-flex col-md-4" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search Facebook" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div class="d-flex">
                    <div class="dropstart">
                        <a type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://i.pravatar.cc/40?u={{auth()->user()->email}}" alt="Avatar" class="avatar bg-info rounded-circle mx-1" style="width:35px;">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Sign Out') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div><img src="https://thumbs.dreamstime.com/b/default-avatar-profile-vector-user-profile-default-avatar-profile-vector-user-profile-profile-179376714.jpg" alt="Avatar" class="avatar bg-info rounded-circle mx-1" style="width:35px;"></div>
                    <div><img src="https://thumbs.dreamstime.com/b/default-avatar-profile-vector-user-profile-default-avatar-profile-vector-user-profile-profile-179376714.jpg" alt="Avatar" class="avatar bg-info rounded-circle mx-1" style="width:35px;"></div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>