<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Tugas Pemrograman Web CRUD Laravel MYSQL</title>
</head>
<style>
    table{
        text-align: center;
    }
</style>
<body>


    <div class="container my-5">
        <h2>Data Pendapatan</h2>
        <h6>Benediktus Pandu B</h6>


	<br/>
	<br/>
        <div class="row ">
            <div class="col-12 d-flex justify-content-end">
                <a href="/pendapatan/tambah" class="btn btn-md btn-primary mb-3"> Tambah Data</a>
            </div>
        </div>
	<table  class="table table-hover table-bordered align-middle">
		<tr>
			<th width="10%">ID Pegawai</th>
			<th width="10%">Bulan</th>
			<th width="10%">Tahun</th>
			<th width="20%">Gaji</th>
			<th width="20%">Tunjangan</th>
            <th width="25%" colspan="2">Opsi</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Bulan }}</td>
			<td>{{ $p->Tahun }}</td>
			<td>{{ $p->Gaji }}</td>
			<td>{{ $p->Tunjangan }}</td>
			<td><a class="btn btn-warning btn-md" href="/pendapatan/edit/{{ $p->ID }}">Edit</a></td>
			<td><a class="btn btn-danger btn-md" href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a></td>

		</tr>
		@endforeach
	</table>

    </div>
</body>
</html>
