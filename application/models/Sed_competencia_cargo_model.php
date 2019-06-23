<?php

 
class Sed_competencia_cargo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_sed_competencia_cargo($id_cargo)
    {
        return $this->db->get_where('sed_competencia_cargo',array('id_cargo'=>$id_cargo))->row_array();
    }
    

    function get_all_sed_competencia_cargo_count()
    {
        $this->db->from('sed_competencia_cargo');
        return $this->db->count_all_results();
    }
        

    function get_all_sed_competencia_cargo($params = array())
    {
        $this->db->order_by('id_cargo', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('sed_competencia_cargo')->result_array();
    }
        

    function add_sed_competencia_cargo($params)
    {
        $this->db->insert('sed_competencia_cargo',$params);
        return $this->db->insert_id();
    }
    

    function update_sed_competencia_cargo($id_cargo,$params)
    {
        $this->db->where('id_cargo',$id_cargo);
        return $this->db->update('sed_competencia_cargo',$params);
    }
    

    function delete_sed_competencia_cargo($id_cargo)
    {
        return $this->db->delete('sed_competencia_cargo',array('id_cargo'=>$id_cargo));
    }
}
