@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'Tambah Data Absen')

@section('konten')



    <div class="container my-5">
        <form action="/absen/store" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="ID Pegawai" class="form-label">ID Pegawai</label>
                <select class="form-control" name="idpegawai">
                    @foreach($pegawai as $p )
                        <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div>


            <div class="mt-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="datetime-local" name="tanggal" class="form-control" id="tanggal">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label> <br>
                <input type="radio" id="h" name="status" value="H">
                <label for="h">HADIR</label>
                <input type="radio" id="a" name="status" value="A" >
                <label for="a">TIDAK HADIR</label><br>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a href="/absen"class="btn btn-warning">Back</a>

        </form>

    </div>
    <script type="text/javascript">
        $(function() {
            $('#tanggal').datetimepicker({
                format: "YYYY-MM-DD hh:mm:ss",
                "defaultDate": new Date(),
                locale : "id"
            });
        });
    </script>


 @endsection
