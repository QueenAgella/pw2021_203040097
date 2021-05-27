<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';


if (isset($_POST['tambah'])) {

  $data = [
    'id'                => $_POST['id'],
    'nama'              => $_POST['nama'],
    'gambar'            => $_POST['gambar'],
    'deskripsi'         => $_POST['deskripsi'],
    'harga'             => $_POST['harga']
  ];

  if (tambah($data) > 0) {
    echo "<script>
            alert('Product Succesfull Uploaded!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Failed Upload Product!');
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

  <title>Admin | Add Product</title>
  <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
</head>

<body style="background-image: url('../assets/img/bg.jpg'); background-size: cover;">

  <div class="container col-6 mt-5">

    <form action="" method="POST">
      <div class="form-group">
        <div class="card rounded-5">
          <div class="card-header text-center bg-dark text-white">
            <h3>Form Add Product</h3>
          </div>
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="nama">Name</label>
                <input type="text" name="nama" class="form-control rounded-0" id="nama" autofocus required>
              </div>
              <div class="form-group">
                <label for="deskripsi">Description</label>
                <input type="text" name="deskripsi" class="form-control rounded-0" id="deskripsi">
              </div>
              <div class="form-group">
                <label for="harga">Price</label>
                <input type="text" name="harga" class="form-control rounded-0" id="harga">
              </div>
              <div class="form-group">
                <span>Picture</span>
                <input type="file" name="gambar" id="gambar" required><br>
                </div>
              <button type="submit" name="tambah" class="btn btn-success float-right rounded-5 mt-n2">Add</button>
              <a href="<?= "admin.php" ?>" class="btn btn-danger float-right rounded-5 mt-n2 mr-4">Back</a>
            </form>
          </div>
    </form>
  </div>

</body>

</html>