@extends("layouts.app")

@section("body") 

<div class="bs-example">
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modificar producto</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">

                @include('flash::message')
                <form action="/producto/actualizar" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$producto->id}}" />

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                              <label for="">Nombre</label>
                              <input value="{{$producto->nombre_producto}}" type="text" class="form-control @error('nombre_producto') is-invalid @enderror"
                                      name="nombre_producto">
                                  @error('nombre_producto')
                              <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                              <label for="">Categoría</label>
                              <select type="text" class="form-control @error('categoria_id') is-invalid @enderror"
                                   name="categoria_id">
                                   @error('categoria_id')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                                  <option value="">Seleccione...</option>
                                  @foreach ($categorias as $key => $value)
                              <option {{$value->id == $producto->categoria_id ? 'selected' : ''}} 
                                  value="{{$value->id}}">{{$value->nombre_categoria}}</option>                                
                                  @endforeach
                              </select>
                            </div>
                        </div>
                    </div>

                        <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">precio</label>
                                <input value="{{$producto->precio}}" type="text" class="form-control @error('precio') is-invalid @enderror"
                                     name="precio">
                                     @error('precio')
                            <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
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