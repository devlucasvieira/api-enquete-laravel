@extends('layouts.user')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12 dash">
                <div class="panel panel-default">
                    <div class="panel-heading">Enquetes já criados</div>
                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <th scope="col">Enquete</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Opções</th>
                            </thead>
                            <tbody>
                                @foreach ($questionarios as $questionario)
                                    <tr>
                                        <td><a href="{{ route('questionario.show', $questionario->id) }}">{{$questionario->titulo}}</a></td>
                                        <td>{{$questionario->tipos->tipo}}</td>
                                        <td>
                                            <form id="form-delete{{$questionario->id}}" action="{{ route('questionario.destroy', $questionario->id) }}" method="POST">
                                                {{method_field('delete')}}
                                                {{ csrf_field() }}
                                                <input type="button" class="btn btn-danger" value="Excluir" onclick="really({{ $questionario->id }})">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach            
                            </tbody>    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Script - Deletar enquete -->
    <script language="javaScript" type="text/javascript">
        function really(id){
            event.preventDefault();

            const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger',
            },
            buttonsStyling: true
            })

            swalWithBootstrapButtons.fire({
            title: 'Deseja realmente excluir?',
            text: "Você não poderá revertar esta ação!",
            type: 'question',
            width: '35rem',
            showCancelButton: true,
            confirmButtonText: 'Sim, desejo excluir!',
            cancelButtonText: 'Não, cancelar!',
            reverseButtons: true
            }).then((result) => {
            if (result.value) {
                swalWithBootstrapButtons.fire(
                'Excluida!',
                'Sua enquete foi excluida com sucesso!.',
                'success'
                )
                document.getElementById('form-delete'+id).submit(); // Send - Excluir enquete.
            }
            })
        }
    </script>
</div>

@include('menu.users')
@endsection