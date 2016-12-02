<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	private $data;
	public function __construct() {
       parent::__construct();
       $this->init();
   }

   public function init($value='')
   {
   		$this->data['head']['title']='心灵的孤僻';
   }

	public function index()
	{
		
		$this->load->view('index', $this->data);
	}

	public function head($value='')
	{
		$this->load->view('head');
	}

	public function aboutme($value='')
	{
		$this->load->view('aboutme', $this->data);
	}

	public function friend($value='')
	{
		$this->load->view('friend', $this->data);
	}

	public function study($value='')
	{
		$this->load->view('index', $this->data);
	}

	public function liuyan($value='')
	{
		$this->load->view('liuyan');
	}
}

