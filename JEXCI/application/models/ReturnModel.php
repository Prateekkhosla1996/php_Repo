<?php
class ReturnModel extends CI_Model
{
    public function add($array)
    {
        return $this->db->insert('returnpolicy', $array);
    }
    public function get()
    {
        $q = $this->db->select()->get('returnpolicy');
        return $q->row();
    }
    public function find($pid)
    {
        $q = $this->db->select()
            ->where('id', $pid)
            ->get('returnpolicy');
        return $q->row();
    }
    public function update_rp($id, array $tc)
    {

        return $this->db->where('id', $id)
            ->update('returnpolicy', $tc);
    }
}
