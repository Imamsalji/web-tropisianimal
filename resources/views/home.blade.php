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
  grid-template-columns: auto auto auto auto;
  background-color: none;
  padding: 5px;
}
.grid-conta {
  display: grid;
  grid-template-columns: auto auto auto ;
  background-color: white;
  padding: 3px;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  padding: 3px;
  font-size: 20px;
}
.page-section {
  padding: 20px 0;
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
      @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif
    <br>
    <br>
@foreach ($nomors as $nomor)


<div class="card mb-3" style=" border: none;" >
  <div class="row no-gutters">
    <div class="col-md-6" style="">
        
      <img src="data_foto/{{ $nomor->gambar }}" class="card-img" alt="..." style="height: 320px;width: 520px;">
    </div>
    <div class="col-md-6" style="border: none;width: 400px">
      <div class="card-body" >
        <h2 class="card-title">{{ $nomor->judul }}</h2>
        <p class="card-text">{{ $nomor->penjelas }}</p>
        <p class="card-text"><small class="text-muted">{{ $nomor->penjelas }}</small></p>
      </div>
    </div>
  </div>
</div>
@endforeach



</div>
  </section>
<section class="page-section" id="contact">
    <div class="container">
      <div class="row">
          <h2 class="section-heading text-uppercase" style="color: white"><br>Kami Membawa anda untuk mengetahui Lebih dalam <br></h2>
          <br>
          <br>
          <div class="grid-container">
            <div class="grid-item">
              <div class="card" style="width: 18rem;">
            <div class="card-body">
              <center>
              <img src="img/Capture.PNG" style="width: 80px;height: 80px">
              
              </center>
              <br>
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>        
            </div>
          </div>
          <div class="grid-item">
              <div class="card" style="width: 18rem;">
            <div class="card-body">
              <center>
              <img src="img/Capture.PNG" style="width: 80px;height: 80px">
              </center>
              <br>
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>        
            </div>
          </div>
          <div class="grid-item">
              <div class="card" style="width: 18rem;">
            <div class="card-body">
              <center>
              <img src="img/Capture.PNG" style="width: 80px;height: 80px">
              </center>
              <br>
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>        
            </div>
          </div>
          <div class="grid-item">
              <div class="card" style="width: 18rem;">
            <div class="card-body">
              <center>
              <img src="img/Capture.PNG" style="width: 80px;height: 80px">

              </center>
              <br>
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>        
            </div>
          </div>
        </div>
      </div>


  </section>
  <section class="page-section" id="about">
    <div class="container">
      <br>
      <br>
      <a href="{{ asset('products') }}" style="color: green">Berita</a>
      <h2 style="font-weight: bolder;">Baca Berita Terbaru Kami <br>Dalam Tropisianimal</h2>
      <div class="grid-conta">
            @foreach ($products as $product)
            <div class="grid-item">
                <div class="card" style="width: 23rem;height: 350px;border: none;">
                    <img src="data_foto/{{ $product->gambar }} " class="d-block w-100" alt="..." style="width: 704px;height: 200px">
                    <div class="card-body" style="background-color: #f8f8f8;" >
                      <center>
                        <h6 class="card-title">{{ $product->judul }}</h6>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                          
                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Baca Selengkapnya</a>
                            </center>

                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      </div>
  </section>
<br>
<br>
  <div class="container">
    <a href="{{ asset('pictures') }}" style="color: green">Galeri</a>
    <h2 style="font-weight: bolder;">Baca Berita Terbaru Kami <br>Dalam Tropisianimal</h2>
  </div>
  <center>
  <div class="row">
    @foreach ($pictures as $picture)
    
    <img src="data_foto/{{ $picture->gambar }} " alt="..." class="img-thumbnail" style="width: 343px;height: 250px;border: none">

    @endforeach
  </div>
  </center>
  

  
  
  
  

  <!-- Footer -->
  @include('layout.foot')

  <!-- Portfolio Modals -->

  

  

  

 

  

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('Imam.js') }}"></script>
  <!-- Plugin JavaScript -->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
  <script src="{{ asset('js/contact_me.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('js/agency.min.js') }}"></script>

</body>

</html>
