<?php
$mahasiswa = [
["Hervin Fakhrul", "203040097", "Teknik Informatika", "hervinfakhrulm@gmail.com"],
["Eddy Arifno", "203040200", "Teknik Informatika", "arifnoajieddy@gmail.com"],
["Nazwa Cecillia", "203040300", "Teknik Informatika", "nzwccll@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>