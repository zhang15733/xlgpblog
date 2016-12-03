<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	private $data;

	public function __construct() {
       parent::__construct();
       $this->init();
       //$data['']
   }

   public function init($value='')
   {
   	# code...
   }
	public function index($artile_id = '1')
	{
		$this->load->view('article');
	}

	public function cato($value = ''){
		$this->load->view('index');
	}

	public function sxxt($artile_id = '1')
	{
		//闲谈莫论人生
		$this->load->view('article');
	}
}
