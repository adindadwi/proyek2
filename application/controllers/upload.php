<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Upload extends CI_Controller
	{
	 	function __construct()
        {
                session_start();
                parent::__construct();
                $this->load->library(array('template','pagination','form_validation','upload'));
                if ( !isset($_SESSION['is_login']) ) {
                        redirect('c_login');
                }
        }
        
        public function index()
        {
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['title']="Home";
			$data['side1']="";
			$data['side2']="class='active'";
			$data['side3']="";
        	$this->template->display('upload',$data);
        }
        
	}