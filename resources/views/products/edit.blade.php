
@extends('layout.app')

  

@section('content')
<div class="row">

        <div class="col-lg-12 margin-tb">

            <center>

                <h2>Edit Profile</h2>

            </center>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>

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

  

    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">

        @csrf

        @method('PUT')

   

         <div class="row">

            

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Judul Berita:</strong>

                    <input class="form-control"  name="judul" placeholder="Nama Depan" value="{{ $product->judul }}"></input>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>penjelasan berita:</strong>

                    <input class="form-control" name="penjelas" value="{{ $product->penjelas }}"   placeholder="Penjealsan Berita"></input>

                </div>

            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" name="gambar" value="{{ $product->gambar }}" class="btn btn-primary">Submit</button>

            </div>

        </div>

   

    </form>

@endsection