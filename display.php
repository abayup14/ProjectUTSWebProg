<?php
    session_start();

    if (isset($_SESSION["student"])) {
        $arr_std = $_SESSION["student"];

        print_r($arr_std);
    }
    

    if (isset($_COOKIE["setting"])) {
        $arr_set = $_COOKIE["setting"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
</head>
<body>
    <?php 
        
    ?>
</body>
</html>