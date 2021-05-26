<?php
$pemain = [
    "Mohammad Saleh",
    "Cristiano Ronaldo",
    "Lionel Messi",
    "Zlatan Ibrahimovic",
    "Neymar Jr"
];


echo "<p style = 'font-weight: bold;'>Daftar pemain bola terkenal</p>";
echo "<ul>";

foreach ($pemain as $no => $nama) {
    $number = $no + 1;
    echo "<ol>$number. $nama</ol>";
}
echo "</ul>";

array_push($pemain, 'Luca Modric', 'Sadio Mane');
sort($pemain);

echo "<p style = 'font-weight: bold;'>Daftar pemain bola terkenal baru</p>";
echo "<ul>";

foreach ($pemain as $no => $nama) {
    $number = $no + 1;
    echo "<ol>$number. $nama</ol>";
}
echo "</ul>";
