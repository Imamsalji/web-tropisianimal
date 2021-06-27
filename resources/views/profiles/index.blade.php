@extends('layout.app')

 

@section('content')

    

            <center>

                <h2>Profile</h2>

            </center>


   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   @foreach ($profiles as $profile)

<div class="row">
   <div class="col-md-2">
    <p>

    <center>
        <img id="old-avatar" class="profile-user-img img-fluid img-rounded" src="data_foto/{{ $profile->gambar }}" alt="User profile picture" style="width: 160px;height: 160px">

        <form action="{{ route('profiles.destroy',$profile->id) }}" method="POST">
          <br>  
          <p>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-lg">Edit Potoprofile</button>
</p>
          <a class="btn btn-danger" href="{{ route('profiles.edit',$profile->id) }}" style="width: 160px">Edit Dataprofile</a>
          @csrf
        @method('DELETE')
      </form>
    </center>
    </p>
    <!-- Button trigger modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('profiles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                            <form action="{{ route('profiles.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <table class="table table-hover">
      <tr>
        <td><strong>Nip</strong></td>
        <td>:</td>
        <td><input type="text" class="form-control" disabled="" value="{{ $profile->nip }}"></td>
      </tr>  
      <tr>
        <td><strong>Upload Untuk mengganti Foto Profile</strong></td>
        <td>:</td>
        <td><input type="file" class="form-control" name="gambar" id="fel"></td>
      </tr>
      
    </table>
    <p>
                                <button type="submit" name="nip" value="{{ $profile->nip }}" class="btn btn-success" style="width: 760px">Submit</button>
</p>
                            </form>
                        
                </div>

            </form>

        </div>
    </div>
</div>
    
  </div>
  <div class="col-md-10">
    <table class="table table-hover">
      <tr>
        <td><strong>Nomor</strong></td>
        <td>:</td>
        <td>{{ ++$i }}</td>
      </tr>  
      <tr>
        <td><strong>Nip</strong></td>
        <td>:</td>
        <td>{{ $profile->nip }}</td>
      </tr>
      <tr>
        <td><strong>Nama Depan</strong></td>
        <td>:</td>
        <td>{{ $profile->name }}</td>
      </tr>
      <tr>
        <td><strong>Nama Belakang</strong></td>
        <td>:</td>
        <td>{{ $profile->nama_belakang }}</td>
      </tr>
      <tr>
        <td><strong>Jenis Kelamin</strong></td>
        <td>:</td>
        <td>{{ $profile->jk }}</td>
      </tr>
      <tr>
        <td><strong>Email</strong></td>
        <td>:</td>
        <td>{{ $profile->email }}</td>
      </tr>
      <tr>
        <td><strong>Nomor HP</strong></td>
        <td>:</td>
        <td>{{ $profile->no_hp }}</td>
      </tr>
    </table>
  </div>
</div>

                <br>
@endforeach

  




    
  



    {!! $profiles->links() !!}

      

@endsection