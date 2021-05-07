<?php
class Termandcondition extends CI_Model
{
    public function add($array)
    {
        return $this->db->insert('termandcondition', $array);
    }
    public function get()
    {
        $q = $this->db->select()->get('termandcondition');
        return $q->row();
    }
    public function find($pid)
    {
        $q = $this->db->select()
            ->where('id', $pid)
            ->get('termandcondition');
        return $q->row();
    }
    public function update_tc($id, array $tc)
    {

        return $this->db->where('id', $id)
            ->update('termandcondition', $tc);
    }
}
