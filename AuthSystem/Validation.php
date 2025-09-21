<?php
require_once 'UserManager.php';



class validation
{

    public function validateEmail($email)
    {
        if ($email == null or $email == '') {
            echo "Email não pode ser vazio. <br>";
            return false;
        }

        if (!preg_match('/@/', $email)) {
            echo "Email inválido. <br>";
            return false;
        }

        if (!str_ends_with($email, '.com')) {
            echo "Email inválido. <br>";
            return false;
        }

        return true;
    }

    public function validatePassword($password) {
        if (strlen($password) < 8) {
            echo "A senha deve conter pelo menos 8 caracteres. <br>";
            return false;
        }
        if (!preg_match('/\d/', $password)) {
            echo "A senha deve conter pelo menos um dígito numérico. <br>";
            return false;
        }

        if (!preg_match('/[A-Z]/', $password)) {
            echo "A senha deve conter pelo menos uma letra maiúscula. <br>";
            return false;
       }

       return true;
    }

    public function hashPassword($password) {
        if ($this->validatePassword($password) == true) {
            
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            return $passwordHash;
        }

        return false;
    }    

    public function emailExist($email, $userManager) {

        foreach ($userManager->users as $user) {
            if ($user['email'] == $email ) {
                echo "Email já cadastrado <br>";
                return false;
            }
        }

        return true;
    }
}
