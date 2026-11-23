<?php

// Autoload.php -> Responsável por carregar todas as classes que vamos definir (controllers e models)

// scandir -> Pegar o diretório, escanear e importar tudo que tiver lá, ou seja ele vai ler o diretorio e criar um Array com todos os arquivos da pasta

// Controllers Import
$controllers_files = scandir("./Controllers");

// pega todos os itens de $controllers_files e adiciona na variavel $files
foreach($controllers_files as $files) {
    if($files == '.' || $files == "..") { // Ignora o . e o .. antes das pastas que informa o dir atual e o dir anterior
        continue;
    }
    require_once './Controllers/' . $files;
}

// Models import
$models_files = scandir('./Models');

foreach ($models_files as $models) {
    if($models == '.' || $models == '..') {
        continue;
    }
    require_once './Models/' . $models;
}