<div class="container bg-default">
    @include('alternativa.create')
    <div class="row col-sm-12 text-center">
        <h2>Alternativas já criadas</h2>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <th scope="col" class="col-sm-1">Apagar</th>
            <th scope="col" class="col-sm-11">Titulo</th>
        </thead>
        <tbody>
            @foreach ($alternativas as $alternativa)
            <tr>
                <td>
                    <form id="form-delete{{$alternativa->id}}" action="{{ route('alternativa.destroy', $alternativa->id) }}" method="POST">
                            {{method_field('delete')}}
                            {{ csrf_field() }}
                            <input type="button" class="btn btn-danger" value="x" onclick="really({{ $alternativa->id }})">
                        </form>
                    </td>
                    
                    <td>{{$alternativa->titulo}}</td>
                </tr>
            @endforeach
        </tbody>    
    </table>
</div>

<script language="javaScript" type="text/javascript">
    function really(id){
        event.preventDefault();
        if(confirm('Deseja excluir esta alternativa?')){
            document.getElementById('form-delete'+id).submit();
        }
    }
</script>