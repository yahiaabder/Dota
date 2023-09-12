<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\UserModel;


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
abstract class BaseController extends Controller
{
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
    protected $helpers = ["cookie" , "language" , "search" ];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
            $this->session = \Config\Services::session();
		   $this->userModel = new UserModel();
		//    $this->orderModel = new OrderModel();
		//    $this->productModel = new ProductModel();
		//    $this->brandModel =new BrandModel();
		//    $this->category = new Category();
		//    $this->attributeModel = new AttributeModel();
        //    $this->walletModel = new WalletModel();
        //    $this->blogModel = new BlogModel();
        //    $this->newsletterModel = new NewsletterModel();
		   $this->form_validation =  \Config\Services::validation();
        // E.g.: $this->session = \Config\Services::session();
    }
}
