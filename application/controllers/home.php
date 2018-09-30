<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Home extends CI_Controller
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
			$data['side1']="class='active'";
			$data['side2']="";
			$data['side3']="";
        	$this->template->display('penting',$data);
        }
		function savecom()
		 {
            if(isset($_POST['btn_comment']))
			{
				$this->load->model('m_comment');
				$data=	array(
							'nama'=>$_SESSION['nama'],
							'rayon'=>$_SESSION['rayon'],
							'isi'=>$_POST['isi'],
							'time'=>gmdate("Y-m-d H:i:s", time()+60*60*7)
						);
				$this->m_comment->addComment($data);
				redirect(base_url().'home/showcomment');	
			}
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['title']="Comment";
			$data['side1']="class='active'";
			$data['side2']="";
			$data['side3']="";
			$this->template->display('comment/comment',$data);
        }
		function showcomment()
		{
			$this->load->model('m_comment');
			$data['fullco']=$this->m_comment->get_com(10,0);
			$config['base_url']=base_url().'home/showcomment';
			$config['total_rows']=$this->m_comment->get_com_count();
			$config['per_page']=10;
			$this->pagination->initialize($config);
			$data['pages']=$this->pagination->create_links();
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['side1']="class='active'";
			$data['side2']="";
			$data['side3']="";
			$this->template->display('comment/showcomment',$data);
		}
        public function rekap()
		{
			$this->load->view("rekap");
		}
		
        public function logout() //fungsi logout
        	{
              		session_destroy(); //session destroy
             		redirect("c_login");//buka halaman login/v_form
         	}
	}