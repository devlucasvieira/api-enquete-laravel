@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 dash">
            <div class="panel panel-default">
                <div class="panel-heading">Enquete: {{ $questionario->titulo }} </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('respondente.store') }}">
                                {{ csrf_field() }}
                            <div class="form-group col-sm-6">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome" required autofocus>
                                <small class="form-text text-muted" id="nome">Informe seu nome</i></small>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" name="email" id="email" required>
                            </div>
                            <table class="table table-striped table-hover">
                            <thead>
                                <th scope="col">Responda</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($alternativas as $alternativa)
                                <tr>
                                    <td>{{$alternativa->titulo}}</td>
                                    <td><input type="radio" name="alternativas_id" value="{{ $alternativa->id }}"></td>       
                                </tr>
                                @endforeach
                            </tbody>    
                            </table>
                            <button class="btn btn-primary" onclick="cadastro()">Responder enquete</button>   
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script language="javaScript" type="text/javascript">
        function cadastro(){
            Swal.fire(
            'Enquete votada com sucesso!',
            'Em alguns segundos será redirecionado.',
            'success'
            )
        }
    </script>
@endsection