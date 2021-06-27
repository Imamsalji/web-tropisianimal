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
  @include('layout.nav')

  <!-- Header -->
  @include('layout.header')

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <center>

                <h2>Edit Profile</h2>

            </center>

            <div class="pull-right">

                <form action="{{ url('cari') }}" method="GET">
                                    <button class="btn btn-primary" name="name" value="{{ Auth::user()->nip }}" >Back</button>
                                </form>

            </div>

        </div>

    </div>

   

    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

  

    <form action="{{ route('profiles.update',$profile->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

            

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nama Depan:</strong>

                    <input class="form-control"  name="name" placeholder="Nama Depan" value="{{ $profile->name }}"></input>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nama Belakang:</strong>

                    <input class="form-control"  name="nama_belakang" placeholder="nama belakang" value="{{ $profile->nama_belakang }}"></input>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Jenis Kelamin:</strong>

                    <input class="form-control" name="jk" placeholder="jk" value="{{ $profile->jk }}"></input>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>email:</strong>

                    <input class="form-control"  name="email" placeholder="email" value="{{ $profile->email }}"></input>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nomor Hp:</strong>

                    <input class="form-control" name="no_hp" placeholder="no_hp" value="{{ $profile->no_hp }}"></input>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

   

    </form>

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