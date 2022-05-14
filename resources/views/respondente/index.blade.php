@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 dash">
            <div class="panel panel-default">
                <div class="panel-heading">Enquetes</div>
                    <div class="panel-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <th scope="col">Título</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col"></th>
                                </thead>
                                <tbody>
                                    @foreach ($questionarios as $questionario)
                                        <tr>
                                            <td>{{$questionario->titulo}}</td>
                                            <td>{{$questionario->tipos->tipo}}</td>
                                            <td><a class="btn btn-info" href="{{ route('respondente.show', $questionario->id) }}">Responder enquete</a></td>
                                        </tr>
                                    @endforeach            
                                </tbody>    
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
