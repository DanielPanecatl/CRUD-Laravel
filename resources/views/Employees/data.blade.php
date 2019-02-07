@extends('layouts.header')
@section('title',' Datos')
<link rel="stylesheet" type="text/css" href="/styles.css" media="screen" />
@section('content')
<div class="card text-center">
  <div class="card-header">
    Identificador de empleado: {{$employee->id}}
  </div>
  <div class="card-body">
  	<img src="/images/{{$employee->image}}" class="circular-img">
    <h1 class="card-title">{{$employee->name}} {{$employee->last_name}}</h1>
  </div>
  <div class="card-footer text-muted">
    <h5>Fecha de nacimiento: {{$employee->day_of_birth}}</h5>
    <h5>Genero: {{$employee->gender}}</h5>
    <h5>Dirección: {{$employee->address}}</h5>
    <h5>Teléfono: {{$employee->phone}}</h5>
    <h5>Puesto de trabajo: {{$employee->station}}</h5>
    <h5>Descripción: {{$employee->description}}</h5>
  </div>
  <a href="/employees/{{$employee->slug}}/edit" class="btn btn-primary">Actualizar registros</a> 
</div>
@endsection