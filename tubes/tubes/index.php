<?php
require 'php/functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $barang = query("SELECT * FROM barang WHERE
                    nama LIKE '%$keyword%' OR
                    gambar LIKE '%$keyword%' OR
                    deskripsi LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%'
                    ");
} else {
  $barang = query("SELECT * FROM barang");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>UFM Speedshop</title>
  <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

</head>

<body style="background-image: url('assets/img/bg.jpg'); background-size: cover">
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
        <a href="php/login.php" class="text-white btn btn-outline-primary rounded-5">Login</a>
        </div>
      </div>
    </div>
  </header>
  <br>
  <br>
  <?php if (empty($barang)) : ?>
    <div class="col-8 m-auto">
      <div class="alert alert-danger" role="alert">
        Product Not Found!
      </div>
      <a href="<?= "index.php" ?>" class="btn btn-success ">Back</a>
    </div>
  <?php else : ?>

    <div class="col-8 m-auto">
      <form action="" method="GET" class="form-inline">
        <div class="form-group mr-2 mt-2 mb-2">
          <input type="text" name="keyword" class="form-control rounded-5" id="inputPassword2">
        </div>
        <button type="submit" name="cari" class="btn btn-primary rounded-5">Search</button>
      </form>

      <br>

      <table class="table table-striped table-bordered">
        <thead class="bg-primary">
          <tr>
            <th scope="col" class="text-center text-light">#</th>
            <th scope="col" class="text-center text-light">Product</th>
            <th scope="col" class="text-center text-light">Action</th>
          </tr>
        </thead>
        <tbody class="bg-light">
          <?php $no = 1; ?>
          <?php foreach ($barang as $brg) : ?>
            <tr>
              <th scope="row" class="text-center"><?= $no++ ?></th>
              <td><?= $brg['nama'] ?></td>
              <td class="text-center"><a href="php/detail.php?id=<?= $brg['id'] ?>" class="btn btn-info rounded-5">View More</a></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>

    </div>

  <?php endif; ?>

</body>

</html>