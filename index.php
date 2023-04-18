<?php
    if (isset($_POST["btnsimpan"])) {
        setcookie("alamat", $_POST['rdoalamat'], time() + 3600);
        setcookie("ipk", $_POST['txtipk'], time() + 3600);
        setcookie("ukuran", $_POST['txtsize'], time() + 3600);
        setcookie("fontstyle", $_POST['selstyle'], time() + 3600);
        setcookie("showalamat", $_POST['rdoalamatshow'], time() + 3600);
        setcookie("showipk", $_POST['rdoipkshow'], time() + 3600);
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