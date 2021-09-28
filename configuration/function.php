<?php

function _vardump($variable): string
{
    return '<pre>'.print_r($variable, true).'<pre>';
}

function add(int $a, int $b): int
{
    return $a + $b;
}

function deconnexion()
{
    session_destroy();

    header('Location: /');
}

function redirection(string $url)
{
    header('Location: '.$url);
    exit();
}
