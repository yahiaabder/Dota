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

	public function updatepassword($ref){
		$validation =  \Config\Services::validation();

		if(!$this->userModel->admin_valid_pwd_reset($ref)){
			return redirect()->to(site_url("admin/login"))->with("error" , "Reset password url expired or not correct");
		}

		if(strtolower($this->request->getMethod()) == "post"){
			$rules = [
				"password1" => [
					"label" => "Password 1",
					"rules" => "required",
					"errors" => [
						"required" => "Please fill the first field"
					]
				],
				"password2" => [
					"label" => "Password 2",
					"rules" => "required|matches[password1]",
					"errors" => [
						"required" => "Please fill the second field",
						"matches" => "The two passwords do not match"
					]
				],
			];
			if(!$this->validate($rules))
			return redirect()->to(site_url("admin/pwd/update/".$ref))->with("error" , $validation->getErrors());

			$update = $this->userModel->admin_pwd_update(base64_decode($ref) , $this->request->getVar("password1"));
			if($update)
			return redirect()->to(site_url("admin/login"))->with("success" , "Password was reset successfully");
			
		}
		else
		return redirect()->to(site_url("admin/forgotpassword"));

	}

	public function resetpwd_request(){

		
		if(strtolower($this->request->getMethod()) !== "post")
		return redirect()->back()->with("error" , "Unauthorized request");
	
		$validation = \Config\Services::validation();
		$rules =[
			"email" => [
				"label" => "Email",
				"rules" => "required|valid_email",
				"errors" => "Enter valid email",
 			]
		];
		
		if(!$this->validate($rules))
		return redirect()->to(site_url("admin/forgotpwd"))->with("error" , $validation->getErrors());

		$admin_id = ($this->userModel->admin_from_email($this->request->getVar("email"))) ? $this->userModel->admin_from_email($this->request->getVar("email"))->admin_id : false;
		if($admin_id){
			$date = new \DateTime("now" , new \DateTimeZone(TIME_ZONE));
			$ref = base64_encode($this->request->getVar("email")."-*-".$date->getTimestamp());

			if($this->userModel->new_admin_pwd_reset($admin_id , $ref)){
				// $email = \Config\Services::email();
				// $email->setTo($this->request->getVar("email"));
				// $email->setFrom('info@dota.com', 'Dota');
				// $email->setSubject("Dota admin password reset");
				// $email->setMessage(view("admin/email/Email_admin_pwd_rest") , $ref);
				// $email->send();
				return redirect()->to(site_url("admin/login"))->with("success" , "We have emailed you the reset password link.");
			}
		}
		else
		return redirect()->to(site_url("admin/forgotpwd"))->with("error" , "Email you entred is not recognized");
		
		
		

	}

	public function forgotpassword(){
		echo view("admin/Forgotpassword.php");
	}

	public function updatepassword_form($ref){
		echo view("admin/Update_password.php" , ["ref" => $ref]);
	}
		

}