<?php

class Sed_pdi extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sed_pdi_model');
    } 

    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('sed_pdi/index?');
        $config['total_rows'] = $this->Sed_pdi_model->get_all_sed_pdi_count();
        $this->pagination->initialize($config);

        $data['sed_pdi'] = $this->Sed_pdi_model->get_all_sed_pdi($params);
        
        $data['_view'] = 'sed_pdi/index';
        $this->load->view('layouts/main',$data);
    }

    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('mejora','Mejora','max_length[200]');
		$this->form_validation->set_rules('accion','Accion','max_length[500]');
		$this->form_validation->set_rules('resultado','Resultado','max_length[2000]');
		$this->form_validation->set_rules('observaciones','Observaciones','max_length[2000]');
		$this->form_validation->set_rules('avance','Avance','integer');
		$this->form_validation->set_rules('fec_ingreso','Fec Ingreso','required');
		$this->form_validation->set_rules('user_ingreso','User Ingreso','required|max_length[20]');
		$this->form_validation->set_rules('user_modificacion','User Modificacion','max_length[20]');
		$this->form_validation->set_rules('id_periodo_detalle','Id Periodo Detalle','integer');
		$this->form_validation->set_rules('id_periodo','Id Periodo','integer');
		$this->form_validation->set_rules('id_evaluado','Id Evaluado','integer');
		$this->form_validation->set_rules('id_competencia','Id Competencia','integer');
		$this->form_validation->set_rules('id_evaluador','Id Evaluador','integer');
		$this->form_validation->set_rules('id_mentor','Id Mentor','integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'id_periodo' => $this->input->post('id_periodo'),
				'periocidad' => $this->input->post('periocidad'),
				'mejora' => $this->input->post('mejora'),
				'accion' => $this->input->post('accion'),
				'tipo' => $this->input->post('tipo'),
				'fec_inicio' => $this->input->post('fec_inicio'),
				'fec_fin' => $this->input->post('fec_fin'),
				'presupuesto' => $this->input->post('presupuesto'),
				'resultado' => $this->input->post('resultado'),
				'observaciones' => $this->input->post('observaciones'),
				'avance' => $this->input->post('avance'),
				'fec_ingreso' => $this->input->post('fec_ingreso'),
				'user_ingreso' => $this->input->post('user_ingreso'),
				'fec_modificacion' => $this->input->post('fec_modificacion'),
				'user_modificacion' => $this->input->post('user_modificacion'),
				'id_periodo_detalle' => $this->input->post('id_periodo_detalle'),
				'id_evaluado' => $this->input->post('id_evaluado'),
				'id_competencia' => $this->input->post('id_competencia'),
				'id_evaluador' => $this->input->post('id_evaluador'),
				'id_mentor' => $this->input->post('id_mentor'),
            );
            
            $sed_pdi_id = $this->Sed_pdi_model->add_sed_pdi($params);
            redirect('sed_pdi/index');
        }
        else
        {
			$this->load->model('Sed_periodo_model');
			$data['all_sed_periodos'] = $this->Sed_periodo_model->get_all_sed_periodos();
            
            $data['_view'] = 'sed_pdi/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id_pdi)
    {   
        $data['sed_pdi'] = $this->Sed_pdi_model->get_sed_pdi($id_pdi);
        
        if(isset($data['sed_pdi']['id_pdi']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('mejora','Mejora','max_length[200]');
			$this->form_validation->set_rules('accion','Accion','max_length[500]');
			$this->form_validation->set_rules('resultado','Resultado','max_length[2000]');
			$this->form_validation->set_rules('observaciones','Observaciones','max_length[2000]');
			$this->form_validation->set_rules('avance','Avance','integer');
			$this->form_validation->set_rules('fec_ingreso','Fec Ingreso','required');
			$this->form_validation->set_rules('user_ingreso','User Ingreso','required|max_length[20]');
			$this->form_validation->set_rules('user_modificacion','User Modificacion','max_length[20]');
			$this->form_validation->set_rules('id_periodo_detalle','Id Periodo Detalle','integer');
			$this->form_validation->set_rules('id_periodo','Id Periodo','integer');
			$this->form_validation->set_rules('id_evaluado','Id Evaluado','integer');
			$this->form_validation->set_rules('id_competencia','Id Competencia','integer');
			$this->form_validation->set_rules('id_evaluador','Id Evaluador','integer');
			$this->form_validation->set_rules('id_mentor','Id Mentor','integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id_periodo' => $this->input->post('id_periodo'),
					'periocidad' => $this->input->post('periocidad'),
					'mejora' => $this->input->post('mejora'),
					'accion' => $this->input->post('accion'),
					'tipo' => $this->input->post('tipo'),
					'fec_inicio' => $this->input->post('fec_inicio'),
					'fec_fin' => $this->input->post('fec_fin'),
					'presupuesto' => $this->input->post('presupuesto'),
					'resultado' => $this->input->post('resultado'),
					'observaciones' => $this->input->post('observaciones'),
					'avance' => $this->input->post('avance'),
					'fec_ingreso' => $this->input->post('fec_ingreso'),
					'user_ingreso' => $this->input->post('user_ingreso'),
					'fec_modificacion' => $this->input->post('fec_modificacion'),
					'user_modificacion' => $this->input->post('user_modificacion'),
					'id_periodo_detalle' => $this->input->post('id_periodo_detalle'),
					'id_evaluado' => $this->input->post('id_evaluado'),
					'id_competencia' => $this->input->post('id_competencia'),
					'id_evaluador' => $this->input->post('id_evaluador'),
					'id_mentor' => $this->input->post('id_mentor'),
                );

                $this->Sed_pdi_model->update_sed_pdi($id_pdi,$params);            
                redirect('sed_pdi/index');
            }
            else
            {
				$this->load->model('Sed_periodo_model');
				$data['all_sed_periodos'] = $this->Sed_periodo_model->get_all_sed_periodos();

                $data['_view'] = 'sed_pdi/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sed_pdi you are trying to edit does not exist.');
    } 


    function remove($id_pdi)
    {
        $sed_pdi = $this->Sed_pdi_model->get_sed_pdi($id_pdi);

        if(isset($sed_pdi['id_pdi']))
        {
            $this->Sed_pdi_model->delete_sed_pdi($id_pdi);
            redirect('sed_pdi/index');
        }
        else
            show_error('The sed_pdi you are trying to delete does not exist.');
    }
    
}
