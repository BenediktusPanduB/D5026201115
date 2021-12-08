@extends('layout.happy')
@section('title', 'Data Pengapatan')

@section('konten')

    <div class="container my-5">
        <h2 class="my-5">Edit Data</h2>
        @foreach($pendapatan as $p)
        <form action="/pendapatan/update" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
                <input type="hidden" name="ID" value="{{ $p->ID }}">
            </div>
            <div class="mb-3">
                <label for="IDPegawai" class="form-label">IDPegawai</label>
                <input type="number" name="IDPegawai" class="form-control" id="IDPegawai" value="{{ $p -> IDPegawai }}" >
            </div>
            <div class="mb-3">
                <label for="Bulan" class="form-label">Bulan</label>
                <input type="number" name="Bulan" class="form-control" id="Bulan" value="{{ $p -> Bulan }}">
            </div>
            <div class="mb-3">
                <label for="Tahun" class="form-label">Tahun</label>
                <input type="text" name="Tahun" class="form-control" id="Tahun" value="{{ $p -> Tahun }}">
            </div>
            <div class="mb-3">
                <label for="Gaji" class="form-label">Gaji</label>
                <input type="number" name="Gaji" class="form-control" id="Gaji" value="{{ $p -> Gaji }}">
            </div>
            <div class="mb-3">
                <label for="Tunjangan" class="form-label">Tunjangan</label>
                <input type="number" name="Tunjangan" class="form-control" id="Tunjangan" value="{{ $p -> Tunjangan }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a href="/pendapatan"class="btn btn-warning">Back</a>

        @endforeach
        </form>

    </div>


@endsection



