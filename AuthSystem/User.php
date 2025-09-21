<?php

class user {

    public $id;
    public $name;
    public $email;
    public $password;

    public function __construct($id, $name, $email, $senha ){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $senha;
    }

}

?>