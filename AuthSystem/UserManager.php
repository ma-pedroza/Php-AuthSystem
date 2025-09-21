<?php

require_once 'User.php';
require_once 'Validation.php';

class userManager {
    public array $users;

    private $idCount;

    public function __construct()
    {
        $this->users = [
            ['id' => 1,
            'name' => 'Usuário Base',
            'email' => 'usuariobase@gmail.com',
            'password' => 'SenhaUsuarioBase1'],
        ];

        $this->idCount = $this->getMaxId() + 1;
    }

    

    public function getMaxId() {
        $count = 0;
        foreach($this->users as $user) {
            if($user['id'] > $count) {
                $count = $user['id'];
            }
        }

        return $count;
    }

    public function registerUser($name, $email, $senha) {
        $validationClass = new validation();

        if ($validationClass->validateEmail($email) == false) return;

        if ($validationClass->emailExist($email) == false) return;

        if ($validationClass->validatePassword($senha) == false) return;

        $senhaHash = $validationClass->hashPassword($senha);

        $user = new user ($this->idCount, $name, $email, $senhaHash);

        $this->users[] = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password
        ];

        print_r($this->users);
   
    }

    public function login($email, $senha) {
        $validationClass = new validation();

        if ($validationClass->validateEmail($email) == false)  return;
        if ($validationClass->validatePassword($senha) == false) return;

        $userManagerClass = new userManager();

        foreach ($userManagerClass->users as $user) {
            if(password_verify($senha, $user['password'])){
                echo('Bem vindo de volta' . $user['name']);
            }
        }

        echo ('Email ou Senha inválidos. Tente novamente.');


    }

    public function resetPassword() {}
}