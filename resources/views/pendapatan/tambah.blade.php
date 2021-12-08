@extends('layout.happy')
@section('title', 'Data Pendapatan')


@section('konten')



    <div class="container my-5">
        <form action="/pendapatan/store" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="IDPegawai" class="form-label">IDPegawai</label>
                <input type="number" name="IDPegawai" class="form-control" id="IDPegawai" placeholder="Masukan ID Pegawai" >
            </div>
            <div class="mb-3">
                <label for="Bulan" class="form-label">Bulan</label>
                <input type="number" name="Bulan" class="form-control" id="Bulan" placeholder="Masukan Bulan">
            </div>
            <div class="mb-3">
                <label for="Tahun" class="form-label">Tahun</label>
                <input type="text" name="Tahun" class="form-control" id="Tahun" placeholder="Masukan Tahun">
            </div>
            <div class="mb-3">
                <label for="Gaji" class="form-label">Gaji</label>
                <input type="number" name="Gaji" class="form-control" id="Gaji" placeholder="Masukan Gaji">
            </div>
            <div class="mb-3">
                <label for="Tunjangan" class="form-label">Tunjangan</label>
                <input type="number" name="Tunjangan" class="form-control" id="Tunjangan" placeholder="Masukan Tunjangan">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a href="/pendapatan"class="btn btn-warning">Back</a>

        </form>

    </div>


 @endsection
