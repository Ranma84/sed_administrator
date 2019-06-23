<?php

 
class Sed_tipos_competencia_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_sed_tipos_competencia($id_tipo_competencia)
    {
        return $this->db->get_where('sed_tipos_competencias',array('id_tipo_competencia'=>$id_tipo_competencia))->row_array();
    }

    function get_all_sed_tipos_competencias_count()
    {
        $this->db->from('sed_tipos_competencias');
        return $this->db->count_all_results();
    }
        

    function get_all_sed_tipos_competencias($params = array())
    {
        $this->db->order_by('id_tipo_competencia', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('sed_tipos_competencias')->result_array();
    }
        

    function add_sed_tipos_competencia($params)
    {
        $this->db->insert('sed_tipos_competencias',$params);
        return $this->db->insert_id();
    }

    function update_sed_tipos_competencia($id_tipo_competencia,$params)
    {
        $this->db->where('id_tipo_competencia',$id_tipo_competencia);
        return $this->db->update('sed_tipos_competencias',$params);
    }
    

    function delete_sed_tipos_competencia($id_tipo_competencia)
    {
        return $this->db->delete('sed_tipos_competencias',array('id_tipo_competencia'=>$id_tipo_competencia));
    }
}
