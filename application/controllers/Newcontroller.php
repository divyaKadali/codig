<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newcontroller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('newmodel');
	}
		
	public function index()
	{
		$this->data['title'] = 'Home';
	
	}
	
	public function getdata()
	{
		$result['result'] = $this->newmodel->get_last_ten_entries();
		$last_three_record=array_slice($result,-3,3,true);
	   //$last_three_record['today_deals'] = "My Real Title";
       //$last_three_record['bestselling_products'] = "My Real Heading";
		$this->load->view('newview',$result);
	}
	
    public  function savingdata()
    {
    	 $this->load->model('Newmodel'); // lode model

	     $data = $this->Newmodel->insert_entry(); // data send to model of action
	     
		 $this->load->view('insertview',$data); // 
    }
    
    public function update($id){
    	print_r($id);exit;
        $this->load->view('updateview');
    	$this->db->update('epooja_stors_status', $this, array('id' => $_POST['id']));
    }
	

}
