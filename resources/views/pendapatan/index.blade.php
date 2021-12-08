@extends('layout.happy')
@section('title', 'Data Absen')


@section('konten')


    <div class="container my-5">
        <h2>Data Pendapatan</h2>
        <h6>Benediktus Pandu B</h6>

        <div class="row ">
            <div class="col-12 d-flex justify-content-end">
                <a href="/pendapatan/tambah" class="btn btn-md btn-primary mb-3"> Tambah Data</a>
            </div>
        </div>
	<table  class="table table-hover table-bordered align-middle">
		<tr>
			<th width="10%">ID Pegawai</th>
			<th width="10%">Bulan</th>
			<th width="10%">Tahun</th>
			<th width="20%">Gaji</th>
			<th width="20%">Tunjangan</th>
            <th width="20%" colspan="2">Opsi</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Bulan }}</td>
			<td>{{ $p->Tahun }}</td>
			<td>{{ $p->Gaji }}</td>
			<td>{{ $p->Tunjangan }}</td>
			<td><a class="btn btn-warning btn-md" href="/pendapatan/edit/{{ $p->ID }}">Edit</a></td>
			<td><a class="btn btn-danger btn-md" href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a></td>

		</tr>
		@endforeach
	</table>

    </div>
@endsection
