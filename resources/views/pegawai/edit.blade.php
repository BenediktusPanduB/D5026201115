@extends('layout.happy')
@section('title', 'Data Pegawai')

@section('konten')

    <div class="container my-5">
        <h2 class="my-5">Edit Data</h2>
        @foreach($pegawai as $p)
        <form action="/pegawai/update" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
                <input type="hidden" name="id" value="{{ $p->pegawai_id}}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ $p -> pegawai_nama }}" >
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" name="jabatan" class="form-control" id="jabatan" value="{{ $p -> pegawai_jabatan }}">
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur</label>
                <input type="number" name="umur" class="form-control" id="umur" value="{{ $p -> pegawai_umur }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $p -> pegawai_alamat }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a href="/pegawai"class="btn btn-warning">Back</a>

        @endforeach
        </form>

    </div>


@endsection



