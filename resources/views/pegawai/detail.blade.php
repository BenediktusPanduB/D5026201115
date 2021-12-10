@extends('layout.happy')
@section('title', 'Data Pegawai')

@section('konten')

    <div class="container my-5">
        <h2 class="my-5">Detail Data</h2>
        @foreach($pegawai as $p)
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
                    <label for="jabaran" class="form-label">Jabatan</label>
               </div>
               <div class="col-1">
                   <label class="form-label">:</label>
              </div>
               <div class="col-3">
                   <label  class="form-label">{{ $p -> pegawai_jabatan }}</label>
               </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label class="form-label">Umur</label>
               </div>
               <div class="col-1">
                   <label class="form-label">:</label>
              </div>
               <div class="col-3">
                   <label  class="form-label">{{ $p -> pegawai_umur }}</label>
               </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label class="form-label">Alamat</label>
               </div>
               <div class="col-1">
                   <label class="form-label">:</label>
              </div>
               <div class="col-3">
                   <label  class="form-label">{{ $p -> pegawai_alamat }}</label>
               </div>
            </div>

            <a href="/pegawai"class="btn btn-warning">Back</a>

        @endforeach

    </div>


@endsection



