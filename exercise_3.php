<?php

$name = $_POST['name'];
$password = $_POST['password'];
$mail = $_POST['mail'];

if($name === '' || $password === '' || $mail === '') {
    echo json_encode('Fill all fields');
} else {
    echo json_encode('Very good')
}