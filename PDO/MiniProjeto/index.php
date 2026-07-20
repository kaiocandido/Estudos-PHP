<?php

require_once 'User.php';

$user = new User();

$user->create('kaio', "kaio@kaio.com");

$user->delete(1);

$user->update(1,'kaio', 'kaio@kaiocomK.com');

$users = $user->getAll();

echo "<h1>Usuarios</h1>";
foreach ($users as $u) {
    echo "ID: {$u['id']} - Nome: {$u['nome']} - Email: {$u['email']}</br>";
}
