<?php 
class Contractor_model extends CI_Model{
   public function __Construct(){
        $this->load->database();
    }

    public function materialonsite($data){
        $this->db->insert('matDelivary', $data);
    }

    public function get_matDerived(){
        $this->db->select('item, quantity, date, unit, sup_name');
        $this->db->from('material');
        $this->db->join('matDelivary', 'material.id = matDelivary.item_id', 'inner');
        #$this->db->group_by('date');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_todayTask(){
       # $this->db->order_by('todaydate');
        $query = $this->db->get('todaytask');
        return $query->result_array();
    }

    public function get_payments(){

        #$this->db->select('date', 'work_name', 'amount', 'measurement', 'payment_name');
        #$this->db->from(' payments');
        $this->db->join(' work', 'payments.work_id = work.id', 'inner');
       # $this->db->where('payments.work_id = work.id');
        $query = $this->db->get('payments');
        return $query->result_array();
    }

    public function get_pays(){
        $this->db->select_sum('budget');
        $this->db->select ('todaydate');
        $this->db->from('todaytask');
        
        $this->db->group_by('todaydate');
        #$this->db->where('todaydate');
        $this->db->limit(0);

        $query = $this->db->get();
        return $query->result_array();
    }

}