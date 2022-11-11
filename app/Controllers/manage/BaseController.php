<?php

namespace App\Controllers\manage;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\manage\Seo_model;

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
    function __construct(){
        
    }
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['common', 'form'];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        $this->session = \Config\Services::session();
        // E.g.: $this->session = \Config\Services::session();
    }

    public function setSeoContent($data){
        $seo_md = new seo_model();
        $seo_md->saveseo($data);
    } 

    public function getSeoContent($content_id, $type){
        $seo_md = new seo_model();
        $query = $seo_md->getseo($content_id, $type);
        return $query;
    } 

    public function updateSeoContent($data, $id){
        $seo_md = new seo_model();
        $seo_md->updateseo($data, $id);
    } 
}
