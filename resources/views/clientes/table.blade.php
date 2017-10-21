<table class="table table-responsive" id="clientes-table">
    <thead>
        <tr>
            <th>Nome</th>
        <th>Nuit</th>
        <th>Telefone</th>
        <th>Endereco</th>
        <th>Foto</th>
        <th>Tipo Cliente</th>
        <th>Users Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clientes as $cliente)
        <tr>
            <td>{!! $cliente->nome !!}</td>
            <td>{!! $cliente->nuit !!}</td>
            <td>{!! $cliente->telefone !!}</td>
            <td>{!! $cliente->endereco !!}</td>
            <td>{!! $cliente->foto !!}</td>
            <td>{!! $cliente->tipo_cliente !!}</td>
            <td>{!! $cliente->users_id !!}</td>
            <td>
                {!! Form::open(['route' => ['clientes.destroy', $cliente->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('clientes.show', [$cliente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('clientes.edit', [$cliente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>