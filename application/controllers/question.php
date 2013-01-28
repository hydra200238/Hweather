<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Question extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('question_model');
	}
	public function index()
	{
		$value = $this->uri->segment(3);
		echo json_encode(array('Hello'=>date("Y-m-d H:i:s")));
	}
	public function get_question()
	{
		$where = array();
		$query = $this->question_model->get_question($where);
		$question_time = $query->row()->question_time;
		echo json_encode(array('Hello'=>'World','question_time'=>$question_time,'result' => $query->result()));
	}
	public function insert_question()
	{
		$user_id = $this->input->post('user_id',true);
		$question_latitude = $this->input->post('question_latitude',true);
		$question_longitude = $this->input->post('question_longitude',true);
		$question_time = date("Y-m-d H:i:s");
		$user_id = $this->input->post('user_id',true);
		$user_id = $this->input->post('user_id',true);
		
		$data = array('user_id'=>'2');
		$result = $this->question_model->insert_question($data);
		
		echo json_encode(array('result'=>$result));
	}
}