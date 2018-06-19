<?php

namespace App;

class Controller
{

    protected $view;
    protected $router;
    protected $dataLoader;

    /**
     * La instanciación del controller se hace en dependencies.php
     * @param Twig $view     Motor de plantillas
     * @param Routes $router   Ruteo
     * @param DataLoader $loadJson Carga el archivo employees,json
     */
    public function __construct($view, $router, $loadJson)
    {
        $this->view = $view;
        $this->router = $router;
        $this->dataLoader = $loadJson;
    }

    public function render($response, $view, $args = []) {
        return $this->ci->view->render($response, $view, $args);
    }

    /*
    protected $ci;

    public function __construct($ci) {
        $this->ci = $ci;
        $this->ci->db;
        $this->flash = $ci->flash;
    }

    public function redirect($route) {
        header('Location: ' . $this->ci->router->pathFor($route), true, 302);
        die();
    }
    */
}
