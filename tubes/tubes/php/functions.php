<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("Failed Connect to Database!");
    mysqli_select_db($conn, "pw_tubes_203040097") or die("Wrong Database!");
	$result = mysqli_query($conn, "SELECT * FROM barang");

    return $conn;
}

function query ($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql") or die( mysqli_error($conn));
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();
	
	
    $nama = htmlspecialchars($data['nama']);
    $gambar = htmlspecialchars($data['gambar']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO barang
                    VALUES
                    ('', '$nama', '$gambar', '$deskripsi', '$harga')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM barang WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $gambar = htmlspecialchars($data['gambar']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE barang
            SET
            nama = '$nama',
            gambar = '$gambar',
            deskripsi = '$deskripsi',
            harga = '$harga'
            WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM 'barang'
            WHERE
            nama LIKE '%$keyword%' OR
            deskripsi LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'
    ";
    return query($query);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username Already Exist!');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
