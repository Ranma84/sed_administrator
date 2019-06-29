<?php

 
class Sed_empleado extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sed_empleado_model');
    } 


    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('sed_empleado/index?');
        $config['total_rows'] = $this->Sed_empleado_model->get_all_sed_empleado_count();
        $this->pagination->initialize($config);

        $data['sed_empleado'] = $this->Sed_empleado_model->get_all_sed_empleado($params);
        
        $data['_view'] = 'sed_empleado/index';
        $this->load->view('layouts/main',$data);
    }


    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nombres','Nombres','max_length[50]');
		$this->form_validation->set_rules('apellidos','Apellidos','max_length[50]');
		$this->form_validation->set_rules('ruc_ced','Ruc Ced','max_length[20]');
		$this->form_validation->set_rules('fec_ingreso','Fec Ingreso','required');
		$this->form_validation->set_rules('id_jefe','Id Jefe','integer');
		$this->form_validation->set_rules('user_modificacion','User Modificacion','max_length[20]');
		$this->form_validation->set_rules('user_ingreso','User Ingreso','max_length[20]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nombres' => $this->input->post('nombres'),
				'apellidos' => $this->input->post('apellidos'),
				'ruc_ced' => $this->input->post('ruc_ced'),
				'fec_nacimiento' => $this->input->post('fec_nacimiento'),
				'fec_ingreso' => $this->input->post('fec_ingreso'),
				'fec_baja' => $this->input->post('fec_baja'),
				'estado' => $this->input->post('estado'),
				'id_jefe' => $this->input->post('id_jefe'),
				'fec_alta' => $this->input->post('fec_alta'),
				'fec_modificacion' => $this->input->post('fec_modificacion'),
				'user_modificacion' => $this->input->post('user_modificacion'),
				'user_ingreso' => $this->input->post('user_ingreso'),
            );
            
            $sed_empleado_id = $this->Sed_empleado_model->add_sed_empleado($params);
            redirect('sed_empleado/index');
        }
        else
        {            
            $data['_view'] = 'sed_empleado/add';
            $this->load->view('layouts/main',$data);
        }
    }  


    function edit($id_empleado)
    {   

        $data['sed_empleado'] = $this->Sed_empleado_model->get_sed_empleado($id_empleado);
        
        if(isset($data['sed_empleado']['id_empleado']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nombres','Nombres','max_length[50]');
			$this->form_validation->set_rules('apellidos','Apellidos','max_length[50]');
			$this->form_validation->set_rules('ruc_ced','Ruc Ced','max_length[20]');
			$this->form_validation->set_rules('fec_ingreso','Fec Ingreso','required');
			$this->form_validation->set_rules('id_jefe','Id Jefe','integer');
			$this->form_validation->set_rules('user_modificacion','User Modificacion','max_length[20]');
			$this->form_validation->set_rules('user_ingreso','User Ingreso','max_length[20]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nombres' => $this->input->post('nombres'),
					'apellidos' => $this->input->post('apellidos'),
					'ruc_ced' => $this->input->post('ruc_ced'),
					'fec_nacimiento' => $this->input->post('fec_nacimiento'),
					'fec_ingreso' => $this->input->post('fec_ingreso'),
					'fec_baja' => $this->input->post('fec_baja'),
					'estado' => $this->input->post('estado'),
					'id_jefe' => $this->input->post('id_jefe'),
					'fec_alta' => $this->input->post('fec_alta'),
					'fec_modificacion' => $this->input->post('fec_modificacion'),
					'user_modificacion' => $this->input->post('user_modificacion'),
					'user_ingreso' => $this->input->post('user_ingreso'),
                );

                $this->Sed_empleado_model->update_sed_empleado($id_empleado,$params);            
                redirect('sed_empleado/index');
            }
            else
            {
                $data['_view'] = 'sed_empleado/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sed_empleado you are trying to edit does not exist.');
    } 


    function remove($id_empleado)
    {
        $sed_empleado = $this->Sed_empleado_model->get_sed_empleado($id_empleado);

        if(isset($sed_empleado['id_empleado']))
        {
            $this->Sed_empleado_model->delete_sed_empleado($id_empleado);
            redirect('sed_empleado/index');
        }
        else
            show_error('The sed_empleado you are trying to delete does not exist.');
    }
    
}
