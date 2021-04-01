@extends('front.layouts.master')

@section('title')
    SERVIÇOS
@endsection



@section('metas')

@endsection



@section('content')

<div class="wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                    <h1 class="font-weight-bold">Serviços</h1>
                    <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
                </div>
            </div>
         </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4 class="font-weight-bold">Embalagens</h4>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                    <hr class="my-1">
                    <a href="{{URL::to('/stores')}}">Saiba Mais</a>
                </ul>
            </div>
            <div class="col-md-4">
                <h4 class="font-weight-bold">Armazenamento</h4>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Resource</a></li>
                    <li><a class="text-muted" href="#">Resource name</a></li>
                    <li><a class="text-muted" href="#">Another resource</a></li>
                    <li><a class="text-muted" href="#">Final resource</a></li>
                    <hr class="my-1">
                    <a href="{{URL::to('/stores')}}">Saiba Mais</a>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="font-weight-bold">Promova o seu produto</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                    <hr class="my-1">
                    <a href="{{URL::to('/stores')}}">Saiba Mais</a>
                </ul>
            </div>
             <div class="col-md-4">
                <h5 class="font-weight-bold">Rastreio da Encomenda</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                    <hr class="my-1>
                    <a href="{{URL::to('/stores')}}"">Saiba Mais</a>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection



@section('scripts')
    
@endsection



