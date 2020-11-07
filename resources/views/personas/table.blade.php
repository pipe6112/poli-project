<div class="table-responsive-sm">
    <table class="table table-striped" id="personas-table">
        <thead>
            <tr>
                <th>Nombre Persona</th>
        <th>Identificacion</th>
        <th>Correo</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($personas as $persona)
            <tr>
                <td>{{ $persona->nombre_persona }}</td>
            <td>{{ $persona->identificacion }}</td>
            <td>{{ $persona->correo }}</td>
                <td>
                    {!! Form::open(['route' => ['personas.destroy', $persona->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('personas.show', [$persona->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('personas.edit', [$persona->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Estas segur@?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>