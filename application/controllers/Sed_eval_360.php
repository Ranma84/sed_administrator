<?php

 
class Sed_eval_360 extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sed_eval_360_model');
    } 

    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('sed_eval_360/index?');
        $config['total_rows'] = $this->Sed_eval_360_model->get_all_sed_eval_360_count();
        $this->pagination->initialize($config);

        $data['sed_eval_360'] = $this->Sed_eval_360_model->get_all_sed_eval_360($params);
        
        $data['_view'] = 'sed_eval_360/index';
        $this->load->view('layouts/main',$data);
    }

    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'estado' => $this->input->post('estado'),
				'tipo_evaluado' => $this->input->post('tipo_evaluado'),
            );
            
            $sed_eval_360_id = $this->Sed_eval_360_model->add_sed_eval_360($params);
            redirect('sed_eval_360/index');
        }
        else
        {            
            $data['_view'] = 'sed_eval_360/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id_evaluador)
    {   
        $data['sed_eval_360'] = $this->Sed_eval_360_model->get_sed_eval_360($id_evaluador);
        
        if(isset($data['sed_eval_360']['id_evaluador']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'estado' => $this->input->post('estado'),
					'tipo_evaluado' => $this->input->post('tipo_evaluado'),
                );

                $this->Sed_eval_360_model->update_sed_eval_360($id_evaluador,$params);            
                redirect('sed_eval_360/index');
            }
            else
            {
                $data['_view'] = 'sed_eval_360/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sed_eval_360 you are trying to edit does not exist.');
    } 

    function remove($id_evaluador)
    {
        $sed_eval_360 = $this->Sed_eval_360_model->get_sed_eval_360($id_evaluador);

        if(isset($sed_eval_360['id_evaluador']))
        {
            $this->Sed_eval_360_model->delete_sed_eval_360($id_evaluador);
            redirect('sed_eval_360/index');
        }
        else
            show_error('The sed_eval_360 you are trying to delete does not exist.');
    }
    
}
