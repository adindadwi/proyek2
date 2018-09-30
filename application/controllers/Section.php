<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Section extends CI_Controller
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
			$this->load->model('m_section');
			$data['hasil']=$this->m_section->showsectfromdb();
			$data['content']=$this->m_comment->posts(5,0);
			$data['title']="Sectionalizer";
			$data['side1']="";
			$data['side2']="";
			$data['side3']="";
        	$this->template->display('Sectionalizer/index',$data);
        }
		function lokasi(){ 
			$this->load->model('m_section');
			
			if($_POST['sbmtrayon'])
			{
				if($_POST['rayon']=="")
				{
					$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Maaf!</strong> Anda belum memilih rayon	
					</div>";
					$this->load->model('m_comment');
					$data['content']=$this->m_comment->posts(5,0);
					$data['title']="Sectionalizer";
					$data['side1']="";
					$data['side3']="";
					$data['side4']="";
					$data['side2']="";
					redirect('Section');
				}
				elseif($_SESSION['rayon'] != $_POST['rayon'])
				{
					$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Maaf!</strong> pilihan rayon Anda tidak sama
					</div>";
					redirect('Section');
				}
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$this->m_section->showlokfromdb();
			$data['title']="Sectionalizer";
			$data['side1']="";
			$data['side3']="";
			$data['side4']="";
			$data['side2']="";
			$this->template->display('Sectionalizer/indexsection',$data);
			}
		}		
         public function lihatsectionadb()
        {
        	$this->load->model('m_section');
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$this->m_section->showsectfromdb();
			$data['title']="";
			$data['side1']="";
			$data['side2']="class='active'";
			$data['side3']="";
        	$this->template->display('sectionalizer/view',$data);
        }
        public function addsection()
        {
        	$id=$this->uri->segment(3);
        	$this->load->model('m_section');
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$this->m_section->addsectionfromdb($id);
			$data['gambar']=$this->m_section->gambarlinefromdb($id);
			$query=$this->m_section->cekgmb($id);
	        $cek=$query->row();
	        $data['cekgmb']=$cek->count;
        	$data['title']="Input Line";
        	$data['side1']="class='active'";
        	$data['side2']="";
			$data['side3']="";
			$this->template->display('Sectionalizer/Addsect',$data);
		}
		function saveaddlokasi()
		{
			$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
			  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			  <strong>Selamat!</strong> Data Telah Tersimpan
			</div>";
			$data['no_gambar']=$this->input->post('no_gambar');
			$data['no_gambar2']=$this->input->post('no_gambar2');
			$data['lokasi']=$this->input->post('lokasi');
			$data['exsist']=$this->input->post('exsist');
			$data['penyulang']=$this->input->post('penyulang');
			$data['rayon']=$_SESSION['rayon'];
			$this->load->model('m_section');
			$hasil=$this->m_section->simpanlokasitodb($data);
			redirect('Section');
		}
		function deletesect()
		{
			$id=$this->uri->segment(3);
			$this->load->model('m_section');
			$hasil=$this->m_section->deletesectfromdb($id);
			if($hasil==1)
			{
				$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
			  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			  <strong>Data!</strong> Telah Terhapus
				</div>";
			}
			else
			{
				$_SESSION['log']= "<font color='red' size='2'>>Gagal Menghapus Data</font>";
			}
			redirect('section');
		}
        function do_upload()
        {
        $this->form_validation->set_rules('id_lok','ID LOKASI','required');
        $id=$this->input->post('id_lok');
        if($this->form_validation->run()==true)
        {
	        	$this->load->model('m_section');
	        	$query=$this->m_section->cekgmb($id);
	        	$cek=$query->row();
	        	if($cek->count > 0)
	        	{
					$_SESSION['log']="<div class='alert alert-warning alert-dismissable'>
									  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									  <strong>Maaf!</strong> Gambar Lokasi Sudah Ada
									  </div>";
				}
				else
				{
					$config['upload_path']   = './assets/img/';
					$config['allowed_types'] = 'gif|jpg|png|bmp';
					$config['max_size']      = '2000000';
	                   
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('gambar_lok')){
	                    $gambar="";
						$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
									  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									  <strong>Maaf!</strong> Data Gambar Tidak Tersimpan
									  </div>";
	                }else{
	                    $gambar=$this->upload->file_name;
						$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
									  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									  <strong>Selamat!</strong> Data Gambar Telah Tersimpan
									  </div>";
						$data['id_lokasi']=$this->input->post('id_lok');
						$data['gambar']=$gambar;
		                $this->m_section->simpangambar($data);
	                }
				}
				redirect('Section');
			}
			else
			{
				$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
									  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									  <strong>Maaf!</strong> File Gambar Lokasi Belum Di Isi
									  </div>";
				$red="Section/addsection/$id";
				redirect($red);
			}
			                
		}
		
		function addsectline()
		{
			$data['id']=$this->input->post('id_lok');
			$data['section_ke']=$this->input->post('section_ke');
			$data['tm1']=$this->input->post('tm1');
			$data['tm2']=$this->input->post('tm2');
			$data['tm5']=$this->input->post('tm5');
			$data['avs']=$this->input->post('avs');
			$data['reclozer']=$this->input->post('reclozer');
			$data['lbs_mprtu']=$this->input->post('lbs_mprtu');
			$data['lbs_mnrtu']=$this->input->post('lbs_mnrtu');						
			$data['reclozer2']=$this->input->post('reclozer2');
			$data['lbs_mprtu2']=$this->input->post('lbs_mprtu2');			
			$data['lbs_mnrtu2']=$this->input->post('lbs_mnrtu2');
			$data['pondasi']=$this->input->post('pondasi');
			$data['lainnya']=$this->input->post('lainnya');
		  	$this->load->model('m_section');
		    $query=$this->m_section->ceksectline($this->input->post('id_lok'));
		    $cek=$query->row();
		     if($cek->count > 0)
		        {
					$hasil=$this->m_section->editsectlinetodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Berhasil Diubah
					  </div>";
				}
			 else
				{
					$hasil=$this->m_section->simpansectlinetodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Telah Tersimpan
					  </div>";
				}
				redirect('Section');
		}
        
        public function logout() //fungsi logout
        {
              session_destroy(); //session destroy
             redirect("c_login");//buka halaman login/v_form
         }
     }