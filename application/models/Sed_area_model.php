<?php

class Sed_area_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_sed_area($id_area)
    {
        return $this->db->get_where('sed_areas',array('id_area'=>$id_area))->row_array();
    }
    

    function get_all_sed_areas_count()
    {
        $this->db->from('sed_areas');
        return $this->db->count_all_results();
    }
        

    function get_all_sed_areas($params = array())
    {
        $this->db->order_by('id_area', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('sed_areas')->result_array();
    }
        

    function add_sed_area($params)
    {
        $this->db->insert('sed_areas',$params);
        return $this->db->insert_id();
    }
    

    function update_sed_area($id_area,$params)
    {
        $this->db->where('id_area',$id_area);
        return $this->db->update('sed_areas',$params);
    }
    

    function delete_sed_area($id_area)
    {
        return $this->db->delete('sed_areas',array('id_area'=>$id_area));
    }
}
