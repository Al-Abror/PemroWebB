<?php
    // tipe data
    $int = 1234;
    $str = "Jum'at";
    $dbl = 1.1;
    $array = ["a", "b", "c"];

    // array
    $array2 = [
        'nama' => 'Muhammad',
        'nim' => '19241010',
        'umur' => '19'
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dasar dasar</title>
</head>
<body>
<!-- PRINT -->
    <?php
        echo "Hello World <br/>";
        echo $str;
    ?>
</body>
</html>

<?php
    $arr = [
        [
            'nama' => 'Muhammad',
            'nim' => '19241010',
            'usia' => '19'
        ],
        [
            'nama' => 'Eco',
            'nim' => '1924101011',
            'usia' => '20'
        ],
        [
            'nama' => 'sobar',
            'nim' => '1924101012',
            'usia' => '21'
        ]
    ];

    $arr2 = ['Muhammad', '19241010', '19']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($arr as $mhs): ?>
                <tr>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['usia'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>