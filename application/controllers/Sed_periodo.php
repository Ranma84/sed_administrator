<?php

class Sed_periodo extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sed_periodo_model');
    } 

    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('sed_periodo/index?');
        $config['total_rows'] = $this->Sed_periodo_model->get_all_sed_periodos_count();
        $this->pagination->initialize($config);

        $data['sed_periodos'] = $this->Sed_periodo_model->get_all_sed_periodos($params);
        
        $data['_view'] = 'sed_periodo/index';
        $this->load->view('layouts/main',$data);
    }

    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('anio','Anio','integer');
		$this->form_validation->set_rules('descripcion','Descripcion','max_length[100]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'anio' => $this->input->post('anio'),
				'descripcion' => $this->input->post('descripcion'),
				'estado' => $this->input->post('estado'),
            );
            
            $sed_periodo_id = $this->Sed_periodo_model->add_sed_periodo($params);
            redirect('sed_periodo/index');
        }
        else
        {            
            $data['_view'] = 'sed_periodo/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id_periodo)
    {   

        $data['sed_periodo'] = $this->Sed_periodo_model->get_sed_periodo($id_periodo);
        
        if(isset($data['sed_periodo']['id_periodo']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('anio','Anio','integer');
			$this->form_validation->set_rules('descripcion','Descripcion','max_length[100]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'anio' => $this->input->post('anio'),
					'descripcion' => $this->input->post('descripcion'),
					'estado' => $this->input->post('estado'),
                );

                $this->Sed_periodo_model->update_sed_periodo($id_periodo,$params);            
                redirect('sed_periodo/index');
            }
            else
            {
                $data['_view'] = 'sed_periodo/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sed_periodo you are trying to edit does not exist.');
    } 

    function remove($id_periodo)
    {
        $sed_periodo = $this->Sed_periodo_model->get_sed_periodo($id_periodo);

        if(isset($sed_periodo['id_periodo']))
        {
            $this->Sed_periodo_model->delete_sed_periodo($id_periodo);
            redirect('sed_periodo/index');
        }
        else
            show_error('The sed_periodo you are trying to delete does not exist.');
    }
    
}
