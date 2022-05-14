@include('layouts.app')
<form method="POST" action=" {{ route('questionario.update', $questionario->id) }}">
    <div class="container">
        <a href="javascript:history.go(-1)" class="btn btn-default flex-row">Voltar</a>
        <button class="btn btn-primary">Salvar Alteração</button>
        <br>
        <br>
    </div>
    <div class="container bg-default">
        <br>
        {{ method_field('PUT')}}
        {{ csrf_field() }}
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="tituloInput">Título do Questionário:</label>
                <input type="text" class="form-control" id="tituloInput" name="titulo" value="{{ $questionario->titulo }}" required autofocus>
                <small class="form-text text-muted" id="tituloHelp">Informe o que você deseja questionar <i>(Ex: Quem descobriu o Brasil?)</i></small>
            </div>
            <div class="form-group col-sm-6">
                <label for="tipoSelect">Tipo:</label>
                <select class="form-control" name="tipos_id" id="tipoSelect" required>
                    <option value="" disabled>Selecione</option>
                    @foreach ($tipos as $tipo)
                        <option value="{{ $tipo->id }}" @if($questionario->tipos->id == $tipo->id) selected @endif>{{ $tipo->tipo }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted" id="tipoHelp">Selecione o tipo de questinário que deseja criar.</small>
            </div>
        </div>
        <div class="form-group">
            <label for="descricaoTextarea">Descrição:</label>
            <textarea name="descricao" id="descricaoTextarea"  rows="4" class="form-control">{{ $questionario->descricao }}</textarea>
            <small class="form-text text-muted" id="tituloHelp">Breve descrição sobre o seu questionário <i>(191 caracteres)</i></small>
        </div>
        <input type="hidden" name="users_id" value="{{ $questionario->users_id }}">
    </form>    
    <br>
</div>