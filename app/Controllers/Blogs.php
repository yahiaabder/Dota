<?php

namespace App\Controllers;

class Blogs extends BaseController{

    public function index(){
        echo view("Common/Header");
        echo view("blogs/Blog_list");
        echo view("Common/Footer");
    }

}