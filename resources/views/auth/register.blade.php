<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Infinity - Bootstrap Admin Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Admin, Dashboard, Bootstrap" />
    <link rel="shortcut icon" sizes="196x196" href="{{ asset('assetsAdmin/assets/images/logo.png') }}">

    <!-- <link rel="stylesheet" href="{{ asset('assetsAdmin/assets/css/landing-page.css') }}"> -->

    <link rel="stylesheet" href="{{ asset('assetsAdmin/libs/bower/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assetsAdmin/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsAdmin/libs/bower/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsAdmin/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsAdmin/assets/css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsAdmin/assets/css/misc-pages.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
    <link rel="stylesheet" href="{{ asset('assetsLogin/assets/css/styles-login.css') }}">
</head>

<body class="simple-page">
    {{-- <img class="imageen" src="/public/assetsLogin/assets/images/fondo.jpg" alt=""> --}}
    <div class="simple-page-wrap">

        <div class="text-center row m-b-md">
            <a class="text-white col-auto text-muted" href="/login">Inicio</a>
            <a class="text-white col-auro" href="/login">Registrarse</a>
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
                        <legend class="text-center leyenda">Registro de Usuario</legend>

                        <p class="parr">Ingrese su información de registro.</p>

                        <!-- Ingrese sus Nombres -->

                        <div class="form-group m-b-sm">

                            <div class="input-group">
                                <span class="input-group-addon bg-purple text-white">
                                    <span class="fa fa-user" aria-hidden="true"></span>
                                </span>
                                <input id="text" class="form-control" type="name" name="name"
                                    :value="old('')" placeholder="Ingrese sus Nombres" required autofocus>
                            </div>

                        </div>

                        <!-- Ingrese sus Apellidos -->
                        <div class="form-group m-b-md">

                            <div class="input-group">
                                <span class="input-group-addon bg-purple text-white">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                                <input id="password" class="form-control" type="password" name="password"
                                    placeholder="Ingrese sus Apellidos" required autocomplete="current-password">
                            </div>

                        </div>

                        {{-- Ingrese su Email --}}
                        <div class="form-group m-b-md">

                            <div class="input-group">
                                <span class="input-group-addon bg-purple text-white">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                                <input id="password" class="form-control" type="password" name="password"
                                    placeholder="Ingrese su Email" required autocomplete="current-password">
                            </div>

                        </div>

                        {{-- Ingrese su Contraseña --}}
                        <div class="form-group m-b-md">

                            <div class="input-group">
                                <span class="input-group-addon bg-purple text-white">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                                <input id="password" class="form-control" type="password" name="password"
                                    placeholder="Ingrese su Contraseña" required autocomplete="current-password">
                            </div>

                        </div>

                        {{-- Confirme su Contraseña --}}
                        <div class="form-group m-b-md">

                            <div class="input-group">
                                <span class="input-group-addon bg-purple text-white">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                                <input id="password" class="form-control" type="password" name="password"
                                    placeholder="Confirme su Contraseña" required autocomplete="current-password">
                            </div>

                        </div>

                        {{-- Select --}}
                        <div class="form-group m-b-md">

                            <div class="input-group">
                                <span class="input-group-addon bg-purple text-white">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </span>
                                <input id="password" class="form-control" type="password" name="password"
                                    placeholder="Contraseña" required autocomplete="current-password">
                                <select class="form-control">
                                    <option>Empresario</option>
                                    <option>Usuario</option>
                                    <option>Contador</option>
                                    <option>Asistente de Contabilidad</option>
                                </select>
                            </div>

                        </div>

                        {{-- <div class="form-group">

                            <div id="control-demo-6" class="col-sm-9">
                                <select class="form-control">
                                    <option>HTML</option>
                                    <option>CSS</option>
                                    <option>Javascript</option>
                                    <option>Bootstrap</option>
                                    <option>AngularJs</option>
                                </select>
                            </div>

                        </div> --}}

                        {{-- <div class="btn-group" role="group">      INTENTAR UNIENDO ESTILO  url: Infinity/MailBox/Inbox
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter<span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">time</a></li>
                                <li><a href="#">importance</a></li>
                            </ul>
                        </div> --}}

                        <div class="m-b-0 text-right">
                            <div class="inline-block">
                                <x-button class="btn btn-primary btn-sm btn-purple ml-3">
                                    {{ __('Ingresar') }}
                                </x-button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </x-auth-card>

            <div>
                <p class="text-center m-t-xs p-b-xs parr">2023 &#169 NUBEFA</p>
            </div><!-- .simple-page-footer -->

        </div><!-- #login-form -->
    </div><!-- .simple-page-wrap -->
</body>

</html>
