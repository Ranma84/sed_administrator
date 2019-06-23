<?php

class Sed_departamento_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_sed_departamento($id_dpto)
    {
        return $this->db->get_where('sed_departamentos',array('id_dpto'=>$id_dpto))->row_array();
    }
    

    function get_all_sed_departamentos_count()
    {
        $this->db->from('sed_departamentos');
        return $this->db->count_all_results();
    }
        

    function get_all_sed_departamentos($params = array())
    {
        $this->db->order_by('id_dpto', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('sed_departamentos')->result_array();
    }
        

    function add_sed_departamento($params)
    {
        $this->db->insert('sed_departamentos',$params);
        return $this->db->insert_id();
    }
    

    function update_sed_departamento($id_dpto,$params)
    {
        $this->db->where('id_dpto',$id_dpto);
        return $this->db->update('sed_departamentos',$params);
    }
    

    function delete_sed_departamento($id_dpto)
    {
        return $this->db->delete('sed_departamentos',array('id_dpto'=>$id_dpto));
    }
}
