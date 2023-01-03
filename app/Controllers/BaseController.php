<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Libraries\LoadViews;

use App\Models\UserModel;
use App\Models\ClienteModel;
use App\Models\ProductoModel;
use App\Models\CategoriaModel;
use App\Models\CarritoModel;
use App\Models\InicioModel;
use App\Models\CierreModel;
use App\Models\ProductoCarritoModel;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    
    protected $request;
    protected $loadviews;
    protected $validation;
    protected $session;
    protected $userModel;
    protected $clienteModel;
    protected $productoModel;
    protected $categoriaModel;
    protected $carritoModel;
    protected $inicioModel;
    protected $cierreModel;
    protected $productocarritoModel;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['url', 'form', 'cookie'];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        $this->validation           = \Config\Services::validation();
        $this->session              = \Config\Services::session();
        
        $this->loadviews            = new LoadViews();
        $this->userModel            = new UserModel();
        $this->clienteModel         = new ClienteModel();
        $this->productoModel        = new ProductoModel();
        $this->categoriaModel       = new CategoriaModel();
        $this->carritoModel         = new CarritoModel();
        $this->inicioModel          = new InicioModel();
        $this->cierreModel          = new CierreModel();
        $this->productocarritoModel = new ProductoCarritoModel();

        date_default_timezone_set('America/Argentina/Salta');
        
    }
}
