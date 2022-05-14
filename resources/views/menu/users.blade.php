<nav class="main-menu">
        <div>
            <a class="logo" href=""> </a> 
        </div> 
        <div class="settings"></div>
        <div class="scrollbar" id="style-1">
        <ul>
            <li>                                   
                <a href="{{ route('home') }}">
                <i class="fa fa-home fa-lg"></i>
                <span class="nav-text">Início</span>
                </a>
            </li>   

            <li>                                 
                <a href="{{ route('usuario.perfil') }}">
                <i class="fa fa-user fa-lg"></i>
                    <span class="nav-text">Perfil: {{ Auth::user()->name }}</span>
                </a>
            </li>   
                            
            <li class="darkerlishadow">
                <a href="{{ route('questionario.create') }}">
                <i class="fa fa-lightbulb-o fa-lg"></i>
                <span class="nav-text"> Criar - Enquete </span>
                </a>
            </li>

            <li class="darkerli">
                <a href="{{ route('questionario.index') }}">
                <i class="fa fa-lightbulb-o fa-lg"></i>
                <span class="nav-text"> Alterar - Enquete(s) </span>
                </a>
            </li>

            <li class="darkerli">
                <a href="{{ route('questionario.index') }}">
                <i class="fa fa-lightbulb-o fa-lg"></i>
                <span class="nav-text"> Excluir - Enquete(s) </span>
                </a>
            </li>

            <li class="darkerli">
                <a href="{{ route('questionario.index') }}">
                <i class="fa fa-lightbulb-o fa-lg"></i>
                <span class="nav-text"> Listar - Enquete(s) </span>
                </a>
            </li>

            <li class="darkerli">
                <a href="{{ route('tipo.create') }}">
                <i class="fa fa-archive fa-lg"></i>
                <span class="nav-text"> Criar - Modelo de enquete</span>
                </a>
            </li>

            <li class="darkerli">
                <a href="{{ route('tipo.index') }}">
                <i class="fa fa-archive fa-lg"></i>
                <span class="nav-text"> Alterar - Modelo de enquete</span>
                </a>
            </li>
            
            <li class="darkerli">
                <a href="{{ route('tipo.index') }}">
                <i class="fa fa-archive fa-lg"></i>
                <span class="nav-text"> Excluir - Modelo de enquete</span>
                </a>
            </li>

            <li class="darkerli">
                <a href="{{ route('tipo.index') }}">
                <i class="fa fa-archive fa-lg"></i>
                <span class="nav-text"> Listar - Tipo de enquete</span>
                </a>
            </li>

            <li class="darkerli">
                <a href="{{ route('token') }}">
                <i class="fa fa-plane fa-lg"></i>
                <span class="nav-text">Gerenciar - Token</span>
                </a>
            </li>

            <li class="darkerli">
                <a href="{{ route('integracao') }}">
                <i class="fa fa-plane fa-lg"></i>
                <span class="nav-text">Integração</span>
                </a>
            </li>
        </ul>

        <li>                                
            <a href="{{ route('docs') }}">
            <i class="fa fa-question-circle fa-lg"></i>
            <span class="nav-text">Docs</span>
            </a>            
        </li>   
                
        <ul class="logout">
            <li>
                <a href="{{ route('tech') }}">
                    <i class="fa fa-lightbulb-o fa-lg"></i>
                    <span class="nav-text">Desenvolvimento</span>                            
                </a>
            </li>  

            <li> 
                <a href="{{ route('logout') }}" class="button-link"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fa fa-lightbulb-o fa-lg"></i>
                        <span class="nav-text">Sair</span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>       
        </ul>
    </nav>