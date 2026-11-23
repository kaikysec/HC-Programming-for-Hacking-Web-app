<?php

// Quando for feito uma requisição pro index ele vai carregar o autoload.php
require_once 'autoload.php';

$route = $_SERVER['REQUEST_URI'];

// Switch case

switch($route){
    case '/':
        $auth = new AuthController(); // se for chamado a raiz, verificar se o user esta autenticado
        if($auth->checkAuth()){ // verifica se esta autenticado (is_auth)
            echo "Voce esta autenticado!";
        } else {
            header('Location: /login'); // sete um header para direcionar esse usuario para /login
        }
        break;

    case '/login':
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // implementar a arquitetura do JSON na rota (JS)
            $request = file_get_contents('php://input'); // php input vai ler tudo o que ta vindo na requisicao http do usuario
            // Deserialização pegar o JSON e transformar dnv em objeto
            $data_obj = json_decode($request);
            
            $auth = new AuthController();
            $result = $auth->login($data_obj->username, $data_obj->password);
            if($result) {
                echo "Login realizado com sucesso!";
            } else {
                echo "Login ou senha inválidos";
            }

        } else {
            $controller = new ViewController();
            $controller->render('login');
        }
        break;

        case '/register':
        if($_SERVER['REQUST_METHOD'] == 'POST'){
            echo "Fazer cadastro";
        } else {
            $controller = new ViewController();
            $controller->render('register');
        }
        break;

    default:
        echo "Página não encontrada!";
        break;
}