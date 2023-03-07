<?php
$valid_username = 'a';
$valid_password = 'a';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    if ($username === $valid_username && $password === $valid_password) {
        header('Location: Homepage.html');
        exit;
    } else {
        echo 'Invalid username or password';
    }
}
?>
