@extends('layout.main')
@section('title', 'Post')
@section('menu', 'Create New Post')
@section('content')
<div class="card mt-2">
	<div class="card-body">		  
		<form method="post" action="/post">
			@csrf
		  <div class="form-group">		    
		    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title" >
		    @error('title')
		    <div class="invalid-feedback">
		    	{{ $message }}
		    </div>
		    @enderror
		  </div>
		  <div class="form-group">		    
		    <textarea class="form-control  @error('content') is-invalid @enderror" id="content" rows="3" name="content" placeholder="Content"></textarea>
		    @error('content')
		    <div class="invalid-feedback">
		    	{{ $message }}
		    </div>
		    @enderror
		  </div>
		  <button type="submit" class="btn btn-outline-secondary btn-lg btn-block">Submit</button>
		</form>
	</div>
</div>
@endsection