<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mohamad Imam Salji</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/agency.css') }}" rel="stylesheet">

</head>

<body id="page-top" >

  <!-- Navigation -->
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
                <a class="nav-link js-scroll-trigger" href="{{ asset('home') }}" style="font-family: bold">Home</a>
                
                
              </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ asset('register') }}" style="font-family: bold">Buat Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost:81/pklpraktek/public/products/" style="font-family: bold">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost:81/pklpraktek/public/pictures" style="font-family: bold">Picture</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="" style="font-family: bold">Contact</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  @include('layout.header')

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
<div class="card mb-3" style=" border: none;" >
  <div class="row no-gutters">
    <div class="col-md-6" style="">
      <img src="data_foto/rick-l-037fCBgZB10-unsplash@2x.png" class="card-img" alt="..." style="height: 320px;width: 520px;">
    </div>
    <div class="col-md-6" style="border: none;width: 400px">
      <div class="card-body" >
        <h2 class="card-title">Membangun Komunitas Hewan</h2>
        <p class="card-text">Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do elusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
        <p class="card-text"><small class="text-muted">Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do elusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</small></p>
        <p><a href=""  class="btn btn-success">Baca selengkapnya</a></p>
      </div>
    </div>
  </div>
</div>

</div>
  </section>

  
  
  
  

  <!-- Footer -->
  @include('layout.foot')

  <!-- Portfolio Modals -->

  

  

  

 

  

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  
  <!-- Plugin JavaScript -->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
  <script src="{{ asset('js/contact_me.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('js/agency.min.js') }}"></script>

</body>

</html>
