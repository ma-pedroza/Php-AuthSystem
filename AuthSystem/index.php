<?php

require_once 'UserManager.php';

$userManagerClass = new userManager();

$userManagerClass->registerUser('Maria Oliveira', 'maria@email.com', 'Senha123');

$userManagerClass->registerUser('Pedro', 'pedro@@email', 'Senha123');

$userManagerClass->login('joao@email.com', 'Errada123');

$userManagerClass->resetPassword(1, 'NovaSenha123');

$userManagerClass->registerUser('Valdir', 'maria@email.com', 'Senha231');

?>