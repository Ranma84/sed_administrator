<?php

class Sed_cargo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_sed_cargo($id_cargo)
    {
        return $this->db->get_where('sed_cargos',array('id_cargo'=>$id_cargo))->row_array();
    }
    

    function get_all_sed_cargos_count()
    {
        $this->db->from('sed_cargos');
        return $this->db->count_all_results();
    }
        

    function get_all_sed_cargos($params = array())
    {
        $this->db->order_by('id_cargo', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('sed_cargos')->result_array();
    }
        

    function add_sed_cargo($params)
    {
        $this->db->insert('sed_cargos',$params);
        return $this->db->insert_id();
    }
    

    function update_sed_cargo($id_cargo,$params)
    {
        $this->db->where('id_cargo',$id_cargo);
        return $this->db->update('sed_cargos',$params);
    }
    

    function delete_sed_cargo($id_cargo)
    {
        return $this->db->delete('sed_cargos',array('id_cargo'=>$id_cargo));
    }
}
