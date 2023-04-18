<?php
    $arr_sett = $_COOKIE["setting"];

    $alamat_input = "";
    $ipk_input = "";
    $ukuran_font = "";
    $style_font = "";
    $alamat_display = "";
    $ipk_display = "";

    foreach ($arr_sett as $key => $val){
        if($key == "alamat"){
            $alamat_input = $val;
        }
        if ($key == "ipk") {
            $ipk_input = $val;
        }
        if ($key == "ukuran") {
            $ukuran_font = $val;
        }
        if ($key == "fontstyle") {
            $style_font = $val;
        }
        if ($key == "showalamat") {
            $alamat_display = $val;
        }
        if ($key == "showipk") {
            $ipk_display = $val;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
</head>
<body>
    <form method="POST" action="index.php" enctype="multipart/form-data">
        <p>
            <label>Alamat wajib diisi? </label>
            <input type="radio" name="rdoalamat" value="y" <?php if ($alamat_input == "y") echo "checked"; ?>>Ya</input>
            <input type="radio" name="rdoalamat" value="n" <?php if ($alamat_input == "n") echo "checked"; ?>>Tidak</input>
        </p>
        <p>
            <label>Default IPK: </label>
            <input type="number" step="any" name="txtipk" min="0" max="4" value=<?php echo $ipk_input; ?> required>
        </p>
        <p>
            <label>Ukuran Font: </label>
            <input type="number" name="txtsize" min="1" value=<?php echo $ukuran_font; ?> required></input><label> px</label>
        </p>
        <p>
            <label>Tampilan Font: </label>
            <select name="selstyle">
                <option value="">-- Pilih Tampilan --</option>
                <option value="b" <?php if ($style_font) echo "selected"; ?>><?php echo "<b>Bold</b>"; ?></option>
                <option value="i" <?php if ($style_font) echo "selected"; ?>><?php echo "<i>Italic</i>"; ?></option>
                <option value="u" <?php if ($style_font) echo "selected"; ?>><?php echo "<u>Underline</u>"; ?></option>
            </select>
        </p>  
        <p>
            <label>Alamat ditampilkan? </label>
            <input type="radio" name="rdoalamatshow" value="y" <?php if ($alamat_display) echo "checked"; ?>>Ya</input>
            <input type="radio" name="rdoalamatshow" value="n" <?php if ($alamat_display) echo "checked"; ?>>Tidak</input>
        </p>
        <p>
            <label>IPK ditampilkan? </label>
            <input type="radio" name="rdoipkshow" value="y" <?php if ($ipk_display) echo "checked"; ?>>Ya</input>
            <input type="radio" name="rdoipkshow" value="n" <?php if ($ipk_display) echo "checked"; ?>>Tidak</input>
        </p>
        <p>
            <input type="submit" name="btnsimpansetting" value="Simpan">
        </p>
    </form>
    <p><a href="index.php">Kembali ke Halaman Utama</a></p>
</body>
</html>