<?php

 
class Sed_eval_360_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_sed_eval_360($id_evaluador)
    {
        return $this->db->get_where('sed_eval_360',array('id_evaluador'=>$id_evaluador))->row_array();
    }
    

    function get_all_sed_eval_360_count()
    {
        $this->db->from('sed_eval_360');
        return $this->db->count_all_results();
    }
        

    function get_all_sed_eval_360($params = array())
    {
        $this->db->order_by('id_evaluador', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('sed_eval_360')->result_array();
    }
        

    function add_sed_eval_360($params)
    {
        $this->db->insert('sed_eval_360',$params);
        return $this->db->insert_id();
    }
    

    function update_sed_eval_360($id_evaluador,$params)
    {
        $this->db->where('id_evaluador',$id_evaluador);
        return $this->db->update('sed_eval_360',$params);
    }

    function delete_sed_eval_360($id_evaluador)
    {
        return $this->db->delete('sed_eval_360',array('id_evaluador'=>$id_evaluador));
    }
}
