@extends('layout.happy')
@section('title', 'Data Buku')

@section('konten')



    <div class="container my-5">
        <form action="/buku/store" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="merkbuku" class="form-label">Merk Buku</label>
                <input type="text" name="merkbuku" class="form-control" id="merkbuku" placeholder="Masukan Merk Buku" >
            </div>
            <div class="mb-3">
                <label for="stockbuku" class="form-label">Stok Buku</label>
                <input type="text" name="stockbuku" class="form-control" id="stockbuku" placeholder="Masukan stockbuku">
            </div>
            <div class="mb-3">
                <label for="tersedia" class="form-label">Ketersediaan</label> <br>
                <input class="form-check-input" type="radio" id="tersedia" name="tersedia" value="Y">
                <label for="tersedia">Tersedia</label>
                <input class="form-check-input" type="radio" id="a" name="tersedia" value="T" >
                <label for="tidaktersedia">Tidak Tersedia</label><br>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a href="/buku"class="btn btn-warning">Back</a>

        </form>

    </div>


 @endsection
