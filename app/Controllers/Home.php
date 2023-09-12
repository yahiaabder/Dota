<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo view('Common/Header' , ["page_title" => "VContact - Home"]);
        echo view('Home');
        echo view('Common/Footer');
    }

    public function contact_us(){
        echo view("Common/Header");
        echo view("Common/Contactus");
        echo view("Common/Footer");
    }

    public function who_we_are(){
        echo view("Common/Header");
        echo view("Whoweare");
        echo view("Common/Footer");
    }

    public function programs(){
        echo view("Common/Header");
        echo view("Programs");
        echo view("Common/Footer");
    }

    public function gallery($year="2023"){
        $images  = array_merge(glob(ROOTPATH."/assets/img/gallery/".$year."/*.jpg" , GLOB_NOSORT ) , glob(ROOTPATH."/assets/img/gallery/".$year."/*.png" , GLOB_NOSORT ));
        array_multisort(array_map('filemtime', $images), SORT_NUMERIC , SORT_DESC , $images);

        echo view("Common/Header");
        echo view("Gallery" , ["images" => $images , "year" => $year]);
        echo view("Common/Footer");
    }
    
    public function rule_and_regulations(){
        echo view("Common/Header");
        echo view("Rules");
        echo view("Common/Footer");
    }

    

    
}
