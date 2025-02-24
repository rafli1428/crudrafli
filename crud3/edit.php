<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h3 class="text-center">Form Edit Data</h3>
    <?php
      include "config.php";

      //Menangkap data dari halaman index
      $id_pegawai = $_GET['id'];
      $dt_pegawai = mysqli_query($koneksi, "SELECT * FROM tb_pegawai where id_pegawai = $id_pegawai");
      while($crud3 = mysqli_fetch_array($dt_pegawai)){
    ?>
    <form action="edit_proses.php" method="POST">
        <div class="mb-3 row">
          <label  class="col-sm-2 col-form-label">NAMA PEGAWAI</label>
          <div class="col-sm-4">
          <input type="hidden" name="id_pegawai" value="<?= $crud3['id_pegawai']; ?>">
          <input class="from-control"type="text" name="nama_pegawai" value="<?= $crud3['nama_pegawai']; ?>">
          </div>
      </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">JENIS KELAMIN</label>
          <div class="col-sm-4">
          <select name="jk" class="form-select">
            <option <?php if($crud3['jk']=="laki-laki"){echo "selected='selected'";} ?>>laki-laki</option>
            <option <?php if($crud3['jk']=="perempuan"){echo "selected='selected'";} ?>>perempuan</option>
          </select>
          </div>
        </div>
        <div class="mb-3 row">
          <label  class="col-sm-2 col-form-label">TELEPON</label>
          <div class="col-sm-4">
          <input type="number" name="telepon" value="<?= $crud3['telepon']; ?>">
          </div>
      </div>
      <div class="mb-3 row">
          <label  class="col-sm-2 col-form-label">ALAMAT</label>
          <div class="col-sm-4">
          <input type="text" name="alamat" value="<?= $crud3['alamat']; ?>">
          </div>
      </div>
        <div>
            <input type="submit" value="UPDATE">
            <a href="index.php">KEMBALI</a>
        </div>
    </form>
    <?php } ?>
    
</body>
</html>