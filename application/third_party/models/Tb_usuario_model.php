<?php

 
class Tb_usuario_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
  
    function get_tb_usuario($cedula)
    {
        return $this->db->get_where('tb_usuario',array('cedula'=>$cedula))->row_array();
    }
        
   
    function get_all_tb_usuario()
    {
        $this->db->order_by('cedula', 'desc');
        return $this->db->get('tb_usuario')->result_array();
    }
        
   
    function add_tb_usuario($params)
    {
        $this->db->insert('tb_usuario',$params);
        return $this->db->insert_id();
    }
    
    
    function update_tb_usuario($cedula,$params)
    {
        $this->db->where('cedula',$cedula);
        return $this->db->update('tb_usuario',$params);
    }
    
    
    function delete_tb_usuario($cedula)
    {
        return $this->db->delete('tb_usuario',array('cedula'=>$cedula));
    }
}
