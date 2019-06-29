<?php

 
class Sed_evaluacion_detalle extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sed_evaluacion_detalle_model');
    } 

    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('sed_evaluacion_detalle/index?');
        $config['total_rows'] = $this->Sed_evaluacion_detalle_model->get_all_sed_evaluacion_detalle_count();
        $this->pagination->initialize($config);

        $data['sed_evaluacion_detalle'] = $this->Sed_evaluacion_detalle_model->get_all_sed_evaluacion_detalle($params);
        
        $data['_view'] = 'sed_evaluacion_detalle/index';
        $this->load->view('layouts/main',$data);
    }

    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('logro_real','Logro Real','numeric');
		$this->form_validation->set_rules('id_escala','Id Escala','integer');
		$this->form_validation->set_rules('comentario','Comentario','max_length[200]');
		$this->form_validation->set_rules('logro_ponderado','Logro Ponderado','numeric');
		$this->form_validation->set_rules('puntaje_ponderado','Puntaje Ponderado','numeric');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'id_escala' => $this->input->post('id_escala'),
				'logro_real' => $this->input->post('logro_real'),
				'comentario' => $this->input->post('comentario'),
				'logro_ponderado' => $this->input->post('logro_ponderado'),
				'puntaje_ponderado' => $this->input->post('puntaje_ponderado'),
            );
            
            $sed_evaluacion_detalle_id = $this->Sed_evaluacion_detalle_model->add_sed_evaluacion_detalle($params);
            redirect('sed_evaluacion_detalle/index');
        }
        else
        {
			$this->load->model('Sed_escala_model');
			$data['all_sed_escalas'] = $this->Sed_escala_model->get_all_sed_escalas();
            
            $data['_view'] = 'sed_evaluacion_detalle/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id_empresa)
    {   
        $data['sed_evaluacion_detalle'] = $this->Sed_evaluacion_detalle_model->get_sed_evaluacion_detalle($id_empresa);
        
        if(isset($data['sed_evaluacion_detalle']['id_empresa']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('logro_real','Logro Real','numeric');
			$this->form_validation->set_rules('id_escala','Id Escala','integer');
			$this->form_validation->set_rules('comentario','Comentario','max_length[200]');
			$this->form_validation->set_rules('logro_ponderado','Logro Ponderado','numeric');
			$this->form_validation->set_rules('puntaje_ponderado','Puntaje Ponderado','numeric');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id_escala' => $this->input->post('id_escala'),
					'logro_real' => $this->input->post('logro_real'),
					'comentario' => $this->input->post('comentario'),
					'logro_ponderado' => $this->input->post('logro_ponderado'),
					'puntaje_ponderado' => $this->input->post('puntaje_ponderado'),
                );

                $this->Sed_evaluacion_detalle_model->update_sed_evaluacion_detalle($id_empresa,$params);            
                redirect('sed_evaluacion_detalle/index');
            }
            else
            {
				$this->load->model('Sed_escala_model');
				$data['all_sed_escalas'] = $this->Sed_escala_model->get_all_sed_escalas();

                $data['_view'] = 'sed_evaluacion_detalle/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sed_evaluacion_detalle you are trying to edit does not exist.');
    } 

    function remove($id_empresa)
    {
        $sed_evaluacion_detalle = $this->Sed_evaluacion_detalle_model->get_sed_evaluacion_detalle($id_empresa);

        if(isset($sed_evaluacion_detalle['id_empresa']))
        {
            $this->Sed_evaluacion_detalle_model->delete_sed_evaluacion_detalle($id_empresa);
            redirect('sed_evaluacion_detalle/index');
        }
        else
            show_error('The sed_evaluacion_detalle you are trying to delete does not exist.');
    }
    
}
