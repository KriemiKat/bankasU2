<?php 
session_start();
if(!isset($_SESSION['id'])) {
    header('Location: http://localhost/bankasu2/login.php');
    die;
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
<body style="background-color: #73b1c1; Font-family: Cambria, Georgia, serif;">
    <?php 
        require_once('./meniu.php');
    ?>
    <form action="pridejimas.php" method="post">
        <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
        <input type="text" name="funds">
        <input type="submit" value="prideti">
    </form>
</body>
</html>