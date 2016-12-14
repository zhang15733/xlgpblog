<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	private $data;
	private $title = '心灵的孤僻的博客';

	public function __construct() {
       parent::__construct();
       $this->init();
   }

   public function init($value='')
   {
   		$this->data['title']= '心灵的孤僻的博客';
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
		$this->data['title'] = '博主自序--'.$this->data['title'];
		$this->load->view('aboutme', $this->data);
	}

	public function friend($value='')
	{
		// $this->load->model('friend_model');
		// $this->data['friends'] = $this->friend_model->get_friends();
		$this->data['friends'] = [];
		$this->data['title'] = '友谊长存--'.$this->data['title'];
		$this->load->view('friend', $this->data);
	}

	public function study($value='')
	{
		$this->data['title'] = '学无止境--'.$this->data['title'];
		$this->load->view('index', $this->data);
	}

	public function liuyan($value='')
	{
		$this->data['title'] = '雁过留影--'.$this->data['title'];
		$this->load->view('liuyan', $this->data);
	}

	public function sxxt($value='')
	{
		$this->data['title'] = '闲谈莫论人生--'.$this->data['title'];
		$this->load->view('sxxt', $this->data);	
	}
}

