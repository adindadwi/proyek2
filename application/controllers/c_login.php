<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_login extends CI_Controller
{
       function __construct()
		 {
		  session_start(); //mengadakan session
		  parent::__construct();
		  if ( isset($_SESSION['is_login']) ) { //cek apakah session ada
		                 redirect('home'); //redirect controller member
                      }
            // $this->load->model('m_user');
		 }
  
        public function index()
        {
             $data['log']="";
              $this->load->library('form_validation'); //load library form_validation
              $this->form_validation->set_rules('username', 'Username', 'required'); //cek, validasi username
              $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]'); //cek, validasi password
			//   $this->form_validation->set_rules('root', '', 'required');
 
              if ( $this->form_validation->run() == TRUE ) { //apabila validasi true(benar semua)
                 $this->load->model('m_user'); // load model m_user
                 $result = $this->m_user->cek_user_login( //jalankan fungsi cek_user_login dari model m_user
                             $this->input->post('username'),  //menangkap username dari form
                             $this->input->post('password'), //menangkap password dari form
							 $this->input->post('rayon')
                          );
                  
                             
                        if ( $result == TRUE) { //apabila result = true(ada data)
                        		$_SESSION['is_login']=TRUE; //create session
                                $this->load->model('m_user');
								$data['hasil']=$this->m_user->adminfromdb($this->input->post('username'));
								$hasil=$data['hasil'];
                                foreach($hasil as $listdata):
                                    $_SESSION['nama']=$listdata->nama;
                                    $_SESSION['user']=$listdata->username;
                                    $_SESSION['foto']=$listdata->foto;
                                    $_SESSION['rayon']=$listdata->rayon;
                                    endforeach;
                                    $_SESSION['log']="";
                                    
                                    redirect('home');	//redirect controller member
                             
							$data['log']="<div class='alert alert-danger alert-dismissable'>
			  				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			  				<strong><font size='4'>Maaf!</font></strong> Username Password atau Rayon Salah
								</div>";
						}
              } 
               
              $this->load->view('v_login',$data); //apabila session kosong load login/v_form
        }
         
}
?>