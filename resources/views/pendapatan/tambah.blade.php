<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pendapatan</title>
  </head>
  <body>



    <div class="container my-5">
        <form action="/pendapatan/store" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="IDPegawai" class="form-label">IDPegawai</label>
                <input type="number" name="IDPegawai" class="form-control" id="IDPegawai" placeholder="Masukan ID Pegawai" >
            </div>
            <div class="mb-3">
                <label for="Bulan" class="form-label">Bulan</label>
                <input type="number" name="Bulan" class="form-control" id="Bulan" placeholder="Masukan Bulan">
            </div>
            <div class="mb-3">
                <label for="Tahun" class="form-label">Tahun</label>
                <input type="text" name="Tahun" class="form-control" id="Tahun" placeholder="Masukan Tahun">
            </div>
            <div class="mb-3">
                <label for="Gaji" class="form-label">Gaji</label>
                <input type="number" name="Gaji" class="form-control" id="Gaji" placeholder="Masukan Gaji">
            </div>
            <div class="mb-3">
                <label for="Tunjangan" class="form-label">Tunjangan</label>
                <input type="number" name="Tunjangan" class="form-control" id="Tunjangan" placeholder="Masukan Tunjangan">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a href="/pendapatan"class="btn btn-warning">Back</a>

        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>
