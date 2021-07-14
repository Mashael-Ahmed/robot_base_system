<?php
    include_once('database.php');

    if (isset($_POST['direction'])) {

        $sql = "INSERT INTO direction (direction) VALUES ('{$_POST['direction']}');";
        mysqli_query($GLOBALS['conn'], $sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

     <?php
     if (isset($_POST['direction'])) {
        echo '<h1>' . $_POST['direction'] . ' </h1>';
     }
     ?>

    
</body>
</html>