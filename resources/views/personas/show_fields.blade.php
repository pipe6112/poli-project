<!-- Nombre Persona Field -->
<div class="form-group">
    {!! Form::label('nombre_persona', 'Nombre Persona:') !!}
    <p>{{ $persona->nombre_persona }}</p>
</div>

<!-- Identificacion Field -->
<div class="form-group">
    {!! Form::label('identificacion', 'Identificacion:') !!}
    <p>{{ $persona->identificacion }}</p>
</div>

<!-- Correo Field -->
<div class="form-group">
    {!! Form::label('correo', 'Correo:') !!}
    <p>{{ $persona->correo }}</p>
</div>

