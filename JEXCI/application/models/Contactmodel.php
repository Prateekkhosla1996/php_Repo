<?php
class Contactmodel extends CI_Model
{

    public function insert_contactus($array)
    {
        return $this->db->insert('contactus', $array);
    }
    public function getcontact()
    {
        $q = $this->db->select()->get('contactus');
        return $q->result();
    }
}
