<?php

namespace App\Controllers;

class System extends BaseController{

    function __construct(){

    }

    public function change_language($language){

        $lang = array( "EN" , "AR" );
        $feedback = array("status" => 0 , "message" => "");

        if(strtolower($this->request->getMethod() !== "post"))
        $feedback["message"] = "Enable to change language";

        if(in_array($language , $lang)){
            set_cookie("language" , $language , 3600);
            $feedback["status"] = 1;
    
            switch ($language) {
                case 'EN':
                    # code...
                $feedback["message"] = "Language updated successfully to English";
    
                break;
                
                default:
                    # code...
                $feedback["message"] = "Language updated successfully to Arabic";
    
                break;
            }
        }
        else 
        $feedback["message"] = "Language not recognized";
        return json_encode($feedback);
    }

}