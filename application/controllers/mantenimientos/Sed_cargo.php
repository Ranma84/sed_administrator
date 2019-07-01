<?php

 
class Sed_cargo extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sed_cargo_model');
    } 


    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('sed_cargo/index?');
        $config['total_rows'] = $this->Sed_cargo_model->get_all_sed_cargos_count();
        $this->pagination->initialize($config);

        $data['sed_cargos'] = $this->Sed_cargo_model->get_all_sed_cargos($params);
        
        $data['_view'] = 'sed_cargo/index';
        $this->load->view('layouts/main',$data);
    }


    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nombre','Nombre','max_length[50]');
		$this->form_validation->set_rules('plazas','Plazas','integer');
		$this->form_validation->set_rules('id_area','Id Area','integer');
		$this->form_validation->set_rules('id_dpto','Id Dpto','integer');
		$this->form_validation->set_rules('id_nivel','Id Nivel','integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'id_area' => $this->input->post('id_area'),
				'id_dpto' => $this->input->post('id_dpto'),
				'id_nivel' => $this->input->post('id_nivel'),
				'nombre' => $this->input->post('nombre'),
				'plazas' => $this->input->post('plazas'),
				'estado' => $this->input->post('estado'),
            );
            
            $sed_cargo_id = $this->Sed_cargo_model->add_sed_cargo($params);
            redirect('sed_cargo/index');
        }
        else
        {
			$this->load->model('Sed_area_model');
			$data['all_sed_areas'] = $this->Sed_area_model->get_all_sed_areas();

			$this->load->model('Sed_departamento_model');
			$data['all_sed_departamentos'] = $this->Sed_departamento_model->get_all_sed_departamentos();

			$this->load->model('Sed_nivele_model');
			$data['all_sed_niveles'] = $this->Sed_nivele_model->get_all_sed_niveles();
            
            $data['_view'] = 'sed_cargo/add';
            $this->load->view('layouts/main',$data);
        }
    }  


    function edit($id_cargo)
    {   

        $data['sed_cargo'] = $this->Sed_cargo_model->get_sed_cargo($id_cargo);
        
        if(isset($data['sed_cargo']['id_cargo']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nombre','Nombre','max_length[50]');
			$this->form_validation->set_rules('plazas','Plazas','integer');
			$this->form_validation->set_rules('id_area','Id Area','integer');
			$this->form_validation->set_rules('id_dpto','Id Dpto','integer');
			$this->form_validation->set_rules('id_nivel','Id Nivel','integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id_area' => $this->input->post('id_area'),
					'id_dpto' => $this->input->post('id_dpto'),
					'id_nivel' => $this->input->post('id_nivel'),
					'nombre' => $this->input->post('nombre'),
					'plazas' => $this->input->post('plazas'),
					'estado' => $this->input->post('estado'),
                );

                $this->Sed_cargo_model->update_sed_cargo($id_cargo,$params);            
                redirect('sed_cargo/index');
            }
            else
            {
				$this->load->model('Sed_area_model');
				$data['all_sed_areas'] = $this->Sed_area_model->get_all_sed_areas();

				$this->load->model('Sed_departamento_model');
				$data['all_sed_departamentos'] = $this->Sed_departamento_model->get_all_sed_departamentos();

				$this->load->model('Sed_nivele_model');
				$data['all_sed_niveles'] = $this->Sed_nivele_model->get_all_sed_niveles();

                $data['_view'] = 'sed_cargo/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sed_cargo you are trying to edit does not exist.');
    } 


    function remove($id_cargo)
    {
        $sed_cargo = $this->Sed_cargo_model->get_sed_cargo($id_cargo);

        if(isset($sed_cargo['id_cargo']))
        {
            $this->Sed_cargo_model->delete_sed_cargo($id_cargo);
            redirect('sed_cargo/index');
        }
        else
            show_error('The sed_cargo you are trying to delete does not exist.');
    }
    
}
