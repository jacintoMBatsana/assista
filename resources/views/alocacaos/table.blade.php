<table class="table table-responsive" id="alocacaos-table">
    <thead>
        <tr>
            <th>Nome</th>
        <th>Projectos Id</th>
        <th>Trabalhadores Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($alocacaos as $alocacaos)
        <tr>
            <td>{!! $alocacaos->nome !!}</td>
            <td>{!! $alocacaos->projectos_id !!}</td>
            <td>{!! $alocacaos->trabalhadores_id !!}</td>
            <td>
                {!! Form::open(['route' => ['alocacaos.destroy', $alocacaos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('alocacaos.show', [$alocacaos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('alocacaos.edit', [$alocacaos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>