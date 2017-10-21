<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Infraestrutura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_infraestrutura', 'Tipo Infraestrutura:') !!}
    {!! Form::text('tipo_infraestrutura', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto', 'Foto:') !!}
    {!! Form::text('foto', null, ['class' => 'form-control']) !!}
</div>

<!-- Dimensoes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dimensoes', 'Dimensoes:') !!}
    {!! Form::number('dimensoes', null, ['class' => 'form-control']) !!}
</div>

<!-- Largura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('largura', 'Largura:') !!}
    {!! Form::number('largura', null, ['class' => 'form-control']) !!}
</div>

<!-- Comprimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comprimento', 'Comprimento:') !!}
    {!! Form::number('comprimento', null, ['class' => 'form-control']) !!}
</div>

<!-- Capacidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacidade', 'Capacidade:') !!}
    {!! Form::number('capacidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Clientes Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clientes_id', 'Clientes Id:') !!}
    {!! Form::number('clientes_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('infraestruturas.index') !!}" class="btn btn-default">Cancel</a>
</div>
