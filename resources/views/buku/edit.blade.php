@extends('layout.happy')
@section('title', 'Data Buku')

@section('konten')

    <div class="container my-5">
        <h2 class="my-5">Edit Data</h2>
        @foreach($buku as $b)
        <form action="/buku/update" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
                <input type="hidden" name="kodebuku" value="{{ $b->kodebuku}}">
            </div>
            <div class="mb-3">
                <label for="merkbuku" class="form-label">Merk Buku</label>
                <input type="text" name="merkbuku" class="form-control" id="merkbuku" value="{{ $b -> merkbuku }}" >
            </div>
            <div class="mb-3">
                <label for="stockbuku" class="form-label">Stock Buku</label>
                <input type="text" name="stockbuku" class="form-control" id="stockbuku" value="{{ $b -> stockbuku }}">
            </div>
            <div class="mb-3">
                <label for="tersedia" class="form-label">Ketersediaan</label> <br>
                <input class="form-check-input" type="radio" id="tersedia" name="tersedia" value="Y"@if($b->tersedia==='Y') checked="checked" @endif>
                <label for="tersedia">Tersedia</label>
                <input class="form-check-input" type="radio" id="a" name="tersedia" value="T" @if($b->tersedia==='T') checked="checked" @endif >
                <label for="tidaktersedia">Tidak Tersedia</label><br>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a href="/buku"class="btn btn-warning">Back</a>

        @endforeach
        </form>

    </div>


@endsection



