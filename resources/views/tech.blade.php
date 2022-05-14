@if (Auth::guest())
    @include('layouts.app')
    <div class="container bg-default" style="padding: 2rem">
        <div class="row center-block col-sm-12">
            <div class="container col-sm-4" style="margin-top: 5%; margin-bottom: 5%;">
                <img src="{!! URL::asset('img/laravel.png') !!}" alt="laravel" style="width: 200px;">
            </div>
            <div class="container col-sm-8">
                <h2>Laravel 5.4</h2>
                <p>                
                    <strong>Descrição:</strong> <br>
                    <p>Laravel é um framework PHP 
                    livre e open-source criado por Taylor B. Otwell para o desenvolvimento de sistemas web que utilizam o padrão <strong>MVC</strong> (model, view, controller). 
                    Algumas características proeminentes do Laravel são sua sintaxe simples e concisa, um sistema modular com gerenciador de dependencias dedicado, 
                    várias formas de acesso a banco de dados relacionais e vários utilitários indispensáveis no auxílio ao desenvolvimento e manutenção de sistemas.</p>
                </p>
                <a href="https://pt.wikipedia.org/wiki/Laravel" target="_blank">referência</a>
            </div>
        </div>
        <hr>
    </div>
    <br>
    <div class="container bg-default" style="padding: 2rem">
        <div class="row center-block col-sm-12">
            <div class="container col-sm-4" style="margin-top: 5%; margin-bottom: 5%;">
                <img src="{!! URL::asset('img/php.png') !!}" alt="php" style="width: 200px;">
            </div>
            <div class="container col-sm-8">
                <h2>PHP</h2>
                <p>                
                    <strong>Descrição:</strong> <br>
                    <p>PHP (um acrônimo recursivo para "PHP: Hypertext Preprocessor", originalmente Personal Home Page) é uma linguagem interpretada livre, usada originalmente 
                    apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor, capazes de gerar conteúdo dinâmico na World Wide Web.[3] Figura entre 
                    as primeiras linguagens passíveis de inserção em documentos HTML, dispensando em muitos casos o uso de arquivos externos para eventuais processamentos de dados. 
                    O código é interpretado no lado do servidor pelo módulo PHP, que também gera a página web a ser visualizada no lado do cliente.</p>
                </p>
                <a href="https://pt.wikipedia.org/wiki/PHP" target="_blank">referência</a>
            </div>
        </div>
        <hr>
    </div>
    <br>
    <div class="container bg-default" style="padding: 2rem">
        <div class="row center-block col-sm-12">
            <div class="container col-sm-4" style="margin-top: 5%; margin-bottom: 5%;">
                <img src="{!! URL::asset('img/composer.png') !!}" alt="composer" style="width: 200px;">
            </div>
            <div class="container col-sm-8">
                <h2>Composer</h2>
                <p>                
                    <strong>Descrição:</strong> <br>
                    <p>O Composer é um gerenciador de pacotes em nível de aplicativo para a linguagem de programação PHP que fornece um formato padrão para gerenciar dependências do 
                    software PHP e bibliotecas necessárias . Foi desenvolvido por Nils Adermann e Jordi Boggiano, que continuam a gerenciar o projeto. Eles começaram o desenvolvimento 
                    em abril de 2011 e o lançaram pela primeira vez em 1º de março de 2012. O Composer é fortemente inspirado no " npm " do Node.js. e no " bundler " de Ruby. 
                    O algoritmo de solução de dependência do projeto começou como uma porta baseada em PHP do libzypp satsolver do openSUSE .</p>
                </p>
                <a href="https://en.wikipedia.org/wiki/Composer_(software)" target="_blank">referência</a>
            </div>
        </div>
        <hr>
    </div>
    <br>
    <div class="container bg-default" style="padding: 2rem">
        <div class="row center-block col-sm-12">
            <div class="container col-sm-4" style="margin-top: 5%; margin-bottom: 5%;">
                <img src="{!! URL::asset('img/javascript.png') !!}" alt="javascript" style="width: 200px;">
            </div>
            <div class="container col-sm-8">
                <h2>Javascript</h2>
                <p>                
                    <strong>Descrição:</strong> <br>
                    <p>JavaScript (frequentemente abreviado como JS) é uma linguagem de programação interpretada estruturada, de script em alto nível com tipagem dinâmica fraca e 
                    multi-paradigma (protótipos, orientado a objeto, imperativo e, funcional). Juntamente com HTML e CSS, o JavaScript é uma das três principais tecnologias 
                    da World Wide Web. JavaScript permite páginas da Web interativas e, portanto, é uma parte essencial dos aplicativos da web. A grande maioria dos sites usa, e todos 
                    os principais navegadores têm um mecanismo JavaScript dedicado para executá-lo.</p>
                </p>
                <a href="https://pt.wikipedia.org/wiki/JavaScript" target="_blank">referência</a>
            </div>
        </div>
        <hr>
    </div>
    <br>
    <div class="container bg-default" style="padding: 2rem">
        <div class="row center-block col-sm-12">
            <div class="container col-sm-4" style="margin-top: 5%; margin-bottom: 5%;">
                <img src="{!! URL::asset('img/html5.png') !!}" alt="html 5" style="width: 200px;">
            </div>
            <div class="container col-sm-8">
                <h2>HTML 5</h2>
                <p>                
                    <strong>Descrição:</strong> <br>
                    <p>HTML (abreviação para a expressão inglesa HyperText Markup Language, que significa Linguagem de Marcação de Hipertexto) é uma linguagem de marcação utilizada na 
                    construção de páginas na Web. Documentos HTML podem ser interpretados por navegadores. A tecnologia é fruto da junção entre os padrões HyTime e SGML.</p>
                </p>
                <a href="https://pt.wikipedia.org/wiki/HTML" target="_blank">referência</a>
            </div>
        </div>
        <hr>
    </div>
    <br>
    <div class="container bg-default" style="padding: 2rem;margin-bottom:2rem;">
        <div class="row center-block col-sm-12">
            <div class="container col-sm-4" style="margin-top: 5%; margin-bottom: 5%;">
                <img src="{!! URL::asset('img/css.png') !!}" alt="css" style="width: 200px;">
            </div>
            <div class="container col-sm-8">
                <h2>CSS 3</h2>
                <p>                
                    <strong>Descrição:</strong> <br>
                    <p>Cascading Style Sheets (CSS) é um mecanismo para adicionar estilo (cores, fontes, espaçamento, etc.) a um documento web.
                    O código CSS pode ser aplicado diretamente nas tags ou ficar contido dentro das tags style. Também é possível, em vez de colocar a formatação dentro do 
                    documento, criar um link para um arquivo CSS que contém os estilos. Assim, quando se quiser alterar a aparência dos documentos vinculados a este arquivo CSS, basta modifica-lo.</p>
                </p>
                <a href="https://pt.wikipedia.org/wiki/Cascading_Style_Sheets" target="_blank">referência</a>
            </div>
        </div>
        <hr>
    </div>
@else
    @include ('layouts.user')
    @section ('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 dash">
                <div class="panel panel-default">
                    <div class="panel-heading">Tecnologias</div>
                        <div class="panel-body" style="min-height: 10rem;">
                            <div class="container" style="padding: 2rem">
                                <div class="row center-block col-sm-12">
                                    <div class="container col-sm-4" style="margin-top: 5%; margin-bottom: 5%;">
                                        <img src="{!! URL::asset('img/laravel.png') !!}" alt="laravel" style="width: 200px;">
                                    </div>
                                    <div class="container col-sm-8">
                                        <h2>Laravel 5.4</h2>
                                        <p>                
                                            <strong>Descrição:</strong> <br>
                                            <p>Laravel é um framework PHP 
                                            livre e open-source criado por Taylor B. Otwell para o desenvolvimento de sistemas web que utilizam o padrão <strong>MVC</strong> (model, view, controller). 
                                            Algumas características proeminentes do Laravel são sua sintaxe simples e concisa, um sistema modular com gerenciador de dependencias dedicado, 
                                            várias formas de acesso a banco de dados relacionais e vários utilitários indispensáveis no auxílio ao desenvolvimento e manutenção de sistemas.</p>
                                        </p>
                                        <a href="https://pt.wikipedia.org/wiki/Laravel" target="_blank">referência</a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <br>
                            <div class="container" style="padding: 2rem">
                                <div class="row center-block col-sm-12">
                                    <div class="container col-sm-4" style="margin-top: 5%; margin-bottom: 5%;">
                                        <img src="{!! URL::asset('img/php.png') !!}" alt="php" style="width: 200px;">
                                    </div>
                                    <div class="container col-sm-8">
                                        <h2>PHP</h2>
                                        <p>                
                                            <strong>Descrição:</strong> <br>
                                            <p>PHP (um acrônimo recursivo para "PHP: Hypertext Preprocessor", originalmente Personal Home Page) é uma linguagem interpretada livre, usada originalmente 
                                            apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor, capazes de gerar conteúdo dinâmico na World Wide Web.[3] Figura entre 
                                            as primeiras linguagens passíveis de inserção em documentos HTML, dispensando em muitos casos o uso de arquivos externos para eventuais processamentos de dados. 
                                            O código é interpretado no lado do servidor pelo módulo PHP, que também gera a página web a ser visualizada no lado do cliente.</p>
                                        </p>
                                        <a href="https://pt.wikipedia.org/wiki/PHP" target="_blank">referência</a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <br>
                            <div class="container" style="padding: 2rem">
                                <div class="row center-block col-sm-12">
                                    <div class="container col-sm-4" style="margin-top: 5%; margin-bottom: 5%;">
                                        <img src="{!! URL::asset('img/composer.png') !!}" alt="composer" style="width: 200px;">
                                    </div>
                                    <div class="container col-sm-8">
                                        <h2>Composer</h2>
                                        <p>                
                                            <strong>Descrição:</strong> <br>
                                            <p>O Composer é um gerenciador de pacotes em nível de aplicativo para a linguagem de programação PHP que fornece um formato padrão para gerenciar dependências do 
                                            software PHP e bibliotecas necessárias . Foi desenvolvido por Nils Adermann e Jordi Boggiano, que continuam a gerenciar o projeto. Eles começaram o desenvolvimento 
                                            em abril de 2011 e o lançaram pela primeira vez em 1º de março de 2012. O Composer é fortemente inspirado no " npm " do Node.js. e no " bundler " de Ruby. 
                                            O algoritmo de solução de dependência do projeto começou como uma porta baseada em PHP do libzypp satsolver do openSUSE .</p>
                                        </p>
                                        <a href="https://en.wikipedia.org/wiki/Composer_(software)" target="_blank">referência</a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <br>
                            <div class="container" style="padding: 2rem">
                                <div class="row center-block col-sm-12">
                                    <div class="container col-sm-4" style="margin-top: 5%; margin-bottom: 5%;">
                                        <img src="{!! URL::asset('img/javascript.png') !!}" alt="javascript" style="width: 200px;">
                                    </div>
                                    <div class="container col-sm-8">
                                        <h2>Javascript</h2>
                                        <p>                
                                            <strong>Descrição:</strong> <br>
                                            <p>JavaScript (frequentemente abreviado como JS) é uma linguagem de programação interpretada estruturada, de script em alto nível com tipagem dinâmica fraca e 
                                            multi-paradigma (protótipos, orientado a objeto, imperativo e, funcional). Juntamente com HTML e CSS, o JavaScript é uma das três principais tecnologias 
                                            da World Wide Web. JavaScript permite páginas da Web interativas e, portanto, é uma parte essencial dos aplicativos da web. A grande maioria dos sites usa, e todos 
                                            os principais navegadores têm um mecanismo JavaScript dedicado para executá-lo.</p>
                                        </p>
                                        <a href="https://pt.wikipedia.org/wiki/JavaScript" target="_blank">referência</a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <br>
                            <div class="container" style="padding: 2rem">
                                <div class="row center-block col-sm-12">
                                    <div class="container col-sm-4" style="margin-top: 5%; margin-bottom: 5%;">
                                        <img src="{!! URL::asset('img/html5.png') !!}" alt="html 5" style="width: 200px;">
                                    </div>
                                    <div class="container col-sm-8">
                                        <h2>HTML 5</h2>
                                        <p>                
                                            <strong>Descrição:</strong> <br>
                                            <p>HTML (abreviação para a expressão inglesa HyperText Markup Language, que significa Linguagem de Marcação de Hipertexto) é uma linguagem de marcação utilizada na 
                                            construção de páginas na Web. Documentos HTML podem ser interpretados por navegadores. A tecnologia é fruto da junção entre os padrões HyTime e SGML.</p>
                                        </p>
                                        <a href="https://pt.wikipedia.org/wiki/HTML" target="_blank">referência</a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <br>
                            <div class="container" style="padding: 2rem;margin-bottom:2rem;">
                                <div class="row center-block col-sm-12">
                                    <div class="container col-sm-4" style="margin-top: 5%; margin-bottom: 5%;">
                                        <img src="{!! URL::asset('img/css.png') !!}" alt="css" style="width: 200px;">
                                    </div>
                                    <div class="container col-sm-8">
                                        <h2>CSS 3</h2>
                                        <p>                
                                            <strong>Descrição:</strong> <br>
                                            <p>Cascading Style Sheets (CSS) é um mecanismo para adicionar estilo (cores, fontes, espaçamento, etc.) a um documento web.
                                            O código CSS pode ser aplicado diretamente nas tags ou ficar contido dentro das tags style. Também é possível, em vez de colocar a formatação dentro do 
                                            documento, criar um link para um arquivo CSS que contém os estilos. Assim, quando se quiser alterar a aparência dos documentos vinculados a este arquivo CSS, basta modifica-lo.</p>
                                        </p>
                                        <a href="https://pt.wikipedia.org/wiki/Cascading_Style_Sheets" target="_blank">referência</a>
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
@include ('menu.users')
@endsection
@endif