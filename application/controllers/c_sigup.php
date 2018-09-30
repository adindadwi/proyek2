<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_sigup extends CI_Controller
{
       function __construct()
 		{
         session_start(); //mengadakan session
		  parent::__construct();
		  $this->load->library(array('form_validation','upload'));
		  $this->load->model('m_captcha');
		  $this->load->helper('captcha');
          if ( !isset($_SESSION['log']) )
          {
		  	$_SESSION['log']="";
		  }
		 }
  
        public function index()
        {
              $data['captcha'] = $this->m_captcha->setCaptcha();			  
               $this->load->view('view_daftar',$data); //apabila session kosong load login/v_form
        }
         
        function daftar()
        {
			$config=array(
				array(
					'field'=>'nama',
					'label'=>'Nama',
					'rules'=>'trim|required|min_length[3]|is_unique[user.nama]'
				),
				array(
					'field'=>'user',
					'label'=>'Username',
					'rules'=>'trim|required'
				),
				array(
					'field'=>'pass',
					'label'=>'Password',
					'rules'=>'trim|required'
				),
				array(
					'field'=>'rayon',
					'label'=>'Rayon',
					'rules'=>'trim|required'
				)
			);
				$this->form_validation->set_rules($config);
              if ( $this->form_validation->run() == TRUE ) { 
					$config['upload_path']   = './assets/img/dp';
					$config['allowed_types'] = 'gif|jpg|png|bmp';
					$config['max_size']      = '1000000';
					$config['max_width']  = '1000';
	    			$config['max_height']  = '2000';
	                   
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('foto')){
	                    $gambar="";
	                    $foto=",<br><small><font color='red'> Foto tidak terupload cek size foto Max:1MB,ukuran:1000X2000</font></small>";
	                }else{
	                    $gambar=$this->upload->file_name;
	                    $foto="";
	                }
	                 $_SESSION['log']="<div class='alert alert-success alert-dismissable'>
			  				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			  				<strong><font size='4'>Selamat!</font></strong> Anda Telah Terdaftar ".$foto."
								</div>";
		              $this->load->model('m_user'); // load model m_user
		              $data['gambar']=$gambar;
		              $data['nama']=$this->input->post('nama');
					  $data['user']=$this->input->post('user');
					  $data['pass']=md5($this->input->post('pass'));
					  $data['rayon']=$this->input->post('rayon');
		              $result = $this->m_user->daftartodb($data);
				}
				redirect('c_sigup');
				
		}
        
        function valid_captcha($str)
 {
  $expiration = time()-300; // 5 minutes
                $this->db->query("DELETE FROM captcha WHERE time < ".$expiration);
 
                // Then see if a captcha exists:
                $word=$_POST['captcha'];
                $ip=$this->input->ip_address();
                $time=$expiration;
                $sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ".$word." AND ip_address = '".$ip."' AND time >".$time."";
                //$binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
                $query = $this->db->query($sql);
                $row = $query->row();
 
                if ($row->COUNT == 0)
                {
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
 }
}
?>