<?php

class Sed_evaluacion_detalle_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_sed_evaluacion_detalle($id_empresa)
    {
        return $this->db->get_where('sed_evaluacion_detalle',array('id_empresa'=>$id_empresa))->row_array();
    }
    

    function get_all_sed_evaluacion_detalle_count()
    {
        $this->db->from('sed_evaluacion_detalle');
        return $this->db->count_all_results();
    }
        

    function get_all_sed_evaluacion_detalle($params = array())
    {
        $this->db->order_by('id_empresa', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('sed_evaluacion_detalle')->result_array();
    }
        

    function add_sed_evaluacion_detalle($params)
    {
        $this->db->insert('sed_evaluacion_detalle',$params);
        return $this->db->insert_id();
    }
    

    function update_sed_evaluacion_detalle($id_empresa,$params)
    {
        $this->db->where('id_empresa',$id_empresa);
        return $this->db->update('sed_evaluacion_detalle',$params);
    }
    

    function delete_sed_evaluacion_detalle($id_empresa)
    {
        return $this->db->delete('sed_evaluacion_detalle',array('id_empresa'=>$id_empresa));
    }
}
