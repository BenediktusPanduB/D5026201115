@extends('layout.happy')
@section('title', 'Data Keranjang Belanja')


@section('konten')


    <div class="container my-5">
        <h2>Data Keranjang Belanja</h2>

        <div class="row mt-5">
            <div class="col-3">
                <form action="/keranjangbelanja/cari" method="GET">
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" name="cari" placeholder="Cari Produk .." value="{{ request('cari') }}">
                        <div class="input-group-append">
                          <button class="btn btn-outline-success" type="submit">Find</button>
                        </div>
                      </div>
                </form>
            </div>
            <div class="col-6"></div>
            <div class="col-3"></div>
        </div>
	<table  class="table table-hover table-bordered align-middle">
		<tr>
			<th width="10%">Kode Pembelian</th>
			<th width="10%">Kode Barang</th>
			<th width="10%">Jumlah Pembelian</th>
			<th width="15%">Harga Per Item</th>
			<th width="15%">Total</th>
            <th width="21%" colspan="3">Opsi</th>
		</tr>
		@foreach($keranjangbelanja as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah }}</td>
			<td>{{  number_format($p->Harga, 0, ',', '.')  }}</td>
			<td>{{ number_format($p->Jumlah*$p->Harga, 0, ',', '.') }}</td>
			<td width="7%"><a class="btn btn-warning btn-md" href="/keranjangbelanja/tambah">Beli</a></td>
			<td width="7%"><a class="btn btn-danger btn-md" href="/keranjangbelanja/hapus/{{ $p->ID }}">Batal</a></td>

		</tr>
		@endforeach
	</table>
    {{ $keranjangbelanja -> links() }}
    </div>
@endsection
