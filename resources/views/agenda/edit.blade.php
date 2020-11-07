@extends("layouts.app")

@section("body") 
<div class="bs-example">
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modificar agenda</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">

                @include('flash::message')
                <form action="/agenda/actualizar" method="POST">
                    @csrf
                <input type="hidden" name="id" value="{{$agenda->id}}" />

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                              <label for="">Fecha</label>
                              <input value="{{$agenda->fecha}}" type="date" class="form-control @error('fecha') is-invalid @enderror"
                                  name="fecha">
                              @error('fecha')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>


                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Hora de final</label>
                            <input value="{{$agenda->hora_final}}" type="text" class="form-control @error('hora_final') is-invalid @enderror"
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
                                <option {{$value->id == $agenda->persona_id ? 'selected' : ''}} 
                                    value="{{$value->id}}">{{$value->nombre_persona}}</option>                                
                                    @endforeach
                                </select>
                            </div>   
                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section("styles")
   
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

@endsection

@section("scripts")

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>

@endsection
