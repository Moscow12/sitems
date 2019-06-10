<?php
    class User_Model extends CI_Model{

        public function __Construct(){
			$this->load->database();
        }
        
        public function login($email, $password){
            $this->db->where('email', $email);
            $this->db->where('password',$password);

            $return =$this->db->get('users');
            if($return->num_rows()== 1){
                return $return->row(0)->id;
            }else{
                return false;
            }
        }

        public function validate(){
            $this->db->where('email', $email);
            $this->db->where('password', $password);

            return $this->db->get('users')->num_rows();
        }

        public function getinfo(){
            $this->db->where('email', $email);
            return $this->db->get('users')->result();
        }

        public function register($data){
            $this->db->insert('users', $data);
        }
    }