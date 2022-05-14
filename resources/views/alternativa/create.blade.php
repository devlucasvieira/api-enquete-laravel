<form method="POST" action="{{ route('alternativa.store') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="form-group col-sm-10">
                <label for="tituloInput">Nova da Alternativa:</label>
            <input type="text" class="form-control" id="tituloInput" name="titulo" autofocus>
            <small class="form-text text-muted" id="tituloHelp">Informe uma possivel resposta <i>(Ex: A afirmação é verdadeira)</i></small>
        </div>
        <div class="col-sm-2">
            <label for="descricaoTextarea">&nbsp;</label><br>
            <button class="btn btn-success">Adicionar</button>
        </div>
    </div>
    <input type="hidden" name="questionarios_id" value="{{ $questionario->id }}">                
</form>