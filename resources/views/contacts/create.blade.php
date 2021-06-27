@extends('layout.app')
@section('content')
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0134284858123!2d106.84164251419772!3d-6.645253366808867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c89505b4c37d%3A0x307fc4a38e65fa2b!2sWikrama%20Bogor%20Vocational%20School!5e0!3m2!1sen!2sid!4v1604376758820!5m2!1sen!2sid" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<div class="pull-right">
	<br>
	<div class="pull-left">

                <h2>Kontak Kami</h2>

            </div>
            <br>
            <form action="{{ route('contacts.store') }}" method="POST" >

    @csrf
<table class="table table-bordered">
        <tr>
            <td rowspan="3" style="width: 70%">
            	<textarea style="resize:none;width: 100%;height: 320px;border: 1px;" placeholder="Deskripsi" name="deskripsi" class="form-control"></textarea>
            </td>
            <td>

            	<textarea style="resize:none;width: 90%;height: 80px;border: 1px;" placeholder="Subject" name="subject" class="form-control" ></textarea>
            </td>
        </tr> 
        <tr>
            <td>
            	<textarea style="resize:none;width: 90%;height: 80px;border: 1px;" placeholder="Nama" name="nama" class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <td>
            	<textarea style="resize:none;width: 90%;height: 80px;border: 1px;" placeholder="Email" name="email" class="form-control" ></textarea>
            </td>
        </tr>
        
    </table>
    <button class="btn btn-success"  style="width: 100%">Kirim</button>
</form>
@endsection