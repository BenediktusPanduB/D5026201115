@extends('layout.happy')
@section('title', 'Data Absen')

@section('konten')

    <div class="container my-5">
        <h2 class="my-5">Detail Data</h2>
        @foreach($absen as $b)
            <div class=" row mb-3">
                <div class="col-2">
                     <label class="form-label">ID Pegawai</label>
                </div>
                <div class="col-1">
                    <label class="form-label">:</label>
               </div>
                <div class="col-3">
                    <label  class="form-label">{{ $b -> IDPegawai }}</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label class="form-label">Nama Pegawai</label>
               </div>
               <div class="col-1">
                   <label class="form-label">:</label>
              </div>
               <div class="col-3">
                   <label  class="form-label">{{ $b -> pegawai_nama }}</label>
               </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label class="form-label">Tanggal</label>
               </div>
               <div class="col-1">
                   <label class="form-label">:</label>
              </div>
               <div class="col-3">
                   <label  class="form-label">{{ $b -> Tanggal }}</label>
               </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label class="form-label">Status</label>
               </div>
               <div class="col-1">
                   <label class="form-label">:</label>
              </div>
               <div class="col-3">
                   <label  class="form-label">{{ $b -> Status }}</label>
               </div>
            </div>

            <a href="/absen"class="btn btn-warning">Back</a>

        @endforeach

    </div>


@endsection



