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
                                {{-- Affichage des erreurs de validation --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Erreur !</strong> Veuillez corriger les champs suivants :
                                        <ul class="mb-0 mt-2">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif

                                <form class="my-4" method="post" action="{{ route('account.create') }}">
                                    @csrf

                                    <div class="form-group mb-2">
                                        <label class="form-label" for="account_name">Nom de l'organisation</label>
                                        <input type="text" class="form-control @error('account_name') is-invalid @enderror" id="account_name" name="account_name" value="{{ old('account_name') }}" placeholder="Nom du compte" required>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label class="form-label" for="address">Adresse</label>
                                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}" placeholder="Adresse">
                                    </div>

                                    <div class="form-group mb-2">
                                        <label class="form-label" for="phone">Téléphone</label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Téléphone">
                                    </div>

                                    <div class="form-group mb-2">
                                        <label class="form-label" for="name">Nom utilisateur</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Entrez votre nom, ex: Gaston" required>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Entrez votre email.ex: email@domain" required>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label class="form-label" for="password">Mot de passe</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Entrez votre mot de passe" required>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <button class="btn btn-primary" type="submit"><i class="fas fa-user-plus me-2"></i> Créer un compte</button>
                                        <a href="{{ route("login") }}" class="mt-2 btn btn-outline-primary shadow-none"><i class="fas fa-sign-in me-2"></i>Vous connecter</a>
                                    </div>
                                </form>
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end col-->
    </div><!--end row-->
</div>
@endsection

