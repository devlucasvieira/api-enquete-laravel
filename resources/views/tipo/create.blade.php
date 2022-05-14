@extends ('layouts.user')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 dash">
            <div class="panel panel-default">
                <div class="panel-heading">Novo - Tipo de enquete</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('tipo.store') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="tipoInput">Tipo da Enquete:</label>
                                <input type="text" class="form-control" id="tipoInput" name="tipo" required autofocus>
                                <small class="form-text text-muted" id="tipoHelp">Qual o tipo da sua enquete<i>(Ex: Multipla escolha)</i></small>
                            </div>
                            <div class="form-group">
                                <label for="descricaoTextarea">Descrição:</label>
                                <textarea name="descricao" id="descricaoTextarea"  rows="4" class="form-control"></textarea>
                                <small class="form-text text-muted" id="descricaoHelp">Breve descrição sobre o tipo da enquete</small>
                            </div>
                            <button class="btn btn-primary">Cadastrar</button>
                        </form>   
                    </div>
                </div>
            </div>
        </div>            
    </div>
</div>
@include ('menu.users')
@endsection