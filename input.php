<?php
    session_start();

    if (!isset($_COOKIE["setting"])) {
        header("location: setting.php");
    } else {
        $arr_set = $_COOKIE["setting"];

        $ipk_default = ($arr_set["ipk"]) ? $arr_set["ipk"] : "";
        $alamat_default = ($arr_set["alamat"]) ? $arr_set["alamat"] : "";
    }

    if (isset($_POST["btnsimpaninput"])) {
        $std = array(
            "nrp" => $_POST["txtnrp"],
            "nama" => $_POST["txtnama"],
            "alamat" => $_POST["txtalamat"],
            "ipk" => $_POST["txtipk"]
            );
            
        if (isset($_SESSION["student"])) {
            $arr_std = $_SESSION["student"];
    
            $arr_std[] = $std;
    
            $_SESSION["student"] = $arr_std;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <form method="POST" action="display.php" enctype="multipart/form-data">
        <p>
            <label>NRP* : </label>
            <input type="text" name="txtnrp" required>
        </p>
        <p>
            <label>Nama* : </label>
            <input type="text" name="txtnama" required>
        </p>
        <p>
            <?php $wajib = ($alamat_default == "y") ? true : false; ?>
            <label>Alamat<?php if ($wajib == true) echo "*"; ?> : </label>
            <textarea name="txtalamat" <?php if ($wajib == true) echo "required"; ?>></textarea>
        </p>
        <p>
            <label>IPK* : </label>
            <input type="number" step="any" name="txtipk" min="0" max="4" value=<?php echo $ipk_default; ?> required>
        </p>
        <p>
            <input type="submit" name="btnsimpaninput" value="Simpan">
        </p>
    </form>
    <p><a href="index.php">Kembali ke Halaman Utama</a></p>
</body>
</html>