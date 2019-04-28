<?php

namespace Helpers;

use Twig;
use Twig_Extensions_Extension_I18n;

/**
 * Classe responsável por carregar o Twig na aplicação
 * Twig -> biblioteca para templates
 * 
 * @author Lucas Calixto de Oliveira <lucas@bytebee.com.br>
 * @version 1.0
 */
class LoadTwig {

    private $twig;

    function __construct() {
        $loader = new Twig\Loader\FilesystemLoader('../Views');
        $this->twig = new Twig\Environment($loader, [
            'debug' => true,
            //'cache' => '../cache',
            'auto_reload' => true
        ]);
        
        $this->twig->addExtension( new Twig_Extensions_Extension_I18n() );
    }

    public function view($data, $view) {
        $template = $this->twig->load(str_replace('.', '/', $view) . '.twig');
        return $template->display($data);
    }

}
