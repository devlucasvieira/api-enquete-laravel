@include('layouts.app')
    <div class="container text-center" style="padding: 2rem; margin-top: 15%;">
        <img src="{{ asset('img/404.png') }}" alt="pagina não encontrada">
        <br>
        <br>
        <a href="{{ route('home') }}" class="btn btn-primary" style="margin-top: 4rem">Voltar ao inicio</a>
    </div>
