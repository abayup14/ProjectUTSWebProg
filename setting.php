<?php 
    $alamat_input = isset($_POST["alamat"]) ? $_POST["alamat"] : "";
    $ipk_input = isset($_POST["ipk"]) ? $_POST["ipk"] : "";  
    $ukuran_font = isset($_POST["ukuran"]) ? $_POST["ukuran"] : ""; 
    $style_font = isset($_POST["fontstyle"]) ? $_POST["fontstyle"] : "";
    $alamat_display = isset($_POST["showalamat"]) ? $_POST["showalamat"] : "";
    $ipk_display = isset($_POST["showipk"]) ? $_POST["showipk"] : "";
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
    <form method="POST" action="input.php" enctype="multipart/form-data">
        <p><label>Alamat wajib diisi? </label>
        <input type="radio" name="rdoalamat" value="y" <?php if ($alamat_input) echo "checked" ?>>Ya</input>
        <input type="radio" name="rdoalamat" value="n" <?php if ($alamat_input) echo "checked" ?>>Tidak</input></p>
        <p><label>Default IPK: </label>
        <input type="number" step="any" name="txtipk" min="0" max="4" value=<?php echo $ipk_input ?> required></p>
    </form>
    
    <form method="POST" action="display.php" enctype="multipart/form-data">
        <p><label>Ukuran Font: </label>
        <input type="number" name="txtsize" min="1" value=<?php echo $ukuran_font ?> required></input><label> px</label></p>
        <p><label>Tampilan Font: </label>
        <select name="selstyle">
        <option value="">-- Pilih Tampilan --</option>
        <option value="b" <?php if ($style_font) echo "selected" ?>><?php echo "<b>Bold</b>" ?></option>
        <option value="i" <?php if ($style_font) echo "selected" ?>><?php echo "<i>Italic</i>" ?></option>
        <option value="u" <?php if ($style_font) echo "selected" ?>><?php echo "<u>Underline</u>" ?></option>
        </select>
        <p><label>Alamat ditampilkan? </label>
        <input type="radio" name="rdoalamatshow" <?php if ($alamat_display) echo "checked" ?>>Ya</input>
        <input type="radio" name="rdoalamatshow" <?php if ($alamat_display) echo "checked" ?>>Tidak</input></p>
        <p><label>IPK ditampilkan? </label>
        <input type="radio" name="rdoipkshow" <?php if ($ipk_display) echo "checked" ?>>Ya</input>
        <input type="radio" name="rdoipkshow" <?php if ($ipk_display) echo "checked" ?>>Tidak</input></p>
        
    </form>

    <form method="POST" action="index.php">
        <p><input type="submit" name="btnsimpan" value="Simpan"></p>
    </form>
</body>
</html>