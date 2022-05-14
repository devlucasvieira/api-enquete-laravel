@extends ('layouts.user')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 dash">
            <div class="panel panel-default">
                <div class="panel-heading">Integração</div>
                    <div class="panel-body" style="min-height: 5rem;">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                <label for="linkCall">Você pode chamar sua enquete usando o link abaixo</label>
                            <input class="form-control" type="text" name="desabled" id="linkCall" value="http://127.0.0.1:8000/api/questionario/{{ Auth::user()->client_token }}/( ID DO SEU QUESTIONARIO )">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function ocultarVizualizar() {
    var x = document.getElementById("viewOcultar");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }
</script>
@include ('menu.users')
@endsection