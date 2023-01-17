<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Infinity - Bootstrap Admin Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Admin, Dashboard, Bootstrap" />
    <link rel="shortcut icon" sizes="196x196" href="{{ asset('assetsLogin/assets/images/logo.png') }}">

    <!-- <link rel="stylesheet" href="{{ asset('assetsLogin/assets/css/landing-page.css') }}"> -->

    <link rel="stylesheet" href="{{ asset('assetsLogin/libs/bower/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assetsLogin/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsLogin/libs/bower/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsLogin/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsLogin/assets/css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsLogin/assets/css/misc-pages.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
</head>

<body class="simple-page">
    <div id="back-to-home">
        <a href="index.html" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
    </div>
    <div class="simple-page-wrap">

        <div>
            <a href="">Inicio</a>
            <a href="">Registrarse</a>
        </div>

        <div class="simple-page-form animated flipInY" id="login-form">

            <x-auth-card>
                <x-slot name="logo">
                    <a href="/">
                        <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
                    </a>
                </x-slot>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('tenant.login') }}">
                    @csrf

                    <fieldset>
                        <legend>Iniciar sesion</legend>

                        <div class="inline items-end justify-end mt-4">
                            <input type="button" class="btn mw-md btn-purple" value="Usa tu cuenta de Google">
                        </div>
                        <div class="inline items-end justify-end mt-4">
                            <input type="button" class="btn mw-md btn-purple" value="Usa tu cuenta de Facebook">
                        </div>

                        <p>Ingrese su correo y contraseña para iniciar sesión</p>
                        <!-- Email Address -->
                        <div>
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus>
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password">
                        </div>

                        {{-- <div class=" items-end justify-end  mt-4">
                            <input type="submit" class="" value="Ingresar">
                        </div> --}}
                        {{-- inline-block items-center --}}
                        <div class="flex justify-content-between mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <x-button class=" btn btn-primary btn-md btn-purpleml-3 ml-3">
                                {{ __('Ingresar') }}
                            </x-button>
                        </div>
                    </fieldset>
                </form>
            </x-auth-card>

            <div>
                <p class="text-center">2023 &#169 NUBEFA</p>
            </div><!-- .simple-page-footer -->

        </div><!-- #login-form -->
    </div><!-- .simple-page-wrap -->
</body>

</html>
