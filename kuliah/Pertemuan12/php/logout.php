<!-- 
    NAMA : Hervin Fakhrul
    NPM : 203040097
    Kelas : C
    Github : https://github.com/QueenAgella
    MataKuliah : Pemrograman Web
 -->

 <?php 
session_start();
session_destroy();

setcookie('username', '', time() - 3600);
setcookie('hash', '', time() - 3600);
header("Location: ../index.php");
die;
?>