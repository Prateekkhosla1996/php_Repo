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

    public function find_article($articleid)
    {
        $q = $this->db->select(['title','body','id'])
            ->where('id', $articleid)
            ->get('article');
            return $q->row(); 
    }
    public function articleList($limit, $offset)
    {
        $id = $this->session->userdata('id');
        $q =  $this->db->select()
            ->from('article')
            ->where(['user_id' => $id])
            ->limit($limit, $offset)
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
    public function num_rows()
    {
        $id = $this->session->userdata('id');
        $q =  $this->db->select()
            ->from('article')
            ->where(['user_id' => $id])
            ->get();
        return $q->num_rows();
    }
    public function update_article($id,$article){
        return $this->db->where('id',$id)
        ->update('article',$article);
        
    }
}
