<?php

namespace App;//Especificação psr-4, espera que o namespace estaja nomaeado com o respectivo diretório

use MF\Init\Bootstrap;

class Route extends Bootstrap{
    //requiosito do sistema
    protected function initRoutes(){//para direcionar a rota 
        $routes['home'] = array(//array de configuração da rota home
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );
        $routes['inscreverse'] = array(//array de configuração da rota inscrever-se
            'route' => '/inscreverse',
            'controller' => 'indexController',
            'action' => 'inscreverse'
        );

        $routes['registrar'] = array(//array de configuração da rota registrar
            'route' => '/registrar',
            'controller' => 'indexController',
            'action' => 'registrar'
        );

        $routes['autenticar'] = array(//array de configuração da rota autenticar
            'route' => '/autenticar',
            'controller' => 'AuthController',//novo controlador
            'action' => 'autenticar'
        );

        $routes['timeline'] = array(//array de configuração da rota timeline
            'route' => '/timeline',
            'controller' => 'AppController',//novo controlador
            'action' => 'timeline'
        );

        $routes['sair'] = array(//array de configuração da rota sair
            'route' => '/sair',
            'controller' => 'AuthController',//novo controlador
            'action' => 'sair'
        );


        $routes['tweet'] = array(//array de configuração da rota tweet
            'route' => '/tweet',
            'controller' => 'AppController',//novo controlador
            'action' => 'tweet'
        );

        $routes['quem_seguir'] = array(//array de configuração da rota quem_seguir
            'route' => '/quem_seguir',
            'controller' => 'AppController',//novo controlador
            'action' => 'quemSeguir'
        );


        $routes['acao'] = array(//array de configuração da rota quem_seguir
            'route' => '/acao',
            'controller' => 'AppController',//novo controlador
            'action' => 'acao'
        );


        $routes['deletar_tweet'] = array(//array de configuração da rota quem_seguir
            'route' => '/deletar_tweet',
            'controller' => 'AppController',//novo controlador
            'action' => 'deletar_tweet'
        );
        
        $this->setRoutes($routes);
    }

}

?>