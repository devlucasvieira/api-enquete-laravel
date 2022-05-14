@include('layouts.app')
<div class="container">
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
    <br>
    <a href=" {{ route('questionario.index') }}" class="btn btn-default flex-row">Voltar</a>
    <a href="{{ route('questionario.edit', $questionario->id) }}" class="btn btn-primary">Editar</a>
</div>