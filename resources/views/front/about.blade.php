@extends('front.layouts.master')

@section('title')
    SOBRE-NÓS
@endsection



@section('metas')

@endsection



@section('content')

<div class="wrapper">
    <div class="row">
    	<div class="col-md-12">
    	 	<div class="container">
	    	 	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
			      	<h1 class="font-weight-bold">Sobre-nós</h1>
			      	<p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
		    	</div>
	    	</div>
    	 </div>
    </div>

    <div class="section-2">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card box-shadow bg-light border-0 rounded-5">
                    <img class="card-img-top" alt="Service 1" src="{{URL::to('assets/images/section21.png')}}" style="display: block;">
                    <div class="card-body">
                        <h4 class="font-weight-bold">Mais de 50 Lojas</h4>
                        <p class="card-text mt-4">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="{{URL::to('/stores')}}">Saiba Mais</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card box-shadow bg-light border-0 rounded-5">
                    <img class="card-img-top" alt="Service 1" src="{{URL::to('assets/images/section23.png')}}" style="display: block;">
                    <div class="card-body">
                        <h4 class="font-weight-bold">Entregas no mesmo dia</h4>
                        <p class="card-text mt-4">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="{{URL::to('/book-deliver')}}">Saiba Mais</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card box-shadow bg-light border-0 rounded-5">
                    <img class="card-img-top" alt="Service 1" src="{{URL::to('assets/images/section22.png')}}" style="display: block;">
                    <div class="card-body">
                        <h4 class="font-weight-bold">Embalagens Especializadas</h4>
                        <p class="card-text mt-4">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="{{URL::to('/services')}}">Saiba Mais</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card box-shadow bg-light border-0 rounded-5">
                    <img class="card-img-top" alt="Service 1" src="{{URL::to('assets/images/section21.png')}}" style="display: block;">
                    <div class="card-body">
                        <h4 class="font-weight-bold">Resteamento da encomenda</h4>
                        <p class="card-text mt-4">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="{{URL::to('/services')}}">Saiba Mais</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card box-shadow bg-light border-0 rounded-5">
                    <img class="card-img-top" alt="Service 1" src="{{URL::to('assets/images/section23.png')}}" style="display: block;">
                    <div class="card-body">
                        <h4 class="font-weight-bold">Descontos Embativeis</h4>
                        <p class="card-text mt-4">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="{{URL::to('/stores')}}">Saiba Mais</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card box-shadow bg-light border-0 rounded-5">
                    <img class="card-img-top" alt="Service 1" src="{{URL::to('assets/images/section22.png')}}" style="display: block;">
                    <div class="card-body">
                        <h4 class="font-weight-bold">Responsabilidade Social</h4>
                        <p class="card-text mt-4">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="{{URL::to('/program')}}">Saiba Mais</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

</div>

@endsection



@section('scripts')
    
@endsection



