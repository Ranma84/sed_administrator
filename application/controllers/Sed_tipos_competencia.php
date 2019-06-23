<?php

class Sed_tipos_competencia extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sed_tipos_competencia_model');
    } 


    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('sed_tipos_competencia/index?');
        $config['total_rows'] = $this->Sed_tipos_competencia_model->get_all_sed_tipos_competencias_count();
        $this->pagination->initialize($config);

        $data['sed_tipos_competencias'] = $this->Sed_tipos_competencia_model->get_all_sed_tipos_competencias($params);
        
        $data['_view'] = 'sed_tipos_competencia/index';
        $this->load->view('layouts/main',$data);
    }

    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nombre','Nombre','max_length[50]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nombre' => $this->input->post('nombre'),
				'estado' => $this->input->post('estado'),
            );
            
            $sed_tipos_competencia_id = $this->Sed_tipos_competencia_model->add_sed_tipos_competencia($params);
            redirect('sed_tipos_competencia/index');
        }
        else
        {            
            $data['_view'] = 'sed_tipos_competencia/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id_tipo_competencia)
    {   
        $data['sed_tipos_competencia'] = $this->Sed_tipos_competencia_model->get_sed_tipos_competencia($id_tipo_competencia);
        
        if(isset($data['sed_tipos_competencia']['id_tipo_competencia']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nombre','Nombre','max_length[50]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nombre' => $this->input->post('nombre'),
					'estado' => $this->input->post('estado'),
                );

                $this->Sed_tipos_competencia_model->update_sed_tipos_competencia($id_tipo_competencia,$params);            
                redirect('sed_tipos_competencia/index');
            }
            else
            {
                $data['_view'] = 'sed_tipos_competencia/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sed_tipos_competencia you are trying to edit does not exist.');
    } 

    function remove($id_tipo_competencia)
    {
        $sed_tipos_competencia = $this->Sed_tipos_competencia_model->get_sed_tipos_competencia($id_tipo_competencia);

        if(isset($sed_tipos_competencia['id_tipo_competencia']))
        {
            $this->Sed_tipos_competencia_model->delete_sed_tipos_competencia($id_tipo_competencia);
            redirect('sed_tipos_competencia/index');
        }
        else
            show_error('The sed_tipos_competencia you are trying to delete does not exist.');
    }
    
}
