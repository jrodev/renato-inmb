<?php
namespace App\Controllers;

use Libs\ChangeString;
use Libs\CompleteRange;
use Libs\ClearPar;
/**
 * Acciones para el Controlador Home
 */
class IndexController extend Controller
{

    public function index($req, $resp, $args)
    {
        // -----
        return $this->view->render($resp, 'views/home/index.twig');
    }

}
