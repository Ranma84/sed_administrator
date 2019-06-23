<?php

 
class Sed_empleado_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_sed_empleado($id_empleado)
    {
        return $this->db->get_where('sed_empleado',array('id_empleado'=>$id_empleado))->row_array();
    }
    

    function get_all_sed_empleado_count()
    {
        $this->db->from('sed_empleado');
        return $this->db->count_all_results();
    }
        

    function get_all_sed_empleado($params = array())
    {
        $this->db->order_by('id_empleado', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('sed_empleado')->result_array();
    }

    function add_sed_empleado($params)
    {
        $this->db->insert('sed_empleado',$params);
        return $this->db->insert_id();
    }
    
    function update_sed_empleado($id_empleado,$params)
    {
        $this->db->where('id_empleado',$id_empleado);
        return $this->db->update('sed_empleado',$params);
    }
    

    function delete_sed_empleado($id_empleado)
    {
        return $this->db->delete('sed_empleado',array('id_empleado'=>$id_empleado));
    }
}
