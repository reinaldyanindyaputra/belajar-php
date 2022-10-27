<?php

$nama = "Reinaldy";

//pengulangan


/*
$no=10;

for ($i=0; $i<$no; $i++) {
    $n= $i + 1;
    echo $n." ".$nama. "<br/>";
}
*/

/*
$no = 15;
$i = 0;

    while ($i < $no) {
        $n = $i + 1;
        echo $n." ".$nama."<br/>";
        $i++;
    }
*/

// percabangan

/*
if ($nama == "Reinaldy") {
    echo $nama." adalah orang Jawa";
} else if($nama == "Budi") {
    echo $nama." beasal dari Jawa";
}
    else  {
        echo $nama." darimana ya?";
    }
*/
/*
switch ($nama) {
    case "Reinaldy";
        $pesan = $nama." adalah orang Jawa";
    break;
    case "Budi";
        $pesan = $nama." adalah orang Bali";
    break;
    default;
        $pesan = $nama." darimana ya";
}
echo $pesan;
*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Input Nama dan Diulang</h3>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if(!empty($_POST['submit'])) {

            switch($_POST['nama']) {
                case "Reinaldy":
                    $pesan = $_POST['nama']." adalah orang Surabaya";
                break;
                case "Vero":
                    $pesan = $_POST['nama']." berasal dari kota Malang";
                break;
                default:
                    $pesan = $_POST['nama']." tidak diketahui asalnya";
            
            }

            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }

        } else {
            echo "Anda belum input nama dan jumlah.";
        }


    ?>
</body>
</html>
-->