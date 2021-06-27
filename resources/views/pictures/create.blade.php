@extends('layout.app')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">
<center>

            <h2>Berita terbaru</h2>

        </center>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('pictures.index') }}"> Back</a>

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

   

<form action="{{ route('pictures.store') }}" method="POST" enctype="multipart/form-data">

    @csrf

  

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Upload Foto:</strong>

                <input type="file" class="form-control" name="gambar" id="fel">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tema:</strong>

                <input type="text" name="tema" class="form-control" placeholder="......">

            </div>

        </div>

        <

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>

   

</form>

@endsection