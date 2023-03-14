<?php

if($_POST['name'] == '' || $_POST['surname'] == '' || $_POST['Personal ID'] == '') {
    header('location: http://localhost/bankasU2/sukurti.php?empty_fields=1');
}

$users = [];

$content = file_get_contents('users.json');

if($content == '') {
    $users = [];
} else {
    $users = json_decode($content);
}

$user = [
    'name' => $_POST['name'],
    'surname' => $_POST['name'],
    'personal_id' => $_POST['name'],
];

$users[] = $user;

file_put_contents('users.json', json_encode($users));
header('location: http://localhost/bankasU2/sukurti.php?success=1');