@extends('layout.app')
@section('content')
    <h1>ini adalah breww</h1>
    @if (session("status"))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>success!</strong>
  {{ session('status') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

    @endif
    <table class="table-success table-striped table">
            <thead>
                <tr>
                    <td>no</td>
                    <td>nama</td>
                    <td>alamat</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->alamat }}</td>
                </tr>

                @endforeach
            </tbody>

    </table>
@endsection
