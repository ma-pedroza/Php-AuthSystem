<?php

class User
{

    private array $users;


    public function __construct()
    {
        $this->users = [
            'id' => 1,
            'nome' => 'Usuário Base',
            'email' => 'usuariobase@gmail.com',
            'senha' => 'SenhaUsuarioBase'
        ];
    }
}
