<?php

require_once 'configuration/configuration.php';

if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    echo _vardump($_SESSION['user']);
    //$_SESSION['user']['sessionlife'] = time() * (15 * 60);
    if ($_SESSION['user']['sessionlife'] > time()) {
        echo time();
        echo '<br>toujours en ligne';
    } else {
        deconnexion();
    }
} else {
    header('Location: index.php');
}
