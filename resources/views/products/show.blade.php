@extends('layout.app')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>

            </div>

           <br>

                <h2>{{ $product->judul }}</h2>


            

        </div>

    </div>

   
<br>
    <div class="card mb-3">
        <img src="../data_foto/{{ $product->gambar }} " class="card-img-top" alt="..." style="height: 400px">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">{{ $product->penjelas }}</p>
            <p class="card-text"><small class="text-muted">Edited By Mohamad Imam Salji</small></p>
        </div>
    </div>

@endsection