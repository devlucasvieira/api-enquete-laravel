@extends ('layouts.user')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 dash">
            <div class="panel panel-default">
                <div class="panel-heading">Novo - Tipo de enquete</div>
                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <th scope="col">Titulo</th>
                                <th scope="col">Alterar</th>
                                <th scope="col">Apagar</th>
                            </thead>
                            <tbody>
                                @foreach ($tipos as $tipo)
                                    <tr>
                                        <td><a href="{{ route('tipo.show', $tipo->id) }}">{{$tipo->tipo}}</a></td>
                                        <td><a class="btn btn-warning" href="{{ route('tipo.show', $tipo->id) }}">Alterar</a></td>
                                        <td>
                                            <form id="form-delete{{$tipo->id}}" action="{{ route('tipo.destroy', $tipo->id) }}" method="POST">
                                                {{method_field('delete')}}
                                                <input type="button" class="btn btn-danger" value="Excluir" onclick="really({{ $tipo->id }})">
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
                'Seu tipo de enquete foi excluido com sucesso!.',
                'success'
                )
                document.getElementById('form-delete'+id).submit(); // Send - Excluir enquete.
            }
            })
        }
    </script>
@include('menu.users')
@endsection