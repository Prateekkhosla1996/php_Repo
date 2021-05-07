<?php
class Categorymodel extends CI_Model
{
    public function add_category($array)
    {
        return $this->db->insert('categories', $array);
    }
    public function getcategories()
    {
        $q = $this->db->select()->get('categories');
        return $q->result();
    }
    public function delete_category($id)
    {
        return $this->db->delete('categories', ['id' => $id]);
    }
    public function find_category($catid)
    {
        $q = $this->db->select(['cname', 'id'])
            ->where('id', $catid)
            ->get('categories');
        return $q->row();
    }
    public function update_category($id, Array $category)
    {

        return $this->db->where('id', $id)
            ->update('categories', $category);
    }
}
