<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_comment extends CI_Controller
{
       function __construct()
		 {
		  session_start(); //mengadakan session
		  parent::__construct();
		  $this->load->library(array('template','pagination'));
		  //if ( isset($_SESSION['is_login']) ) { //cek apakah session ada
		    //             redirect('home'); //redirect controller member
		      //        }
		 }
  
        public function index()
        {
            if(isset($_POST['btn_comment']))
			{
				$this->load->model('m_comment');
				$data=	array(
							'nama'=>$_SESSION['nama'],
							'rayon'=>$_SESSION['rayon'],
							'isi'=>$_POST['komentar'],
							'time'=>gmdate("Y-m-d H:i:s", time()+60*60*7)
						);
				$this->m_comment->addComment($data);
				redirect(base_url().'c_comment/showcomment');	
			}
			$this->load->view('v_comment');
        }
         function post()
		{
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			foreach($data['content'] as $val){
				echo $val['nama']."|";
			}
			//$this->template->display('template/sidebar',$data);
		}function showcomment()
		{
			$this->load->model('m_comment');
			$_SESSION['rayon'] = $rayon;
			$data['content']=$this->m_comment->get_com(10,0,$rayon);
			$this->load->library('pagination');
			$config['base_url']=base_url().'c_comment/showcomment';
			$config['total_rows']=$this->m_comment->get_com_count();
			$config['per_page']=10;
			$this->pagination->initialize($config);
			$data['pages']=$this->pagination->create_links();
			$this->load->view('showallcomment',$data);
		}
}
?>