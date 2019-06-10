<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Users extends CI_Controller{
    public function construct(){
        parent::__construct();
        $this->load->model("user_model");//Load model in my controller
    }
    public function login(){
        $data['title'] = "Fill your data";

        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'email/Username', 'required');
        $this->form_validation->set_rules('email', 'email/Username', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('outlook/header');
            $this->load->view('users/login', $data);
            $this->load->view('outlook/footer');
        }else{
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $validation =$this->User_model->validate('email', 'password');

            if($validation == 1){
                $userinfo = $this->User_model->getinfo('email');
                    foreach ($userinfo as $info) {
                        $myuser_id = $info->id;
                        $myuser_role = $info->role_id;

                        //create session
                        $userdata = array(
                            'user_id' => $myuser_id,
                            'email'=> $email,
                            'logged_in' => true
                        );
                    if($userinfo){
                        $this->session->set_userdata($userdata);
                        switch($myuser_role){
                            case "1";
                            redirect("admin/index");
                            break;
                            case '2';
                            redirect("siteforemen/index");
                            break;
                            case '3';
                            redirect("contractor/index");
                            break;
                            case '4';
                            redirect("supplier/index");
                            break;
                            default;
                            redirect("users");
                            break;
                        }
                    }
                    
                }

            }else{
                redirect('index.php/Users/failed');
            }
        }
        
    }

    public function register(){
        $data['title'] = "Enter credentials";

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Full name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmpassword', 'Confirm password', 'required');

        if($this->form_validation->run()===FALSE){
            $this->load->view('outlook/header');
            $this->load->view('users/register', $data);
            $this->load->view('outlook/footer');
        }else{
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            $this->User_model->register($data);
        }
        
redirect('index.php/Users/login');
    }

    public function failed(){
        $data['title'] = "Invalid user login";

        $this->load->view('outlook/header');
        $this->load->view('users/login', $data);
        $this->load->view('outlook/footer');
    }
 }