<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'E' && $password === 'E') {
        header('Location: dashboard.php');
        exit;
    } else {
        echo 'Forkert brugernavn eller kodeord';
    }
}
