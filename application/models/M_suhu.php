<?php 

class M_suhu extends CI_Model
{
    public function all()
    {
        $this->db->select('*');
        $this->db->from('suhu');
        $this->db->order_by('id');
        $query = $this->db->get()->row();
        return  $query;
    }

    public function update($DataUpdate)
    {
        $this->db->update('suhu',$DataUpdate);
    }
}

?>