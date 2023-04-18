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
        <p><label>Alamat </label><input type="radio" name="rdoalamat">Ya</input>
        <input type="radio" name="rdoalamat" required>Tidak</input></p>
        <p><label>Default IPK</label><input type="number" step="any" 
        name="txtipk" min="0" max="4" required></p>
    </form>
    
    <form method="POST" action="display.php" enctype="multipart/form-data">
        <p><label>Ukuran Font</label><input type="number" name="txtsize" min="1" required></input></p>
        <p><label>Tampilan Font</label>
        <select name="selstyle">
        <option value="">-- Pilih Tampilan --</option>
        <option value="b"><b>Bold</b></option>
        <option value="i"><i>Italic</i></option>
        <option value="u"><u>Underline</u></option>
        </select>
        <p><label>Alamat ditampilkan?</label><input type="radio" name="rdoalamatshow">Ya</input>
        <input type="radio" name="rdoalamatshow" required>Tidak</input></p>
        <p><label>IPK ditampilkan?</label><input type="radio" name="rdoipkshow">Ya</input>
        <input type="radio" name="rdoipkshow" required>Tidak</input></p>
        <p><input type="submit" name="btnsimpan" value="Simpan"></p>
    </form>

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
</body>
</html>