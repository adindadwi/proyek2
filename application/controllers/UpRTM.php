<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Uprtm extends CI_Controller
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
			$data['content']=$this->m_comment->posts(5,0);
			$data['title']="UPRTM";
			$data['side1']="class='active'";
			$data['side2']="";
			$data['side3']="";
        	$this->template->display('UPRTM/index',$data);
		}
		function lokasi(){ 
			$this->load->model('m_21UpRTM');
			
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
					$data['title']="UPRTM";
					$data['side1']="";
					$data['side3']="";
					$data['side4']="";
					$data['side2']="";
					redirect('UpRTM');
				}
				elseif($_SESSION['rayon'] != $_POST['rayon'])
				{
					$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Maaf!</strong> pilihan rayon Anda tidak sama
					</div>";
					redirect('UpRTM');
				}
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$this->m_21UpRTM->showlokfromdb();
			$data['hasil1']=$this->m_21UpRTM->showlokfromdb1();
			$data['title']="UPRTM";
			$data['side1']="";
			$data['side3']="";
			$data['side4']="";
			$data['side2']="";
			$this->template->display('UPRTM/index21',$data);
			}
		}
		public function lihatrmv()
        	{
        	$this->load->model('m_rmv');
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$this->m_rmv->showrmvfromdb();
			$data['title']="Home";
			$data['side1']="";
			$data['side2']="class='active'";
			$data['side3']="";
        		$this->template->display('UpRTM/v_rmv',$data);
        	}
		function saveaddlokasi()
		{
			$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
			  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			  <strong>Selamat!</strong> Data Telah Tersimpan
			</div>";
			$data['no_gambar']=$this->input->post('no_gambar');
			$data['lokasi']=$this->input->post('lokasi');
			$data['exsist']=$this->input->post('exsist');
			$data['jumlah_x']=$this->input->post('jumlah_x');
			$data['rayon']=$_SESSION['rayon'];
			$this->load->model('m_21UpRTM');
			$hasil=$this->m_21UpRTM->simpanlokasitodb($data);
			redirect('UpRTM');
		}
		function saveaddlokasi1()
		{
			$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
			  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			  <strong>Selamat!</strong> Data Telah Tersimpan
			</div>";
			$data['no_gambar']=$this->input->post('no_gambar');
			$data['lokasi']=$this->input->post('lokasi');
			$data['exsist']=$this->input->post('exsist');
			$data['jumlah_x']=$this->input->post('jumlah_x');
			$data['rayon']=$_SESSION['rayon'];
			$this->load->model('m_21UpRTM');
			$hasil=$this->m_21UpRTM->simpanlokasitodb1($data);
			redirect('UpRTM');
		}
		function deletelok()
		{
			$id=$this->uri->segment(3);
			$this->load->model('m_21UpRTM');
			$hasil=$this->m_21UpRTM->deletelokfromdb($id);
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
			redirect('UpRTM');
		}
		function deletelok1()
		{
			$id=$this->uri->segment(3);
			$this->load->model('m_21UpRTM');
			$hasil=$this->m_21UpRTM->deletelokfromdb1($id);
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
			redirect('UpRTM');
		}
		public function addline()
        {
        	$id=$this->uri->segment(3);
        	$this->load->model('m_21UpRTM');
			$hasil=$this->m_21UpRTM->showlokaddlinefromdb($id);
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$hasil->result();
			$listhasil=$hasil->row();
			$data['gambar']=$this->m_21UpRTM->gambarlinefromdb($id);
			$query=$this->m_21UpRTM->cekgmb($id);
	        $cek=$query->row();
	        $data['cekgmb']=$cek->count;
        	$data['title']="Input Line";
        	$data['side1']="class='active'";
        	$data['side2']="";
			$data['side3']="";
			$this->template->display('UPRTM/v_addline21',$data);
		}
		public function addline1()
        {
        	$id=$this->uri->segment(3);
        	$this->load->model('m_21UpRTM');
			$hasil=$this->m_21UpRTM->showlokaddlinefromdb1($id);
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$hasil->result();
			$listhasil=$hasil->row();
			$data['gambar']=$this->m_21UpRTM->gambarlinefromdb1($id);
			$query=$this->m_21UpRTM->cekgmb1($id);
	        $cek=$query->row();
	        $data['cekgmb']=$cek->count;
        	$data['title']="Input Line";
        	$data['side1']="class='active'";
        	$data['side2']="";
			$data['side3']="";
			$this->template->display('UPRTM/v_addline212',$data);
		}
		public function exporttoexcel()
		{
			$data['data_lok'] = $this->db->query("select NO_AWAL,NO_REVISI,LOKASI,EXSIST,NO_GAMBAR,KOORDINAT_S,KOORDINAT_E from lok_rmv ORDER BY id ASC");
        	$this->load->view('UpRTM/export',$data);
		}
		function addmvline()
		{
			$data['id_lokmm2']=$this->input->post('id_lokmm2');
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
			$data['v']=$this->input->post('v');
			$data['w']=$this->input->post('w');
			$data['x']=$this->input->post('x');
			$data['y']=$this->input->post('y');
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
			$data['p1']=$this->input->post('p1');
			$data['q1']=$this->input->post('q1');
			$data['r1']=$this->input->post('r1');
			$data['s1']=$this->input->post('s1');
			$data['t1']=$this->input->post('t1');	
			$data['u1']=$this->input->post('u1');
			$data['v1']=$this->input->post('v1');
			$data['w1']=$this->input->post('w1');
			$data['x1']=$this->input->post('x1');
			$data['y1']=$this->input->post('y1');
		  	
		  	$this->load->model('m_21UpRTM');
		    $query=$this->m_21UpRTM->cekmvline($this->input->post('id_loksrr'));
		    $cek=$query->row();
		     if($cek->count > 0)
		        {
					$hasil=$this->m_21UpRTM->editmvlinetodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Berhasil Diubah
					  </div>";
				}
			 else
				{
					$hasil=$this->m_21UpRTM->simpanmvlinetodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Telah Tersimpan
					  </div>";
				}
				redirect('UpRTM');
		}
		function addmvline1()
		{
			$data['id_lokmm3']=$this->input->post('id_lokmm3');
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
			$data['v']=$this->input->post('v');
			$data['w']=$this->input->post('w');
			$data['x']=$this->input->post('x');
			$data['y']=$this->input->post('y');
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
			$data['p1']=$this->input->post('p1');
			$data['q1']=$this->input->post('q1');
			$data['r1']=$this->input->post('r1');
			$data['s1']=$this->input->post('s1');
			$data['t1']=$this->input->post('t1');	
			$data['u1']=$this->input->post('u1');
			$data['v1']=$this->input->post('v1');
			$data['w1']=$this->input->post('w1');
			$data['x1']=$this->input->post('x1');
			$data['y1']=$this->input->post('y1');
		  	
		  	$this->load->model('m_21UpRTM');
		    $query=$this->m_21UpRTM->cekmvline1($this->input->post('id_loksrr'));
		    $cek=$query->row();
		     if($cek->count > 0)
		        {
					$hasil=$this->m_21UpRTM->editmvlinetodb1($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Berhasil Diubah
					  </div>";
				}
			 else
				{
					$hasil=$this->m_21UpRTM->simpanmvlinetodb1($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Telah Tersimpan
					  </div>";
				}
				redirect('UpRTM');
		}
		function uploadgambar()
        {
        $this->form_validation->set_rules('id_lok','ID Lokasi','required');
        $id=$this->input->post('id_lok');
        if($this->form_validation->run()==true)
        {
	        	$this->load->model('m_21UpRTM');
	        	$query=$this->m_21UpRTM->cekgmb($id);
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
		                $this->m_21UpRTM->simpangambar($data);
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
			$red="UpRTM/addline/$id";
			redirect($red);
			                
		}
		function uploadgambar1()
        {
        $this->form_validation->set_rules('id_lok','ID Lokasi','required');
        $id=$this->input->post('id_lok');
        if($this->form_validation->run()==true)
        {
	        	$this->load->model('m_21UpRTM');
	        	$query=$this->m_21UpRTM->cekgmb1($id);
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
		                $this->m_21UpRTM->simpangambar1($data);
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
			$red="UpRTM/addline1/$id";
			redirect($red);
			                
		}
		
		function exporttopdf()
		{
			$this->load->model('m_rmv');
			$this->load->library('cezpdf');
			$this->load->helper('pdf');
			$this->cezpdf->cezpdf('A4LETTER,LANDSCAPE');

			//hal pertama
			$image=$_SERVER['DOCUMENT_ROOT']."SI_Konstruktor/assets/img/fnds.jpg";
			$font=$_SERVER['DOCUMENT_ROOT']."SI_Konstruktor/assets/font/Courier-Bold.afm";
			$this->cezpdf->selectFont($font);
			$this->cezpdf->eztext('REPORT DATA MEMBER',20,array('justification'=>'center'));
			$this->cezpdf->eztext('DATA',10,array('justification'=>'center'));
			$this->cezpdf->addJpegFromFile($image,225,160,0,0);
			$this->cezpdf->eztext('JP VEDC MALANG',10,array('justification'=>'center'));
			
			//halaman kedua
			$this->cezpdf->ezNewPage();
			$font=$_SERVER{'DOCUMENT_ROOT'}."SI_Konstruktor/assetsfont/Courier.afm";
			$this->cezpdf->selectFont($font);
			$hasil=$this->m_rmv->exporttopdf();
			foreach ($hasil as $listhasil):
				$array[]=(array) $listhasil;
			endforeach;
			$db_data=$array;
			
			$col_names= array(
			'NO_AWAL'=> 'NO_AWAL',
			'NO_REVISI'=>'NO_REVISI',
			'LOKASI'=>'LOKASI',
			'EXSIST'=>'EXSIST',
			'NO_GAMBAR'=>'NO_GAMBAR',
			'KOORDINAT_S'=>'KOORDINAT_S',
			'KOORDINAT_E'=>'KOORDINAT_E'
			);
			
			$this->cezpdf->ezTable($db_data, $col_names, 'Data Reconductoring MV Line', array('width'=>550));
			$this->cezpdf->ezStream();
		}
		
		public function logout() //fungsi logout
        	{
              		session_destroy(); //session destroy
             		redirect("c_login");//buka halaman login/v_form
         	}
	}
