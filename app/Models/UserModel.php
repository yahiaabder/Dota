<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table;
    protected $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
        // OR $this->db = db_connect();
    }

    public function insert_data($data = [], $table)
    {
        $this->db->table($table)->insert($data);
        return $this->db->insertID();
    }

    public function do_action(
        $table_name,
        $id,
        $fieldname,
        $action,
        $data,
        $limit
    ) 
    {
        if ($action == "get") {
            if ($id != "" && $fieldname != "" && $data == "" && $limit == "") {
                $this->db->select("*");
                $this->db->from($table_name);
                $this->db->where($fieldname, $id);
                $this->db->limit($limit);
            } else {
                $this->db->select("*");
                $this->db->from($table_name);
                $this->db->limit($limit);
            }
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        }
        if ($action == "insert") {
            $return = $this->db->table($table_name)->insert($data);

            if ((bool) $return === true) {
                return $this->db->insertID();
            } else {
                return $return;
            }
        }
        if ($action == "update") {
            $return = $this->db
                ->table($table_name)
                ->where($fieldname, $id)
                ->update($data);

            return $return;
        }
        if ($action == "delete") {
            $return = $this->db
                ->table($table_name)
                ->where($fieldname, $id)
                ->delete();

            return $return;
        }
    }

    public function update_data($id, $v, $data = [], $table)
    {
        $this->db->table($table)->update($data, [
            "admin_id" => 2106122357055,
        ]);
        return $this->db->affectedRows();
    }

    public function delete_data($id, $table)
    {
        return $this->db->table($table)->delete([
            "id" => $id,
        ]);
    }

    public function get_all_data($table)
    {
        $query = $this->db->query("select * from " . $table);
        return $query->getResult();
    }

    public function customQuery($sql)
    {
        $query = $this->db->query($sql);
        // if ($query) {
        //     return $query->getNumRows() > 0 ? $query->getResult() : null;
        // } else {
        //     return null;
        // }
        
        if($query){
            if(!is_bool($query))
            return $query->getNumRows() > 0 ? $query->getResult() : null;
            else 
            return $query;

        }
        else{
            return null;
        }
    }

    public function customQueryy($sql)
    {
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_user_email($user_id){

        $req="select email from users where user_id='".$user_id."'";
        $res=$this->customQuery($req);

        if($res)
        return $res[0]->email;
        else return false;
    }

    public function get_user($id){
        $user = $this->customQuery("select * from users where user_id='".$id."' and status='Active'");
        if($user){
            return $user[0];
        }

        return false;
    }

    public function get_user_image($userid){
        $req = "select image from users where user_id='".$userid."'";
        $image = $this->customQuery($req);

        if($image){
            if(trim($image[0]->image) !== "")
            return "assets/uploads/".$image[0]->image;

            else return "assets/img/user_avatar.jpg";
        }

        return false;
    }
    
    public function is_registred($user_id){
        $bool = false;
        $req="select user_type,email_verification from users where user_id='".$user_id."'";
        $res = $this->customQuery($req);

        if(!is_null($res) && sizeof($res) > 0){
            if($res[0]->user_type == "Normal" && $res[0]->email_verification == "Verified")
            $bool = true;
        }

        return $bool;
    }
    
    public function grant_access(){
        
        //   Access Start
        // Checking access user Start ################
        $session = session();
        $uri = service('uri');
        @$admin_id = $session->get('adminLoggedin');

        $access = array(
          "addFlag" => 0,
          "editFlag" => 0,
          "deleteFlag" => 0,
          "accessFlag" => 0,
          "viewFlag" => 0,
        );

        $uri1 = $uri2 = $uri3 = "";
        if (count(@$uri->getSegments()) > 1)
        {
            $uri1 = @$uri->getSegment(2);
        }
        if (count(@$uri->getSegments()) > 2)
        {
            $uri2 = @$uri->getSegment(3);
        }
        if (count(@$uri->getSegments()) > 3)
        {
            $uri3 = @$uri->getSegment(4);
        }
        if (@$admin_id)
        {
            $sql = "select * from access_group_master where  admin_id='$admin_id' ";
            $access_group_master = $this->customQuery($sql);
            if ($access_group_master)
            {
                foreach ($access_group_master as $k1 => $v1)
                {
                    $group_id = $v1->group_id;
                    $sql = "select * from groups_assigned where  group_id='$group_id' ";
                    $groups_assigned = $this->customQuery($sql);

                    if ($groups_assigned)
                    {
                        foreach ($groups_assigned as $k2 => $v2)
                        {
                            $access_modules_id = $v2->access_modules_id;
                            $sql = "select * from access_modules where  access_modules_id='$access_modules_id' ";
                            $access_modules = $this
                                ->customQuery($sql);
                            if ($access_modules[0]->segment_1 == $uri1)
                            {
                                $access["viewFlag"] = 1;
                                if ($access_modules[0]->segment_3 == 'add')
                                {
                                    $access["addFlag"] = 1;
                                }
                                if ($access_modules[0]->segment_3 == 'edit')
                                {
                                    $access["editFlag"] = 1;
                                }
                                if ($access_modules[0]->segment_3 == 'delete')
                                {
                                    $access["deleteFlag"] = 1;
                                }
                            }
                        }
                    }
                }
            }
        }
        else
        {
            return redirect()->to(base_url() . '/supercontrol/Login');
        }

        return $access;
        
    }

    public function get_user_phone($user_id){

        $req="select phone from users where user_id='".$user_id."'";
        $res=$this->customQuery($req);

        if($res)
        return $res[0]->phone;
        else return false;
    }

    public function get_user_address($user_id){
        $req = "select * from user_address where user_id='".$user_id."' AND status='Active'";
        $res = $this->customQuery($req);

        if($res && sizeof($res) > 0){
            return $res[0];
        }

        return false;
    }
    
    public function get_user_addresses($user_id){
        $req = "select * from user_address where user_id='".$user_id."' order by created_at desc";
        $res = $this->customQuery($req);

        if($res && sizeof($res) > 0){
            return $res;
        }

        return [];
    }

    public function save_user_address($user_id , $data){
        $validation = \Config\Services::validation();
        $validation->setRules([
            'street' => ['label' => 'street', 'rules' => 'required'],
            'apartment_house' => ['label' => 'Appartement', 'rules' => 'required'],
            'address' => ['label' => 'address', 'rules' => 'required'],
            'city' => ['label' => 'city', 'rules' => 'required'],
        ]);

        if($validation->run($data)){
            $uaddress["user_id"] = $user_id;
            $uaddress["name"] = $data["name"];
            $uaddress["street"] = $data["street"];
            $uaddress["apartment_house"] = $data["apartment_house"];
            $uaddress["city"] = $data["city"];
            $uaddress["address"] = $data["address"];
            $uaddress["status"] = "Active";
            $res = $this->do_action(
                "user_address",
                "",
                "",
                "insert",
                $uaddress,
                ""
            );
            return $this->get_user_address($user_id);
        }
        else 
        return false;
    }


    public function save_user_phone($user_id , $phone){
        $validation = \Config\Services::validation();
        $validation->setRules([
            'order_phone' => ['label' => 'Phone', 'rules' => 'required|regex_match[/\d+/]'],
        ]);

        if($validation->run(["order_phone" => $phone])){
            $res = $this->do_action("users", $user_id, "user_id" , "update", ["phone" => $phone], "");
            if($res)
            return $phone;
        }

        return false;
    }


    
    public function user_has_address($id){
        $b = false;
        $session = session();
        $user_id = $session->get("userLoggedin");
        if($user_id){
            $res = $this->customQuery("select count(*) as nbr from user_address where user_id='".$user_id."' AND address_id=".$id."");
            if($res && $res[0]->nbr > 0)
            $b = true;
        }

        return $b;
    }

    public function user_email_exist($email){
        $sql = "select * from users where email='".$email."' AND user_type='Normal'";
        $res = $this->customQuery($sql);
        if($res && $res[0]->status !== "Inactive")
        return $res;

        return false;
    }

    public function user_social_signup($email , $name , $image , $provider){

        if(trim($email) !== "" ){
            $p["email"] = $email;
            $p["name"] = $name;
            $p["image"] = $image;
            $p["user_id"] = time();
            $p["status"] = "Active";
            $p["email_verification"] = "Verified";
            $p["social_inscription"] = $provider;
            $p["token"] = md5($p["user_id"]);
            $p["token_created_at"] = date("Y-m-d H:i:s");

            $this->do_action("users" , "" , "" , "insert" , $p , "");

            return $this->user_email_exist($email);
        }

        return false; 
    }

    public function dota_aca_registration_exist($academy_name , $type , $academy_email){
        $req = "select count(academy_email) as c from dota_tournament_registration 
        where type='".$type."' 
        AND academy_name ='".$academy_name."' 
        AND academy_email ='".$academy_email."'
        ";

        $res = $this->customQuery($req);
        if($res && $res[0]->c > 0)
        return true;

        return false;
    }

    public function is_dota_player_registred($name , $gender , $email , $phone , $nationality){
        $req = "select count(email) as c from players 
        where name='".$name."' 
        AND gender='".$gender."'
        AND email='".$email."'
        AND phone='".$phone."'
        AND nationality='".$nationality."'
        ";

        $res = $this->customQuery($req);
        if($res && $res[0]->c > 0)
        return true;

        return false;
    }


}
