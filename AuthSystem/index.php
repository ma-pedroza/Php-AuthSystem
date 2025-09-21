<?php

require_once 'Validation.php';

require_once 'UserManager.php';

$userManagerClass = new userManager();

$userManagerClass->registerUser('Matheusão', 'usuariobase@gmail.com', 'Maquaquinn5');

$userManagerClass->login('usuariobase@gmail.com', 'Maquaquinn5');


?>