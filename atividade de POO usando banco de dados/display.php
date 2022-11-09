<link rel="stylesheet" href="style.css">

<?php

require_once 'class/get.php';
require_once 'class/session.php';
require_once 'class/sql.php';

$session = new Session();
$get = new Get();
$sql = new Sql();

$users = $sql->Select('users');

if ($session->get('email') != '') {
    foreach ($users as $user => $info) {
        if ($session->get('email') == $info['email'] && $session->get('pass') == $info['password']) {
            require_once 'infodisplay.php';
            break;
        }
    }
} else echo 'Faça <a href="index.html">Login</a>';