<?php
class Productmodel extends CI_Model
{

    public function insertproduct($data)
    {
        return $this->db->insert('products', $data);
    }
    public function getproduct()
    {
        $query = $this->db->get('products');
        return $query->result();
    }
    public function findproduct($id)
    {
        $query = $this->db->get_where('products', ['id' => $id]);
        return $query->row();
    }
    public function updateproduct($data, $id)
    {
        return $this->db->update('products', $data, ['id' => $id]);
    }

    public function checkProductImage($id){
        $query= $this->db->get_where('products',['id' => $id]);
        return $query->row();
    }
    public function deleteproduct($id){
        return $this->db->delete('products', ['id' => $id]);
    }
}
