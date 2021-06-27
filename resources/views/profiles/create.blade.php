@extends('layout.app')

 

@section('content')
<form action="{{ route('profiles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <br>
                    <div class="card">
                        <div class="header">
                            <h2>Isi Biodata</h2>
                           
                        </div>
                        <div class="body">
                            <form action="{{ route('profiles.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nip" class="form-control" required>
                                        <label class="form-label">nama_guru</label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                        <label for="exampleFormControlFile1">Upload File</label>
                                        <input type="file" class="form-control" name="gambar" id="fel">
                                    </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </form>
            @endsection