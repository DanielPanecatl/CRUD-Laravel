@extends('layouts.header')

@section('title','Registrar empleado')

@section('content')
<form class="form-group" method="POST" action="/employees" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="form-group">
		<label>Nombre</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>Apellidos</label>
		<input type="text" name="last_name" class="form-control">
	</div>
    <div class="form-group">
	</div>
	<div class="form-group">
		<label>Fecha de nacimiento</label>
		<input type="text" name="day_of_birth" class="form-control">
	</div>
	<label class="form-group">Sexo</label>
	<div class="form-check">
	  <input class="form-check-input" type="radio" name="gender" value="Masculino" checked>
	  <label class="form-check-label" for="sexo1">Hombre</label>
	</div>
	<div class="form-check">
	  <input class="form-check-input" type="radio" name="gender" value="Femenino">
	  <label class="form-check-label" for="sexo2">Mujer</label>
	</div>
	<div class="form-group">
		<label>Dirección</label>
		<input type="text" name="address" class="form-control">
	</div>
	<div class="form-group">
		<label>Phone</label>
		<input type="text" name="phone" maxlength="10" class="form-control">
	</div>
	<div class="form-group">
    <label for="station">Selecciona un puesto</label>
	    <select class="form-control" id="station" name="station">
	      <option>Ingeniero en software</option>
	      <option>Analista de datos</option>
	      <option>Administrador de base de datos</option>
	      <option>Desarrollador web</option>
	      <option>Desarrollador móvil</option>
	    </select>
	 </div>
	<div class="form-group">
		<label>Descripción</label>
		<input type="text" name="description" maxlength="100" class="form-control">
	</div>
	<label>Subir imagen</label>
	<div class="custom-file">
	  <input type="file" name="image" class="custom-file-input" id="customFileLang" lang="es">
	  <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
	</div>
	<p></p>
    <button type="sumbit" class="btn btn-primary">Guardar</button>
</form>
@endsection