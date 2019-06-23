<?php

 
class Sed_empxcambio_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function get_sed_empxcambio($id_empleado)
    {
        return $this->db->get_where('sed_empxcambios',array('id_empleado'=>$id_empleado))->row_array();
    }
    

    function get_all_sed_empxcambios_count()
    {
        $this->db->from('sed_empxcambios');
        return $this->db->count_all_results();
    }
        
    function get_all_sed_empxcambios($params = array())
    {
        $this->db->order_by('id_empleado', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('sed_empxcambios')->result_array();
    }
        

    function add_sed_empxcambio($params)
    {
        $this->db->insert('sed_empxcambios',$params);
        return $this->db->insert_id();
    }
    
    function update_sed_empxcambio($id_empleado,$params)
    {
        $this->db->where('id_empleado',$id_empleado);
        return $this->db->update('sed_empxcambios',$params);
    }
    

    function delete_sed_empxcambio($id_empleado)
    {
        return $this->db->delete('sed_empxcambios',array('id_empleado'=>$id_empleado));
    }
}
