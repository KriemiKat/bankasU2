<?php

session_start();

if (isset($_SESSION['msg'])) {
    $msg = $_SESSION['msg'];
    $color = $_SESSION['color'];
    unset($_SESSION['msg']);
    unset($_SESSION['color']);
    echo '<h2 style="color:'. $color .'">' . $msg . '</h2>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            padding: 12px;
            padding-left: 100px;
            font: optional;
            Font-family: Cambria, Georgia, serif;
        }
    </style>
</head>
<body style="background-color: #73b1c1; ">
    <?php 
        require_once('./meniu.php');
    ?>
    <form action="sukurimas.php" method="post" style=">
        <div>
            <label for="name">Vardas:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="surname">Pavardė:</label>
            <input type="text" name="surname">
        </div>
        <div>
            <label for="personal_id">Asmens kodas:</label>
            <input type="text" name="personal_id">
        </div>
        <div>
            <input type="submit" name="create" value="Sukurti" style="background-color:#36626a">
        </div>
    </form>
</body>
</html>