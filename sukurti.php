<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
require_once('./meniu.php');
    ?>
    <form action="sukuriamas.php" method= "post">
        <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
        </div>
<div>
        <label for="surname">Surname:</label>
        <input type="text" name="surname">
    </div>
<div>        
        <label for="personal_id">Personal ID:</label>
        <input type="text" name="personal_id">
    </div>
<div>
        <input type="submit" name="create" value="Sukurti">
    </div>
    </form>
</body>
</html>