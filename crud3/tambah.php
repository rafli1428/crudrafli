<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h3 class="text-center">Form Tambah Data</h3>
    <form action="tambah_proses.php" method="POST">
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">NAMA PEGAWAI</label>
        <div class="col-sm-4">
        <input class="from-control"type="text" name="nama_pegawai">
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">JENIS KELAMIN</label>
        <div class="col-sm-4">
        <select name="jk" class="form-select">
            <option value="laki-laki">laki laki</option>
            <option value="perempuan">perempuan</option>
        </select>
        </div>
     </div>
     <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">TELEPON</label>
        <div class="col-sm-4">
        <input class="from-control"type="number" name="telepon">
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">ALAMAT</label>
        <div class="col-sm-4">
        <input class="from-control"type="text" name="alamat">
        </div>
      </div>
      <div>
        <input type="submit" value="SIMPAN">
        <a href="index.php">KEMBALI</a>
      </div>
    </form>
    </div>
</body>
</html>