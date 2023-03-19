<?php

var_dump($_POST);
die;

session_start();


if(!isset($_POST['id'])) {
    $_SESSION['msg'] = 'Atsiprasome, vartotojo istrinti nepavyko';
    $_SESSION['color'] = 'red';
    header('location: http://localhost/bankasU2/sarasas.php?');
    die;
}

$users = json_decode(file_get_contents('./users.json'));
foreach ($users as &$user) {
    if($user->id == $_POST['id']) {
        unset($user);
    }
}

file_put_contents('users.json', json_encode($users));
$_SESSION['msg'] = 'Vartotojas sukurtas teisingai';
$_SESSION['color'] = 'green';
header('Location: http://localhost/bankasU2/sarasas.php');