<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Projectos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('projectos_id', 'Projectos Id:') !!}
    {!! Form::number('projectos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Trabalhadores Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trabalhadores_id', 'Trabalhadores Id:') !!}
    {!! Form::number('trabalhadores_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('alocacaos.index') !!}" class="btn btn-default">Cancel</a>
</div>
