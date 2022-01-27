@extends('layouts.login')

@section('content')
  {{--   <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-3 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="{{ asset('img/logo-CDC.png') }}" alt="logo">
                        </div>
                        <h3 class="text-center">Login</h3>
                        <form class="pt-3" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">{{ __('Correo electronico') }}</label>
                                <input id="email" type="email"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">{{ __('Contraseña') }}</label>
                                <input id="password" type="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <button type="submit"
                                    class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                    {{ __('Ingresar') }}
                                </button>
                            </div>
                            <div class="text-center mt-4 fw-light">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- content-wrapper ends -->



    </div> 
    <div class="nk-wrap nk-wrap-nosidebar">
        <div class="nk-content ">
            <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                <div class="brand-logo pb-4 text-center">
                    <a href="html/index.html" class="logo-link">
                        <img class="logo-light logo-img logo-img-lg" src="{{ asset('img/logo-CDC.png') }}" srcset="./images/logo2x.png 2x"alt="logo">
                        <img class="logo-dark logo-img logo-img-lg" src="{{ asset('img/logo-CDC.png') }}"  srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                    </a>
                </div>
                <div class="card card-bordered">
                    <div class="card-inner card-inner-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Iniciar Sesión</h4>
                                <div class="nk-block-des">
                                    <p>Ingresa tu usuario y contraseña.</p>
                                </div>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="email">{{ __('Usuario') }}</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input id="username" name="username" type="text" 
                                    class="form-control form-control-lg @error('username') is-invalid @enderror"  
                                    placeholder="Ingrese su usuario" value="{{ old('username') }}" required autofocus>
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="password">{{ __('Contraseña') }}</label>
                                    @if (Route::has('password.request'))
                                    <a class="link link-primary link-sm" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                    @endif
                                </div>
                                <div class="form-control-wrap">
                                    <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                    </a>
                                    <input type="password" id="password" name="password" 
                                    class="form-control form-control-lg @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="Ingrese su contraseña">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary btn-block">{{ __('Ingresar') }}</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="nk-footer nk-auth-footer-full">
                <div class="container wide-lg">
                    <div class="row g-3">
                        <div class="col-lg-6 order-lg-last">
                            <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Terms & Condition</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Privacy Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Help</a>
                                </li>
                                <li class="nav-item dropup">
                                    <a class="dropdown-toggle dropdown-indicator has-indicator nav-link"
                                        data-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <ul class="language-list">
                                            <li>
                                                <a href="#" class="language-item">
                                                    <img src="./images/flags/english.png" alt="" class="language-flag">
                                                    <span class="language-name">English</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item">
                                                    <img src="./images/flags/spanish.png" alt="" class="language-flag">
                                                    <span class="language-name">Español</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item">
                                                    <img src="./images/flags/french.png" alt="" class="language-flag">
                                                    <span class="language-name">Français</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item">
                                                    <img src="./images/flags/turkey.png" alt="" class="language-flag">
                                                    <span class="language-name">Türkçe</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="nk-block-content text-center text-lg-left">
                                <p class="text-soft">&copy; 2022 DashLite. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
