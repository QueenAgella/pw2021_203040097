<?php
// $mahasiswa = [
// ["Hervin Fakhrul", "203040097", "Teknik Informatika", "hervinfakhrulm@gmail.com"],
// ["Eddy Arifno", "203040200", "Teknik Informatika", "arifnoajieddy@gmail.com"],
// ["Nazwa Cecillia", "203040300", "Teknik Informatika", "nzwccll@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "Delvin Alvaro",
        "NRP" => "203040400",
        "Jurusan" => "Teknik Informatika",
        "Email" => "delvinalvaromahardika@gmail.com"
    ],
    [
        "nama" => "Hazel Lugy",
        "NRP" => "203040500",
        "Jurusan" => "Teknik Informatika",
        "Email" => "hazellugy@gmail.com"
    ]
    ];

    echo $mahasiswa[1]["Email"];
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
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["NRP"]; ?></li>
        <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
        <li>Email : <?= $mhs["Email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>