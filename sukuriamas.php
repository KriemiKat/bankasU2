<?php

session_start();

if($_POST['name'] == '' || $_POST['surname'] == '' || $_POST['Personal ID'] == '') {
    $_SESSION['msg'] = 'Prasome ivesti teisingus duomenis';
    $_SESSION['color'] = 'red';
    header('location: http://localhost/bankasU2/sukurti.php?empty_fields=1');
}

$content = file_get_contents('users.json');

if($content == '') {
    $users = [];
} else {
    $users = json_decode($content);
}

$user = [
    'name' => $_POST['name'],
    'surname' => $_POST['surname'],
    'personal_id' => $_POST['personal_id'],
];

$users[] = $user;

file_put_contents('users.json', json_encode($users));
$_SESSION['msg'] = 'Vartotojas sukurtas teisingai';
$_SESSION['color'] = 'green';
header('Location: http://localhost/bankasU2/sukurti.php?success=1');