<?php

/**
 * Arquivo responsável por iniciar a aplicação
 * 
 * @author Lucas Calixto de Oliveira <lucas@bytebee.com.br>
 * @version 1.0
 */
use Pecee\SimpleRouter\SimpleRouter;
use ActiveRecord\Config;

//Insere Autoloader
require_once '../vendor/autoload.php';

//Inicia ORM
Config::initialize(function($cfg) {
    $cfg->set_connections(
        array(
            'development' => 'mysql://root:123456@localhost/votebox'
        )
    );
});

//Default Controller namespace
SimpleRouter::setDefaultNamespace('Controllers\Site');

//Arquivo de Rotas
require_once '../routes.php';

//Trata das excessões
try {

    //Inicia SimpleRoute
    SimpleRouter::start();
} catch(\Exception $ex) {
    var_dump($ex);
}
