<?php
class Usermodel extends CI_Model
{

    public function getUserData()
    {
        $this->load->database();
        // $query =  $this->db->query("SELECT * FROM userdata");
        // $res = $query->result();
        // return $res;
        $this->db->select("name,acc");
        $this->db->where("id",2);
        $query =  $this->db->get("userdata");
        return $query->result();
    }
}
