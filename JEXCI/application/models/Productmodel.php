<?php
class Productmodel extends CI_Model
{

    public function add_product($array)
    {
        return $this->db->insert('products', $array);
    }
    public function getproducts()
    {
        $q = $this->db->select()->get('products');
        return $q->result();
    }
    public function find_product($pid)
    {
        $q = $this->db->select()
            ->where('id', $pid)
            ->get('products');
        return $q->row();
    }
    public function update_product($id, $product)
    {
        return $this->db->where('id', $id)
            ->update('products', $product);
    }

    public function delete_product($id)
    {
        return $this->db->delete('products', ['id' => $id]);
    }
    public function getallproducts(){
        $q = $this->db->query("SELECT products.*,categories.cname from products,categories where products.categories_id=categories.id ORDER BY id desc");
        
        return $q->result();
    }
    
}
