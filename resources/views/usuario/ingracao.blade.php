<div class="container col-lg-12">
    <div class="col-lg-10">
        <label for="linkCall">Você pode chamar sua enquete usando o link abaixo</label>
        <input class="form-control" type="text" name="desabled" id="linkCall" value="http://127.0.0.1:8000/api/questionario/{{ Auth::user()->client_token }}/( ID DO SEU QUESTIONARIO )">
    </div>
</div>