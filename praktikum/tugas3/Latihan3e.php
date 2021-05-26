<?php 
$barang = [
    [
        "foto"=>"brt.jpg",
        "nama"=>"Paket Bore UP NMAX 202cc",
        "deskripsi"=>"
        Yamaha NMAX/Aerox
        <br>Paket Penjualan :
        <br>1 Head Albronze + Klep 22/19 + Porting
        <br>1 Blok Ceramic 63.00mm + gasket
        <br>1 Piston Forged 63.00mm
        <br>1 Kruk as BRT
        <br>1 Throtle Body 30/32 bisa pilih
        <br>1 Velocity
        <br>1 Master cam (bebas pilih type T1 T2)
        <br>1 Set Vbelt Roller Yamaha Nmax
        <br>1 Injector",
        "harga"=>7250000,
        "kategori"=>"Piston",
        "stokbarang"=>25,
    ],
   
];

function rupiahIDR($duit){
    return "Rp" . number_format($duit,2,',','.');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFM Garage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>

</head>

<body>
    <div class="container mt-5 mb-5">
        <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Kategori</th>
                    <th>Stok Barang</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($barang as $dagang => $barang) : ?>
                <tr>
                    <td><?= $dagang+1; ?></td>
                    <td>
                        <figure class="image is-300x210">
                            <img src="img/<?= $barang["foto"]; ?>" alt="paket200">
                        </figure>
                    </td>
                    <td><?= $barang["nama"]; ?></td>
                    <td><?= $barang["deskripsi"]; ?></td>
                    <td><?= rupiahIDR($barang["harga"]) ?></td>
                    <td><?= $barang["kategori"]; ?></td>
                    <td><?= $barang["stokbarang"]; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#cari').DataTable();
    });
    </script>
</body>

</html>