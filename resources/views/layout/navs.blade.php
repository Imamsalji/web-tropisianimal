<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Tropisianimal</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="http://localhost:81/pklpraktek/public/home" style="font-family: bold">Home</a>
                
                
              </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost:81/pklpraktek/public/profiles" style="font-family: bold">profiles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost:81/pklpraktek/public/products/" style="font-family: bold">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost:81/pklpraktek/public/pictures" style="font-family: bold">Picture</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost:81/pklpraktek/public/contacts/create" style="font-family: bold">Contact</a>
          </li>
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
        </ul>
      </div>
    </div>
  </nav>