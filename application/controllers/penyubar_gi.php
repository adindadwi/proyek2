<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class penyubar_gi extends CI_Controller
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
			$this->load->model('m_penyubar_gi');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$this->m_penyubar_gi->showlokfromdb();
			$data['title']="Penyulang Baru Operasi Trafo GI";
			$data['side1']="";
			$data['side2']="";
			$data['side3']="";
        	$this->template->display('penyubar_gi/index',$data);
        }
		function lokasi()
		{ 
			$this->load->model('m_penyubar_gi');
			
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
					$data['title']="Penyulang Baru Operasi Trafo GI";
					$data['side1']="";
					$data['side3']="";
					$data['side4']="";
					$data['side2']="";
					redirect('penyubar_gi');
				}
				elseif($_SESSION['rayon'] != $_POST['rayon'])
				{
					$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Maaf!</strong> pilihan rayon Anda tidak sama
					</div>";
					redirect('penyubar_gi');
				}
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$this->m_penyubar_gi->showlokfromdb();
			$data['title']="Penyulang Baru Operasi Trafo GI";
			$data['side1']="";
			$data['side3']="";
			$data['side4']="";
			$data['side2']="";
			$this->template->display('penyubar_gi/penyubar_gi',$data);
			}
		}
        function saveaddlokasi(){
			$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
			  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			  <strong>Selamat!</strong> Data Telah Tersimpan
			</div>";
			$data['gmb']=$this->input->post('nogmb');
			$data['gmb1']=$this->input->post('nogmb1');
			$data['lokasi']=$this->input->post('lokasi');
			$data['exsist']=$this->input->post('exsist');
			$data['penyulang']=$this->input->post('penyulang');
			$data['jml_ganggu']=$this->input->post('jml_ganggu');
			$data['rayon']=$_SESSION['rayon'];
			$this->load->model('m_penyubar_gi');
			$hasil=$this->m_penyubar_gi->simpanlokasitodb($data);
			redirect('penyubar_gi');
		}
		
		public function tambahjtm()
        {
        	$id=$this->uri->segment(3);
        	$this->load->model('m_penyubar_gi');
			$hasil=$this->m_penyubar_gi->showlokaddlinefromdb($id);
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
			$data['gambar']=$this->m_penyubar_gi->gambarlinefromdb($id);
			$query=$this->m_penyubar_gi->cekgmb($id);
	        $cek=$query->row();
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
	        $data['cekgmb']=$cek->count;
        	$data['title']="Input";
        	$data['side1']="";
        	$data['side2']="";
			$data['side3']="";
			$this->template->display('penyubar_gi/tambah',$data);
		}
		
		function hapuslok()
		{
			$id=$this->uri->segment(3);
			$this->load->model('m_penyubar_gi');
			$hasil=$this->m_penyubar_gi->deleteadbfromdb($id);
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
			redirect('penyubar_gi');
		}
		function uploadgambar()
        {
        $this->form_validation->set_rules('id_lok','ID Lokasi','required');
        $id=$this->input->post('id_lok');
        if($this->form_validation->run()==true)
        {
	        	$this->load->model('m_penyubar_gi');
	        	$query=$this->m_penyubar_gi->cekgmb($id);
	        	$cek=$query->row();
	        	if($cek->count > 0)
	        	{
					$_SESSION['log']="<div class='alert alert-warning alert-dismissable'>
									  <strong>Maaf!</strong> Gambar Lokasi Sudah Ada, Apakah anda ingin mengupdate ? &nbsp;<button type='submit' class='btn btn-sm btn-warning'>Iya</button>&nbsp;<button type='button' class='btn btn-sm btn-danger' data-dismiss='alert'>Tidak</button> 
									  </div>";
				}
				else
				{
					$config['upload_path']   = './assets/img/lokasi';
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
						$data['gambar']=$gambar;
		                $this->m_penyubar_gi->simpangambar($data);
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
			$red="penyubar_gi/tambahjtm/$id";
			redirect($red);
			                
		}
		
		function addsutm()
		{
			$id=$this->input->post('id_lok');
			$data['id']=$this->input->post('id_lok');
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
		  	$this->load->model('m_penyubar_gi');
		    $query=$this->m_penyubar_gi->ceksutm($this->input->post('id_lok'));
		    $cek=$query->row();
		     if($cek->count > 0)
		        {
					$hasil=$this->m_penyubar_gi->editsutmtodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Berhasil Diubah Di Lokasi : <b>".$this->input->post('lok')."</b>
					  </div>";
				}
			 else
				{
					$hasil=$this->m_penyubar_gi->simpansutmtodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data PEKERJAAN JARINGAN SUTM Telah Tersimpan Di Lokasi : <b>".$this->input->post('lok')."</b>
					  </div>";
				}
				$red="penyubar_gi/tambahjtm/$id";
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
		  	$this->load->model('m_penyubar_gi');
		    $query=$this->m_penyubar_gi->cekmvtic($this->input->post('id_lok'));
		    $cek=$query->row();
		     if($cek->count > 0)
		        {
					$hasil=$this->m_penyubar_gi->editmvtictodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Berhasil Diubah Di Lokasi : <b>".$this->input->post('lok')."</b>
					  </div>";
				}
			 else
				{
					$hasil=$this->m_penyubar_gi->simpanmvtictodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data PEKERJAAN JARINGAN SUTM Telah Tersimpan Di Lokasi : <b>".$this->input->post('lok')."</b>
					  </div>";
				}
				$red="penyubar_gi/tambahjtm/$id";
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
		  	$this->load->model('m_penyubar_gi');
		    $query=$this->m_penyubar_gi->cekugc($this->input->post('id_lok'));
		    $cek=$query->row();
		     if($cek->count > 0)
		        {
					$hasil=$this->m_penyubar_gi->editugctodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Berhasil Diubah Di Lokasi : <b>".$this->input->post('lok')."</b>
					  </div>";
				}
			 else
				{
					$hasil=$this->m_penyubar_gi->simpanugctodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data PEKERJAAN JARINGAN SUTM Telah Tersimpan Di Lokasi : <b>".$this->input->post('lok')."</b>
					  </div>";
				}
				$red="penyubar_gi/tambahjtm/$id";
				redirect($red);
		}
		public function exporttoexcel()
		{
			$rayon=$_SESSION['rayon'];
			$data['rayon']=$_SESSION['rayon'];
			$this->load->model('m_penyubar_gi');
			$data['hasil']=$this->m_penyubar_gi->showexviewfromdb($rayon);
			//$data['rayon']=$rayon;
        	$this->load->view('penyubar/export',$data);
		}
	}
