<?php

class Sed_escala_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_sed_escala($id_escala)
    {
        return $this->db->get_where('sed_escalas',array('id_escala'=>$id_escala))->row_array();
    }
    

    function get_all_sed_escalas_count()
    {
        $this->db->from('sed_escalas');
        return $this->db->count_all_results();
    }
        

    function get_all_sed_escalas($params = array())
    {
        $this->db->order_by('id_escala', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('sed_escalas')->result_array();
    }
        

    function add_sed_escala($params)
    {
        $this->db->insert('sed_escalas',$params);
        return $this->db->insert_id();
    }
    

    function update_sed_escala($id_escala,$params)
    {
        $this->db->where('id_escala',$id_escala);
        return $this->db->update('sed_escalas',$params);
    }
    

    function delete_sed_escala($id_escala)
    {
        return $this->db->delete('sed_escalas',array('id_escala'=>$id_escala));
    }
}
