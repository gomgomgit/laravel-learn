<!DOCTYPE html>
<html>
<head>
	<title>Author</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<div class="d-flex flex-column flex-md-row align-items-center py-0 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h3 class="my-0 mr-md-auto font-weight-normal">Laravel Learn</h3>
    <nav class="my-2 my-md-0 mr-md-3 d-flex text-center" >
      <a class="p-2 py-3 text-dark d-flex flex-column justify-content-center" style="width: 80px" href="{{url('book/index')}}"><div style="font-size: 24px"><i data-feather="bookmark"></i></div><p class="m-0" style="font-size: 12px">Index</p></a>
      <a class="p-2 py-3 text-dark d-flex flex-column justify-content-center" style="width: 80px" href="#"><div style="font-size: 24px"><i data-feather="book"></i></div><p class="m-0" style="font-size: 12px">Book</p></a>
      <a class="p-2 py-3 text-dark d-flex flex-column justify-content-center" style="width: 80px" href="{{url('book/author')}}"><div style="font-size: 24px"><i data-feather="user"></i></div><p class="m-0" style="font-size: 12px">Author</p></a>
      <a class="p-2 py-3 text-dark d-flex flex-column justify-content-center" style="width: 80px" href="#"><div style="font-size: 24px"><i data-feather="shopping-bag"></i></div><p class="m-0" style="font-size: 12px">Store</p></a>
      <a class="p-2 py-3 text-dark d-flex flex-column justify-content-center" style="width: 80px" href="#"><div style="font-size: 24px"><i data-feather="phone"></i></div><p class="m-0" style="font-size: 12px">Contact</p></a>
    </nav>
  </div>

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto">
  	<div class="container">
	    <h1 class="display-3 mb-4 text-center">Author</h1>
	    <div class="row">
	    	<div class="col-3">
		 	   <a class="text-dark text-center py-2 m-3" href="{{url('book/author/Salsa')}}"><h2>Salsa</h2></a>
	    	</div>
	    	<div class="col-3">
		 	   <a class="text-dark text-center py-2 m-3" href="{{url('book/author/Gilang_B')}}"><h2>Gilang_B</h2></a>
	    	</div>
	    	<div class="col-3">
		 	   <a class="text-dark text-center py-2 m-3" href="{{url('book/author/Ryan_rian')}}"><h2>Ryan_rian</h2></a>
	    	</div>
	    	<div class="col-3">
		 	   <a class="text-dark text-center py-2 m-3" href="{{url('book/author/Mei_M')}}"><h2>Mei_M</h2></a>
	    	</div>
	    	<div class="col-3">
		 	   <a class="text-dark text-center py-2 m-3" href="{{url('book/author/Pelayar')}}"><h2>Pelayar</h2></a>
	    	</div>
	    	<div class="col-3">
		 	   <a class="text-dark text-center py-2 m-3" href="{{url('book/author/Andrea')}}"><h2>Andrea</h2></a>
	    	</div>
	    	<div class="col-3">
		 	   <a class="text-dark text-center py-2 m-3" href="{{url('book/author/Kei_KR')}}"><h2>Kei_KR</h2></a>
	    	</div>
	    	<div class="col-3">
		 	   <a class="text-dark text-center py-2 m-3" href="{{url('book/author/Solomon')}}"><h2>Solomon</h2></a>
	    	</div>
	    </div>
  	</div>
  </div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
	<script>
	  feather.replace()
	</script>
</body>
</html>