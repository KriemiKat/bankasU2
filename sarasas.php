<?php
session_startsession_start();

if (isset($_SESSION['msg'])){
    $msg = $_SESSION['msg'];
    $color = $_SESSION['color'];
    unset ($_SESSION['msg']);
    echo '<h2 style= "color:'. $color .'">' .$msg. '</h2>';
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
        $users = json_decode(file_get_contents('./users.json'));
        ?>
        <table>
                <tr>
                    <th>Vardas</th>
                    <th>Pavardė</th>
                    <th>Asmens kodas</th>
                    <th>Lėšos/th>
                    <th>Pridėjimas</th>
                    <th>Atėmimas</th>
                    <th>Ištrynimas</th>

<?php
if(!$users) die;
        <?php foreach($users as $user) {
            echo '<tr>';
            echo '<td>' . $user->name . '</td>';
            echo '<td>' . $user->surname . '</td>';
            echo '<td>' . $user->personal_id . '</td>';
            echo '<td>' . $user->funds . '</td>';
            echo '<td>';
            ?>
            <form action="./istrynimas.php" method='post">
          <input type="hidden" name="id" value="<?= $use->id; ?>">
          <input type="submit" value="istrinti>
        </form>
            <?php
            echo'</td>';
        }
        die;
    ?></table>
</body>
</html>