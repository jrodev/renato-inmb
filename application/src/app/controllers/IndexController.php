<?php
namespace App\Controllers;

use App\Controller;
use Libs\ChangeString;
use Libs\CompleteRange;
use Libs\ClearPar;
/**
 * Acciones para el Controlador Home
 */
class IndexController extends Controller
{

    public function index($req, $resp, $args)
    {
        // -----
        b((func_get_args())); exit;
        return $this->view->render($resp, 'views/home/index.twig');
    }

}
