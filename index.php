<?php
    if (isset($_POST["btnsimpansetting"])) {
        setcookie("setting[alamat]", $_POST["rdoalamat"], time() + (24 *3600 * 30 * 365));
        setcookie("setting[ipk]", $_POST['txtipk'], time() + (24 *3600 * 30 * 365));
        setcookie("setting[ukuran]", $_POST['txtsize'], time() + (24 *3600 * 30 * 365));
        setcookie("setting[fontstyle]", $_POST['selstyle'], time() + (24 *3600 * 30 * 365));
        setcookie("setting[showalamat]", $_POST['rdoalamatshow'], time() + (24 *3600 * 30 * 365));
        setcookie("setting[showipk]", $_POST['rdoipkshow'], time() + (24 *3600 * 30 * 365));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
</head>
<body>
    <a href="input.php">Input Data Disini</a><br>
    <a href="setting.php">Atur Tampilan Disini</a><br>
    <a href="display.php">Lihat Hasil Pengisian Data Disini</a>
</body>
</html>