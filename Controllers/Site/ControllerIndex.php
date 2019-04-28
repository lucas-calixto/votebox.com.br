<?php

namespace Controllers\Site;


use Controllers\ControllerBase;
use Helpers\GeoPlugin;
use Helpers\LoadTwig;

class ControllerIndex extends ControllerBase {
    
    private $template;
    
    function __construct() {
        $this->template = new LoadTwig;
    }

    public function index() {
        $geoip = new GeoPlugin;
        $geoip->locate();
        
        switch($geoip->lang):
            case 'pt-BR':
                return header('Location: /br');
            case 'us':
                return header('Location: /en');
            case 'es':
                return header('Location: /es');
            default :
                return header('Location: /en');
        endswitch;
    }
    
    public function indexBr() {
        ini_set('intl.default_locale', 'pt_BR');
        putenv('LC_ALL=pt_BR');
        setlocale(LC_ALL, 'pt_BR');
        
        bindtextdomain('messages', '../lang');
        bind_textdomain_codeset('messages', 'UTF8');
        textdomain('messages');
        
        $dados = array(
            "title" => "VoteBox - Crie uma pesquisa gratuita agora!"
        );
        $this->template->view($dados, 'Site.base_site');
    }
    
    public function indexEn() {
        ini_set('intl.default_locale', 'en_US');
        putenv('LC_ALL=en_US');
        setlocale(LC_ALL, 'en_US');
        
        bindtextdomain('messages', "../lang");
        bind_textdomain_codeset('messages', 'UTF8');
        textdomain('messages');

        $dados = array(
            "title" => "VoteBox - Crie uma pesquisa gratuita agora!"
        );
        $this->template->view($dados, 'Site.base_site');
    }
    
    public function indexEs() {
        ini_set('intl.default_locale', 'es_ES');
        putenv('LC_ALL=es_ES');
        setlocale(LC_ALL, 'es_ES');
        
        bindtextdomain('messages', "../lang");
        bind_textdomain_codeset('messages', 'UTF8');
        textdomain('messages');
        
        $dados = array(
            "title" => "VoteBox - Crie uma pesquisa gratuita agora!"
        );
        $this->template->view($dados, 'Site.base_site');
    }
}
