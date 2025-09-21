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
        foreach ($this->users as $user) {
            if ($user['id'] > $count) {
                $count = $user['id'];
            }
        }

        return $count;
    }

    public function registerUser($name, $email, $senha) {
        $validationClass = new validation();

        if ($validationClass->validateEmail($email) == false) return;

        if ($validationClass->emailExist($email, $this) == false) return;

        if ($validationClass->validatePassword($senha) == false) return;

        $senhaHash = $validationClass->hashPassword($senha);

        $user = new user ($this->idCount, $name, $email, $senhaHash);

        $this->users[] = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password
        ];

        echo "Usuário cadastrado com sucesso! Bem vindo {$name} <br>";
   
    }

    public function login($email, $senha) {
        $validationClass = new validation();

        if ($validationClass->validateEmail($email) == false)  return;
        if ($validationClass->validatePassword($senha) == false) return;

        foreach ($this->users as $user) {
            if (password_verify($senha, $user['password']) && $user['email'] == $email) {

                echo "Bem vindo de volta {$user['name']} <br>";
                return;
            }
        }

        echo "Email ou Senha inválidos. Tente novamente. <br>";

    }

    public function resetPassword($id, $senha) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        foreach ($this->users as &$user) {
            if ($user['id'] == $id) {

                $user['password'] = $senhaHash;

                echo "Senha do Usuário {{$user['name']}} atualizada com sucesso. <br>";
                return;
            }
        }

         echo "Usuário não encontrado. <br>";
    }
}