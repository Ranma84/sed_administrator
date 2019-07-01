<?php

 
class Sed_usuario extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sed_usuario_model');
    } 


    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('sed_usuario/index?');
        $config['total_rows'] = $this->Sed_usuario_model->get_all_sed_usuarios_count();
        $this->pagination->initialize($config);

        $data['sed_usuarios'] = $this->Sed_usuario_model->get_all_sed_usuarios($params);
        
        $data['_view'] = 'sed_usuario/index';
        $this->load->view('layouts/main',$data);
    }

    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('clave','Clave','max_length[50]');
		$this->form_validation->set_rules('id_empleado','Id Empleado','integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'clave' => $this->input->post('clave'),
				'id_empleado' => $this->input->post('id_empleado'),
				'estado' => $this->input->post('estado'),
            );
            
            $sed_usuario_id = $this->Sed_usuario_model->add_sed_usuario($params);
            redirect('sed_usuario/index');
        }
        else
        {            
            $data['_view'] = 'sed_usuario/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id_usuario)
    {   

        $data['sed_usuario'] = $this->Sed_usuario_model->get_sed_usuario($id_usuario);
        
        if(isset($data['sed_usuario']['id_usuario']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('clave','Clave','max_length[50]');
			$this->form_validation->set_rules('id_empleado','Id Empleado','integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'clave' => $this->input->post('clave'),
					'id_empleado' => $this->input->post('id_empleado'),
					'estado' => $this->input->post('estado'),
                );

                $this->Sed_usuario_model->update_sed_usuario($id_usuario,$params);            
                redirect('sed_usuario/index');
            }
            else
            {
                $data['_view'] = 'sed_usuario/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sed_usuario you are trying to edit does not exist.');
    } 


    function remove($id_usuario)
    {
        $sed_usuario = $this->Sed_usuario_model->get_sed_usuario($id_usuario);

        if(isset($sed_usuario['id_usuario']))
        {
            $this->Sed_usuario_model->delete_sed_usuario($id_usuario);
            redirect('sed_usuario/index');
        }
        else
            show_error('The sed_usuario you are trying to delete does not exist.');
    }
    
}
