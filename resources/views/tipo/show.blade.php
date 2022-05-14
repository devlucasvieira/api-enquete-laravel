@extends ('layouts.user')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 dash">
            <div class="panel panel-default">
                <div class="panel-heading">Tipo de enquete</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="tipo">Tipo: </label>
                            <p> {{ $tipo->tipo }} </p>
                        </div>
                        <div class="form-group">
                            <label for="tipo">Descrição: </label>
                            <p> {{ $tipo->descricao }}</p>
                        </div>
                        <a href=" {{ route('tipo.index') }}" class="btn btn-default flex-row">Voltar</a>
                        <a href="{{ route('tipo.edit', $tipo->id) }}" class="btn btn-primary">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include ('menu.users')
@endsection
