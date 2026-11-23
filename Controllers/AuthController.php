<?php

Class AuthController {

    public $is_auth = false; //User autenticado ou não, por padrão false, sempre desautenticado
    public $username; //Nome do usuario
    public $user_id; //ID do usuario

    public function login($usernamem, $password) {

        return "Tela de login!";
    }

    public function register($username, $password) {

        return "Tela de registro!";
    }

    public function checkAuth() { // func para sempre verificar se o user esta logado
        return $this->is_auth;
    }

}