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
  <style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto ;
  background-color: white;
  padding: 3px;
}
.grid-conta {
  display: grid;
  grid-template-columns: auto auto auto auto;
  background-color: white;
  padding: 3px;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  padding: 3px;
  font-size: 20px;
}
.page-section {
  padding: 30px 0;
}

.page-section h2.section-heading {
  font-size: 40px;
  margin-top: 0;
  margin-bottom: 15px;
}

.page-section h3.section-subheading {
  font-size: 16px;
  font-weight: 400;
  font-style: italic;
  margin-bottom: 75px;
  text-transform: none;
  font-family: 'Droid Serif', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}




</style>

</head>

<body id="page-top" >

  <!-- Navigation -->
  @include('layout.nav')

  <!-- Header -->
  @include('layout.header')

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
        @yield('content')
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
