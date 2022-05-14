@extends ('layouts.user')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 dash">
            <div class="panel panel-default">
                <div class="panel-heading">Gerenciar - Token</div>
                    <div class="panel-body" style="min-height: 5rem;">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h6>Seu Token: </h6><div id="viewOcultar" style="display: none;"> {{ Auth::user()->client_token }} </div> 
                                </div>
                                <div class="col col-lg-2">
                                    <button class="btn btn-warning" onclick="ocultarVizualizar()"> Vizualizar/Ocultar Token </button>
                                </div>
                                <div class="col col-lg-2">
                                    <form action=" {{ url('newtoken') }} " method="post">{{ csrf_field() }} {{ method_field('PUT')}}<button type="submit" class="btn btn-info">Novo Token</button></form>
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