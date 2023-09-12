<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;

class Login extends BaseController{

	public $session;

	function __contruct(){
		$this->session = session();
	}

    public function index(){
		// var_dump(base64_encode("helloworld"));
		if($this->session->get("adminLoggedin"))
		return redirect()->to(site_url("admin/dashboard"));
		else
        return view("admin/Login");
    }

    public function check_login(){
        $data = [];
		if ($this->request->getMethod() == "post") {
			// var_dump($this->request->getVar());die();
			$validation =  \Config\Services::validation();
			$rules = [
				"username" => [
					    "label" => "Username", 
					    "rules" => "required|valid_email",
                        "errors" => [
                            "valid_email" => "Username must be valid email ID"
                        ]
				    ],
				"password" => [
					    "label" => "Password", 
					    "rules" => "required"
				    ]
			];

			if ($this->validate($rules)) {
				$username=$this->request->getVar('username');
				$password=base64_encode($this->request->getVar('password'));
				
				$admin_id = $this->userModel->admin_login($username , $password);

				if($admin_id){ 
				    $session = session();
				    $session->set('adminLoggedin', $admin_id);
					return redirect()->to(site_url('admin/dashboard'));
				}

				else{
					$this->session->setFlashdata('error', 'Invalid Username or Password');
					return redirect()->back();
				}
			} 
            else {
				// var_dump($validation);die();
				$data["validation"] = $validation->getErrors();
				return view("admin/Login" , $validation->getErrors());
			}
		}

		else{
			return redirect()->to(site_url("admin/login"));
		}
    }

	public function logout(){
		$this->session->remove('adminLoggedin');
		// $this->session->setFlashdata('success', 'You have been successfully logged out.');   
	    return redirect()->to(site_url('admin/login'));
	}
		

}