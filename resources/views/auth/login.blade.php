@extends('layouts.auth')

@section('content')
<div id="main-wrapper">
    <!-- toast error -->
    @if ($errors->has('email') || $errors->has('password'))
        <div class="toast toast-onload align-items-center text-bg-danger border-0" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="toast-body hstack align-items-start gap-6">
                <iconify-icon icon="solar:info-square-broken" class="fs-6"></iconify-icon>
                <div>
                    <h5 class="text-white fs-3 mb-1">Identifiants erronés !</h5>
                    <h6 class="text-white fs-2 mb-0">{{ $errors->first('email') ?: $errors->first('password') }}!</h6>
                </div>
                <button type="button" class="btn-close btn-close-white fs-2 m-0 ms-auto shadow-none" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    @endif
    
    <!-- end toast error -->
    <div class="position-relative overflow-hidden auth-bg min-vh-100 w-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100 my-5 my-xl-0">
                <div class="col-md-9 d-flex flex-column justify-content-center">
                    <div class="card mb-0 bg-body auth-login m-auto w-100">
                        <div class="row gx-0">
                            <!-- ------------------------------------------------- -->
                            <!-- Part 1 -->
                            <!-- ------------------------------------------------- -->
                            <div class="col-xl-6 border-end">
                                <div class="row justify-content-center py-4">
                                    <div class="col-lg-11">
                                        <div class="card-body">
                                            <a href="/" class="text-nowrap logo-img d-block mb-4 w-100">
                                                <h1 class="fw-bold text-primary"><iconify-icon icon="solar:square-academic-cap-broken" class="fs-9 text-dark"></iconify-icon> mosala</h1>
                                            </a>
                                            <h2 class="lh-base mb-4">Connexion</h2>
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email" aria-describedby="emailHelp">
                                                </div>
                                                <div class="mb-4">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                                    </div>
                                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input primary" name="remember" type="checkbox" value="" id="flexCheckChecked" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="form-check-label text-dark" for="flexCheckChecked">
                                                            Garder ma session
                                                        </label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-dark w-100 py-8 mb-4 rounded-1">Sign In</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- ------------------------------------------------- -->
                            <!-- Part 2 -->
                            <!-- ------------------------------------------------- -->
                            <div class="col-xl-6 d-none d-xl-block">
                                <div class="row justify-content-center align-items-start h-100">
                                    <div class="col-lg-9">
                                        <div id="auth-login" class="carousel slide auth-carousel mt-5 pt-4" data-bs-ride="carousel">
                                            <div class="d-flex align-items-center justify-content-center w-100 h-100 flex-column gap-9 text-center">
                                                <img src="assets/images/backgrounds/login-side.png" alt="login-side-img" width="300" class="img-fluid" />
                                                <h4 class="mb-0">Bienvenue sur l'admin <span class="text-primary">mosala</span></h4>
                                                <p class="fs-12 mb-0">Veuillez utiliser vos identifiants de connexion pour vous connecter !</p>
    
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection

@section("scripts")
<script>
    document.addEventListener('DOMContentLoaded', function(){
        window.addEventListener("load", () => {
            let myAlert = document.querySelectorAll(".toast")[0];
            if (myAlert) {
                let bsAlert = new bootstrap.Toast(myAlert);
                bsAlert.show();
            }
        });
    });
</script>
@endsection
