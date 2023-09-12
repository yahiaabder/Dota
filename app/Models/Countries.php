<?php

namespace App\Models;

use CodeIgniter\Model;

class Countries extends Model{

    private $userModel = null;

    public function __construct(){
        $this->userModel = model("App\Model\UserModel");
    }

    public function get_countries(){
        $req = "select iso,nicename from countries";
        $res = $this->userModel->customQuery($req);

        if($res && sizeof($res) > 0)
        return $res;

        return [];
    }
}

