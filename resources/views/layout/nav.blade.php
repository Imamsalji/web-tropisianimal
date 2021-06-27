<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="{{ asset('/') }}">Tropisianimal</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ asset('home') }}" style="font-family: bold">Home</a>
                
                
              </li>
          <li class="nav-item">
            @guest
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="{{ route('register') }}" style="font-family: bold">{{ __('buat profil') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item ">
                               <form action="{{ url('cari') }}" method="GET">
                                    <button class="nav-link js-scroll-trigger" name="name" value="{{ Auth::user()->nip }}" style="background-color: transparent;border:none;font-size: 15px;font-family: bold">PROFILE</button>
                                    </form>
                            </li>
                        @endguest
            
          
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ asset('products') }}" style="font-family: bold">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ asset('pictures') }}" style="font-family: bold">Picture</a>
          </li>
           @guest
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ asset('contacts/create') }}" style="font-family: bold">Contact</a>
          </li>
            @else
          @if (Auth::user()->level == "pengelola")
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ asset('contacts') }}" style="font-family: bold">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ asset('register') }}" style="font-family: bold">Registrasi</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ asset('contacts/create') }}" style="font-family: bold">Contact</a>
          </li>
          @endif
@endguest

@guest
            @else
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" style="font-family: bold" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
          </li>
          @endguest

        </ul>
      </div>
    </div>
  </nav>