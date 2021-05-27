<?php 
require 'functions.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
      echo "<script>
              alert('Register Sucess, Please Login!');
              document.location.href = 'login.php';
          </script>";
  } else {
      echo "<script>
                alert('Register Failed!');
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Register</title>
  <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">

  <style>
    #card {

      border-radius: 10px;
      box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.1);
      color: white;
      height: 400px;
      margin-top: 225px;
      margin-left: 650px;
      width: 300px;
    }

    .underline-title {
      background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
      height: 2px;
      margin-left: 20px;
      margin-top: -25px;
      width: 100px;
    }
  </style>
</head>

<body style="background-image: url(../assets/img/bg2.jpg);">
  <form action="" method="post">
    <div id="card">
        <h2>REGISTER</h2>
        <br>
        <div class="underline-title"></div>
        <br>
    <div class="form-floating mb-3">
      <label for="floatingInput">Username</label>
      <input type="text" class="form-control" id="floatingInput">
    </div>

    <div class="form-floating">
      <label for="floatingPassword">Password</label>
      <input type="password" class="form-control" id="floatingPassword">
    </div>

    <br>
      <button class="btn btn-success" type="submit" name="register">REGISTER</button>
    </div>

  </form>
</body>

</html>