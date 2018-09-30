<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class RekonfigJTR extends CI_Controller
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
			$this->load->model('m_rekonfigjtr');
			/*$hasil=$this->m_rekonfigjtr->showlokaddlinefromdb($id);*/
			/*$data['hasil']=$hasil->result();*/
			$data['hasil']=$this->m_rekonfigjtr->showlokfromdb();
			/*$data['input']=$this->m_rekonfigjtr->showinputfromdb($id)->result();*/
			$data['content']=$this->m_comment->posts(5,0);
			$data['title']="Rekonfig Jaringan TR";
			$data['side1']="";
			$data['side3']="";
			$data['side2']="";
        	$this->template->display('RekonfigJTR/index',$data);
        }
		function lokasi(){
		$this->load->model('m_rekonfigjtr');
		
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
					$data['title']="Rekonfig Jaringan TR";
					$data['side1']="";
					$data['side3']="";
					$data['side4']="";
					$data['side2']="";
					redirect('RekonfigJTR');
				}
				elseif($_SESSION['rayon'] != $_POST['rayon'])
				{
					$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Maaf!</strong> pilihan rayon Anda tidak sama
					</div>";
					redirect('RekonfigJTR');
				}
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$this->m_rekonfigjtr->showlokfromdb();
			$data['title']="Rekonfig Jaringan TR";
			$data['side1']="";
			$data['side3']="";
			$data['side4']="";
			$data['side2']="";
			$this->template->display('RekonfigJTR/lokasi',$data);
			}
		}
		function saveaddlokasi(){
			$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
			  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			  <strong>Selamat!</strong> Data Lokasi Telah Tersimpan Pada <b>Rayon ".$this->input->post('rayon')."</b>
			</div>";
			$data['gmb']=$this->input->post('nogmb');
			$data['gmb1']=$this->input->post('nogmb1');
			$data['lokasi']=$this->input->post('lokasi');
			$data['exsist']=$this->input->post('exsist');
			$data['penyulang']=$this->input->post('penyulang');
			$data['rayon']=$this->input->post('rayon');
			$this->load->model('m_rekonfigjtr');
			$hasil=$this->m_rekonfigjtr->simpanlokasitodb($data);
			redirect('RekonfigJTR');
		}
		public function tambahjtr()
        {
        	$id=$this->uri->segment(3);
        	$this->load->model('m_rekonfigjtr');
			$hasil=$this->m_rekonfigjtr->showlokaddlinefromdb($id);
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$hasil->result();
			$data['input']=$this->m_rekonfigjtr->showinputfromdb($id)->result();
        	$data['title']="Input";
        	$data['side1']="";
			$data['side3']="";
			$data['side2']="";
			$data['gambar']=$this->m_rekonfigjtr->gambarlinefromdb($id);
        	$query=$this->m_rekonfigjtr->cekgmb($id);
        	$cek=$query->row();
	        $data['cekgmb']=$cek->count;
	        $query1=$this->m_rekonfigjtr->cekinput($id);
        	$cekin=$query1->row();
	        $data['cekin']=$cekin->count;
			$this->template->display('RekonfigJTR/tambah',$data);
		}
		function hapuslok()
		{
			$id=$this->uri->segment(3);
			$this->load->model('m_rekonfigjtr');
			$hasil=$this->m_rekonfigjtr->deleteadbfromdb($id);
			if($hasil==1)
			{
				$_SESSION['log']="<div class='alert alert-warning alert-dismissable'>
			  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			  <strong>Data!</strong> Telah Terhapus
				</div>";
			}
			else
			{
				$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
			  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			  <strong>Maaf!</strong> Data Gagal dihapus
				</div>";
			}
			redirect('RekonfigJTR');
		}
		function input()
		{
			$id=$this->input->post('id_lok');
			$data['id']=$this->input->post('id_lok');
			$data['a']=$this->input->post('a');
			$data['b']=$this->input->post('b');
			$data['c']=$this->input->post('c');
			$data['d']=$this->input->post('d');
			$data['e']=$this->input->post('e');
			$data['f']=$this->input->post('f');
			$data['g']=$this->input->post('g');
			$data['h']=$this->input->post('h');
			$data['i']=$this->input->post('i');
			$data['j']=$this->input->post('j');
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
			$data['m1']=$this->input->post('m1');
			$data['n1']=$this->input->post('n1');
			$data['o1']=$this->input->post('o1');
		  	$this->load->model('m_rekonfigjtr');
		    $query=$this->m_rekonfigjtr->cekinput($this->input->post('id_lok'));
		    $cek=$query->row();
		     if($cek->COUNT > 0)
		        {
					$hasil=$this->m_rekonfigjtr->editrejtminputtodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Berhasil Diubah Di Lokasi : <b>".$this->input->post('lok')."</b>, Rayon : <b>".$this->input->post('rayon')."</b>
					  </div>";
				}
			 else
				{
					$hasil=$this->m_rekonfigjtr->simpanrejtrinputtodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data PEKERJAAN JARINGAN SUTM Telah Tersimpan Di Lokasi : <b>".$this->input->post('lok')."</b>, Rayon : <b>".$this->input->post('rayon')."</b>
					  </div>";
				}
				$red="RekonfigJTR/tambahjtr/$id";
				redirect($red);
		}
		
		function uploadgambar()
        {
        $this->form_validation->set_rules('id_lok','ID Lokasi','required');
        $this->form_validation->set_rules('rayon','Rayon','required');
        $rayon=$this->input->post('rayon');
        $id=$this->input->post('id_lok');
        if($this->form_validation->run()==true)
        {
	        	$this->load->model('m_rekonfigjtr');
	        	$query=$this->m_rekonfigjtr->cekgmb($id);
	        	$cek=$query->row();
	        	if($cek->COUNT > 0)
	        	{
					$_SESSION['log']="<div class='alert alert-warning alert-dismissable'>
									  <strong>Maaf!</strong> Gambar Lokasi Sudah Ada, Apakah anda ingin mengupdate ? &nbsp;<button type='submit' class='btn btn-sm btn-warning'>Iya</button>&nbsp;<button type='button' class='btn btn-sm btn-danger' data-dismiss='alert'>Tidak</button> 
									  </div>";
				}
				else
				{
					$config['upload_path']   = './assets/img/lokasi/Rekonfig JTR/'.$rayon.'';
					$config['allowed_types'] = 'gif|jpg|png|bmp';
	                   
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('gambar_lok')){
	                    $gambar="";
						$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
									  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									  <strong>Maaf!</strong> Tidak Dapat Menyimpan Gambar
									  </div>";
	                }else{
	                    $gambar=$this->upload->file_name;
						$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
									  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									  <strong>Selamat!</strong> Data Gambar Telah Tersimpan
									  </div>";
						$data['id_lokasi']=$this->input->post('id_lok');
						$data['rayon']=$this->input->post('rayon');
						$data['gambar']=$gambar;
		                $this->m_rekonfigjtr->simpangambar($data);
	                }
				}
			}
			else
			{
				$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
									  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									  <strong>Maaf!</strong> Validasi Error
									  </div>";
			}
			$red="RekonfigJTR/tambahjtr/$id";
			redirect($red);
			                
		}
		
		public function exporttoexcel()
		{
			$rayon=$_SESSION['rayon'];
			$this->load->model('m_rekonfigjtr');
			$data['hasil']=$this->m_rekonfigjtr->showrinputfromdb($rayon);
			$data['rayon']=$_SESSION['rayon'];
        	$this->load->view('RekonfigJTR/export',$data);
		}
     }