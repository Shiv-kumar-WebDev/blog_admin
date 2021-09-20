<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subcategory extends CI_Controller {

	public function __construct() {
        parent::__construct();

        
    }


	public function index()
	{	
		$this->load->model("User_model");
		$data['categories']=$this->User_model->getSubategoryData();
		// print_r($data);die();

		$this->load->view('admin/blocks/header');
		$this->load->view('admin/blocks/left_sidebar');
		$this->load->view('admin/category/subcategory',$data);
		$this->load->view('admin/blocks/footer');
	}
	public function addSubCategory(){

		// $data['categories']=$this->User_model->getCategoryData();
		$this->load->view('admin/blocks/header');
		$this->load->view('admin/blocks/left_sidebar');
		$this->load->view('admin/category/addsubcategory');
		$this->load->view('admin/blocks/footer');
	}
	public function insert(){
		
		$data = array(
			    'name' => $this->input->post('SubCategoryname')
				);
		// print_r($data);die();
		$this->load->model("User_model");
		$result=$this->User_model->addsubcategory($data);
  		redirect('admin/category/Subcategory');

	}
	public function editSubCategory(){

		$id=$this->uri->segment('5');
		// echo $id;die();
		$this->load->model("User_model");
		$data['subcategories']=$this->User_model->getSingleSubCategoryData($id);

		$this->load->view('admin/blocks/header');
		$this->load->view('admin/blocks/left_sidebar');
		$this->load->view('admin/category/editSubCategory',$data);
		$this->load->view('admin/blocks/footer');
	}
	public function update(){
		$id=$this->uri->segment('5');
		// echo $id; die();
		$this->load->model("User_model");
		$data['subcategories']=$this->User_model->update_subcategory($id);
		redirect('admin/category/Subcategory');
	}
	public function deleteSubCategory(){
		$id=$this->uri->segment('5');
		// echo $id;die();
		$this->load->model("User_model");
		$data['subcategories']=$this->User_model->delete_subcategory($id);
		redirect('admin/category/Subcategory');
	}
	
}