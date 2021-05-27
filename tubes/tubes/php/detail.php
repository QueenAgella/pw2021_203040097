<?php
if (!isset($_GET['id'])) {
    header("location:../index.php");
    exit;
}
require '../php/functions.php';

$id = $_GET['id'];

$result = query("SELECT * FROM barang where id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFM Speedshop</title>
    <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

</head>
<body style="background-image: url('../assets/img/bg.jpg'); background-size: cover">
<div class="b-example-divider"></div>

  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        </a>

        <ul class="nav col-1 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><h3>UFM SPEEDSHOP</h3></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
        <div class="text-end">
        </div>
      </div>
    </div>
  </header>

    <br>
    <div class="card ml-3 mt-3 m-auto" style="width: 40rem;">
        <img src="../assets/img/<?= $result["gambar"]; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $result["nama"]; ?></h5>
            <p class="card-text"><?= $result["deskripsi"]; ?></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $result["harga"]; ?></li>
        </ul>
        <div class="card-body">
            <a href="../index.php" class="card-link btn btn-success rounded-5">Back</a>
        </div>
    </div>

</body>

</html>