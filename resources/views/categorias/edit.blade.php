@extends('layouts.app')

@section('body')
<div class="bs-example">
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modificar producto</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                 @include('coreui-templates::common.errors')

                          <div class="row">
                            <div class="col-12">
                              <div class="form-group">
                              {!! Form::model($categoria, ['route' => ['categorias.update', $categoria->id], 'method' => 'patch']) !!}

                              @include('categorias.fields')

                              {!! Form::close() !!}
                              </div>
                            </div>
                          </div>

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