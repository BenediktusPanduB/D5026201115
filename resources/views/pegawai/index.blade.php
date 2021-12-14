@extends('layout.happy')
@section('title', 'Data Pegawai')


@section('konten')


    <div class="container my-5">
        <h2>Data Pegawai</h2>

        <div class="row mt-5">
            <div class="col-3">
                <form action="/pegawai/cari" method="GET">
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ request('cari') }}">
                        <div class="input-group-append">
                          <button class="btn btn-outline-success" type="submit">Find</button>
                        </div>
                      </div>
                </form>
            </div>
            <div class="col-6"></div>
            <div class="col-3 d-flex justify-content-end">
                <a href="/pegawai/tambah" class="btn btn-md btn-primary mb-3"> Tambah Data</a>
            </div>
        </div>
	<table  class="table table-hover table-bordered align-middle">
		<tr>
			<th width="20%">Nama Lengkap</th>
			<th width="15%">Jabatan</th>
			<th width="10%">Umur</th>
			<th width="15%">Alamat</th>
            <th width="20%" colspan="3">Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>

			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>

			<td><a class="btn btn-warning btn-md" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a></td>
			<td><a class="btn btn-secondary btn-md" href="/pegawai/detail/{{ $p->pegawai_id }}">View</td>
			<td><a class="btn btn-danger btn-md" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a></td>

		</tr>
		@endforeach
	</table>

    {{ $pegawai->links()  }}

    </div>
@endsection
