<?php
class Validation
{

    public function validadeEmail($email)
    {
        if ($email == null or $email = '') {
            echo ('Email não pode ser vazio.');
        }
    }

    public function validatePassword($password) {}
}
