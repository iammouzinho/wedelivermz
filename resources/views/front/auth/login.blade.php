@extends('front.auth.layouts.master')

@section('title')
    
@endsection



@section('metas')
    
@endsection



@section('content')

<div class="section-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="custom-card text-center">
                    <form class="form-signin p-3" action="{{URL::to('/home')}}" method="GET">
                        <h1 class="title">BEM VINDO</h1>
                        <p>Preencha os campos abaixo para entrar</p>
                        <input type="email" id="email" class="form-control" placeholder="Digite seu email" required autocomplete="new-password">
                        <input type="password" id="password" class="form-control mt-3" placeholder="Digite a sua senha" required tocomplete="new-password">
                        <div class="checkbox my-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Guardar Dados!
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">AUTENTICAR</button>
                        <p class="mt-4 text-muted">Todos Direitos Reservados © {{date("Y")}}</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section-2 p-5">
    <div class="container">
        <h1 class="text-center font-weight-light"> Encontre Diversas Produtos & Serviços </h1>
        <div class="row py-5">
            <div class="col-md-4">
                <div class="card box-shadow bg-light border-0 rounded-5">
                    <div class="card-body">
                        <h1 class="font-weight-bold">Escolha o Que Quiser</h1>
                        <p class="card-text mt-4">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <img class="card-img-top" alt="Service 1" src="{{URL::to('assets/images/section21.png')}}" style="display: block;">
                </div>
            </div>

            <div class="col-md-4">
                <div class="card box-shadow bg-light border-0 rounded-5">
                    <div class="card-body">
                        <h1 class="font-weight-bold">Escolha o Seu Produto</h1>
                        <p class="card-text mt-4">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <img class="card-img-top" alt="Service 1" src="{{URL::to('assets/images/section23.png')}}" style="display: block;">
                </div>
            </div>

            <div class="col-md-4">
                <div class="card box-shadow bg-light border-0 rounded-5">
                    <div class="card-body">
                        <h1 class="font-weight-bold">Receba Seus Itens </h1>
                        <p class="card-text mt-4">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <img class="card-img-top" alt="Service 1" src="{{URL::to('assets/images/section22.png')}}" style="display: block;">
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="{{URL::to('/front/stores')}}" class="btn btn-primary btn-large px-5">COMECAR A COMPRAR</a>
        </div>
    </div>
</div>


@endsection



@section('scripts')
<script>
    $(function() {
      $('#form-signin').disableAutoFill();
    });
  </script>
@endsection



