<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct() {
        parent::__construct();

        
    }


	public function index()
	{	
		$this->load->model("User_model");
		$data['blogs']=$this->User_model->getBlogData();
		$data['sliders']=$this->User_model->getSliderData();
		$data['categories']=$this->User_model->getCategoryData();
		// print_r($data);die();
		$this->load->view('blog/index',$data);
	}
	
}