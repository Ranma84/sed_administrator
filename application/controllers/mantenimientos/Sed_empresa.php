<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Sed_empresa extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sed_empresa_model');
    } 


    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('sed_empresa/index?');
        $config['total_rows'] = $this->Sed_empresa_model->get_all_sed_empresa_count();
        $this->pagination->initialize($config);

        $data['sed_empresa'] = $this->Sed_empresa_model->get_all_sed_empresa($params);
        
        $data['_view'] = 'sed_empresa/index';
        $this->load->view('layouts/main',$data);
    }


    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nombre_comercial','Nombre Comercial','required|max_length[100]');
		$this->form_validation->set_rules('descripcion','Descripcion','max_length[200]');
		$this->form_validation->set_rules('ced_ruc','Ced Ruc','max_length[20]');
		$this->form_validation->set_rules('direccion','Direccion','max_length[200]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nombre_comercial' => $this->input->post('nombre_comercial'),
				'descripcion' => $this->input->post('descripcion'),
				'ced_ruc' => $this->input->post('ced_ruc'),
				'direccion' => $this->input->post('direccion'),
            );
            
            $sed_empresa_id = $this->Sed_empresa_model->add_sed_empresa($params);
            redirect('sed_empresa/index');
        }
        else
        {            
            $data['_view'] = 'sed_empresa/add';
            $this->load->view('layouts/main',$data);
        }
    }  


    function edit($id_empresa)
    {   
        $data['sed_empresa'] = $this->Sed_empresa_model->get_sed_empresa($id_empresa);
        
        if(isset($data['sed_empresa']['id_empresa']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nombre_comercial','Nombre Comercial','required|max_length[100]');
			$this->form_validation->set_rules('descripcion','Descripcion','max_length[200]');
			$this->form_validation->set_rules('ced_ruc','Ced Ruc','max_length[20]');
			$this->form_validation->set_rules('direccion','Direccion','max_length[200]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nombre_comercial' => $this->input->post('nombre_comercial'),
					'descripcion' => $this->input->post('descripcion'),
					'ced_ruc' => $this->input->post('ced_ruc'),
					'direccion' => $this->input->post('direccion'),
                );

                $this->Sed_empresa_model->update_sed_empresa($id_empresa,$params);            
                redirect('sed_empresa/index');
            }
            else
            {
                $data['_view'] = 'sed_empresa/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sed_empresa you are trying to edit does not exist.');
    } 


    function remove($id_empresa)
    {
        $sed_empresa = $this->Sed_empresa_model->get_sed_empresa($id_empresa);

        if(isset($sed_empresa['id_empresa']))
        {
            $this->Sed_empresa_model->delete_sed_empresa($id_empresa);
            redirect('sed_empresa/index');
        }
        else
            show_error('The sed_empresa you are trying to delete does not exist.');
    }
    
}
