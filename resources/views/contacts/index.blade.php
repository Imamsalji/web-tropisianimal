@extends('layout.app')
@section('content')
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Subject</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($contacts as $contact)
    <tr>
        <td>{{ $contact->id }}</td>
        <td>{{ $contact->deskripsi }}</td>
        <td>{{ $contact->subject }}</td>
        <td>{{ $contact->nama }}</td>
        <td>{{ $contact->email }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection