<?php
// Pertemuan 2 - PHP Dasar
// Hervin Fakhrul - 203040097
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

    echo "Hervin Fakhrul";

    print "Hervin Fakhrul";

    print_r ("Hervin Fakhrul");

    var_dump ("Hervin Fakhrul");

// Penulisan Sintaks PHP
// 1. PHP dalam HTML
// 2. HTML dalam PHP

// Variabel dan Tipe Data
// Variabel
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka
//$nama1= "Fakhrul";
//echo "Hi, Nama saya $nama1"

// Operator :
// Aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// Penggabung String / Concatenation
// .
// $nama_depan = "Hervin";
// $nama_belakang = "Fakhrul";
// echo $nama_depan . $nama_belakang;
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;
// $nama = "Hervin"
// $nama .= "  ";
// $nama .= "Fakhrul"
// echo $nama;
?>

<p> </p>

<?php
// Perbandingan
// <, >, <=, >=, ==, !=
    var_dump(1 < 5);
    var_dump(1 > 5);
    var_dump(1 == "1");

// Identitas
// ===, !==
    var_dump(1 === "1");

// Logika
// &&, ||, !
    $x = 10;
    var_dump($x < 20 && $x % 2 == 0);

    $x = 30;
    var_dump($x < 20 && $x % 2 == 0);

    $x = 10;
    var_dump($x < 20 || $x % 2 == 0);


    $nama = "Hervin";

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Hi, Selamat Datang <?php echo "Hervin"; ?></h1>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <?php 
        echo "<h1>Hi, Selamat datang Hervin! </h1>";
    ?>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>

    <h1>Hi, Selamat Datang <?php echo $nama; ?></h1>

</body>
</html>

