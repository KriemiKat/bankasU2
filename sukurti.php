<?php
if(isset($_GET['empty_fields']) && $_GET['empty_fields'] == 1) {
    echo "<div style=\"padding: 20px; color: red;\">Prasome uzpildyti visus laukus</div>";
}

if(isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<div style=\"padding: 20px; color: red;\">Vartotojas sukurtas sekmingai</div>";
}
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
        <label for="name">Surname:</label>
        <input type="text" name="name">
    </div>
<div>        
        <label for="name">Personal ID:</label>
        <input type="text" name="name">
    </div>
<div>
        <input type="submit" name="create" value="Sukurti">
    </div>
    </form>
</body>
</html>