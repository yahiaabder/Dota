<?php

namespace App\Controllers;

class User extends BaseController
{
    public function register(){
        if($this->request->getMethod() == "post"){
            $validation = \Config\Services::validation();

            $rules_1 = [
                "name" => [
                    "label" => "Name",
                    "rules" => "required",
                    "errors" => [

                    ],
                ],
                "dob" => [
                    "label" => "Date of birth",
                    "rules" => "required|valid_date",
                    "errors" => [
                        "valid_date" => "Enter a valid date"
                    ],
                ],
                "gender" => [
                    "label" => "Gender",
                    "rules" => "required|in_list[male,female]",
                    "errors" => [
                        "in_list" => "Gender not supported"
                    ],
                ],
                "email" => [
                    "label" => "Email",
                    "rules" => "required|valid_email",
                    "errors" => [
                        "valid_email" => "Enter a valid email",
                    ],
                ],
                
                "phone" => [
                    "label" => "Phone number",
                    "rules" => "required|numeric",
                    "errors" => [
                        "numeric" => "Enter a valid Phone"
                    ],
                ],

                "nationality" => [
                    "label" => "Nationality",
                    "rules" => "required",
                    "errors" => [
                        // "numeric" => "Nationality not supported"
                    ],
                ],

                "category" => [
                    "label" => "Player category",
                    "rules" => "required|in_list[u18-b,u14-b,u12-b,u12-g,u14-g,u18-g,men,women]",
                    "errors" => [
                        "in_list" => "player category incorrect"
                    ],
                ],
                "play" => [
                    "label" => "Play type",
                    "rules" => "required|in_list[single,double]",
                    "errors" => [
                        "in_list" => "Play type incorrect"
                    ],
                ],
                
            ];
            $rules_2 = [
                "academy_name" => [
                    "label" => "Academy name",
                    "rules" => "required",
                    "errors" => [
                    ],
                ],

                "academy_email" => [
                    "label" => "Academy email",
                    "rules" => "required|valid_email",
                    "errors" => [
                        "valid_email" => "Enter a valid academy email"
                    ],
                ],
                "type" => [
                    "label" => "Type",
                    "rules" => "required|in_list[junior,senior]",
                    "errors" => [
                        "in_list" => "Select a correct type"
                    ],
                ],
                
            ];

            
            $errors_1 = [];
            $form = $this->request->getVar();
            // var_dump($form); die();

            // if(trim($form["type"]) == "senior")
            // unset($rules_1["category"]);
            if(trim($form["play"]) == "")
            unset($rules_1["play"]);

            // var_dump($rules_2);die();

            // Check academy infos validity
            $validation->setRules($rules_2);
            $is_valid = $validation->run($form);
            $errors_2 = $validation->getErrors();

            // Check players information validity
            $i=0;
            $b = true;
            foreach ($form as $key => $value) {
                # code...
                if($i >= 5){
                    $validation->reset();
                    // var_dump($value);
                    $validation->setRules($rules_1);
                    $is_valid = $validation->run($value);
                    // var_dump($errors_1);
                    $errors_1 = array_merge($errors_1 , ["player_".($i-4) => $validation->getErrors()]);   

                }

                if(!$is_valid)
                $b=false;
                $i++;
            }
            $errors = array_merge($errors_1 , $errors_2);
            // var_dump($errors , $b);

            // If All Data is Valid
            if($b){
                $i=0;
                $is_player_registred = false;
                $logs=[];

                // Check If academy is registred
                $is_academy_registred = $this->userModel->dota_aca_registration_exist($form["academy_name"] , $form["type"] , $form["academy_email"]);
                if($is_academy_registred)
                // array_push($logs , ["academy" => "Academy has registred players in this type & category"]);
                $logs["academy"] = "Academy has registred players in this type & category";

                // Check If Players are registred
                foreach ($form as $key => $value) {
                    # code...
                    if($i >= 5){
                        $is_p_r = $this->userModel->is_dota_player_registred($value["name"] , $value["gender"] , $value["email"] ,$value["phone"] ,$value["nationality"]);
                        if($is_p_r){
                            $is_player_registred = true;
                            $logs[$key] = "Player (".$value["name"].") already registred";
                        }
                    }

                    $i++;
                }

                // var_dump($logs);die();
                // Start saving process
                if(!$is_academy_registred && !$is_player_registred){
                    $c_code = base64_encode($form["academy_email"].rand(10 , 150000));
                    // Save academy registration
                    $registration_id = $this->userModel->do_action("dota_tournament_registration", "", "", "insert", [
                        "type" => $form["type"],
                        "academy_name" => $form["academy_name"],
                        "academy_email" => $form["academy_email"],
                        "e_code" => $c_code,
                    ], "");

                    // Save Academy players
                    // var_dump($registration_id);die();
                    if($registration_id){
                        $i = 0;
                        // save players
                        foreach ($form as $key => $value) { 
                            # code...
                            if($i >= 5){
                                // var_dump($value);
                                $this->userModel->do_action("players", "", "", "insert", [
                                    "registration_id" => $registration_id,
                                    "name" => $value["name"],
                                    "dob" => $value["dob"],
                                    "gender" => $value["gender"],
                                    "email" => $value["email"],
                                    "phone" => $value["phone"],
                                    "nationality" => $value["nationality"],
                                    "category" => $value["category"],
                                    "play" => (isset($value["play"])) ? $value["play"] : null,
                                ] , "");
                            }
                            $i++;
                        }
                        // var_dump($logs);die();


                        // Send Confirmation email
                        $content= view("email/Tr_reg_confirmation" , ["title" => "Dota tournament" , "academy_name" => $form["academy_name"] , "c_code" => $c_code]);
                        if($this->email_confirmation( $form["academy_email"] , $content , "DOTA Tournament | Confirm registration"))
                        $notif= view("email/Registration_notification" , ["form" => $form]);
                        if($this->email_confirmation( "info@dota.ae" , $notif , "DOTA Tournament | Academy registration") )
                        if(true)
                        $this->form_registration([ "success" => true , "message" => "Thank you <b>".$form["academy_name"]."</b> for your intrest, an email was sent to <b>".$form["academy_email"]."</b> to confirm your registration." ]);
                    }
                }

                // Return Errors message to the form
                else{
                    $this->form_registration(["logs" => $logs , "data" => $form]);
                }
            }

            // Data sent Is not Valid
            else{
                $this->form_registration(["errors" => $errors , "data" => $form]);
            }


        }
    }

    public function form_registration($data = array("errors" => [] , "data" => [])){
        // var_dump($_POST);die();
        if((isset($_POST["category"]) && isset($_POST["type"]))):
            
            echo view("Common/Header");
            echo view("forms/Register_form" , $data);
            echo view("Common/Footer");
        
        else:
            return redirect()->back()->with("error" , "Please select an option");
        endif;

    }

    public function form_type(){
        echo view("Common/Header");
        echo view("forms/Dota_form_type");
        echo view("Common/Footer");
    }

    public function junior_category(){
        $session = session();
        echo view("Common/Header");
        echo view("forms/Dota_form_category" , ["type" => "junior"]);
        echo view("Common/Footer");
    }
    public function senior_category(){
        $session = session();
        echo view("Common/Header"); 
        echo view("forms/Dota_form_category" , ["type" => "senior"]);
        echo view("Common/Footer");         
    }


    public function senior_play(){
        if($this->request->getMethod() == "post" && isset($_POST["category"])):
        echo view("Common/Header");
        echo view("forms/Dota_form_play");
        echo view("Common/Footer");
        else:
            return redirect()->back()->with("error" , "select and option");
        endif;
    }

    public function email_confirmation($address , $content , $subject){
        if($to = $address){
            $message = $content;
            $email = \Config\Services::email();
            $email->setTo($to);
            $email->setFrom('info@dota.com', 'Dota');
            $email->setSubject($subject);
            $email->setMessage($message);
            if ($email->send()) {
                return true;
            } 
            else {
                $data = $email->printDebugger(['headers']);
                return false;
            }
        }
    }

    public function cr($code){
        $req = "select academy_email,academy_name from dota_tournament_registration where e_code='".$code."' and status='not confirmed'";
        $res = $this->userModel->customQuery($req);

        if(!is_null($res) && sizeof($res) > 0){
            $this->userModel->do_action("dota_tournament_registration", $code, "e_code" , "update", ["status"=>"confirmed"], "");
            // $this->newsletterModel->_subscribe(["email" => $res[0]->email]);
            $this->form_registration([ "success" => true , "message" => "Thank you your registration has been confirmed successfully! You will be contacted soon. </br> Stay Tuned" ]);
        }

        else
        $this->form_registration([ "success" => false , "message" => "Email address not found or confirmation link has expired."]);

    }

    public function contact_request(){

        if($this->request->getMethod() == "post"){
            $contact = $this->request->getVar();

            $validation = \Config\Services::validation();
            $rules = [
                "email" => [
                    "label" => "Email",
                    "rules" => "required|valid_email",
                    "errors" => [
                        "required" => "You must set a valid email",
                    ],
                ],

                "subject" => [
                    "label" => "Subject",
                    "rules" => "required",
                    "errors" => [
                        "required" => "You must set a valid email",
                    ],
                ],
                
                "full_name" => [
                    "label" => "Full name",
                    "rules" => "required",
                ],
                
                "phone" => [
                    "label" => "Phone number",
                    "rules" => "required|numeric",
                    "errors" => [
                        "numeric" => "Enter a valid Phone number"
                    ],
                ],
                
            ];
            if($this->validate($rules)){

                $email_status = $this->email_confirmation($contact["email"] , view("email/Contact" , $contact) , $contact["subject"]);
                echo view("Common/Header");
                echo view("Contact-success" , ["status" => $email_status]);
                echo view("Common/Footer");

            }
            else{

                echo view("Common/Header");
                echo view("Common/Contactus" , array_merge($contact , ["errors" => $validation->getErrors()]));
                echo view("Common/Footer");
            }
            
        }
        else{
            return false;
        }
    }


    public function test(){
        // echo view("Common/Header");
        echo view("email/Registration_notification");
        // echo view("Common/Footer");
    }

    

    
}
