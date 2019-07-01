<?php

 
class Sed_empxcambio extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sed_empxcambio_model');
    } 


    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('sed_empxcambio/index?');
        $config['total_rows'] = $this->Sed_empxcambio_model->get_all_sed_empxcambios_count();
        $this->pagination->initialize($config);

        $data['sed_empxcambios'] = $this->Sed_empxcambio_model->get_all_sed_empxcambios($params);
        
        $data['_view'] = 'sed_empxcambio/index';
        $this->load->view('layouts/main',$data);
    }

    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('user_modificacion','User Modificacion','max_length[20]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'fec_modificacion' => $this->input->post('fec_modificacion'),
				'user_modificacion' => $this->input->post('user_modificacion'),
				'estado' => $this->input->post('estado'),
            );
            
            $sed_empxcambio_id = $this->Sed_empxcambio_model->add_sed_empxcambio($params);
            redirect('sed_empxcambio/index');
        }
        else
        {            
            $data['_view'] = 'sed_empxcambio/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id_empleado)
    {   
        $data['sed_empxcambio'] = $this->Sed_empxcambio_model->get_sed_empxcambio($id_empleado);
        
        if(isset($data['sed_empxcambio']['id_empleado']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('user_modificacion','User Modificacion','max_length[20]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'fec_modificacion' => $this->input->post('fec_modificacion'),
					'user_modificacion' => $this->input->post('user_modificacion'),
					'estado' => $this->input->post('estado'),
                );

                $this->Sed_empxcambio_model->update_sed_empxcambio($id_empleado,$params);            
                redirect('sed_empxcambio/index');
            }
            else
            {
                $data['_view'] = 'sed_empxcambio/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sed_empxcambio you are trying to edit does not exist.');
    } 


    function remove($id_empleado)
    {
        $sed_empxcambio = $this->Sed_empxcambio_model->get_sed_empxcambio($id_empleado);

        if(isset($sed_empxcambio['id_empleado']))
        {
            $this->Sed_empxcambio_model->delete_sed_empxcambio($id_empleado);
            redirect('sed_empxcambio/index');
        }
        else
            show_error('The sed_empxcambio you are trying to delete does not exist.');
    }
    
}
