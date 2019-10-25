@extends('layout.main')
@section('title', 'Home')	
@section('menu', 'Detail Berita')
@section('content')
	<div class="card mt-2">
	  <div class="card-body">
	  <h3>{{$new->title}}</h3>		 
	    <p>{{$new->content}}</p>
	     <small class="form-text text-muted">Created at : {{$new->created_at}}</small>
	    <a href="/" class="card-link float-right">Back</a>
	  </div>
	</div>
@endsection