<?php

Class AuthController {

    public $is_auth = false; //User autenticado ou não, por padrão false, sempre desautenticado
    public $username; //Nome do usuario
    public $user_id; //ID do usuario

    public function login($username, $password) {

        if($username == 'admin' && $password == '1234'){
            return true;
        } else {
            return false;
        }
    }

    public function register($username, $password) {

        return "Tela de registro!";
    }

    public function checkAuth() { // func para sempre verificar se o user esta logado
        return $this->is_auth;
    }

}