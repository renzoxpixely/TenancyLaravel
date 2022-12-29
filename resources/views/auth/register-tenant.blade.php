
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Infinity - Bootstrap Admin Template</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<link rel="shortcut icon" sizes="196x196" href="{{ asset('assetsAdmin/assets/images/logo.png') }}">

    <!-- <link rel="stylesheet" href="{{ asset('assetsAdmin/assets/css/landing-page.css') }}"> -->

	<link rel="stylesheet" href="{{ asset('assetsAdmin/libs/bower/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assetsAdmin/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assetsAdmin/libs/bower/animate.css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assetsAdmin/assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('assetsAdmin/assets/css/core.css') }}">
	<link rel="stylesheet" href="{{ asset('assetsAdmin/assets/css/misc-pages.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
</head>
<body class="simple-page">
	<div id="back-to-home">
		<a href="index.html" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
	</div>
	<div class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			<a href="index.html">
				<span><i class="fa fa-gg"></i></span>
				<span>Infinity</span>
			</a>
		</div><!-- logo -->
		<div class="simple-page-form animated flipInY" id="login-form">
	<h4 class="form-title m-b-xl text-center">Registro de inquilino</h4>

    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/register-tenant">
            @csrf

            <!-- Company -->
            <div>
                <x-label for="company" :value="__('Company')" />

                <x-input id="company" class="block mt-1 w-full" type="text" name="company" :value="old('company')" required/>
            </div>

             <!-- Domain -->
             <div class="mt-2">
                <x-label for="domain" :value="__('Domain')" />

                <div class="flex items-baseline">
                    <x-input id="domain" class="block mt-1 mr-2 w-full" type="text" name="domain" :value="old('domain')" required/>
                    .{{ config('tenancy.central_domains')[1] }}
                </div>

            </div>

            <!-- Name -->
            <div class="mt-2">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>




    </div><!-- #login-form -->

<div class="simple-page-footer">
	<p><a href="password-forget.html">FORGOT YOUR PASSWORD ?</a></p>
	<p>
		<small>Don't have an account ?</small>
		<a href="signup.html">CREATE AN ACCOUNT</a>
	</p>
</div><!-- .simple-page-footer -->


	</div><!-- .simple-page-wrap -->
</body>
</html>
