<?php

 
class Dias_festivo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    
    function get_dias_festivo($id)
    {
        return $this->db->get_where('dias_festivos',array('id'=>$id))->row_array();
    }
        
   
    function get_all_dias_festivos()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('dias_festivos')->result_array();
    }
        
   
    function add_dias_festivo($params)
    {
        $this->db->insert('dias_festivos',$params);
        return $this->db->insert_id();
    }
    
   
    function update_dias_festivo($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('dias_festivos',$params);
    }
    
    
    function delete_dias_festivo($id)
    {
        return $this->db->delete('dias_festivos',array('id'=>$id));
    }
}
