<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bankas</title>
    <style>
        a {
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <?php 
        require_once('./meniu.php');
        require_once('./users.json');
        $users = json_decode(file_get_contents('users.json'));
        var_dump($users);
        die;
    ?>
</body>
</html>