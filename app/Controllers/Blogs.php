<?php

namespace App\Controllers;

class Home extends BaseController{

    public function index(){
        echo view("Common/Header");
        echo view("Common/blogs/Blog_list");
        echo view("Common/Footer");
    }

}