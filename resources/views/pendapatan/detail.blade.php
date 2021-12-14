@extends('layout.happy')
@section('title', 'Data Pendapatan')

@section('konten')

    <div class="container my-5">
        <h2 class="my-5">Detail Data</h2>
        @foreach($pendapatan as $p)
            <div class=" row mb-3">
                <div class="col-1">
                     <label class="form-label">Nama</label>
                </div>
                <div class="col-1">
                    <label class="form-label">:</label>
               </div>
                <div class="col-3">
                    <label  class="form-label">{{ $p -> pegawai_nama }}</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label for="jabaran" class="form-label">Bulan</label>
               </div>
               <div class="col-1">
                   <label class="form-label">:</label>
              </div>
               <div class="col-3">
                   <label  class="form-label">{{ $p -> Bulan }}</label>
               </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label class="form-label">Tahun</label>
               </div>
               <div class="col-1">
                   <label class="form-label">:</label>
              </div>
               <div class="col-3">
                   <label  class="form-label">{{ $p -> Tahun }}</label>
               </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label class="form-label">Gaji</label>
               </div>
               <div class="col-1">
                   <label class="form-label">:</label>
              </div>
               <div class="col-3">
                   <label  class="form-label">{{ $p -> Gaji }}</label>
               </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label class="form-label">Tunjangan</label>
               </div>
               <div class="col-1">
                   <label class="form-label">:</label>
              </div>
               <div class="col-3">
                   <label  class="form-label">{{ $p -> Tunjangan }}</label>
               </div>
            </div>

            <a href="/pendapatan"class="btn btn-warning">Back</a>

        @endforeach

    </div>


@endsection



