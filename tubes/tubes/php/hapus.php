<?php 
require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
            alert('Data Sucessfully Deleted');
            document.location.href = 'admin.php';
          </script>";
} else {
   echo "<script>
            alert('Failed to Delete Data!');
            document.location.href = 'admin.php';
        </script>";
}
?>