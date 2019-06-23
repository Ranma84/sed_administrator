<?php

 
class Sed_empresa_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_sed_empresa($id_empresa)
    {
        return $this->db->get_where('sed_empresa',array('id_empresa'=>$id_empresa))->row_array();
    }

    function get_all_sed_empresa_count()
    {
        $this->db->from('sed_empresa');
        return $this->db->count_all_results();
    }
        

    function get_all_sed_empresa($params = array())
    {
        $this->db->order_by('id_empresa', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('sed_empresa')->result_array();
    }
        

    function add_sed_empresa($params)
    {
        $this->db->insert('sed_empresa',$params);
        return $this->db->insert_id();
    }
    

    function update_sed_empresa($id_empresa,$params)
    {
        $this->db->where('id_empresa',$id_empresa);
        return $this->db->update('sed_empresa',$params);
    }

    function delete_sed_empresa($id_empresa)
    {
        return $this->db->delete('sed_empresa',array('id_empresa'=>$id_empresa));
    }
}
