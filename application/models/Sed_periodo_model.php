<?php

 
class Sed_periodo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_sed_periodo($id_periodo)
    {
        return $this->db->get_where('sed_periodos',array('id_periodo'=>$id_periodo))->row_array();
    }
    

    function get_all_sed_periodos_count()
    {
        $this->db->from('sed_periodos');
        return $this->db->count_all_results();
    }
        

    function get_all_sed_periodos($params = array())
    {
        $this->db->order_by('id_periodo', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('sed_periodos')->result_array();
    }
        

    function add_sed_periodo($params)
    {
        $this->db->insert('sed_periodos',$params);
        return $this->db->insert_id();
    }

    function update_sed_periodo($id_periodo,$params)
    {
        $this->db->where('id_periodo',$id_periodo);
        return $this->db->update('sed_periodos',$params);
    }
    

    function delete_sed_periodo($id_periodo)
    {
        return $this->db->delete('sed_periodos',array('id_periodo'=>$id_periodo));
    }
}
