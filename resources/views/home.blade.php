@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 dash">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                        <div class="panel-body">
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif
                            <br>
                            
                            <div class="container col-sm-12">
                                <?php
                                    $qtd_questionario = 0;
                                ?>
                                
                                @foreach ($questionarios as $questionario)
                                <?php
                                    $qtd_questionario++;
                                ?>
                                @endforeach

                                <div class="col-sm-8">
                                    <h6><strong>Questionarios criados: </strong> {{ $qtd_questionario }}</h6> 
                                </div>

                                <div class="col-sm-4">
                                    <a href="{{ route('questionario.index') }}" class="btn btn-success">Ver Lista</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include ('menu.users')
@endsection