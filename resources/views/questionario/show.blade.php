@extends ('layouts.user')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 dash">
            <div class="panel panel-default">
                <div class="panel-heading">Alterar Enquete</div>
                    <div class="panel-body">
                        <br>
                        <label>Titulo</label>
                        <br>
                        {{ $questionario->titulo }}
                        <br>
                        <label>Descrição</label>
                        <br>
                        {{ $questionario->descricao }}
                        <br>
                        <label>Tipo</label>
                        <br>
                        {{$questionario->tipos->tipo}}
                        <hr>
                        @include('alternativa.index')
                        <div class="container">
                            <a href=" {{ route('questionario.index') }}" class="btn btn-default flex-row">Voltar</a>
                            <a href="{{ route('questionario.edit', $questionario->id) }}" class="btn btn-primary">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include ('menu.users')
@endsection