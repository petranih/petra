@extends('layout.app')
@section('content')
    <h1>ini adalah breww</h1>
    <div class="row col-12">
<form method="POST" action="{{ route('Mahasiswa.store') }}">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
<div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="gender" name="alamat">
  </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

@endsection

