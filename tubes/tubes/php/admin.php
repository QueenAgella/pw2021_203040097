<?php
    require 'functions.php';
    $barang = query("SELECT * FROM barang ORDER BY id ASC");

    if (isset($_GET['cari'])) {
        $barang = cari($_GET['keyword']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<style>
.tambah {
    margin-left: 860px;
}


.cari {
    width: 1000px;
}

.keluar {
    margin-left: 275px;
}

.c1 {
  margin-left: 800px;
}

body {
  background-image: url('../assets/img/bg3.jpg');
  background-size: cover;
}

</style>
</head>
<body>

<body>
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
        <div class="c1">
        <a href="<?= "logout.php" ?>" class="btn btn-danger">Logout</a>
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
      <a href="<?= "logout.php" ?>" class="btn btn-primary">Logout</a>
      <a href="<?= "admin.php" ?>" class="btn btn-success">Back</a>
    </div>
  <?php else : ?>
    <br>
    <div class="col-8 m-auto">
      <form action="" method="GET" class="form-inline">
        <div class="cari mr-2 mt-2 mb-2">
          <input type="text" name="keyword" class="form-control rounded-5" id="inputPassword2">
        </div>
        <button type="submit" name="cari" class="btn btn-primary rounded-5">Search</button>
      </form>
      <div class="tambah">
        <a href="tambah.php"><button class="btn btn-success">Add Product</button></a>
        </div>
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
              <td style="text-align: center;">
              <a href="ubah.php?id=<?=$brg['id'] ?>"><button class="btn btn-success">Edit</button></a>
              <a href="hapus.php?id=<?=$brg['id'] ?>" onclick="return confirm('Delete Product?')"><button class="btn btn-danger">Delete</button></a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>

    </div>

  <?php endif; ?>
  </body>
</html>