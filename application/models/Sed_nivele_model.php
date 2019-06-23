<?php

 
class Sed_nivele_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_sed_nivele($id_nivel)
    {
        return $this->db->get_where('sed_niveles',array('id_nivel'=>$id_nivel))->row_array();
    }
    

    function get_all_sed_niveles_count()
    {
        $this->db->from('sed_niveles');
        return $this->db->count_all_results();
    }
        

    function get_all_sed_niveles($params = array())
    {
        $this->db->order_by('id_nivel', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('sed_niveles')->result_array();
    }
        
    function add_sed_nivele($params)
    {
        $this->db->insert('sed_niveles',$params);
        return $this->db->insert_id();
    }

    function update_sed_nivele($id_nivel,$params)
    {
        $this->db->where('id_nivel',$id_nivel);
        return $this->db->update('sed_niveles',$params);
    }
    

    function delete_sed_nivele($id_nivel)
    {
        return $this->db->delete('sed_niveles',array('id_nivel'=>$id_nivel));
    }
}
