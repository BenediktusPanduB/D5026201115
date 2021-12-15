@extends('layout.happy')
@section('title', 'Data Keranjang Belanja')


@section('konten')



    <div class="container my-5">
        <form action="/keranjangbelanja/store" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="KodeBarang" class="form-label">KodeBarang</label>
                <input type="number" name="KodeBarang" class="form-control" id="KodeBarang" placeholder="Masukan Kode Barang" >
            </div>
            <div class="mb-3">
                <label for="Jumlah" class="form-label">Jumlah</label>
                <input type="number" name="Jumlah" class="form-control" id="Jumlah" placeholder="Masukan Jumlah">
            </div>
            <div class="mb-3">
                <label for="Harga" class="form-label">Harga Per Item</label>
                <input type="integer" name="Harga" class="form-control" id="Harga" placeholder="Masukan Harga Per Item">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a href="/keranjangbelanja"class="btn btn-warning">Back</a>

        </form>

    </div>


 @endsection
