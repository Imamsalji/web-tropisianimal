@extends('layout.app')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Galeri</h2>

            </div>
            @guest
            @else
            @if (Auth::user()->level == "pengelola")

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('pictures.create') }}"> + Galeri</a>

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

    
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="img/buaya.png" class="d-block w-100" alt="..." style="height: 400px;width: 100px;">
    </div>

    @foreach ($pictures as $picture)
 
    <div class="carousel-item ">
        <img src="data_foto/{{ $picture->gambar }}" class="d-block w-100" alt="..." style="height: 400px">
    </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<p></p>
    <center>
        <div class="grid-conta">

            @foreach ($pictures as $picture)
            <div class="grid-item">
                <img src="data_foto/{{ $picture->gambar }}" class="img-thumbnail" style="" >
                @guest
            @else
                @if (Auth::user()->level == "pengelola")
                <form action="{{ route('pictures.destroy',$picture->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                @endif
                @endguest
            
                    </div>    
            @endforeach
        </div>
      </div>
    </center>

  
<br>

    {!! $pictures->links() !!}

      

@endsection