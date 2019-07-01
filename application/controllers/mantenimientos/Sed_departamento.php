<?php

 
class Sed_departamento extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sed_departamento_model');
    } 


    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('sed_departamento/index?');
        $config['total_rows'] = $this->Sed_departamento_model->get_all_sed_departamentos_count();
        $this->pagination->initialize($config);

        $data['sed_departamentos'] = $this->Sed_departamento_model->get_all_sed_departamentos($params);
        
        $data['_view'] = 'sed_departamento/index';
        $this->load->view('layouts/main',$data);
    }


    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nombre','Nombre','max_length[50]');
		$this->form_validation->set_rules('estado','Estado','required');
		$this->form_validation->set_rules('id_area','Id Area','integer');
		$this->form_validation->set_rules('fec_ingreso','Fec Ingreso','required');
		$this->form_validation->set_rules('user_ingreso','User Ingreso','required|max_length[20]');
		$this->form_validation->set_rules('fec_modificacion','Fec Modificacion','required');
		$this->form_validation->set_rules('user_modificacion','User Modificacion','max_length[20]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'id_area' => $this->input->post('id_area'),
				'nombre' => $this->input->post('nombre'),
				'estado' => $this->input->post('estado'),
				'fec_ingreso' => $this->input->post('fec_ingreso'),
				'user_ingreso' => $this->input->post('user_ingreso'),
				'fec_modificacion' => $this->input->post('fec_modificacion'),
				'user_modificacion' => $this->input->post('user_modificacion'),
            );
            
            $sed_departamento_id = $this->Sed_departamento_model->add_sed_departamento($params);
            redirect('sed_departamento/index');
        }
        else
        {
			$this->load->model('Sed_area_model');
			$data['all_sed_areas'] = $this->Sed_area_model->get_all_sed_areas();
            
            $data['_view'] = 'sed_departamento/add';
            $this->load->view('layouts/main',$data);
        }
    }  


    function edit($id_dpto)
    {   

        $data['sed_departamento'] = $this->Sed_departamento_model->get_sed_departamento($id_dpto);
        
        if(isset($data['sed_departamento']['id_dpto']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nombre','Nombre','max_length[50]');
			$this->form_validation->set_rules('estado','Estado','required');
			$this->form_validation->set_rules('id_area','Id Area','integer');
			$this->form_validation->set_rules('fec_ingreso','Fec Ingreso','required');
			$this->form_validation->set_rules('user_ingreso','User Ingreso','required|max_length[20]');
			$this->form_validation->set_rules('fec_modificacion','Fec Modificacion','required');
			$this->form_validation->set_rules('user_modificacion','User Modificacion','max_length[20]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id_area' => $this->input->post('id_area'),
					'nombre' => $this->input->post('nombre'),
					'estado' => $this->input->post('estado'),
					'fec_ingreso' => $this->input->post('fec_ingreso'),
					'user_ingreso' => $this->input->post('user_ingreso'),
					'fec_modificacion' => $this->input->post('fec_modificacion'),
					'user_modificacion' => $this->input->post('user_modificacion'),
                );

                $this->Sed_departamento_model->update_sed_departamento($id_dpto,$params);            
                redirect('sed_departamento/index');
            }
            else
            {
				$this->load->model('Sed_area_model');
				$data['all_sed_areas'] = $this->Sed_area_model->get_all_sed_areas();

                $data['_view'] = 'sed_departamento/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sed_departamento you are trying to edit does not exist.');
    } 


    function remove($id_dpto)
    {
        $sed_departamento = $this->Sed_departamento_model->get_sed_departamento($id_dpto);

        if(isset($sed_departamento['id_dpto']))
        {
            $this->Sed_departamento_model->delete_sed_departamento($id_dpto);
            redirect('sed_departamento/index');
        }
        else
            show_error('The sed_departamento you are trying to delete does not exist.');
    }
    
}
