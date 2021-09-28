<?php

session_start();

require_once 'defines.php';
require_once 'function.php';

date_default_timezone_set('Europe/Paris');

$template = 'default';
$language = isset($_GET['lang']) && !empty($_GET['lang']) ? $_GET['lang'] : 'fr';
$languages = ['en', 'fr'];

require_once ROOT.'/lang/'.$language.'.php';
