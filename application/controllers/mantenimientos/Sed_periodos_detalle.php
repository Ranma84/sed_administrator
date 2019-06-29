<?php

 
class Sed_periodos_detalle extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sed_periodos_detalle_model');
    } 


    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('sed_periodos_detalle/index?');
        $config['total_rows'] = $this->Sed_periodos_detalle_model->get_all_sed_periodos_detalle_count();
        $this->pagination->initialize($config);

        $data['sed_periodos_detalle'] = $this->Sed_periodos_detalle_model->get_all_sed_periodos_detalle($params);
        
        $data['_view'] = 'sed_periodos_detalle/index';
        $this->load->view('layouts/main',$data);
    }

    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'fecha_inicio' => $this->input->post('fecha_inicio'),
				'fecha_fin' => $this->input->post('fecha_fin'),
				'estado' => $this->input->post('estado'),
            );
            
            $sed_periodos_detalle_id = $this->Sed_periodos_detalle_model->add_sed_periodos_detalle($params);
            redirect('sed_periodos_detalle/index');
        }
        else
        {            
            $data['_view'] = 'sed_periodos_detalle/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($secuencia)
    {   

        $data['sed_periodos_detalle'] = $this->Sed_periodos_detalle_model->get_sed_periodos_detalle($secuencia);
        
        if(isset($data['sed_periodos_detalle']['secuencia']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'fecha_inicio' => $this->input->post('fecha_inicio'),
					'fecha_fin' => $this->input->post('fecha_fin'),
					'estado' => $this->input->post('estado'),
                );

                $this->Sed_periodos_detalle_model->update_sed_periodos_detalle($secuencia,$params);            
                redirect('sed_periodos_detalle/index');
            }
            else
            {
                $data['_view'] = 'sed_periodos_detalle/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sed_periodos_detalle you are trying to edit does not exist.');
    } 

    function remove($secuencia)
    {
        $sed_periodos_detalle = $this->Sed_periodos_detalle_model->get_sed_periodos_detalle($secuencia);

        if(isset($sed_periodos_detalle['secuencia']))
        {
            $this->Sed_periodos_detalle_model->delete_sed_periodos_detalle($secuencia);
            redirect('sed_periodos_detalle/index');
        }
        else
            show_error('The sed_periodos_detalle you are trying to delete does not exist.');
    }
    
}
