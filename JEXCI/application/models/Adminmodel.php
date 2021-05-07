<?php
class Adminmodel extends CI_Model
{
    public function isValidate($username, $password)
    {
        $q = $this->db->where(['uname' => $username, 'password' => $password])
            ->get('admin');
       
        if ($q->num_rows()) {
            return $q->row()->id;
        }
        return false;
    }
}
