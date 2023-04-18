<?php
session_start();

if(!isset($_COOKIE["setting"]))
    {
        header("location: setting.php");
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
        <p><label>NRP *</label><input type="text" name="txtnrp" value="" required></p>
        <p><label>Nama *</label><input type="text" name="txtnama" value="" required></p>
        <p><label>Alamat </label><textarea name="txtalamat"></textarea></p>
        <p><label>IPK *</label><input type="number" step="any" name="txtipk" min="0" max="4" required></p>
        <p><input type="submit" name="btnsimpan" value="Simpan"></p>
    </form>

    <?php
        if (isset($_POST["btnsimpan"])){
            $test = array("nrp" => $_POST['txtnrp'], "nama" => $_POST['txtnama'], "alamat" => $_POST['txtalamat'], "ipk" => $_POST['txtipk']);
            $_SESSION['user'] = $test;
        }
        
    ?>
</body>
</html>