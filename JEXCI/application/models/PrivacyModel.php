<?php
class PrivacyModel extends CI_Model
{
    public function add($array)
    {
        return $this->db->insert('privacy', $array);
    }
    public function get()
    {
        $q = $this->db->select()->get('privacy');
        return $q->row();
    }
    public function find($pid)
    {
        $q = $this->db->select()
            ->where('id', $pid)
            ->get('privacy');
        return $q->row();
    }
    public function update_p($id, array $tc)
    {
        return $this->db->where('id', $id)
            ->update('privacy', $tc);
    }
}
