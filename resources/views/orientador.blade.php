@if (Auth::guest())
    @include('layouts.app')
    <div class="container bg-default" style="padding: 2rem">
        <div class="row center-block col-sm-12">
            <div class="container col-sm-3">
                <img src="{!! URL::asset('img/evagelista.jpg') !!}" alt="Foto de João Evangelista" style="width: 200px; border-radius: 50%;">
            </div>
            <div class="container col-sm-9">
                <h2>João Evangelista</h2>
                <p>                
                    <strong>Disciplina:</strong> Apicações Web <br>
                    <strong>href:</strong> Brasília/DF
                </p>
            </div>
        </div>
        <hr>
    </div>
@else
    @include ('layouts.user')
    @section ('content')
    <div class="container bg-default" style="padding: 2rem">
        <div class="row center-block col-sm-12">
            <div class="container col-sm-3">
                <img src="{!! URL::asset('img/evagelista.jpg') !!}" alt="Foto de João Evangelista" style="width: 200px; border-radius: 50%;">
            </div>
            <div class="container col-sm-9">
                <h2>João Evangelista</h2>
                <p>                
                    <strong>Disciplina:</strong> Apicações Web <br>
                    <strong>href:</strong> Brasília/DF
                </p>
            </div>
        </div>
        <hr>
    </div>
@endif