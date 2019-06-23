<?php

 
class Sed_evaluacion_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_sed_evaluacion($id_periodo_detalle)
    {
        return $this->db->get_where('sed_evaluacion',array('id_periodo_detalle'=>$id_periodo_detalle))->row_array();
    }
    

    function get_all_sed_evaluacion_count()
    {
        $this->db->from('sed_evaluacion');
        return $this->db->count_all_results();
    }
        

    function get_all_sed_evaluacion($params = array())
    {
        $this->db->order_by('id_periodo_detalle', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('sed_evaluacion')->result_array();
    }
        

    function add_sed_evaluacion($params)
    {
        $this->db->insert('sed_evaluacion',$params);
        return $this->db->insert_id();
    }
    

    function update_sed_evaluacion($id_periodo_detalle,$params)
    {
        $this->db->where('id_periodo_detalle',$id_periodo_detalle);
        return $this->db->update('sed_evaluacion',$params);
    }
    

    function delete_sed_evaluacion($id_periodo_detalle)
    {
        return $this->db->delete('sed_evaluacion',array('id_periodo_detalle'=>$id_periodo_detalle));
    }
}
