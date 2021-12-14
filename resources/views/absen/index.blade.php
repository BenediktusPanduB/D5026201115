@extends('layout.happy')
@section('title', 'Data Absen')


@section('konten')


    <div class="container my-5">
        <h2>Data Absen</h2>

        <div class="row mt-5">
            <div class="col-3">
                <form action="/absen/cari" method="GET">
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" name="cari" placeholder="Cari Absen .." value="{{ request('cari') }}">
                        <div class="input-group-append">
                          <button class="btn btn-outline-success" type="submit">Find</button>
                        </div>
                      </div>
                </form>
            </div>
            <div class="col-6"></div>
            <div class="col-3 d-flex justify-content-end">
                <a href="/absen/tambah" class="btn btn-md btn-primary mb-3"> Tambah Data</a>
            </div>
        </div>
	<table  class="table table-sm table-hover table-bordered align-middle">
		<tr>
			<th width="20%">Nama Pegawai</th>
			<th width="10%">Tanggal</th>
			<th width="10%">Status</th>
            <th width="21%" colspan="3">Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>

			<td width="7%"><a class="btn btn-warning btn-md" href="/absen/edit/{{ $p->ID }}">Edit</a></td>
            <td width="7%"><a class="btn btn-secondary btn-md" href="/absen/detail/{{ $p->IDPegawai }}">View</td>
			<td width="7%"><a class="btn btn-danger btn-md" href="/absen/hapus/{{ $p->ID }}">Hapus</a></td>

		</tr>
		@endforeach
	</table>
{{ $absen->links()  }}
    </div>
@endsection
