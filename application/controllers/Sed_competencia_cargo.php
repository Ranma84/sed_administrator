<?php

 
class Sed_competencia_cargo extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sed_competencia_cargo_model');
    } 


    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('sed_competencia_cargo/index?');
        $config['total_rows'] = $this->Sed_competencia_cargo_model->get_all_sed_competencia_cargo_count();
        $this->pagination->initialize($config);

        $data['sed_competencia_cargo'] = $this->Sed_competencia_cargo_model->get_all_sed_competencia_cargo($params);
        
        $data['_view'] = 'sed_competencia_cargo/index';
        $this->load->view('layouts/main',$data);
    }


    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('fec_ingreso','Fec Ingreso','required');
		$this->form_validation->set_rules('user_ingreso','User Ingreso','max_length[20]');
		$this->form_validation->set_rules('user_modificacion','User Modificacion','max_length[20]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'estado' => $this->input->post('estado'),
				'fec_ingreso' => $this->input->post('fec_ingreso'),
				'user_ingreso' => $this->input->post('user_ingreso'),
				'fec_modificacion' => $this->input->post('fec_modificacion'),
				'user_modificacion' => $this->input->post('user_modificacion'),
            );
            
            $sed_competencia_cargo_id = $this->Sed_competencia_cargo_model->add_sed_competencia_cargo($params);
            redirect('sed_competencia_cargo/index');
        }
        else
        {            
            $data['_view'] = 'sed_competencia_cargo/add';
            $this->load->view('layouts/main',$data);
        }
    }  


    function edit($id_cargo)
    {   

        $data['sed_competencia_cargo'] = $this->Sed_competencia_cargo_model->get_sed_competencia_cargo($id_cargo);
        
        if(isset($data['sed_competencia_cargo']['id_cargo']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('fec_ingreso','Fec Ingreso','required');
			$this->form_validation->set_rules('user_ingreso','User Ingreso','max_length[20]');
			$this->form_validation->set_rules('user_modificacion','User Modificacion','max_length[20]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'estado' => $this->input->post('estado'),
					'fec_ingreso' => $this->input->post('fec_ingreso'),
					'user_ingreso' => $this->input->post('user_ingreso'),
					'fec_modificacion' => $this->input->post('fec_modificacion'),
					'user_modificacion' => $this->input->post('user_modificacion'),
                );

                $this->Sed_competencia_cargo_model->update_sed_competencia_cargo($id_cargo,$params);            
                redirect('sed_competencia_cargo/index');
            }
            else
            {
                $data['_view'] = 'sed_competencia_cargo/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sed_competencia_cargo you are trying to edit does not exist.');
    } 

 
    function remove($id_cargo)
    {
        $sed_competencia_cargo = $this->Sed_competencia_cargo_model->get_sed_competencia_cargo($id_cargo);

        if(isset($sed_competencia_cargo['id_cargo']))
        {
            $this->Sed_competencia_cargo_model->delete_sed_competencia_cargo($id_cargo);
            redirect('sed_competencia_cargo/index');
        }
        else
            show_error('The sed_competencia_cargo you are trying to delete does not exist.');
    }
    
}
