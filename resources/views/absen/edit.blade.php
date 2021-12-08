@extends('layout.happy')
@section('title', 'Data Absen')

@section('konten')

    <div class="container my-5">
        <h2 class="my-5">Edit Data</h2>
        @foreach($absen as $a)
        <form action="/absen/update" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
                <input type="hidden" name="ID" value="{{ $a->ID}}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pegawai</label>
                <select class="form-control" name="nama" id="nama"  onchange="myFunction()">
                    @foreach ($pegawai as $p)
                        <option value="{{ $p -> pegawai_id }}" @if($p->pegawai_id === $a->IDPegawai) selected="selected" @endif> {{ $p -> pegawai_nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="IDPegawai" class="form-label">ID Pegawai</label>
                <input type="text" name="IDPegawai" class="form-control" id="IDPegawai" pattern="[\d0-9]{0,}" maxlength="11" required ="required" value="{{ $a -> IDPegawai }}">

            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="datetime-local" name="tanggal" class="form-control" id="tanggal"  required="required"  value="{{ $a -> Tanggal }}">
            </div>
            <div class="mb-3">
                <label for="Status" class="form-label">Status</label> <br>
                <input class="form-check-input" type="radio" id="h" name="status" value="H" @if($a->Status==='H') checked="checked" @endif>
                <label for="h">HADIR</label>
                <input class="form-check-input" type="radio" id="a" name="status" value="A" @if($a->Status==='A') checked="checked" @endif>
                <label for="a">TIDAK HADIR</label><br>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a href="/absen"class="btn btn-warning">Back</a>

        @endforeach
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

        <script>
            function myFunction() {
            var x = document.getElementById("nama").value;
            document.getElementById("IDPegawai").value = x;
  }
        </script>



@endsection



