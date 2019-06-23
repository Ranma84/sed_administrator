<?php

class Sed_usuario_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_sed_usuario($id_usuario)
    {
        return $this->db->get_where('sed_usuarios',array('id_usuario'=>$id_usuario))->row_array();
    }
    

    function get_all_sed_usuarios_count()
    {
        $this->db->from('sed_usuarios');
        return $this->db->count_all_results();
    }
        

    function get_all_sed_usuarios($params = array())
    {
        $this->db->order_by('id_usuario', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('sed_usuarios')->result_array();
    }
        

    function add_sed_usuario($params)
    {
        $this->db->insert('sed_usuarios',$params);
        return $this->db->insert_id();
    }
    

    function update_sed_usuario($id_usuario,$params)
    {
        $this->db->where('id_usuario',$id_usuario);
        return $this->db->update('sed_usuarios',$params);
    }
    

    function delete_sed_usuario($id_usuario)
    {
        return $this->db->delete('sed_usuarios',array('id_usuario'=>$id_usuario));
    }
}
