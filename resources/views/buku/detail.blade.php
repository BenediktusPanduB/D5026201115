@extends('layout.happy')
@section('title', 'Data Buku')

@section('konten')

    <div class="container my-5">
        <h2 class="my-5">Detail Data</h2>
        @foreach($buku as $b)
            <div class=" row mb-3">
                <div class="col-1">
                     <label class="form-label">Kode Buku</label>
                </div>
                <div class="col-1">
                    <label class="form-label">:</label>
               </div>
                <div class="col-3">
                    <label  class="form-label">{{ $b -> kodebuku }}</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label class="form-label">Merk Buku</label>
               </div>
               <div class="col-1">
                   <label class="form-label">:</label>
              </div>
               <div class="col-3">
                   <label  class="form-label">{{ $b -> merkbuku }}</label>
               </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label class="form-label">Stok</label>
               </div>
               <div class="col-1">
                   <label class="form-label">:</label>
              </div>
               <div class="col-3">
                   <label  class="form-label">{{ $b -> stockbuku }}</label>
               </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label class="form-label">Tersedia</label>
               </div>
               <div class="col-1">
                   <label class="form-label">:</label>
              </div>
               <div class="col-3">
                   <label  class="form-label">{{ $b -> tersedia }}</label>
               </div>
            </div>

            <a href="/buku"class="btn btn-warning">Back</a>

        @endforeach

    </div>


@endsection



