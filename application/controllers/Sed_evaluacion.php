<?php

 
class Sed_evaluacion extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sed_evaluacion_model');
    } 

    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('sed_evaluacion/index?');
        $config['total_rows'] = $this->Sed_evaluacion_model->get_all_sed_evaluacion_count();
        $this->pagination->initialize($config);

        $data['sed_evaluacion'] = $this->Sed_evaluacion_model->get_all_sed_evaluacion($params);
        
        $data['_view'] = 'sed_evaluacion/index';
        $this->load->view('layouts/main',$data);
    }

    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('comentario','Comentario','max_length[500]');
		$this->form_validation->set_rules('eval_360','Eval 360','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'comentario' => $this->input->post('comentario'),
				'eval_360' => $this->input->post('eval_360'),
            );
            
            $sed_evaluacion_id = $this->Sed_evaluacion_model->add_sed_evaluacion($params);
            redirect('sed_evaluacion/index');
        }
        else
        {            
            $data['_view'] = 'sed_evaluacion/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id_periodo_detalle)
    {   
        $data['sed_evaluacion'] = $this->Sed_evaluacion_model->get_sed_evaluacion($id_periodo_detalle);
        
        if(isset($data['sed_evaluacion']['id_periodo_detalle']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('comentario','Comentario','max_length[500]');
			$this->form_validation->set_rules('eval_360','Eval 360','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'comentario' => $this->input->post('comentario'),
					'eval_360' => $this->input->post('eval_360'),
                );

                $this->Sed_evaluacion_model->update_sed_evaluacion($id_periodo_detalle,$params);            
                redirect('sed_evaluacion/index');
            }
            else
            {
                $data['_view'] = 'sed_evaluacion/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sed_evaluacion you are trying to edit does not exist.');
    } 

    function remove($id_periodo_detalle)
    {
        $sed_evaluacion = $this->Sed_evaluacion_model->get_sed_evaluacion($id_periodo_detalle);

        if(isset($sed_evaluacion['id_periodo_detalle']))
        {
            $this->Sed_evaluacion_model->delete_sed_evaluacion($id_periodo_detalle);
            redirect('sed_evaluacion/index');
        }
        else
            show_error('The sed_evaluacion you are trying to delete does not exist.');
    }
    
}
