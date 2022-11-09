<link rel="stylesheet" href="style.css">
<?php

require_once 'class/post.php';
require_once 'class/session.php';
require_once 'class/sql.php';

$post = new Post();
$session = new Session();
$sql = new Sql();
$isLogged = false;

$users = $sql->Select('users');

if ($post->get('email') != '' && $post->get('pass') != '') {
    $email = $post->get('email');
    $pass = $post->get('pass');
    foreach ($users as $user => $info) {
        if ($email == $info['email'] && $pass == $info['password']) {
            $isLogged = true;
            $session->set('email', $email);
            $session->set('pass', $pass);
            require_once 'info.php';
            break;
        }
    }
} else if ($session->get('email') != '') {
    foreach ($users as $user => $info) {
        if ($session->get('email') == $info['password'] && $session->get('pass') == $info['pass']) {
            $isLogged = true;
            require_once 'info.php';
            break;
        }
    }
}
if ($isLogged == false) echo '<p>Login Inválido. <a href="index.html">Página de Login</a></p>'; 
