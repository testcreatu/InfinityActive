<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <div class="logo">
                    <img src="{{url('public/images/logo.jpg')}}" class="img-fluid" alt="">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @if(Auth::check())
                    <li class="nav-item active">
                        <a class="nav-link" href="home">{{Auth::user()->email}}</a>
                    </li> 
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('vendor/logout')}}">Logout</a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header>