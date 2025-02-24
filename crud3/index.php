<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JURUSAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h3>Data Pegawai</h3>
    <a href="tambah.php">Tambah</a>
    <table class="table table-striped">
     <tr>
     <th>NO</th>
            <th>NAMA PEGAWAI</th>
            <th>JENIS KELAMIN</th>
            <th>TELEPON</th>
            <th>ALAMAT</th>
            <th>OPSI</th>
     </tr>
     <tr>
      <?php
        $dt_pegawai = mysqli_query($koneksi, "SELECT * FROM tb_pegawai");
        $no = 1;
        while ($crud3 = mysqli_fetch_array($dt_pegawai)){
            ?>
            <td><?php echo $no++; ?></td>
                <td><?php echo $crud3['nama_pegawai']; ?></td>
                <td><?php echo $crud3['jk']; ?></td>
                <td><?php echo $crud3['telepon']; ?></td>
                <td><?php echo $crud3['alamat']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $crud3['id_pegawai'] ?>">EDIT</a>
                <a href="hapus.php?id=<?php echo $crud3['id_pegawai'] ?>">HAPUS</a>
            </td>
             </tr>
            <?php
        }
       ?>
    </table>
    </div>
</body>
</html>