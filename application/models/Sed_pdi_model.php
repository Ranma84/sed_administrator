<?php

 
class Sed_pdi_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_sed_pdi($id_pdi)
    {
        return $this->db->get_where('sed_pdi',array('id_pdi'=>$id_pdi))->row_array();
    }
    

    function get_all_sed_pdi_count()
    {
        $this->db->from('sed_pdi');
        return $this->db->count_all_results();
    }
        

    function get_all_sed_pdi($params = array())
    {
        $this->db->order_by('id_pdi', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('sed_pdi')->result_array();
    }
        

    function add_sed_pdi($params)
    {
        $this->db->insert('sed_pdi',$params);
        return $this->db->insert_id();
    }
    

    function update_sed_pdi($id_pdi,$params)
    {
        $this->db->where('id_pdi',$id_pdi);
        return $this->db->update('sed_pdi',$params);
    }
    

    function delete_sed_pdi($id_pdi)
    {
        return $this->db->delete('sed_pdi',array('id_pdi'=>$id_pdi));
    }
}
