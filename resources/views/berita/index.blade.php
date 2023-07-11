@extends('backendnew')
@section('konten')
{{-- <h2 class="main-title">Halaman Berita</h2> --}}
<link rel="stylesheet" href="berita.css">
<div class="card mb-4" style="background-color:var(--bs-body-bg)">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Berita Informatika</div>
    <div class="card-body">
    <div class="table-responsive">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    <a class="btn btn-success" href="{{ route('berita.create') }}"> Tambah Berita <i class="fas fa-plus"></i></a>
    <p style="margin-top:20px"></p>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul Berita</th>
                <th>Deskripsi</th>
                <th>Tanggal Rilis</th>
                <th width="150px">Foto Berita</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Berita apakah itu</td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi praesentium, iusto dicta repellat aliquam temporibus. Pariatur, dolorum, eum temporibus vitae iusto ipsa eligendi esse tempora totam, vero qui sit. Neque.</td>
                <td>19-03-03</td>
                <td><img src="{{url('/data_file/berita/1686109822_beach-2562563_1280.jpg')}}" alt=""></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Berita apakah itu</td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi praesentium, iusto dicta repellat aliquam temporibus. Pariatur, dolorum, eum temporibus vitae iusto ipsa eligendi esse tempora totam, vero qui sit. Neque.</td>
                <td>19-03-03</td>
                <td><img src="{{url('/data_file/berita/1686109822_beach-2562563_1280.jpg')}}" alt=""></td>
                <td></td>
            </tr>
        </tbody>
    </table>
        </div>
    </div>
</div>
<!-- {!! $beritas->links() !!} -->
@endsection
