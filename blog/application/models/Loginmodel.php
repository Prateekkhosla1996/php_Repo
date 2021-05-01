<?php
class Loginmodel extends CI_Model
{
    public function isValidate($username, $password)
    {
        $q = $this->db->where(['username' => $username, 'password' => $password])
            ->get('user');
        // print_r($q->row()->id);
        if ($q->num_rows()) {
            // return id for session creation
            return $q->row()->id;
        }
        return false;
    }
    public function getarticleList()
    {
        $id = $this->session->userdata('id');
        $q =  $this->db->select()
            ->from('article')
            ->where(['user_id' => $id])
            ->get();
        return $q->result();
    }
    public function add_articles($array)
    {
        return $this->db->insert('article', $array);
    }
    public function delete_articles($id)
    {
        return $this->db->delete('article', ['id' => $id]);
    }
}
