@extends('layouts.auth')

@section('content')
<div class="container-xxl">
    <div class="row vh-100 d-flex justify-content-center">
        <div class="col-12 align-self-center">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box rounded-top">
                                <div class="text-center p-3">
                                    <img style="height: 100px;" class="img-fluid" src="{{ asset("assets/images/logo-tr.png") }}" alt="logo">
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                @if ($errors->has('email') || $errors->has('password'))
                                    <div class="alert alert-danger alert-dismissible mt-2 fade show mb-0" role="alert">
                                        <div class="d-inline-flex justify-content-center align-items-center thumb-xxs bg-danger rounded-circle mx-auto me-1">
                                            <i class="fas fa-exclamation align-self-center mb-0 text-white "></i>
                                        </div>
                                        <strong>Erreur d'authentification !</strong>Identifiants incorrects.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <form class="my-4" method="post" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="username">Nom d'utilisateur</label>
                                        <input type="email"  class="form-control" id="username" name="email" placeholder="Enter username" required>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label class="form-label" for="userpassword">Mot de passe</label>
                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password" required>
                                    </div><!--end form-group-->

                                    <div class="form-group row mt-3">
                                        <div class="col-sm-6">
                                            <div class="form-check form-switch form-switch-primary">
                                                <input class="form-check-input" type="checkbox" id="customSwitchprimary" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="customSwitchprimary">Garder ma session</label>
                                            </div>
                                        </div>

                                    </div><!--end form-group-->

                                    <div class="form-group mb-0 row">
                                        <div class="col-12">
                                            <div class="d-grid mt-3">
                                                <button class="btn btn-primary" type="submit"><i class="fas fa-sign-in-alt me-2"></i>Connecter</button>
                                                <a href="{{ route("register") }}" class="mt-2 text-center text-decoration-underline">Créer un compte</a>
                                            </div>
                                        </div><!--end col-->
                                    </div> <!--end form-group-->
                                </form><!--end form-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end col-->
    </div><!--end row-->
</div>
@endsection

