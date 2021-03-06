<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class penyubar extends CI_Controller
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
			$this->load->model('m_penyubar');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$this->m_penyubar->showlokfromdb();
			$data['title']="Penyulang Baru";
			$data['side1']="";
			$data['side2']="";
			$data['side3']="";
        	$this->template->display('penyubar/index',$data);
        }
		function lokasi()
		{ 
		//error_reporting(E_ALL ^ (E_NOTICE));
			$this->load->model('m_penyubar');
			
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
					$data['title']="Pembangunan Penyulang Baru";
					$data['side1']="";
					$data['side3']="";
					$data['side4']="";
					$data['side2']="";
					redirect('penyubar');
				}
				elseif($_SESSION['rayon'] != $_POST['rayon'])
				{
					$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Maaf!</strong> pilihan rayon Anda tidak sama
					</div>";
					redirect('penyubar');
				}
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$this->m_penyubar->showlokfromdb();
			$data['title']="Pembangunan Penyulang Baru";
			$data['side1']="";
			$data['side3']="";
			$data['side4']="";
			$data['side2']="";
			$this->template->display('penyubar/penyubar',$data);
			}
		}
        function saveaddlokasi(){
			$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
			  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			  <strong>Selamat!</strong> Data Telah Tersimpan
			</div>";
			$data['n_gbr1']=$this->input->post('n_gbr1');
			$data['n_gbr2']=$this->input->post('n_gbr2');
			$data['lks']=$this->input->post('lks');
			$data['ex_sist']=$this->input->post('ex_sist');
			$data['penylang']=$this->input->post('penylang');
			$data['jlm_gangguan']=$this->input->post('jlm_gangguan');
			$data['ryn']=$_SESSION['rayon'];
			$this->load->model('m_penyubar');
			$hasil=$this->m_penyubar->simpanlokasitodb($data);
			redirect('penyubar');
		}
		
		public function tambahjtm()
        {
        	$id=$this->uri->segment(3);
        	$this->load->model('m_penyubar');
			$hasil=$this->m_penyubar->showlokaddlinefromdb($id);
			$data['hasil']=$hasil->result();
			/*$listhasil=$hasil->row();
			if($listhasil->MVLINE==0)
				{
					$data['act']="in";
					$data['act1']="";
					$data['act2']="";
				}
			elseif($listhasil->MVLINE==1 AND $listhasil->DT==0)
				{
					$data['act']="";
					$data['act1']="in";
					$data['act2']="";
				}
			elseif($listhasil->MVLINE==1 AND $listhasil->DT==1 AND $listhasil->LVLINE==0)
				{
					$data['act']="";
					$data['act1']="";
					$data['act2']="in";
				}
			elseif($listhasil->MVLINE==1 AND $listhasil->DT==1 AND $listhasil->LVLINE==1)
				{
					$data['act']="";
					$data['act1']="";
					$data['act2']="";
				}*/
			$data['gambar']=$this->m_penyubar->gambarlinefromdb($id);
			$query=$this->m_penyubar->cekgmb($id);
	        $cek=$query->row();
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
	        $data['cekgmb']=$cek->count;
        	$data['title']="Input";
        	$data['side1']="";
        	$data['side2']="";
			$data['side3']="";
			$this->template->display('penyubar/tambah',$data);
		}
		
		function hapuslok()
		{
			$id=$this->uri->segment(3);
			$this->load->model('m_penyubar');
			$hasil=$this->m_penyubar->deleteadbfromdb($id);
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
			redirect('penyubar');
		}
		
		function uploadgambar()
        {
        $this->form_validation->set_rules('id_lok','ID Lokasi','required');
        $id=$this->input->post('id_lok');
        if($this->form_validation->run()==true)
        {
	        	$this->load->model('m_penyubar');
	        	$query=$this->m_penyubar->cekgmb($id);
	        	$cek=$query->row();
	        	if($cek->count > 0)
	        	{
					$_SESSION['log']="<div class='alert alert-warning alert-dismissable'>
									  <strong>Maaf!</strong> Gambar Lokasi Sudah Ada, Apakah anda ingin mengupdate ? &nbsp;<button type='submit' class='btn btn-sm btn-warning'>Iya</button>&nbsp;<button type='button' class='btn btn-sm btn-danger' data-dismiss='alert'>Tidak</button> 
									  </div>";
				}
				else
				{
					$config['upload_path']   = './assets/img/lokasi/Penyubar';
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
						$data['lokasi_id']=$this->input->post('id_lok');
						$data['gambar2']=$gambar;
		                $this->m_penyubar->simpangambar($data);
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
			$red="penyubar/tambahjtm/$id";
			redirect($red);
			                
		}
		
		function addsutm()
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
			$data['u']=$this->input->post('u');
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
			$data['n1']=$this->input->post('n1');
			$data['o1']=$this->input->post('o1');
			$data['p1']=$this->input->post('p1');
		  	$this->load->model('m_penyubar');
		    $query=$this->m_penyubar->ceksutm($this->input->post('id_lok'));
		    $cek=$query->row();
		     if($cek->count > 0)
		        {
					$hasil=$this->m_penyubar->editsutmtodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Berhasil Diubah Di Lokasi : <b>".$this->input->post('lok')."</b>
					  </div>";
				}
			 else
				{
					$hasil=$this->m_penyubar->simpansutmtodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data PEKERJAAN JARINGAN SUTM Telah Tersimpan Di Lokasi : <b>".$this->input->post('lok')."</b>
					  </div>";
				}
				$red="penyubar/tambahjtm/$id";
				redirect($red);
		}
		
		function addmvtic()
		{
			$id=$this->input->post('id_lok1');
			$data['id']=$this->input->post('id_lok1');
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
			$data['a1']=$this->input->post('a1');
			$data['b1']=$this->input->post('b1');
			$data['c1']=$this->input->post('c1');
			$data['d1']=$this->input->post('d1');
			$data['e1']=$this->input->post('e1');
			$data['f1']=$this->input->post('f1');
			$data['i1']=$this->input->post('i1');
			$data['j1']=$this->input->post('j1');
			$data['k1']=$this->input->post('k1');
		  	$this->load->model('m_penyubar');
		    $query=$this->m_penyubar->cekmvtic($this->input->post('id_lok'));
		    $cek=$query->row();
		     if($cek->count > 0)
		        {
					$hasil=$this->m_penyubar->editmvtictodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Berhasil Diubah Di Lokasi : <b>".$this->input->post('lok')."</b>
					  </div>";
				}
			 else
				{
					$hasil=$this->m_penyubar->simpanmvtictodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data PEKERJAAN JARINGAN SUTM Telah Tersimpan Di Lokasi : <b>".$this->input->post('lok')."</b>
					  </div>";
				}
				$red="penyubar/tambahjtm/$id";
				redirect($red);
		}
		
		function addugc()
		{
			$id=$this->input->post('id_lok');
			$data['id']=$this->input->post('id_lok');
			$data['a']=$this->input->post('a');
			$data['b']=$this->input->post('b');
			$data['c']=$this->input->post('c');
			$data['d']=$this->input->post('d');
			$data['e']=$this->input->post('e');
			$data['f']=$this->input->post('f');
			$data['a1']=$this->input->post('a1');
			$data['b1']=$this->input->post('b1');
			$data['c1']=$this->input->post('c1');
			$data['d1']=$this->input->post('d1');
			$data['e1']=$this->input->post('e1');
		  	$this->load->model('m_penyubar');
		    $query=$this->m_penyubar->cekugc($this->input->post('id_lok'));
		    $cek=$query->row();
		     if($cek->count > 0)
		        {
					$hasil=$this->m_penyubar->editugctodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Berhasil Diubah Di Lokasi : <b>".$this->input->post('lok')."</b>
					  </div>";
				}
			 else
				{
					$hasil=$this->m_penyubar->simpanugctodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data PEKERJAAN JARINGAN SUTM Telah Tersimpan Di Lokasi : <b>".$this->input->post('lok')."</b>
					  </div>";
				}
				$red="penyubar/tambahjtm/$id";
				redirect($red);
		}
		public function exporttoexcel()
		{
			$rayon=$_SESSION['rayon'];
			$data['rayon']=$_SESSION['rayon'];
			$this->load->model('m_penyubar');
			$data['hasil']=$this->m_penyubar->showexviewfromdb($rayon);
			//$data['rayon']=$rayon;
        	$this->load->view('penyubar/export',$data);
		}
		
	}
