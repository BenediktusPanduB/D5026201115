<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        body {
            background-image: url(https://starwarsblog.starwars.com/wp-content/uploads/2020/04/star-wars-backgrounds-14.jpg);
        }

        .form-body{
            background-color: #1b1b1b;
            color: white;
        }
    </style>

</head>

<body>
    <div class="container-lg w-75 bg-dark p-5 ">
        <div class="form-body p-5 rounded">
            <h6>Benediktus Pandu B <br>Bene <br>5026201115
            </h6>
            <h1 class="text-center my-5">Form Input Data Barang</h1>


            <form name="FormBarang" action="www.google.com" onsubmit="return validateForm();">
                <div class="namabarang mt-5 my-3">
                    <div class="row">
                        <div class="col-4">
                            <label class="form-label" for="namabarang">Nama Barang</label>
                        </div>
                        <div class="col-1">
                            <p>:</p>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control" id="namabarang" name="namabarang" minlength="10">
                            <p class="" id="satu"></p>
                        </div>
                    </div>
                </div>
                <div class="harga my-3">
                    <div class="row">
                        <div class="col-4">
                            <label class="form-label" for="harga">Harga</label>
                        </div>
                        <div class="col-1">
                            <p>:</p>
                        </div>
                        <div class="col-7">
                            <input type="number" class="form-control" id="harga" name="harga" min="5000">
                        </div>
                    </div>
                </div>
                <div class="jenisBarang my-3">
                    <div class="row">
                        <div class="col-4">
                            <label class="form-label" for="jenisBarang">Jenis Barang</label>
                        </div>
                        <div class="col-1">
                            <p>:</p>
                        </div>
                        <div class="col-7">
                            <select class="form-select" name="jenisBarang" id="jenisBarang">
                                <option value="" readonly="true" hidden="true">Please Choose</option>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                                <option value="NonMamin">Non-Makanan Minuman</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="barcode my-3">
                    <div class="row">
                        <div class="col-4">
                            <label class="form-label" for="barcode">Kode Barcode</label>
                        </div>
                        <div class="col-1">
                            <p>:</p>
                        </div>
                        <div class="col-7">
                            <input type="number" class="form-control" id="barcode" name="barcode" pattern="[1-9]{>10}"
                                >
                        </div>
                    </div>
                </div>

                <div class="buttonbar mt-5 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mx-5" style="width: 300px;">Kirim</button>
                    <button type="reset" class="btn btn-success mx-5" style="width: 300px;">Reset</button>
                </div>

            </form>
        </div>

    </div>

    <script>
        var namabarang = document.getElementById('namabarang');
        var harga = document.getElementById('harga');
        var namabarang = document.getElementById('namabarang');
        var namabarang = document.getElementById('namabarang');
        var satu = document.getElementById('satu')
        function validateForm(){
            if (namabarang.value == ""){
                satu.innerHTML = "Masukan Nama Barang";
                satu.style.color = "red";
                namabarang.focus();
                return false;
            }
            if (namabarang.value == ""){
                satu.innerHTML = "Masukan Nama Barang";
                satu.style.color = "red";
                namabarang.focus();
                return false;
            }
            if (namabarang.value == ""){
                satu.innerHTML = "Masukan Nama Barang";
                satu.style.color = "red";
                namabarang.focus();
                return false;
            }
            if (namabarang.value == ""){
                satu.innerHTML = "Masukan Nama Barang";
                satu.style.color = "red";
                namabarang.focus();
                return false;
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


</body>

</html>
