<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newmodel extends CI_Model {

     
	   public $courier_name;
              
       
        public function get_last_ten_entries()
        {
        	    $this->load->database();
                $query = $this->db->get('epooja_stors_status');
                return $query->result();
        }

        public function insert_entry()
        {
          // print_r($_POST['courier_name']);
        	 $this->courier_name = $_POST['courier_name'];
        	 $this->db->insert('epooja_stors_status', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();
                $this->db->update('home_management', $this, array('id' => $_POST['id']));
        }

}
