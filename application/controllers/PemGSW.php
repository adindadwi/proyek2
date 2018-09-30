<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class PemGSW extends CI_Controller
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
			$this->load->model('m_pemgsw');
			$data['hasil']=$this->m_pemgsw->showlokfromdb();
			/*$data['hasil']=$this->m_rlv->showrlvfromdb();*/
			$data['content']=$this->m_comment->posts(5,0);
			$data['title']="Pemasangan GSW";
			$data['side1']="";
			$data['side2']="";
			$data['side3']="";
        	$this->template->display('Pemasangan_gsw/index',$data);
        }
		
		function lokasi(){ 
			$this->load->model('m_pemgsw');
			
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
					$data['title']="Pemasangan GSW";
					$data['side1']="";
					$data['side3']="";
					$data['side4']="";
					$data['side2']="";
					redirect('PemGSW');
				}
				elseif($_SESSION['rayon'] != $_POST['rayon'])
				{
					$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Maaf!</strong> pilihan rayon Anda tidak sama
					</div>";
					redirect('PemGSW');
				}
			$this->load->model('m_pemgsw');
			$data['hasil']=$this->m_pemgsw->showlokfromdb();
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['title']="Pemasangan GSW";
			$data['side1']="";
			$data['side3']="";
			$data['side4']="";
			$data['side2']="";
			$this->template->display('Pemasangan_GSW/indexGSW',$data);
			}
		}
         public function lihatrlvadb()
        {
        	$this->load->model('m_rlv');
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$this->m_rlv->showrlvfromdb();
			$data['title']="RLV";
			$data['side1']="";
			$data['side2']="class='active'";
			$data['side3']="";
        	$this->template->display('reconduclv/v_rlvadb',$data);
        }
        public function addgsw()
        {
        	$id=$this->uri->segment(3);
        	$this->load->model('m_pemgsw');
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$this->m_pemgsw->addgswfromdb($id);
			$data['gambar']=$this->m_pemgsw->gambarlinefromdb($id);
			$query=$this->m_pemgsw->cekgmb($id);
	        $cek=$query->row();
	        $data['cekgmb']=$cek->count;
        	$data['title']="Input Line";
        	$data['side1']="class='active'";
        	$data['side2']="";
			$data['side3']="";
			$this->template->display('Pemasangan_gsw/Addpemgsw',$data);
		}
		function saveaddlokasi()
		{
			$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
			  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			  <strong>Selamat!</strong> Data Telah Tersimpan Pada <b>Rayon ".$_SESSION['rayon']."</b>
			</div>";
			$data['no_gambar']=$this->input->post('no_gambar');
			$data['no_gambar2']=$this->input->post('no_gambar2');
			$data['lokasi']=$this->input->post('lokasi');
			$data['rayon']=$_SESSION['rayon'];
			$this->load->model('m_pemgsw');
			$hasil=$this->m_pemgsw->simpanlokasitodb($data);
			redirect('PemGSW');
		}
		function deletegsw()
		{
			$id=$this->uri->segment(3);
			$this->load->model('m_pemgsw');
			$hasil=$this->m_pemgsw->deletegswfromdb($id);
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
			redirect('PemGSW');
		}
        function do_upload()
        {
        $this->form_validation->set_rules('id_lok','ID LOKASI','required');
        $id=$this->input->post('id_lok');
        if($this->form_validation->run()==true)
        {
	        	$this->load->model('m_pemgsw');
	        	$query=$this->m_pemgsw->cekgmb($id);
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
		                $this->m_pemgsw->simpangambar($data);
	                }
				}
				redirect('PemGSW');
			}
			else
			{
				$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
									  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									  <strong>Maaf!</strong> File Gambar Lokasi Belum Di Isi
									  </div>";
				$red="PemGSW/addpemgsw/$id";
				redirect($red);
			}
			                
		}
		
		function addgswline()
		{
			$data['id']=$this->input->post('id_lok');
			$data['penyulang']=$this->input->post('penyulang');			
			$data['satu']=$this->input->post('satu');
			$data['dua']=$this->input->post('dua');
			$data['tiga']=$this->input->post('tiga');
			$data['pjg_gsw']=$this->input->post('pjg_gsw');
			$data['est_jarak']=$this->input->post('est_jarak');			
			$data['light_arr_ground']=$this->input->post('lbs_mprtu');			
		  	$this->load->model('m_pemgsw');
		    $query=$this->m_pemgsw->cekgswline($this->input->post('id_lok'));
		    $cek=$query->row();
		     if($cek->count > 0)
		        {
					$hasil=$this->m_pemgsw->editgswlinetodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Berhasil Diubah
					  </div>";
				}
			 else
				{
					$hasil=$this->m_pemgsw->simpangswlinetodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Telah Tersimpan
					  </div>";
				}
				redirect('Pemgsw');
		}
        
        public function logout() //fungsi logout
        {
              session_destroy(); //session destroy
             redirect("c_login");//buka halaman login/v_form
         }
     }