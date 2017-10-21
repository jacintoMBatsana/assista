<table class="table table-responsive" id="perfils-table">
    <thead>
        <tr>
            <th>Descricao</th>
        <th>Trabalhadores Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($perfils as $perfil)
        <tr>
            <td>{!! $perfil->descricao !!}</td>
            <td>{!! $perfil->trabalhadores_id !!}</td>
            <td>
                {!! Form::open(['route' => ['perfils.destroy', $perfil->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('perfils.show', [$perfil->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('perfils.edit', [$perfil->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>