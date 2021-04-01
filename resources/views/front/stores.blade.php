@extends('front.layouts.master')

@section('title')
    LOJAS
@endsection



@section('metas')

@endsection



@section('content')


<div class="section-2 p-5 mt-5">
    <div class="container">
        <h1 class="text-left font-weight-bold"> Lojas </h1>
        <div class="row py-5">

        	<div class="col-md-12">
        		<div class="card flex-md-row mb-4 box-shadow h-md-250 border-0">
        			<img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [250x250]" style="width: 250px; height: 250px;" src="{{URL::to('assets/images/section21.png')}}" data-holder-rendered="true">
        			<div class="card-body d-flex flex-column align-items-start">
                        <h2 class="font-weight-bold">SUPERMERCADOS</h2>
        				<p class="card-text mb-auto">Fazemos entregasde todo tipo de material em todo o país. Nossos clientes são pessoas e empresas interessadas em trabalhar com uma empresa fiavel e com a qual pode contar 24/7/365...
</p>
        				<a href="{{URL::to('/home')}}">Saiba Mais</a>
        			</div>
          		</div>
        	</div>

            <div class="col-md-12">
        		<div class="card flex-md-row mb-4 box-shadow h-md-250 border-0">
        			<img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [250x250]" style="width: 250px; height: 250px;" src="{{URL::to('assets/images/section21.png')}}" data-holder-rendered="true">
        			<div class="card-body d-flex flex-column align-items-start">
                        <h2 class="font-weight-bold">BOTTLE STORE</h2>
        				<p class="card-text mb-auto">Fazemos entregasde todo tipo de material em todo o país. Nossos clientes são pessoas e empresas interessadas em trabalhar com uma empresa fiavel e com a qual pode contar 24/7/365...
</p>
        				<a href="{{URL::to('/home')}}">Saiba Mais</a>
        			</div>
          		</div>
        	</div>

        	<div class="col-md-12">
        		<div class="card flex-md-row mb-4 box-shadow h-md-250 border-0">
        			<img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [250x250]" style="width: 250px; height: 250px;" src="{{URL::to('assets/images/section21.png')}}" data-holder-rendered="true">
        			<div class="card-body d-flex flex-column align-items-start">
                        <h2 class="font-weight-bold">FARMACIAS</h2>
        				<p class="card-text mb-auto">Fazemos entregasde todo tipo de material em todo o país. Nossos clientes são pessoas e empresas interessadas em trabalhar com uma empresa fiavel e com a qual pode contar 24/7/365...
</p>
        				<a href="{{URL::to('/home')}}">Saiba Mais</a>
        			</div>
          		</div>
        	</div>
        </div>
    </div>
</div>

@endsection


@section('scripts')
    

@endsection