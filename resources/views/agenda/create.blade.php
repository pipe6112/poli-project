@extends("layouts.app")

@section("body")
<div class="card">
    <div class="card-header">
        <strong>Crear agenda</strong>
    </div>
    <div class="card-body">
        @include('flash::message')
        <form action="/agenda/guardar" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Fecha</label>
                    <input type="date" class="form-control @error('fecha') is-invalid @enderror"
                        name="fecha">
                    @error('fecha')
                <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>   
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Hora de inicio</label>
                    <input type="text" class="form-control @error('hora_inicio') is-invalid @enderror"
                         name="hora_inicio">
                         @error('hora_inicio')
                <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>   
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Hora final</label>
                    <input type="text" class="form-control @error('hora_final') is-invalid @enderror"
                         name="hora_final">
                         @error('hora_final')
                <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>   
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Persona</label>
                    <select type="text" class="form-control @error('persona_id') is-invalid @enderror"
                         name="persona_id">
                         @error('persona_id')
                <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                        <option value="">Seleccione...</option>
                        @foreach ($personas as $key => $value)
                             <option value="{{$value->id}}">{{$value->nombre_persona}}</option>                                
                        @endforeach
                    </select>
                </div>   
            </div>
        </div>
        <button type="submit" class="btn btn-success float-right">Guardar</button>
        </form>
    </div>    
</div>
@endsection