<?php
include 'User.php';



class Validation
{

    public function validateEmail($email)
    {
        if ($email == null or $email == '') {
            echo ('Email não pode ser vazio.');
            return false;
        }

        if (!preg_match('/@/', $email)) {
            echo ('Email inválido.');
            return false;
        }

        if (!str_ends_with($email, '.com')) {
            echo ('Email inválido.');
            return false;
        }

        return true;
    }

    public function validatePassword($password) {
        if (strlen($password) < 8) {
            echo('A senha deve conter pelo menos 8 caracteres.');
            return false;
        }
        if (!preg_match('/\d/', $password)) {
            echo("A senha deve conter pelo menos um dígito numérico.");
            return false;
        }

        if (!preg_match('/[A-Z]/', $password)) {
            echo("A senha deve conter pelo menos uma letra maiúscula.");
            return false;
       }

       return true;
    }

    # Função de validar HASH

    

    public function emailExist($email) {
        $userClass = new User();

        foreach ($userClass->users as $user) {
            if ($user['email'] == $email ) {
                echo('Email já cadastrado');
                return false;
            }
        }

        return true;
    }
}
