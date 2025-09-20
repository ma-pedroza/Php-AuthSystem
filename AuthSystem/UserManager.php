<?php

include 'User.php';


class UserManager {
    public array $users;


    public function __construct()
    {
        $this->users = [
            ['id' => 1,
            'nome' => 'Usuário Base',
            'email' => 'usuariobase@gmail.com',
            'senha' => 'SenhaUsuarioBase'],
        ];
    }    

    public function registerUser($name, $email, $senha) {
        $user = new User($name, $email, $senha);
    }

    public function login() {}

    public function resetPassword() {}
}