<?php

 
class Sed_area extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sed_area_model');
    } 


    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('sed_area/index?');
        $config['total_rows'] = $this->Sed_area_model->get_all_sed_areas_count();
        $this->pagination->initialize($config);

        $data['sed_areas'] = $this->Sed_area_model->get_all_sed_areas($params);
        
        $data['_view'] = 'sed_area/index';
        $this->load->view('layouts/main',$data);
    }


    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nombre','Nombre','required|max_length[50]');
		$this->form_validation->set_rules('estado','Estado','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nombre' => $this->input->post('nombre'),
				'estado' => $this->input->post('estado'),
            );
            
            $sed_area_id = $this->Sed_area_model->add_sed_area($params);
            redirect('sed_area/index');
        }
        else
        {            
            $data['_view'] = 'sed_area/add';
            $this->load->view('layouts/main',$data);
        }
    }  


    function edit($id_area)
    {   

        $data['sed_area'] = $this->Sed_area_model->get_sed_area($id_area);
        
        if(isset($data['sed_area']['id_area']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nombre','Nombre','required|max_length[50]');
			$this->form_validation->set_rules('estado','Estado','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nombre' => $this->input->post('nombre'),
					'estado' => $this->input->post('estado'),
                );

                $this->Sed_area_model->update_sed_area($id_area,$params);            
                redirect('sed_area/index');
            }
            else
            {
                $data['_view'] = 'sed_area/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sed_area you are trying to edit does not exist.');
    } 


    function remove($id_area)
    {
        $sed_area = $this->Sed_area_model->get_sed_area($id_area);


        if(isset($sed_area['id_area']))
        {
            $this->Sed_area_model->delete_sed_area($id_area);
            redirect('sed_area/index');
        }
        else
            show_error('The sed_area you are trying to delete does not exist.');
    }
    
}
