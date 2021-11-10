@extends('Layout/app')
    @section('content')
    <div class="panel-body">
@if (session('mesage'))
<div class="alert alert-info alert-dismissible text-white" role="alert">
<span class="text-sm"> <a href="javascript:;" class="alert-link text-white">Excelente</a>. {{ session('mesage') }}.</span>
<button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@elseif (session('mesagedel'))
<div class="alert alert-danger alert-dismissible text-white" role="alert">
<span class="text-sm"> <a href="javascript:;" class="alert-link text-white">Excelente</a>. {{ session('mesagedel') }}.</span>
<button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif
<form action="{{ route('category.store') }}" method="POST">
{{ csrf_field() }}
<div class="col-12">
<label for="">Nombre Categoria:</label>
<input class="from" type="text" name="name" value="" placeholder="Ingresa Tu Nombre" id="">
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
<button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>
    <div class="container">
      <div class="row">
          <table class="table">
              <thead>
                  <tr>
                  <th>Clave</th>
                  <th>nombre</th>
                  <th>Opciones</th>
                  </tr>  
              </thead>
              <tbody>
                  @foreach($categories as $category)
                  <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->name}}</td>
                      <td>
                        <form action="{{ route('category.destroy', $category) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input 
                            type="submit"
                            value="Eliminar" 
                            class="btn btn-sm btn-danger"
                            onClick="return confirm('estas seguro  a eliminar el registro?')">
                        </form>
                    </td>
                  </tr>
                  @endforeach
              </tbody>

          </table>
      </div>
  </div> 
    @endsection
  

  
