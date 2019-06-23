<?php

class Sed_competencia_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_sed_competencia($id_competencia)
    {
        return $this->db->get_where('sed_competencias',array('id_competencia'=>$id_competencia))->row_array();
    }
    

    function get_all_sed_competencias_count()
    {
        $this->db->from('sed_competencias');
        return $this->db->count_all_results();
    }
        

    function get_all_sed_competencias($params = array())
    {
        $this->db->order_by('id_competencia', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('sed_competencias')->result_array();
    }
        

    function add_sed_competencia($params)
    {
        $this->db->insert('sed_competencias',$params);
        return $this->db->insert_id();
    }
    

    function update_sed_competencia($id_competencia,$params)
    {
        $this->db->where('id_competencia',$id_competencia);
        return $this->db->update('sed_competencias',$params);
    }
    

    function delete_sed_competencia($id_competencia)
    {
        return $this->db->delete('sed_competencias',array('id_competencia'=>$id_competencia));
    }
}
