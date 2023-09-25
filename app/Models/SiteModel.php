<?php

namespace App\Models;

use CodeIgniter\Model;

class SiteModel extends Model{

    private $userModel = null;

    public function __construct(){
        $this->userModel = model("App\Model\UserModel");
    }

    public function get_settings(){
        $req = "select * from settings";
        $res = $this->userModel->customQuery($req);

        if($res && sizeof($res) > 0)
        return $res;

        return [];
    }
}

