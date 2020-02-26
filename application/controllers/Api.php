<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Api extends REST_Controller  {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		// $this->load->helper('url');
		// $this->load->model('apimodel');
	}

	public function index_get($id = 0)
	{
        if(empty($id)){
            $data = $this->db->get_where("pagemaster", ['pageID' => $id])->row_array();
        }else{
			$data = $this->db->get("pagemaster")->result();
			// echo $data;
        }
     
      $this->response($data, REST_Controller::HTTP_OK);
	}
	}
