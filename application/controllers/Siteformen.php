<?php 
 class Siteformen extends CI_Controller{
    public function construct(){
        parent::__construct();
        $this->load->model('Siteformen_model','Contractor_model');//Load model in my controller
        #$this->load->model('Contractor_model');
    }
    public function index(){

        $this->load->view('siteformen/header');
        $this->load->view('siteformen/index');
        $this->load->view('siteformen/footer');

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
            $this->load->view('siteformen/header');
            $this->load->view('siteformen/project', $data);
            $this->load->view('siteformen/footer');
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
        $data['title1'] = "Register/Add material to be used on site";

        $this->load->library('form_validation');

        $this->form_validation->set_rules('item', 'Item', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('unit', 'Unit', 'required');

        if($this->form_validation->run()===FALSE){
            $this->load->view('siteformen/header');
            $this->load->view('siteformen/material', $data);
            $this->load->view('siteformen/footer');
        }else{
            $data = array(
                'item' => $this->input->post('item'),
                'type' => $this->input->post('type'),
                'unit' => $this->input->post('unit')
            );
            $this->Siteformen_model->register_material($data);
            redirect('index.php/Siteformen/vmaterial');
        }
    }

    public function vmaterial(){
        $data['title1'] = "Register/Add material to be used on site";

        $data['title'] = "Material registered for the project";
        $data['materails'] = $this->Siteformen_model->get_material();

        $this->load->view('siteformen/header');
        $this->load->view('siteformen/vmaterial', $data);
        $this->load->view('siteformen/footer');
    }

    public function client(){
        $data['title'] = "Register client of the project to the system";

        $data['clients'] = $this->Siteformen_model->get_client();

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Full name', 'required');
        $this->form_validation->set_rules('email', 'Email address', 'required');
        $this->form_validation->set_rules('phone', 'Phone number', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');

        if($this->form_validation->run()===FALSE){
            $this->load->view('siteformen/header');
            $this->load->view('siteformen/client', $data);
            $this->load->view('siteformen/footer');
        }else{
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address')

            );
            $this->Siteformen_model->register_client($data);
            redirect('index.php/Siteformen/material');
        }
    }

   

    public function employee(){
        $data['title'] = "PROJECT EMPLOYEE";
        $data['projects'] = $this->Siteformen_model->get_project();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('empname', 'Full name', 'required');
        $this->form_validation->set_rules('empstartdate', 'Start date', 'required');
        $this->form_validation->set_rules('emptitle', 'End date', 'required');
        $this->form_validation->set_rules('empsalary', 'Employee Salary', 'required');

       

        if($this->form_validation->run()===FALSE){
            $this->load->view('siteformen/header');
            $this->load->view('siteformen/employee', $data);
            $this->load->view('siteformen/footer');
        }else{
            $data = array(
                'empname' => $this->input->post('empname'),
                'empstartdate' => $this->input->post('empstartdate'),
                'emptitle' => $this->input->post('emptitle'),
                'empsalary'=> $this->input->post('empsalary'),
                'project_id'=> $this->input->post('project_id')
                

            );
            $this->Siteformen_model->register_employee($data);
            redirect('index.php/Siteformen/employee');
        } 
    }
    public function payments(){

        $data['title'] = "Register weekly payments";
        $data['projects'] = $this->Siteformen_model->get_project();
        $data['tasks'] = $this->Siteformen_model->get_task();
        $this->load->library('form_validation');

        $this->form_validation->set_rules('date', 'Date of payment', 'required');
        $this->form_validation->set_rules('payment_name', 'name of payee', 'required');
        $this->form_validation->set_rules('work_id', 'Name of the task ', 'required');
        $this->form_validation->set_rules('amount', 'Amount', 'required');
        
        if($this->form_validation->run()=== FALSE){
            $this->load->view('siteformen/header');
            $this->load->view('siteformen/payments', $data);
            $this->load->view('siteformen/footer');
        }else{
            $data = array(
                'date' => $this->input->post('date'),
                'payment_name' => $this->input->post('payment_name'),
                'work_id' => $this->input->post('work_id'),
                'amount'=> $this->input->post('amount'),
                'others'=> $this->input->post('others'),
                'measurement'=> $this->input->post('measurement'),
                'project_id'=> $this->input->post('project_id')
                

            );
            $this->Siteformen_model->register_payments($data);
            redirect('index.php/Siteformen/payments');
        }
    }

    public function supplier(){
        $data['title'] = "Register suppliers";

        $this->load->library('form_validation');

        $this->form_validation->set_rules('sup_name', 'name of supplier', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');
        $this->form_validation->set_rules('email', 'Email address ', 'required');
        $this->form_validation->set_rules('sup_phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('sup_address', 'Address Number', 'required');
       
        
        if($this->form_validation->run()=== FALSE){
            $this->load->view('siteformen/header');
            $this->load->view('siteformen/supplier', $data);
            $this->load->view('siteformen/footer');
        }else{
            $data = array(
                'sup_name' => $this->input->post('sup_name'),
                'location' => $this->input->post('location'),
                'email' => $this->input->post('email'),
                'sup_phone'=> $this->input->post('sup_phone'),
                 'sup_address'=> $this->input->post('sup_address'),
                 'bc_acc'=> $this->input->post('bc_acc')
                

            );
            $this->Siteformen_model->register_supplier($data);
            redirect('index.php/Siteformen/supplier');
        }
    }

    public function mut_sup(){
        $data['title'] ="Hey supplier register material you offer";
        $data['materials'] = $this->Siteformen_model->get_material();
        $data['suppliers'] = $this->Siteformen_model->get_supplier();

        $this->load->library('form_validation');
        $this->form_validation->set_rules('sup_id', 'name of supplier', 'required');
        $this->form_validation->set_rules('material_id', 'Item', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');


        if($this->form_validation->run()=== FALSE){
            $this->load->view('siteformen/header');
            $this->load->view('siteformen/mat_sup', $data);
            $this->load->view('siteformen/footer');
        }else{
            $data = array(
                'sup_id' => $this->input->post('sup_id'),
                'material_id' => $this->input->post('material_id'),
                'unit' => $this->input->post('unit'),
                'price' => $this->input->post('price')                

            );
            $this->Siteformen_model->register_suppliermaterial($data);
            redirect('index.php/Siteformen/supplier');
        }
    }

    public function make_order(){
        $data['title'] ="Make order to your supplier";
        $data['materials'] = $this->Siteformen_model->get_materialsup();
        #$data['suppliers'] = $this->Siteformen_model->get_supplier();

        $this->load->library('form_validation');
        $this->form_validation->set_rules('item_id', 'Item', 'required');
        $this->form_validation->set_rules('quantity', 'Quantinty', 'required');
        $this->form_validation->set_rules('date_placed', 'Date order placed', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');


        if($this->form_validation->run()=== FALSE){
            $this->load->view('siteformen/header');
            $this->load->view('siteformen/order', $data);
            $this->load->view('siteformen/footer');
        }else{
            $data = array(
                'item_id' => $this->input->post('item_id'),
                'quantity' => $this->input->post('quantity'),
                'date_placed' => $this->input->post('date_placed'),
                'price' => $this->input->post('price'),
                'sup_id' => $this->input->post('sup_id')                
              

            );
            $this->Siteformen_model->place_order($data);
            redirect('index.php/Siteformen/supplier');
        }
    }

    public function task(){
        $data['title'] = "Register Task on site";
        $this->load->library('form_validation');
        $this->form_validation->set_rules('work_name','Full name', 'required');
        $this->form_validation->set_rules('start_date', 'Start date', 'required');
        $this->form_validation->set_rules('end_date', 'End date', 'required');
        $this->form_validation->set_rules('budget', 'Budget', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');


        if($this->form_validation->run()===FALSE){
            $this->load->view('siteformen/header');
            $this->load->view('siteformen/task', $data);
            $this->load->view('siteformen/footer');
        }else{
            $data = array(
                'work_name' => $this->input->post('work_name'),
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'budget' => $this->input->post('budget'),
                'description' => $this->input->post('description')

            );
            $this->Siteformen_model->register_task($data);
            redirect('index.php/Siteformen/task');
        }
    }

    public function vtask(){
        $data['title'] = "Task to be performed";
        $data['tasks'] = $this->Siteformen_model->gettask();

        $this->load->view('siteformen/header');
        $this->load->view('siteformen/vtask', $data);
        $this->load->view('siteformen/footer');
    }

    public function todaytask(){
        $data['title'] = "Register every task you perfom in a day";

        $this->load->library('form_validation');
        $this->form_validation->set_rules('task_name', 'Task name', 'required');
        $this->form_validation->set_rules('measurement', 'measurement', 'required');
        $this->form_validation->set_rules('budget', 'Budget', 'required');
        $this->form_validation->set_rules('type_work', 'Type of work', 'required');
        $this->form_validation->set_rules('numlabour', 'Number man power', 'required');

        if($this->form_validation->run()===FALSE){
            $this->load->view('siteformen/header');
            $this->load->view('siteformen/todaytask', $data);
            $this->load->view('siteformen/footer');
        }else{
            $data =array(
                'task_name' => $this->input->post('task_name'),
                'measurement' => $this->input->post('measurement'),
                'budget' => $this->input->post('budget'),
                'type_work' => $this->input->post('type_work'),
                'numlabour' => $this->input->post('numlabour'),
                'todaydate' => mdate('%Y-%m-%d ', now())
            );
            $this->Siteformen_model->reg_todaytask($data);
            redirect('index.php/Siteformen/vtodaytask');
        }
    }

    public function vtodaytask(){
        $data['zaleo'] = $this->Siteformen_model->get_todaytask();

        $this->load->view('siteformen/header');
        $this->load->view('siteformen/vtodaytask', $data);
        $this->load->view('siteformen/footer');

    }

    

    public function delivary(){
        $data['litle'] = "Register material delivery on site";
        $data['materails'] = $this->Siteformen_model->get_material();


        $this->load->library('form_validation');
        $this->form_validation->set_rules('item_id', 'Item name', 'required');
        $this->form_validation->set_rules('quantity', 'Quantity', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('sup_name', 'Supplier name', 'required');

       
        if($this->form_validation->run()===FALSE){
            $this->load->view('siteformen/header');
            $this->load->view('siteformen/delivary', $data);
            $this->load->view('siteformen/footer');
        }else{
            $data = array(                
                'item_id' => $this->input->post('item_id'),
                'quantity' => $this->input->post('quantity'),
                'date' => date('d-m-y'),
                'sup_name' => $this->input->post('sup_name')
            );
            $this->Siteformen_model->materialonsite($data);
            redirect('index.php/Siteformen/project');
        }

    }
    public function matDelivary(){
        $data['ttile'] = "Materials derivered on site";
        $data['materials'] = $this->Contractor_model->get_matDerived();
       
            $this->load->view('siteformen/header');
            $this->load->view('siteformen/materialOnsite', $data);
            $this->load->view('siteformen/footer');
         
    }
    
}