<?php

 
class Orden_trabajo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    
    function get_orden_trabajo($id)
    {
        return $this->db->get_where('orden_trabajo',array('id'=>$id))->row_array();
    }
        
    
    function get_all_orden_trabajo()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('orden_trabajo')->result_array();
    }
        
   
    function add_orden_trabajo($params)
    {
        $this->db->insert('orden_trabajo',$params);
        return $this->db->insert_id();
    }
    
   
    function update_orden_trabajo($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('orden_trabajo',$params);
    }
    
    
    function delete_orden_trabajo($id)
    {
        return $this->db->delete('orden_trabajo',array('id'=>$id));
    }
}
