<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class AAACS extends CI_Controller
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
        	$this->load->model('m_AAACS');
			$data['hasil']=$this->m_AAACS->showlokfromdb();
			$data['title']="Rehabilitasi Jaringan TM";
			$data['side1']="";
			$data['side2']="";
        	$this->template->display('AAACS',$data);
        }
         public function lihatrlvadb()
        {
        	$this->load->model('m_rlv');
			$data['hasil']=$this->m_rlv->showrlvfromdb();
			$data['title']="RLV";
			$data['side1']="";
			$data['side2']="class='active'";
        	$this->template->display('reconduclv/v_rlvadb',$data);
        }
        public function addvline()
        {
        	$id=$this->uri->segment(3);
        	$this->load->model('m_rlv');
			$data['hasil']=$this->m_rlv->addlinefromdb($id);
			$data['gambar']=$this->m_rlv->gambarlinefromdb($id);
        	$data['title']="InputLine";
        	$data['side1']="class='active'";
        	$data['side2']="";
			$this->template->display('reconduclv/v_rlvaddline',$data);
		}
		function saveaddlokasi()
		{
			$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
			  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			  <strong>Selamat!</strong> Data Telah Tersimpan
			</div>";
			$data['awal']=$this->input->post('awal');
			$data['revisi']=$this->input->post('revisi');
			$data['lokasi']=$this->input->post('lokasi');
			$data['exsist']=$this->input->post('exsist');
			$data['no_gmb']=$this->input->post('no_gmb');
			$data['s_kordinat']=$this->input->post('s_kordinat');
			$data['e_kordinat']=$this->input->post('e_kordinat');
			$this->load->model('m_rlv');
			$hasil=$this->m_rlv->simpanlokasitodb($data);
			redirect('rlv');
		}
		function deleterlvadb()
		{
			$id=$this->uri->segment(3);
			$this->load->model('m_rlv');
			$hasil=$this->m_rlv->deleteadbfromdb($id);
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
			redirect('rlv');
		}
        function do_upload()
        {
        $this->form_validation->set_rules('gambar','Gambar Lokasi','required');
        $id=$this->input->post('id_lok');
        if($this->form_validation->run()==true)
        {
	        	$this->load->model('m_rdt');
	        	$query=$this->m_rdt->cekgmb($id);
	        	$cek=$query->row();
	        	if($cek->COUNT > 0)
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
	                if(!$this->upload->do_upload('gambar')){
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
		                $this->m_rdt->simpangambar($data);
	                }
				}
				redirect('rdt');
			}
			else
			{
				$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
									  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									  <strong>Maaf!</strong> File Gambar Lokasi Belum Di Isi
									  </div>";
				$red="rdt/addline/$id";
				redirect($red);
			}
			                
		}
		
		function addrvline()
		{
			$data['id']=$this->input->post('id_lok');
			$data['pasang']=$this->input->post('pasangan');
			$data['pasang1']=$this->input->post('pasangan1');
			$data['a']=$this->input->post('a');
			$data['b']=$this->input->post('b');
			$data['c']=$this->input->post('c');
			$data['e']=$this->input->post('e');
			$data['f']=$this->input->post('f');
			$data['i']=$this->input->post('i');
			$data['k']=$this->input->post('k');
			$data['l']=$this->input->post('l');
			$data['m']=$this->input->post('m');
			$data['n']=$this->input->post('n');
			$data['o']=$this->input->post('o');
			$data['p']=$this->input->post('p');
			$data['q']=$this->input->post('q');
			$data['r']=$this->input->post('r');
			$data['s']=$this->input->post('s');
			$data['t']=$this->input->post('t');
			$data['u']=$this->input->post('u');
			$data['v']=$this->input->post('v');
			$data['w']=$this->input->post('w');
			$data['x']=$this->input->post('x');
			$data['a1']=$this->input->post('a1');
			$data['b1']=$this->input->post('b1');
			$data['c1']=$this->input->post('c1');
			$data['d1']=$this->input->post('d1');
			$data['e1']=$this->input->post('e1');
			$data['f1']=$this->input->post('f1');
			$data['g1']=$this->input->post('g1');
			$data['h1']=$this->input->post('h1');
			$data['i1']=$this->input->post('i1');
			$data['j1']=$this->input->post('j1');
			$data['k1']=$this->input->post('k1');
			$data['l1']=$this->input->post('l1');
			$data['m1']=$this->input->post('m1');
			$data['n1']=$this->input->post('n1');
			$data['o1']=$this->input->post('o1');
		  	$this->load->model('m_rlv');
		    $query=$this->m_rlv->cekrvline($this->input->post('id_lok'));
		    $cek=$query->row();
		     if($cek->COUNT > 0)
		        {
					$hasil=$this->m_rlv->editrvlinetodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Berhasil Diubah
					  </div>";
				}
			 else
				{
					$hasil=$this->m_rlv->simpanrvlinetodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Telah Tersimpan
					  </div>";
				}
				redirect('rlv');
		}
        
        public function logout() //fungsi logout
        {
              session_destroy(); //session destroy
             redirect("c_login");//buka halaman login/v_form
         }
     }