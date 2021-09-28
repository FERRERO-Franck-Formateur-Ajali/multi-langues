<?php

if (isset($_POST) && !empty($_POST)) {
    $sessionlife = 15 * 60;
    $_SESSION['user'] = [
        'email' => $_POST['email'],
        'pseudo' => 'madbrain',
        'sessionlife' => time() + $sessionlife,
    ];
    $_SESSION['alert'] = [
        'type' => 'success',
        'message' => 'Bonjour '.$_POST['email'],
    ];
    header('Location: /');
} else {
    //header('Location: /');
}
