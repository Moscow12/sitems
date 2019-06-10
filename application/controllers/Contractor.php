<?php 
class Contractor extends CI_Controller{
    public function construct(){
        parent::__construct();
        $this->load->model('Contractor_model','Siteformen_model');//Load model in my controller
    }
    public function index(){

        $this->load->view('contractor/header');
        $this->load->view('contractor/index');
        $this->load->view('contractor/footer');

    }

    public function project(){
        $data['title'] = "REGISTER PROJECT";
        $data['clients'] = $this->Siteformen_model->get_client();

        $this->load->library('form_validation');
        $this->form_validation->set_rules('proj_name', 'Full name', 'required');
        $this->form_validation->set_rules('proj_location', 'location', 'required');
        $this->form_validation->set_rules('permit', 'Permit Number', 'required');
        $this->form_validation->set_rules('proj_address', 'Address', 'required');
        $this->form_validation->set_rules('contractor_name', 'Constractor name', 'required');
        $this->form_validation->set_rules('arch_name', 'Archertect name', 'required');
        $this->form_validation->set_rules('consl_name', 'Conslutancce Name', 'required');
        $this->form_validation->set_rules('subcontr_name', 'Sub controctor name', 'required');

        if($this->form_validation->run()===FALSE){
            $this->load->view('contractor/header');
            $this->load->view('contractor/project', $data);
            $this->load->view('contractor/footer');
        }else{
            $data = array(
                'proj_name' => $this->input->post('proj_name'),
                'proj_location' => $this->input->post('proj_location'),
                'permit' => $this->input->post('permit'),
                'proj_address' => $this->input->post('proj_address'),
                'contractor_name'=> $this->input->post('contractor_name'),
                'arch_name' => $this->input->post('arch_name'),
                'consl_name' => $this->input->post('consl_name'),
                'subcontr_name' => $this->input->post('subcontr_name'),
                'client_id' => $this->input->post('client_id')

            );
            $this->Siteformen_model->register_project($data);
            redirect('index.php/Siteformen/project');
        }
    }
    public function material(){
        $data['title'] = "Material registered for the project";
        $data['materails'] = $this->Siteformen_model->get_material();

        $this->load->view('contractor/header');
        $this->load->view('contractor/vmaterial', $data);
        $this->load->view('contractor/footer');
    }

    public function material_derivered(){
        $data['ttile'] = "Materials derivered on site";
        $data['materials'] = $this->Contractor_model->get_matDerived();
       
            $this->load->view('contractor/header');
            $this->load->view('contractor/materialOnsite', $data);
            $this->load->view('contractor/footer');
        
    }

    public function todayTask(){
            $data['ttile'] = "Today duty performed on site";
            $data['tasks'] = $this->Contractor_model->get_todayTask();
       
            $this->load->view('contractor/header');
            $this->load->view('contractor/dutyToday', $data);
            $this->load->view('contractor/footer');
        
    }

    public function payments(){
        $data['title'] = "Malipo ya week ";
        $data['payments'] = $this->Contractor_model->get_payments();
        $data['pays'] = $this->Contractor_model->get_pays();


        $this->load->view('contractor/header');
        $this->load->view('contractor/payments', $data);
        $this->load->view('contractor/footer');
    }
    
}