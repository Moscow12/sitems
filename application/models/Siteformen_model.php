<?php 
class Siteformen_model extends CI_Model{
   public function __Construct(){
        $this->load->database();
    }

    public function register_material($data){
        $this->db->insert('material', $data);
    }

    public function register_client($data){
        $this->db->insert('client', $data);
    }

    public function register_project($data){
        $this->db->insert('project', $data);
    } 

    public function get_client(){
        $query = $this->db->get('client');
        return $query->result_array();
    }

    public function register_task($data){
        $this->db->insert('work', $data);
    }
    
    public function register_employee($data){
        $this->db->insert('employee', $data);
    } 

    public function get_project(){
        $query = $this->db->get('project');
        return $query->result_array();
    }

    public function register_payments($data){
        $this->db->insert('payments', $data);
    } 

    public function get_task(){
        $query = $this->db->get('work');
        return $query->result_array();
    }

    public function register_supplier($data){
        $this->db->insert('supplier', $data);
    } 

    public function register_suppliermaterial($data){
        $this->db->insert('material_sup', $data); 
    }

    public function get_material(){
        $query = $this->db->get('material');
        return $query->result_array();
    }

    public function get_supplier(){
        $query = $this->db->get('supplier');
        return $query->result_array();
    }

    public function place_order($data){
        $this->db->insert('orders', $data);   
    }

    public function get_materialsup(){
        $this->db->select('material_sup.id, sup_name, item, material_sup.unit, price ');
        $this->db->from('material_sup');
        $this->db->join('material', 'material.id = material_sup.id','inner');
        $this->db->join('supplier', 'supplier.id = material_sup.id', 'inner');
        $this->db->where('material_sup.id = material_id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function gettask(){
        $query = $this->db->get('work');
        return $query->result_array();
    }

    public function reg_todaytask($data){
        $this->db->insert('todaytask', $data);
    }

    public function get_todaytask(){
        $query = $this->db->get('todaytask');
        return $query->result_array();
    }

    public function materialonsite($data){
        $this->db->insert('matDelivary', $data);
    }
    
}
