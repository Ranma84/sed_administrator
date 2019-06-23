<?php

 
class Sed_competencia extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sed_competencia_model');
    } 


    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('sed_competencia/index?');
        $config['total_rows'] = $this->Sed_competencia_model->get_all_sed_competencias_count();
        $this->pagination->initialize($config);

        $data['sed_competencias'] = $this->Sed_competencia_model->get_all_sed_competencias($params);
        
        $data['_view'] = 'sed_competencia/index';
        $this->load->view('layouts/main',$data);
    }


    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nombre','Nombre','max_length[50]');
		$this->form_validation->set_rules('definicion','Definicion','max_length[1000]');
		$this->form_validation->set_rules('id_tipo_competencia','Id Tipo Competencia','integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'id_tipo_competencia' => $this->input->post('id_tipo_competencia'),
				'nombre' => $this->input->post('nombre'),
				'estado' => $this->input->post('estado'),
				'definicion' => $this->input->post('definicion'),
				'inverso' => $this->input->post('inverso'),
            );
            
            $sed_competencia_id = $this->Sed_competencia_model->add_sed_competencia($params);
            redirect('sed_competencia/index');
        }
        else
        {			$data['all_sed_competencias'] = $this->Sed_competencia_model->get_all_sed_competencias();
            
            $data['_view'] = 'sed_competencia/add';
            $this->load->view('layouts/main',$data);
        }
    }  


    function edit($id_competencia)
    {   

        $data['sed_competencia'] = $this->Sed_competencia_model->get_sed_competencia($id_competencia);
        
        if(isset($data['sed_competencia']['id_competencia']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nombre','Nombre','max_length[50]');
			$this->form_validation->set_rules('definicion','Definicion','max_length[1000]');
			$this->form_validation->set_rules('id_tipo_competencia','Id Tipo Competencia','integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id_tipo_competencia' => $this->input->post('id_tipo_competencia'),
					'nombre' => $this->input->post('nombre'),
					'estado' => $this->input->post('estado'),
					'definicion' => $this->input->post('definicion'),
					'inverso' => $this->input->post('inverso'),
                );

                $this->Sed_competencia_model->update_sed_competencia($id_competencia,$params);            
                redirect('sed_competencia/index');
            }
            else
            {				$data['all_sed_competencias'] = $this->Sed_competencia_model->get_all_sed_competencias();

                $data['_view'] = 'sed_competencia/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sed_competencia you are trying to edit does not exist.');
    } 


    function remove($id_competencia)
    {
        $sed_competencia = $this->Sed_competencia_model->get_sed_competencia($id_competencia);

        if(isset($sed_competencia['id_competencia']))
        {
            $this->Sed_competencia_model->delete_sed_competencia($id_competencia);
            redirect('sed_competencia/index');
        }
        else
            show_error('The sed_competencia you are trying to delete does not exist.');
    }
    
}
