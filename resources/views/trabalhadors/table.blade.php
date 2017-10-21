<table class="table table-responsive" id="trabalhadors-table">
    <thead>
        <tr>
            <th>Nome</th>
        <th>Sexo</th>
        <th>Data Nascimento</th>
        <th>Telefone</th>
        <th>Endereco</th>
        <th>Foto</th>
        <th>Users Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($trabalhadors as $trabalhador)
        <tr>
            <td>{!! $trabalhador->nome !!}</td>
            <td>{!! $trabalhador->sexo !!}</td>
            <td>{!! $trabalhador->data_nascimento !!}</td>
            <td>{!! $trabalhador->telefone !!}</td>
            <td>{!! $trabalhador->endereco !!}</td>
            <td>{!! $trabalhador->foto !!}</td>
            <td>{!! $trabalhador->users_id !!}</td>
            <td>
                {!! Form::open(['route' => ['trabalhadors.destroy', $trabalhador->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('trabalhadors.show', [$trabalhador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('trabalhadors.edit', [$trabalhador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>