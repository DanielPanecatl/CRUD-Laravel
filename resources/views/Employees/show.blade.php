@extends('layouts.header')

@section('title','Lista de empleados')

@section('content')
<div class="container">
  <div class="row">
  	@foreach($employees as $employee)
    <div class="col-sm">
      	<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="images/{{$employee->image}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">{{$employee->name}}</h5>
		    <p class="card-text">{{$employee->description}}</p>
		    <a href="/employees/{{$employee->slug}}" class="btn btn-primary">Ver más...</a>
		  </div>
		</div>
    </div>
    @endforeach
  </div>
</div>


@endsection
