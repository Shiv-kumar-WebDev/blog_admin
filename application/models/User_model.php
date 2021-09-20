<?php  if(!defined('BASEPATH')) Exit ('No Direct script access allowed');
class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();	
		$this->load->database();
	}
	
	public function getBlogData(){
		$q=$this->db->get('blogData');
		return $q->result_array();
	}
	public function getSliderData(){
		$this->db->select("*");
            $this->db->from("slider");
			$this->db->join("blogdata", "slider.blog_id=blogdata.id");
            $this->db->where("slider.slider_status", 1);
            $query = $this->db->get();
            return $query->result_array();
	}
	public function getCategoryData(){
		$this->db->select("*");
            $this->db->from("category");
			// $this->db->join("blogdata", "category.blog_id=blogdata.id");
            $query = $this->db->get();
            return $query->result_array();
	}
	public function getSubategoryData(){
		$this->db->select("*");
            $this->db->from("subcategory");
			// $this->db->join("category", "category.blog_id=subcategory.id");
            $query = $this->db->get();
            return $query->result_array();
	}


	public function addcategory($name){
		
		return $this->db->insert('category', $name);
	}
	public function addsubcategory($name){
		// print_r($name);die();
		return $this->db->insert('subcategory', $name);
	}
	public function getSingleCategoryData($id){
			$this->db->select("*");
            $this->db->from("category");
            $this->db->where("id",$id);
			// $this->db->join("blogdata", "category.blog_id=blogdata.id");
            $query = $this->db->get();
            return $query->result_array();
	}
	public function getSingleSubCategoryData($id){
			$this->db->select("*");
            $this->db->from("subcategory");
            $this->db->where("id",$id);
			// $this->db->join("blogdata", "category.blog_id=blogdata.id");
            $query = $this->db->get();
            return $query->result_array();
	}


	public function update_category($id)
	{
	
		$data = array(
			'category_name' => $this->input->post('Categoryname'),
		);
		// print_r($id);die();
		$query = $this->db->update('category',$data,['id'=>$id]);
		// print_r($this->db->affected_rows());die();
		return $this->db->affected_rows();
	}
	public function update_subcategory($id)
	{
	
		$data = array(
			'name' => $this->input->post('SubCategoryname'),
		);
		// print_r($id);die();
		// print_r($data);die();
		$query = $this->db->update('subcategory',$data,['id'=>$id]);
		// print_r($this->db->affected_rows());die();
		return $this->db->affected_rows();
	}
	public function delete_category($id)
	{
	
		// $data = array(
		// 	'category_name' => $this->input->post('Categoryname'),
		// );
		// print_r($id);die();
		// print_r($data);die();
		// print_r($this->db->affected_rows());die();
		$this -> db -> where('id', $id);
    	$this -> db -> delete('category');
		return $this->db->affected_rows();
	}
	public function delete_subcategory($id)
	{
	
		// $data = array(
		// 	'category_name' => $this->input->post('Categoryname'),
		// );
		// print_r($id);die();
		// print_r($data);die();
		// print_r($this->db->affected_rows());die();
		$this -> db -> where('id', $id);
    	$this -> db -> delete('subcategory');
		return $this->db->affected_rows();
	}
    
}