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

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<div class="row justify-content-center my-5 py-5" style="width:100%; height:100%;">
    <div class=" col-md-3 my-5 py-5 mx-5">
        <img class="img-fluid" src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="Facebook">
        <h2 class="mx-5">Facebook helps you connect and share with the people in your life</h2>
    </div>
    <div class="col-md-3 my-5 py-5 mx-5">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row mb-3">

                        <div class="">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="">
                            <button type="submit" class="btn btn-primary block" style="width:100%;">
                                <strong>Log In</strong>
                            </button>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link d-flex justify-content-center m-1" href="{{ route('password.request') }}" style="text-decoration: none;">
                                {{ __('Forgot Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                    <hr>
                    <div class="row mx-2 d-flex justify-content-center">
                        <div class="col-md-6">
                            <!-- <button type="submit" class="btn btn-success block" style="width:100%;">
                                <strong>Create a New Account</strong>
                            </button> -->
                            <a href="#" data-bs-toggle="modal" class="btn btn-success block" style="width:100%;" data-bs-target="#registerModal">Create a New Account</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-3"><strong>Create a Page </strong>
            &nbsp; for a celebrity, brand or business.
        </div>
    </div>
</div>
<div class="row justify-content-center" style="width:100%; height:100%;">
    <div class="col-md-8 d-flex justify-content-center">
        <footer>
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item text-muted">English (US)</li>
                <li class="list-group-item text-muted">Filipino</li>
                <li class="list-group-item text-muted">Bisaya</li>
                <li class="list-group-item text-muted">Espanol</li>
                <li class="list-group-item text-muted">日本語
                </li>
                <li class="list-group-item text-muted">한국어
                </li>
                <li class="list-group-item text-muted">中文(简体)
                </li>
                <li class="list-group-item text-muted">Deutsch
                </li>
                <li class="list-group-item text-muted">Français (France)
                </li>
                <li class="list-group-item text-muted"><a href="" style="text-decoration: none;">+</a>
                </li>
            </ul>
            <hr>
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item text-muted">An item</li>
                <li class="list-group-item text-muted">A second item</li>
                <li class="list-group-item text-muted">A third item</li>
                <li class="list-group-item text-muted">An item</li>
                <li class="list-group-item text-muted">A second item</li>
                <li class="list-group-item text-muted">A third item</li>
                <li class="list-group-item text-muted">An item</li>
                <li class="list-group-item text-muted">A second item</li>
                <li class="list-group-item text-muted">A second item</li>
                <li class="list-group-item text-muted">A second item</li>
            </ul>
        </footer>
    </div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" id="registerModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between">
                <div>
                    <h3 class="mx-2"><strong>Sign Up</strong></h3>
                    <h6 class="mx-2">It's quick and easy.</h6>
                </div>
                <button type="button" name="button" class="btn close bg-danger mx-2" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <h4 class="modal-title" id="registerModalLabel"></h4>
            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-success block" style="width:100%;">
                                {{ __('Sign Up') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p class="text-muted"><small>By clicking Sign Up, you agree to our Terms, Privacy Policy and Cookies Policy. You may receive SMS Notifications from us and can opt out any time.</small></p>
            </div>
        </div>
    </div>
</div>


</html>