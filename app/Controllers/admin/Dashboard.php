<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;
include (APPPATH . 'Libraries/GroceryCrudEnterprise/autoload.php');
use GroceryCrud\Core\GroceryCrud;

class Dashboard extends BaseController{


    public function __construct(){
        
    }

    public function index(){
        $session = session();
        if($session->get("adminLoggedin")){
            $crud = $this->_getGroceryCrudEnterprise();
            // $crud->setCsrfTokenName(csrf_token());
            // $crud->setCsrfTokenValue(csrf_hash());
            $crud->setTable('dota_tournament_registration');
            $crud->setSubject('Tournament registration' , 'Tournament registrations');
            $crud->columns(["type" , "academy_name" , "academy_email" , "status"]);
            $crud->editFields(["type" , "academy_name" , "academy_email" , "status"]);
    
            $output = $crud->render();
            return $this->_example_output($output);
        }

        else
        return redirect()->to(site_url("admin/login"));
    }

    public function account(){
        $session = session();
        if($session->get("adminLoggedin")){

            $crud = $this->_getGroceryCrudEnterprise();
            // $crud->setCsrfTokenName(csrf_token());
            // $crud->setCsrfTokenValue(csrf_hash());
            $crud->setTable('admin');
            $crud->setSubject('Admin' , 'Admins');
            $crud->columns(["name" , "email" , "phone"]);
            $crud->editFields(["name" , "email" , "phone" , "password"]);

            $crud->callbackEditField('password', function ($fieldValue, $primaryKeyValue, $rowData) {
                return '<input class="form-control" type="password" name="password" value="' . base64_decode($fieldValue) . '"  />';
            });

            $crud->callbackBeforeUpdate(function ($stateParameters) {
                $password = $stateParameters->data['password'];
                $stateParameters->data['password'] = base64_encode($password);
                return $stateParameters;
            });
    
        
            $output = $crud->render();
            return $this->_example_output($output);

        }
        else{
            return redirect()->to(site_url("admin/login"));
        }

    }


    private function _example_output($output = null){
        // var_dump($output);die();
        if ($output->isJSONResponse)
        {
            header('Content-Type: application/json; charset=utf-8');
            echo $output->output;
            exit;
        }
        echo view('admin/Dashboard', (array)$output);
    }

    private function _getDbData(){
        $db = (new \Config\Database())->default;
        return [
            'adapter' => 
            [
            'driver' => 'Pdo_Mysql',
            'host' => $db['hostname'],
            'database' => $db['database'],
            'username' => $db['username'],
            'password' => $db['password'],
            'charset' => 'utf8'
            ]
            ];
    }

    private function _getGroceryCrudEnterprise($bootstrap = true, $jquery = true){
        $db = $this->_getDbData();
        $config = (new \Config\GroceryCrudEnterprise())->getDefaultConfig();
        $groceryCrud = new GroceryCrud($config, $db);
        return $groceryCrud;
    }


}