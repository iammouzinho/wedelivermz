@extends('front.layouts.master')

@section('title')
    PROGRAMA DE FIDELIDADE
@endsection



@section('metas')

@endsection



@section('content')

<div class="wrapper">
    <div class="row">
    	<div class="col-md-12">
    	 	<div class="container">
	    	 	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
			      	<h1 class="font-weight-bold">Progama de Fidelidade</h1>
			      	<p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
		    	</div>
	    	</div>
    	 </div>
    </div>


    <div class="container">
    	<div class="card-deck mb-3 text-center">

	        <div class="card mb-4 box-shadow border-0">
	          	<div class="card-header">
	            	<h4 class="my-0 font-weight-normal font-weight-bold">BRONZE</h4>
	          	</div>
	          	<div class="card-body">
		            <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
		            <ul class="list-unstyled mt-3 mb-4">
			            <li>10 users included</li>
			            <li>2 GB of storage</li>
			            <li>Email support</li>
			            <li>Help center access</li>
		            </ul>
		            <button type="button" class="btn btn-lg btn-block btn-primary">SAIBA MAIS</button>
	          	</div>
	        </div>

	        <div class="card mb-4 box-shadow  border-0">
		        <div class="card-header">
		            <h4 class="my-0 font-weight-bold">PRATA</h4>
		        </div>
	          	<div class="card-body">
		            <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
		            <ul class="list-unstyled mt-3 mb-4">
		              	<li>20 users included</li>
		              	<li>10 GB of storage</li>
		              	<li>Priority email support</li>
		             	<li>Help center access</li>
		            </ul>
		            <button type="button" class="btn btn-lg btn-block btn-primary">SAIBA MAIS</button>
		        </div>
	        </div>

	        <div class="card mb-4 box-shadow  border-0">
	          	<div class="card-header">
	            	<h4 class="my-0 font-weight-bold">OURO</h4>
	          	</div>
	          	<div class="card-body">
		            <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
		            <ul class="list-unstyled mt-3 mb-4">
		              	<li>30 users included</li>
		              	<li>15 GB of storage</li>
		              	<li>Phone and email support</li>
		              	<li>Help center access</li>
		            </ul>
		            <button type="button" class="btn btn-lg btn-block btn-primary">SAIBA MAIS</button>
	          </div>
	        </div>
      	</div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="{{URL::to('assets/images/navlogo.png')}}" alt="">
            <small class="d-block mb-3 text-muted">© {{date('Y')}}</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
</div>

@endsection



@section('scripts')
    
@endsection



