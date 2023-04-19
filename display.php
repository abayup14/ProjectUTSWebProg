<?php
    session_start();

    if (isset($_SESSION["student"])) {
        $arr_std = $_SESSION["student"];
    }

    if (isset($_COOKIE["setting"])) {
        $arr_sett = $_COOKIE["setting"];

        $font_size = isset($arr_sett["ukuran"]) ? $arr_sett["ukuran"] : "";
        $font_style = isset($arr_sett["fontstyle"]) ? $arr_sett["fontstyle"] : "";
        $alamat_display = isset($arr_sett["showalamat"]) ? $arr_sett["showalamat"] : "";
        $ipk_display = isset($arr_sett["showipk"]) ? $arr_sett["showipk"] : "";
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            <?php
                echo "font-size: $font_size;";
                if ($font_style == "b") {
                    echo "font-weight: bold;";
                } else if ($font_style == "i") {
                    echo "font-style: italic;";
                } else {
                    echo "text-decoration: underline;";
                }
            ?>
        }
    </style>
</head>
<body>
    <?php
        $alamat_ditampilkan = ($alamat_display == "n") ? "hidden" : "";
        $ipk_ditampilkan = ($ipk_display == "n") ? "hidden" : "";

        for ($i = 0; $i < count($arr_std); $i++) {
            $count = $i + 1;
            echo $count."<br>";
            echo "<p>NRP : ".$arr_std[$i]["nrp"]."</p>";
            echo "<p>Nama : ".$arr_std[$i]["nama"]."</p>";
            echo "<p $alamat_ditampilkan>Alamat : ".$arr_std[$i]["alamat"]."</p>";
            echo "<p $ipk_ditampilkan>IPK : ".$arr_std[$i]["ipk"]."</p>";
            echo "<br>";
        }
    ?>
    <p style="font-size: medium;"><a href='index.php'>Kembali ke Halaman Utama</a></p>
</body>
</html>