<?php

class Sed_escala extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sed_escala_model');
    } 


    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('sed_escala/index?');
        $config['total_rows'] = $this->Sed_escala_model->get_all_sed_escalas_count();
        $this->pagination->initialize($config);

        $data['sed_escalas'] = $this->Sed_escala_model->get_all_sed_escalas($params);
        
        $data['_view'] = 'sed_escala/index';
        $this->load->view('layouts/main',$data);
    }

    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nombre','Nombre','max_length[20]');
		$this->form_validation->set_rules('valor','Valor','integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nombre' => $this->input->post('nombre'),
				'valor' => $this->input->post('valor'),
				'estado' => $this->input->post('estado'),
            );
            
            $sed_escala_id = $this->Sed_escala_model->add_sed_escala($params);
            redirect('sed_escala/index');
        }
        else
        {            
            $data['_view'] = 'sed_escala/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id_escala)
    {   
        $data['sed_escala'] = $this->Sed_escala_model->get_sed_escala($id_escala);
        
        if(isset($data['sed_escala']['id_escala']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nombre','Nombre','max_length[20]');
			$this->form_validation->set_rules('valor','Valor','integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nombre' => $this->input->post('nombre'),
					'valor' => $this->input->post('valor'),
					'estado' => $this->input->post('estado'),
                );

                $this->Sed_escala_model->update_sed_escala($id_escala,$params);            
                redirect('sed_escala/index');
            }
            else
            {
                $data['_view'] = 'sed_escala/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sed_escala you are trying to edit does not exist.');
    } 

    function remove($id_escala)
    {
        $sed_escala = $this->Sed_escala_model->get_sed_escala($id_escala);

        if(isset($sed_escala['id_escala']))
        {
            $this->Sed_escala_model->delete_sed_escala($id_escala);
            redirect('sed_escala/index');
        }
        else
            show_error('The sed_escala you are trying to delete does not exist.');
    }
    
}
