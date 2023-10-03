<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index()
    {
        if(true){
            $subject = "Test from dota";
            $message = "Hello frol DOTA";
            $email = \Config\Services::email();
            $email->setTo("");
            // $email->setCC("");
            $email->setFrom('info@dota.ae', 'DOTA');
            $email->setSubject($subject);
            $email->setMessage($message);
            if ($email->send()) {
                echo 'Email successfully sent';
                // return true;
            } 
            else {
                $data = $email->printDebugger(['headers']);
                print_r($data);
                return false;
            }
        }
    }

}
