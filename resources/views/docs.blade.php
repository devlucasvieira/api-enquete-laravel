@if (Auth::guest())
    @include('layouts.app')
    <div class="container bg-default" style="padding: 2rem">
        <div class="row center-block col-sm-12">
            <div class="container col-sm-12">
                <h1>Documentação do Projeto</h1>
                <hr>

                <p></p>
                
            </div>
        </div>
        <hr>
    </div>
@else
    @include ('layouts.user')
    @section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 dash">
                <div class="panel panel-default">
                    <div class="panel-heading">Documentação do Projeto</div>
                        <div class="panel-body" style="min-height: 10rem;">

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
@endif