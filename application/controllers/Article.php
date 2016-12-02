<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	
	public function index($artile_id = '1')
	{
		$data['head']['title']='心灵的孤僻<small>平心静气，尔之所需，岁月给予</small>';
		$this->load->view('article', $data);
	}

	public function cato($value = ''){
		$this->load->view('index');
	}
}
