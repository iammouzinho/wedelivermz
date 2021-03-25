<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white px-4">
        <a class="navbar-brand" href="#"><img src="{{URL::to('assets/images/navlogo.png')}}" alt="WEDELIVER" srcset=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/stores')}}">Lojas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/help')}}">Ajuda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/book-deliver')}}">Book Deliver</a>
                </li>
            </ul>
                <a class="btn btn-primary my-2 my-sm-0" href="">REGISTAR</a>
        </div>
    </nav>
</header>