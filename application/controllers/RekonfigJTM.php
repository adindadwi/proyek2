<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	error_reporting(E_ALL ^ (E_NOTICE));
	class RekonfigJTM extends CI_Controller
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
		function index(){
			$this->load->model('m_comment');
			$this->load->model('m_rekonfigjtm');
			$hasil=$this->m_rekonfigjtm->showlokaddlinefromdb($id);
			$data['hasil']=$this->m_rekonfigjtm->showlokfromdb();
			$data['hasil']=$this->m_rekonfigjtm->showlokfromdb();
			$data['content']=$this->m_comment->posts(5,0);
			$data['title']="Rekonfig Jaringan TM";
			$data['side1']="";
			$data['side2']="";
        	$data['side3']="";
			$this->template->display('RekonfigJTM/index',$data);
		}
		function lks(){ 
			$this->load->model('m_rekonfigjtm');
			
			if($_POST['sbmtryn'])
			{
				if($_POST['ryn']=="")
				{
					$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Maaf!</strong> Anda belum memilih ryn	
					</div>";
					$this->load->model('m_comment');
					$data['content']=$this->m_comment->posts(5,0);
					$data['title']="Rekonfig Jaringan TM";
					$data['side1']="";
					$data['side3']="";
					$data['side4']="";
					$data['side2']="";
					redirect('RekonfigJTM');
				}
				elseif($_SESSION['ryn'] != $_POST['ryn'])
				{
					$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Maaf!</strong> pilihan ryn Anda tidak sama
					</div>";
					redirect('RekonfigJTM');
				}
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$this->m_rekonfigjtm->showlokfromdb();
			$data['title']="Rekonfig Jaringan TM";
			$data['side1']="";
			$data['side3']="";
			$data['side4']="";
			$data['side2']="";
			$this->template->display('RekonfigJTM/lks',$data);
			}
		}
		function saveaddlokasi(){
			$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
			  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			  <strong>Selamat!</strong> Data Lokasi Telah Tersimpan Pada <b>Rayon ".$this->input->post('ryn')."</b>
			</div>";
			$data['bgr_no']=$this->input->post('bgr_no');
			$data['gbr2_no']=$this->input->post('gbr2_no');
			$data['lks']=$this->input->post('lks');
			$data['ex_sist']=$this->input->post('ex_sist');
			$data['penylang']=$this->input->post('penylang');
			$data['jlm_ganggu']=$this->input->post('jlm_ganggu');
			$data['ryn']=$_SESSION['ryn'];
			$this->load->model('m_rekonfigjtm');
			$hasil=$this->m_rekonfigjtm->simpanlkstodb($data);
			redirect('RekonfigJTM');
		}
		
		public function tambahjtm()
        {
        	$id=$this->uri->segment(3);
        	$this->load->model('m_rekonfigjtm');
			$hasil=$this->m_rekonfigjtm->showlokaddlinefromdb($id);
			$data['hasil']=$hasil->result();
			$data['sutm']=$this->m_rekonfigjtm->showsutmfromdb($id)->result();
			$data['mvtic']=$this->m_rekonfigjtm->showmvticfromdb($id)->result();
			$data['ugc']=$this->m_rekonfigjtm->showugcfromdb($id)->result();
			$listhasil=$hasil->row();
			if($listhasil->sutm==0)
				{
					$data['act']="in";
					$data['act1']="";
					$data['act2']="";
				}
			elseif($listhasil->sutm==1 AND $listhasil->mvtic==0)
				{
					$data['act']="";
					$data['act1']="in";
					$data['act2']="";
				}
			elseif($listhasil->sutm==1 AND $listhasil->mvtic==1 AND $listhasil->ugc==0)
				{
					$data['act']="";
					$data['act1']="";
					$data['act2']="in";
				}
			elseif($listhasil->sutm==1 AND $listhasil->mvtic==1 AND $listhasil->ugc==1)
				{
					$data['act']="";
					$data['act1']="";
					$data['act2']="";
				}
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
        	$data['title']="Input";
        	$data['side1']="";
        	$data['side2']="";
        	$data['side3']="";
			$data['gambar']=$this->m_rekonfigjtm->gambarlinefromdb($id);
        	$query=$this->m_rekonfigjtm->cekgmb($id);
	        $cek=$query->row();
	        $data['cekgmb']=$cek->count;
	        $query1=$this->m_rekonfigjtm->ceksutm($id);
        	$ceksutm=$query1->row();
	        $data['ceksutm']=$ceksutm->count;
	        $query2=$this->m_rekonfigjtm->cekmvtic($id);
        	$cekmvtic=$query2->row();
	        $data['cekmvtic']=$cekmvtic->count;
	        $query3=$this->m_rekonfigjtm->cekugc($id);
        	$cekugc=$query3->row();
	        $data['cekugc']=$cekugc->count;
			$this->template->display('RekonfigJTM/tambah',$data);
		}
		
		function hapuslok()
		{
			$id=$this->uri->segment(3);
			$this->load->model('m_rekonfigjtm');
			$hasil=$this->m_rekonfigjtm->deleteadbfromdb($id);
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
			redirect('RekonfigJTM/lks');
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
		  	$this->load->model('m_rekonfigjtm');
		    $query=$this->m_rekonfigjtm->ceksutm($this->input->post('id_lok'));
		    $cek=$query->row();
		     if($cek->COUNT > 0)
		        {
					$hasil=$this->m_rekonfigjtm->editsutmtodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data PEKERJAAN JARINGAN SUTM Berhasil Diubah</b>
					  </div>";
				}
			 else
				{
					$hasil=$this->m_rekonfigjtm->simpansutmtodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data PEKERJAAN JARINGAN SUTM Telah Tersimpan Di Lokasi : <b>".$this->input->post('lok')."</b>, Rayon : <b>".$this->input->post('ryn')."</b>
					  </div>";
				}
				$red="RekonfigJTM/tambahjtm/$id";
				redirect($red);
		}
		
		function addmvtic()
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
			$data['a1']=$this->input->post('a1');
			$data['b1']=$this->input->post('b1');
			$data['c1']=$this->input->post('c1');
			$data['d1']=$this->input->post('d1');
			$data['e1']=$this->input->post('e1');
			$data['f1']=$this->input->post('f1');
			$data['i1']=$this->input->post('i1');
			$data['j1']=$this->input->post('j1');
			$data['k1']=$this->input->post('k1');
		  	$this->load->model('m_rekonfigjtm');
		    $query=$this->m_rekonfigjtm->cekmvtic($this->input->post('id_lok'));
		    $cek=$query->row();
		     if($cek->COUNT > 0)
		        {
					$hasil=$this->m_rekonfigjtm->editmvtictodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data PEKERJAAN JARINGAN MVTIC Berhasil Diubah</b>
					  </div>";
				}
			 else
				{
					$hasil=$this->m_rekonfigjtm->simpanmvtictodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data PEKERJAAN JARINGAN MVTIC Telah Tersimpan Di Lokasi : <b>".$this->input->post('lok')."</b>, Rayon : <b>".$this->input->post('ryn')."</b>
					  </div>";
				}
				$red="RekonfigJTM/tambahjtm/$id";
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
		  	$this->load->model('m_rekonfigjtm');
		    $query=$this->m_rekonfigjtm->cekugc($this->input->post('id_lok'));
		    $cek=$query->row();
		     if($cek->COUNT > 0)
		        {
					$hasil=$this->m_rekonfigjtm->editugctodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data PEKERJAAN UGC/KABEL TANAH Berhasil Diubah </b>
					  </div>";
				}
			 else
				{
					$hasil=$this->m_rekonfigjtm->simpanugctodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data PEKERJAAN UGC/KABEL TANAH Telah Tersimpan Di Lokasi : <b>".$this->input->post('lok')."</b>, Rayon : <b>".$this->input->post('ryn')."</b>
					  </div>";
				}
				$red="RekonfigJTM/tambahjtm/$id";
				redirect($red);
		}
		
		function uploadgambar()
        {
        $this->form_validation->set_rules('id_lok','ID Lokasi','required');
        $this->form_validation->set_rules('ryn','Rayon','required');
        $ryn=$this->input->post('ryn');
        $id=$this->input->post('id_lok');
        if($this->form_validation->run()==true)
        {
	        	$this->load->model('m_rekonfigjtm');
	        	$query=$this->m_rekonfigjtm->cekgmb($id);
	        	$cek=$query->row();
	        	if($cek->COUNT > 0)
	        	{
					$_SESSION['log']="<div class='alert alert-warning alert-dismissable'>
									  <strong>Maaf!</strong> Gambar Lokasi Sudah Ada, Apakah anda ingin mengupdate ? &nbsp;<button type='submit' class='btn btn-sm btn-warning'>Iya</button>&nbsp;<button type='button' class='btn btn-sm btn-danger' data-dismiss='alert'>Tidak</button> 
									  </div>";
				}
				else
				{
					$config['upload_path']   = './assets/img/lks/Rekonfig JTM/'.$ryn.'';
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
						$data['id_lks']=$this->input->post('id_lok');
						$data['ryn']=$this->input->post('ryn');
						$data['gambar']=$gambar;
		                $this->m_rekonfigjtm->simpangambar($data);
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
			$red="RekonfigJTM/tambahjtm/$id";
			redirect($red);
			                
		}
		
		public function exporttoexcel()
		{
			$ryn=$_SESSION['ryn'];
			$data['ryn']=$_SESSION['ryn'];
			$this->load->model('m_rekonfigjtm');
			$data['hasil']=$this->m_rekonfigjtm->showexviewfromdb($ryn);
			//$data['ryn']=$ryn;
        	$this->load->view('RekonfigJTM/export',$data);
		}
		
	}
