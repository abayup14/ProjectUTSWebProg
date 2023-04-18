<?php 
    $alamat_input = isset($_POST["alamat"]) ? $_POST["alamat"] : "";
    $ipk_input = isset($_POST["ipk"]) ? $_POST["ipk"] : "";  
    $ukuran_font = isset($_POST["ukuran"]) ? $_POST["ukuran"] : ""; 
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
        <option value="b"><b>Bold</b></option>
        <option value="i"><i>Italic</i></option>
        <option value="u"><u>Underline</u></option>
        </select>
        <p><label>Alamat ditampilkan? </label><input type="radio" name="rdoalamatshow">Ya</input>
        <input type="radio" name="rdoalamatshow" required>Tidak</input></p>
        <p><label>IPK ditampilkan? </label><input type="radio" name="rdoipkshow">Ya</input>
        <input type="radio" name="rdoipkshow" required>Tidak</input></p>
        
    </form>

    <form method="index.php" action="POST">
        <p><input type="submit" name="btnsimpan" value="Simpan"></p>
    </form>
</body>
</html>