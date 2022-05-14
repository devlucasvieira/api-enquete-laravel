<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet"/>
   
    <!-- Customização - Geral do Tema -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <script src="{{ asset('js/login.js') }}"></script>

    <script>
        window.onload = function () {
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
        
        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

    };
    </script>
    
    <style>
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'API Enquete') }} 
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right"> 
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            @if (Route::getCurrentRoute()->getName() != 'home')
                                <li>
                                    <a href=" {{ route('home') }} ">Home</a>    
                                </li>
                            @endif
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li> 
                                        <a href="{{ url('questionario') }}">
                                            Questionários
                                        </a>
                                    </li>
                                    <li> 
                                        <a href="{{ url('tipo') }}">
                                            Tipos de Enquete
                                        </a>
                                    </li>
                                    <li> 
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container-login right-panel-active" id="container">
        <div class="form-container sign-up-container">
        <!-- Início do formulário de registro -->
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <h1>Criar conta</h1>
                <span>Utilize seu email para registrar-se</span>

                <input id="name" type="text" name="name" placeholder="Nome" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif

                <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                <input type="password" name="password" placeholder="Senha" required/>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                <input id="password-confirm" type="password" placeholder="Confirme sua senha" name="password_confirmation" required><br/>
                <button type="submit">Criar conta</button>
            </form>
        </div>

        <div class="form-container sign-in-container">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                
                <h1>Login</h1>
                <span>Já se registrou? Faça login!</span>
                <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                
                <input type="password"name="password" placeholder="Senha" required/>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                <a href="#">Esqueceu sua senha?</a>
                <button>Login</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bem vindo de volta!</h1>
                    <p>Por favor, realize o login para gerenciar suas enquetes</p>
                    <button class="ghost" id="signIn">Login</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Olá, seja bem vindo!</h1>
                    <p>Comece por aqui para criar suas primeiras enquetes em nossa plataforma</p>
                    <button class="ghost" id="signUp">Registrar-se</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
