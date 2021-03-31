<?php
    require 'Tabung.php';

    // $tabung = new Tabung;

    // $_GET['nama'] = "Muhammad Farhan Al Abror"
    // var_dump($_GET)
    // $_POST['nama'] = "Muhammad Farhan Al Abror"
    // var_dump($_POST);

    // if(isset($_POST['submit_btn'])) {
    //     if(strlen($_POST['diameter'])>0) {
    //        echo "login !";
    //     } else{
    //         echo "isi diameter dulu ya ";
    //     }
    // }

            // var_dump($_POST);
    
    // $luas = 0;
    // $vol = 0;

    // if(isset($_POST['button_submit'])) {
    //     $diameter = $_POST['diameter'];
    //     $tinggi = $_POST['tinggi'];
    //     $luas = 3.14 * $diameter * $tinggi;
    //     $vol = 3.14 * $r * $r * $tinggi;
    //     echo "Diameter $diameter <br/>";
    //     echo "Tinggi $tinggi <br/>";
    // }
        $tabung = null;

    if(isset($_POST['button_submit'])) {
        // $tabung=new Tabung($_POST['diameter'], $_POST['tinggi'])
        $tabung->setDiameter($_POST['diameter']);
        $tabung->setTinggi($_POST['tinggi']);
        // $tabung->hitungLuas();

    }

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
    <!-- <form action="" method="post">
        <input type="text" nama='diameter'>
        <button name="submit_btn">submit</button>
    </form> -->
    <form action="" method="POST">

        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name="button_submit">Hitung</button>

    </form>
    <hr>
        <ul>
            <li>Luas Selimut : <?= $tabung->getLuasSelimut()?></li>
            <li>Volume : <?= $tabung->getVol()?></li>
        </ul>
</body>
</html>