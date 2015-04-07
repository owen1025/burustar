<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Main extends REST_Controller{
	public function __construct(){
		parent::__construct();

		$this->load->model('category', '', true);
		$this->load->model('contents', '', true);
	}

	public function index(){
	}

	public function category_get(){
		$this->response($this->category->get());
	}

	public function contents_get(){
		$this->response($this->contents->get($this->get('state'), 
			$this->get('limit'), $this->get('offset')));
	}

	public function search_get(){
		$this->response($this->contents->search($this->get('kind'), $this->get('data')));
	}
}