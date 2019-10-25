@extends('layout.main')
@section('title', 'Home')	
@section('menu', 'Berita Utama')
@section('content')
@foreach($news as $new)
		<div class="card mt-2">
		  <div class="card-body">
		  <h3>{{$new->title}}</h3>		 
		    <p>{{$new->content}}</p>
		    <a href="/index/{{$new->id}}" class="card-link float-right">Read</a>
		  </div>
		</div>
@endforeach
@endsection