<table class="table table-responsive" id="evolucoes-table">
    <thead>
        <tr>
            <th>Tamano In</th>
        <th>Tamanho Fin</th>
        <th>Data Avaliacao</th>
        <th>Descricao</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($evolucoes as $evolucoes)
        <tr>
            <td>{!! $evolucoes->tamano_in !!}</td>
            <td>{!! $evolucoes->tamanho_fin !!}</td>
            <td>{!! $evolucoes->data_avaliacao !!}</td>
            <td>{!! $evolucoes->descricao !!}</td>
            <td>
                {!! Form::open(['route' => ['evolucoes.destroy', $evolucoes->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('evolucoes.show', [$evolucoes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('evolucoes.edit', [$evolucoes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>