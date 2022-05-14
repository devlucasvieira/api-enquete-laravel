<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API ENQUETE</title>

        <!-- Menu - CSS -->
        <link href="{{ asset('css/menu.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <main>
            <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Início</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Registrar-se</a>
                    @endif
                </div>
            @endif
            </div>

            <!-- Botão - Abrir/Fechar menu Full-Screen -->
            <input type="checkbox" id="myInput">
            <label for="myInput">
                <span class="bar top"></span>
                <span class="bar middle"></span>
                <span class="bar bottom"></span>
            </label>
            
            <!-- Botão - Abrir/Fechar menu Full-Screen -->
            <h1>
                API Enquete
                <span> Integre, gerencie, transforme o mundo, através de enquetes </span>
            </h1>

            <!-- Menu - Fullscreen -->            
            <aside>
                <div class="aside-section aside-left">
                <div class="aside-content">
                    @if (Auth::guest())
                        <p> Bem vindo! Faça login ou registre para gerenciar enquetes! </p>
                            <li class="rm-list"><a href="{{ route('login') }}" class="button-link">Login</a></li>
                            <li class="rm-list"><a href="{{ route('register') }}" class="button-link">Criar conta</a></li>
                        <p> Se quiser apenas responder, venha por aqui</p>
                            <li class="rm-list"><a href="{{ route('respondente.index') }}" class="button-link">Responder Enquetes</a></li>
                        @else
                            <p> Bem vindo! Gerencie suas enquetes </p>
                            <li class="rm-list">
                                <a href="{{ route('home') }}" class="dropdown-toggle button-link" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Home <span class="caret"></span>
                                </a>
                            </li>
                            <li class="rm-list"> 
                                <a href="{{ route('logout') }}" class="button-link"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                            </li>                            
                        </li>
                    @endif
                </div>
                </div>
                <!-- Início - DIV - Opções do menu fullscreen -->
                <div class="aside-section aside-right">
                    <ul class="aside-list">
                        <li><a href="{{ url('/docs') }}" class="aside-anchor">Documentação</a></li>
                        <li><a href="{{ url('/tech') }}" class="aside-anchor">Tecnologias</a></li>
                        <li><a href="{{ url('/orientador') }}" class="aside-anchor">Orientador</a></li>
                        <li><a href="{{ url('/devs') }}" class="aside-anchor">Desenvolvedores</a></li>
                        <li><a target="_blank" href="https://github.com/nandoluz/API-Rest-Enquete-Laravel-PHP-JavaScript-MySql-" class="aside-anchor">GitHub</a></li>
                    </ul>
                </div>
                <!-- Fim - DIV - Opções do menu fullscreen -->
            </aside>
        </main>
    </body>
</html>
