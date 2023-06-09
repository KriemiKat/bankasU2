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

session_start();
if(!isset($_SESSION['id'])) {
    header('Location: http://localhost/bankasu2/login.php');
    die;
}

if (isset($_SESSION['msg'])) {
    $msg = $_SESSION['msg'];
    $color = $_SESSION['color'];
    unset($_SESSION['msg']);
    unset($_SESSION['color']);
    echo '<h2 style="color:'. $color .';">' . $msg . '</h2>';
}
?>
    <?php 
        require_once('./meniu.php');
        $users = json_decode(file_get_contents('./users.json'));
        if(!$users) die;
        function sortByName($a, $b) {
            return strcmp($a->surname, $b->surname);
        }
        // rūšiavimas pagal pavardę
        usort($users, 'sortByName');

        ?>
        <table>
            <tr>
                <th>Sąskaitos Nr.</th>
                <th>Vardas</th>
                <th>Pavardė</th>
                <th>Asmens kodas</th>
                <th>Lėšos</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        <?php 
        if(!$users) die;
        foreach($users as $user) {
            echo '<tr>';
            echo '<td>' . $user->account_no . '</td>';
            echo '<td>' . $user->name . '</td>';
            echo '<td>' . $user->surname . '</td>';
            echo '<td>' . $user->personal_id . '</td>';
            echo '<td>' . $user->funds . '</td>';
            ?>
            <td>
                <a href="http://localhost/bankasu2/prideti.php?id=<?= $user->id; ?>">Prideti lesu</a>
            </td>
            <td>
                <a href="http://localhost/bankasu2/atimti.php?id=<?= $user->id; ?>">Atimti lesu</a>
            </td>
            <?php
            echo '<td>'; 
            ?>
            <form action="./istrynimas.php" method="post">
                <input type="hidden" name="id" value="<?= $user->id; ?>">
                <input type="submit" style="background-color:red" value="ištrinti">
            </form>
            <?php
            echo '</td>';
            echo '</tr>';
        }
    ?>
    </table>
</body>
</html>