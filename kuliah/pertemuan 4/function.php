<?php
    function salam($nama, $waktu) {
        return "Selamat $waktu, $nama!";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Hervin", "Pagi"); ?></h1>
</body>
</html>