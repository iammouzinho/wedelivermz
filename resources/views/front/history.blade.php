@extends('front.layouts.master')

@section('title')
    HISTÓRIAS DE SUCESSO
@endsection



@section('metas')

<style>

body { padding-top: 50px; }

#myCarousel .carousel-caption {
    left:0;
	right:0;
	bottom:0;
	text-align:left;
	padding:10px;
	background:rgba(0,0,0,0.6);
	text-shadow:none;
}

#myCarousel .list-group {
	position:absolute;
	top:0;
	right:0;
}

#myCarousel .list-group-item {
	border-radius:0px;
	cursor:pointer;
}

#myCarousel .list-group .active {
	background-color:#eee;	
}

@media (min-width: 992px) { 
	#myCarousel {padding-right:33.3333%;}
	#myCarousel .carousel-controls {display:none;} 	
}

@media (max-width: 991px) { 
	.carousel-caption p,
	#myCarousel .list-group {display:none;} 
}

</style>

@endsection



@section('content')

<div class="wrapper">
    <div class="row">
    	<div class="col-md-12">
    	 	<div class="container">
	    	 	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
			      	<h1 class="font-weight-bold">Historias de Sucesso</h1>
			      	<p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
		    	</div>
	    	</div>
    	 </div>
    </div>


	<div class="container">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="..." alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="..." alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="..." alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>

</div>

@endsection



@section('scripts')

<script>
	$(document).ready(function(){
    
	var clickEvent = false;
	$('#myCarousel').carousel({
		interval:   4000	
	}).on('click', '.list-group li', function() {
			clickEvent = true;
			$('.list-group li').removeClass('active');
			$(this).addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.list-group').children().length -1;
			var current = $('.list-group li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.list-group li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
})

$(window).load(function() {
    var boxheight = $('#myCarousel .carousel-inner').innerHeight();
    var itemlength = $('#myCarousel .carousel-item').length;
    var triggerheight = Math.round(boxheight/itemlength+1);
	$('#myCarousel .list-group-item').outerHeight(triggerheight);
});
</script>
    
@endsection



