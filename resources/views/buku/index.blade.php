@extends('layout.happy')
@section('title', 'Data Buku')


@section('konten')


    <div class="container my-5">
        <h2>Data Buku</h2>

        <div class="row mt-5">
            <div class="col-3">
                <form action="/buku/cari" method="GET">
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" name="cari" placeholder="Cari Buku .." value="{{ request('cari') }}">
                        <div class="input-group-append">
                          <button class="btn btn-outline-success" type="submit">Find</button>
                        </div>
                      </div>
                </form>
            </div>
            <div class="col-6"></div>
            <div class="col-3 d-flex justify-content-end">
                <a href="/buku/tambah" class="btn btn-md btn-primary mb-3"> Tambah Data</a>
            </div>
        </div>
	<table  class="table table-hover table-bordered align-middle">
		<tr>
			<th width="10%">Kode Buku</th>
			<th width="25%">Merk Buku</th>
			<th width="10%">Stok Buku</th>
			<th width="10%">Tersedia</th>
            <th width="21%" colspan="3">Opsi</th>
		</tr>
		@foreach($buku as $b)
		<tr>

			<td>{{ $b->kodebuku }}</td>
			<td>{{ $b->merkbuku }}</td>
			<td>{{ $b->stockbuku }}</td>
			<td>{{ $b->tersedia }}</td>

			<td width="7%"><a class="btn btn-warning btn-md" href="/buku/edit/{{ $b->kodebuku }}">Edit</a></td>
			<td width="7%"><a class="btn btn-secondary btn-md" href="/buku/detail/{{ $b->kodebuku }}">View</td>
			<td width="7%"><a class="btn btn-danger btn-md" href="/buku/hapus/{{ $b->kodebuku }}">Hapus</a></td>

		</tr>
		@endforeach
	</table>

    {{ $buku->links()  }}

    </div>
@endsection
