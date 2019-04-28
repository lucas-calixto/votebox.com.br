<?php

use Pecee\SimpleRouter\SimpleRouter;


//Rotas Site
SimpleRouter::get('/', 'ControllerIndex@index');
SimpleRouter::get('/br', 'ControllerIndex@indexBr');
SimpleRouter::get('/en', 'ControllerIndex@indexEn');
SimpleRouter::get('/es', 'ControllerIndex@indexEs');
//SimpleRouter::post('/enviar-contato', 'ControllerIndex@contato');
//SimpleRouter::post('/cadastrar-email', 'ControllerIndex@newslatter');
//
////Rotas Aplicação
//SimpleRouter::get('/app', 'ControllerAppIndex@index');
//SimpleRouter::get('/app/entar', 'ControllerRegistro@entrar');
//SimpleRouter::get('/app/registrar', 'ControllerRegistro@registrar');