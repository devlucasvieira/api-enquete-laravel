@extends ('layouts.user')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 dash">
            <div class="panel panel-default">
                <div class="panel-heading">Nova Enquete</div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('questionario.store') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="tituloInput">Enquete:</label>
                                <input type="text" class="form-control" id="tituloInput" name="titulo" required autofocus>
                                <small class="form-text text-muted" id="tituloHelp">Informe o que você deseja questionar <i>(Ex: Quem descobriu o Brasil?)</i></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="tipoSelect">Tipo:</label>
                                <select class="form-control" name="tipos_id" id="tipoSelect" required>
                                    <option value="" disabled selected>Selecione</option>
                                        @foreach ($tipos as $tipo)
                                            <option value="{{ $tipo->id }}">{{ $tipo->tipo }}</option>
                                        @endforeach
                                </select>
                                <small class="form-text text-muted" id="tipoHelp">Selecione o tipo de questinário que deseja criar.</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descricaoTextarea">Sobre a enquete:</label>
                            <textarea name="descricao" id="descricaoTextarea" col="3" rows="4" class="form-control"></textarea>
                            <small class="form-text text-muted" id="tituloHelp">Breve descrição sobre o seu questionário <i>(191 caracteres)</i></small>
                        </div>
                        <input type="hidden" name="users_id" value="{{ Auth::id() }}">
                        <button class="btn btn-primary">Cadastrar</button>
                    </form> 
                </div> 
            </div> 
        </div>
    </div>
@include ('menu.users')
@endsection