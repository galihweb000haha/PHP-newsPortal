<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Liputan 25 | @yield('title')</title>
	<!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  	<script>tinymce.init({selector:'textarea'});</script> -->
  	<script type="text/javascript" src="{{url('assets/ckeditor/ckeditor.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">	
  <a class="navbar-brand" href="#">Liputan 25</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/">Home<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="/post">Post</a>
      <a class="nav-item nav-link" href="/about">About</a>      
      <a class="nav-item nav-link" href="#">Login</a>      
    </div>
  </div>  
</nav>
<!-- end navbar -->

<!-- content -->
<section class="content container mt-4">	
	<content>		
		<h1>@yield('menu')</h1>	
		@yield('content')
	</content>		
</section>
<!-- end content -->

<!-- footer -->
<!-- <section>
	<footer class="bg-dark mt-4">		
		Copyright &copy; 2019	
	</footer>
</section> -->
<!-- end footer -->

<script type="text/javascript" src="{{url('assets/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript">
	// tinyMCE.init({
	//   theme : "advanced",
	//   theme_advanced_toolbar_location : "top",
	//   theme_advanced_toolbar_align : "left",
	//   mode : "exact",
	//   elements : "content",
	// });
	CKEDITOR.replace( 'content' );
</script>


</body>
</html>