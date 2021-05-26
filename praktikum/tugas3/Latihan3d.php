<?php
    $datas = [
        [
            'nama' => 'Cristiano Ronaldo',
            'club' => 'Juventus',
            'main' => 100,
            'gol' => 76,
            'assist' => 30
        ],
        [
            'nama' => 'Lionel Messi',
            'club' => 'Barcelona',
            'main' => 120,
            'gol' => 80,
            'assist' => 12
        ],
        [
            'nama' => 'Luca Modric',
            'club' => 'Real Madrid',
            'main' => 87,
            'gol' => 12,
            'assist' => 48
        ],
        [
            'nama' => 'Mohammad Salah',
            'club' => 'Liverpool',
            'main' => 90,
            'gol' => 103,
            'assist' => 8
        ],
        [
            'nama' => 'Neymar Jr',
            'club' => 'Paris Saint Germain',
            'main' => 109,
            'gol' => 56,
            'assist' => 15
        ],
        [
            'nama' => 'Sadio Mane',
            'club' => 'Liverpool',
            'main' => 63,
            'gol' => 30,
            'assist' => 70
        ],
        [
            'nama' => 'Ziatan Ibrahimovic',
            'club' => 'Ac Milan',
            'main' => 100,
            'gol' => 10,
            'assist' => 12
        ],
        
    ];

?>

<html>
    <head>
        <style>
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }
            
            td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
            }

        </style>
    </head>
    <body>
        <table>
            <thead>
                <th>NO</th>
                <th>NAMA</th>
                <th>CLUB</th>
                <th>MAIN</th>
                <th>GOL</th>
                <th>ASSIST</th>
            </thead>
            <tbody>
                <?php
                    $number = 1;
                    $jumlah_main = 0;
                    $jumlah_gol = 0;
                    $jumlah_assist = 0;
                    foreach($datas as $data){
                        $jumlah_main += $data['main'];
                        $jumlah_gol += $data['gol'];
                        $jumlah_assist += $data['assist'];
                        
                ?>
                <tr>
                    <td><?php echo $number++;?></td>
                    <td><?php echo $data['nama']?></td>
                    <td><?php echo $data['club']?></td>
                    <td><?php echo $data['main']?></td>
                    <td><?php echo $data['gol']?></td>
                    <td><?php echo $data['assist']?></td>
                </tr>
                <?php 
                    }
                ?>
                <tr>
                    <td>No</td>
                    <td colspan="2">Jumlah</td>
                    <td><?php echo $jumlah_main ?></td>
                    <td><?php echo $jumlah_gol ?></td>
                    <td><?php echo $jumlah_assist ?></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
