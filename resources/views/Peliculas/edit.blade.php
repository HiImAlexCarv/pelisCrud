
@extends('layouts.app')

@section('contenido')

<form action="{{ route('pelicula.update',$pelicula) }}" method="post"> {{--Aqui ponemos ruta dn se va almacenar}}
      {{-- token para guardar la informacion / sino no puedes guardar la informacion//proteger contra inyecciones--}}
      @csrf
      @method('PUT')
      
<div class="mb-3">
    <label class="form-label">Nombre Pelicula</label>
    <input type="text" class="form-control" name="nombre" value="{{ $pelicula->nombre}}">
  </div>

  <div class="mb-3">
    <label  class="form-label">Imagen</label>
    <input type="text" class="form-control" name="imagen" value="{{ $pelicula->imagen}}">
  </div>

  <div class="mb-3">
    <label  class="form-label">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" value="{{ $pelicula->descripcion}}"                                                                                                                                                                                                                                                                                                                                                                                                                                                                   >
  </div>

  <div class="mb-3">
    <label  class="form-label">Trailer</label>
    <input type="text" class="form-control" name="trailer" value="{{ $pelicula->trailer}}">
  </div> 
  
<button type="submit">Guardar</button>
</form>

  @endsection 