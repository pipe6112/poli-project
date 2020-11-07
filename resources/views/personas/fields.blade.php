<!-- Nombre Persona Field -->
<div class="row">
<div class="col-6">
    <div class="form group">
    {!! Form::label('nombre_persona', 'Nombre Persona:') !!}
    {!! Form::text('nombre_persona', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Identificacion Field -->
<div class="col-6">
    <div class="form group">
    {!! Form::label('identificacion', 'Identificacion:') !!}
    {!! Form::number('identificacion', null, ['class' => 'form-control']) !!}
    </div>
</div>
</div>

<br>
<!-- Correo Field -->
<div class="row">
    <div class="col-12">
    <div class="form group">
    {!! Form::label('correo', 'Correo:') !!}
    {!! Form::text('correo', null, ['class' => 'form-control']) !!}
    </div>
    </div>
</div>

<!-- Submit Field -->
<div class="modal-footer">
    {!! Form::submit('Guardar Cambios', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('personas.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
