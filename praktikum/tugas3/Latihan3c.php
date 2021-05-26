<?php

$profile = [
    "Cristiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Salah" => "Liverpool",
    "Neymar Jr" => "Paris Saint German",
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan",


]
?>
<!DOCTYPE html>
<html>

<head>
    <title>Looping for array</title>
</head>

<body>
    <?php
    echo  "<p style='font-weight:bold'> Daftar Pemain Bola terkenal dan clubnya </p> <br> <table>";
    foreach ($profile as $nama => $club) {
        echo "<tr>
                <th style = text-align:left> $nama </th>
                <td> : $club </td>
            </tr>";
    }

    echo "</table>";
    ?>

</body>

</html>