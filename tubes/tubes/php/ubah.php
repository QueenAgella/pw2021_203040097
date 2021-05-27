<?php 
require 'functions.php';

$id = $_GET['id'];
$result = query("SELECT * FROM barang WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = 'admin.php';
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Admin | Edit Product</title>
  <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
</head>
<body class="bg-light">
  <div class="card-header text-center bg-dark text-white rounded-0">
    <h3>Edit Product</h3>
  </div>
  <br>
<div class="col-8 m-auto text-dark">
    <form action="" method="POST">
    <div class="card rounded-5">
      <input type="hidden" name="id" value="<?= $result['id']; ?>">
      <div class="form-group">
        <label for="nama">Name</label>
        <input type="text" class="form-control" value="<?= $result['nama']; ?>" name="nama" id="nama" required>
      </div>
      <div class="form-group">
        <label for="deskripsi">Description</label>
        <input type="text" class="form-control" value="<?= $result['deskripsi']; ?>" name="deskripsi" id="deskripsi" required>
      </div>
      <div class="form-group">
        <label for="harga">Price</label>
        <input type="text" class="form-control" value="<?= $result['harga']; ?>" name="harga" id="harga" required>
      </div>
      <div class="form-group">
        <span>Picture</span>
        <input type="file" class="form-control" value="<?= $result['gambar']; ?>" name="gambar" id="gambar" required><br>
      </div>
      <button type="submit" class="btn btn-primary rounded-0" name="ubah">Edit Data</button>
    </form>
  </div>
<br>
  <div class="kembali">
        <a href="<?= "admin.php" ?>" class="btn btn-danger rounded-5">Back</a>

</body>

</html>