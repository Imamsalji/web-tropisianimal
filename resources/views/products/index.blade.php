@extends('layout.app')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Berita </h2>

            </div>
            @guest
@else

@if (Auth::user()->level == "pengelola")

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('products.create') }}"> + Berita Terbaru</a>

            </div>
@endif
@endguest
        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif
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
<div class="pull-left">

                <h2>Berita Lainnya </h2>

            </div>
            <br>
    <center>
        <div class="grid-container">
            @foreach ($products as $product)
            <div class="grid-item">
                <div class="card" style="width: 23rem;height: 400px;border: none;">
                    <img src="data_foto/{{ $product->gambar }} " class="ds-block w-100" alt="..." style="width: 704px;height: 200px">
                    <div class="card-body" style="background-color: #f8f8f8;" >
                        <h6 class="card-title">{{ $product->judul }}</h6>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Baca Selengkapnya</a>
                            @guest
                            @else
                            @if (Auth::user()->level == "pengelola")
                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            @endif
                            @endguest
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
{!! $products->links() !!}
    </center>
<br>
  

    

      

@endsection