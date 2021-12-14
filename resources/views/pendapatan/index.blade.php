@extends('layout.happy')
@section('title', 'Data Pendapatan')


@section('konten')


    <div class="container my-5">
        <h2>Data Pendapatan</h2>
        <h6>Benediktus Pandu B</h6>

        <div class="row mt-5">
            <div class="col-3">
                <form action="/pendapatan/cari" method="GET">
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" name="cari" placeholder="Cari Pendapatan .." value="{{ request('cari') }}">
                        <div class="input-group-append">
                          <button class="btn btn-outline-success" type="submit">Find</button>
                        </div>
                      </div>
                </form>
            </div>
            <div class="col-6"></div>
            <div class="col-3 d-flex justify-content-end">
                <a href="/pendapatan/tambah" class="btn btn-md btn-primary mb-3"> Tambah Data</a>
            </div>
        </div>
	<table  class="table table-hover table-bordered align-middle">
		<tr>
			<th width="20%">Nama Pegawai</th>
			<th width="10%">Bulan</th>
			<th width="10%">Tahun</th>
			<th width="15%">Gaji</th>
			<th width="15%">Tunjangan</th>
            <th width="20%" colspan="2">Opsi</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Bulan }}</td>
			<td>{{ $p->Tahun }}</td>
			<td>{{ $p->Gaji }}</td>
			<td>{{ $p->Tunjangan }}</td>
			<td><a class="btn btn-warning btn-md" href="/pendapatan/edit/{{ $p->ID }}">Edit</a></td>
			<td><a class="btn btn-danger btn-md" href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a></td>

		</tr>
		@endforeach
	</table>
    {{ $pendapatan -> links() }}
    </div>
@endsection
