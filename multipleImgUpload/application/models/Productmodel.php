<?php
class Productmodel extends CI_Model{
    public function add_record($data){
        $this->db->insert('produk', $data);
        return;
    }
}