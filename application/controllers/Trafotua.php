<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Trafotua extends CI_Controller
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
			$this->load->model('m_trafotua');
			$data['hasil']=$this->m_trafotua->showlokfromdb();
			$data['content']=$this->m_comment->posts(5,0);
			$data['title']="Trafo Tua Cadangan";
			$data['side1']="";
			$data['side2']="";
			$data['side3']="";
        	$this->template->display('Trafo_tuacadang/index',$data);
        }
      function lokasi(){ 
			$this->load->model('m_trafotua');
			
			if($_POST['sbmtrayon'])
			{
				if($_POST['rayon']=="")
				{
					$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Maaf!</strong> Anda belum memilih rayon	
					</div>";
					$this->load->model('m_comment');
					$this->load->model('m_trafotua');
					$data['content']=$this->m_comment->posts(5,0);
					$data['hasil']=$this->m_trafotua->showlokfromdb();
					$data['title']="Trafo Tua Cadangan";
					$data['side1']="";
					$data['side3']="";
					$data['side4']="";
					$data['side2']="";
					redirect('Trafotua');
				}
				elseif($_SESSION['rayon'] != $_POST['rayon'])
				{
					$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Maaf!</strong> pilihan rayon Anda tidak sama
					</div>";
					redirect('Trafotua');
				}
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$this->m_trafotua->showlokfromdb();
			$data['title']="Trafo Tua Cadangan";
			$data['side1']="";
			$data['side3']="";
			$data['side4']="";
			$data['side2']="";
			$this->template->display('Trafo_tuacadang/indextrafo',$data);
			}
		}
	  public function addtrafo()
        {
        	
        	$id=$this->uri->segment(3);
        	$this->load->model('m_trafotua');
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$this->m_trafotua->addtrafofromdb($id);
			$data['gambar']=$this->m_trafotua->gambarlinefromdb($id);
			$query=$this->m_trafotua->cekgmb($id);
	        $cek=$query->row();
	        $data['cekgmb']=$cek->count;
        	$data['title']="Input Line";
        	$data['side1']="class='active'";
        	$data['side2']="";
			$data['side3']="";
			$this->template->display('Trafo_tuacadang/Addtrafo',$data);
			
		}
		function saveaddlokasi()
		{
			$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
			  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			  <strong>Selamat!</strong> Data Telah Tersimpan
			</div>";
			$data['lokasi']=$this->input->post('lokasi');
			$data['exsist']=$this->input->post('exsist');
			$data['penyulang']=$this->input->post('penyulang');
			$data['rayon']=$_SESSION['rayon'];
			$this->load->model('m_trafotua');
			$hasil=$this->m_trafotua->simpanlokasitodb($data);
			redirect('trafotua');
		}
		function deletetrafo()
		{
			$id=$this->uri->segment(3);
			$this->load->model('m_trafotua');
			$hasil=$this->m_trafotua->deletetrafofromdb($id);
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
			redirect('Trafotua');
		}
        function do_upload()
       {
        $this->form_validation->set_rules('id_lok','ID LOKASI','required');
        $id=$this->input->post('id_lok');
        if($this->form_validation->run()==true)
        {
	        	$this->load->model('m_trafotua');
	        	$query=$this->m_trafotua->cekgmb($id);
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
		                $this->m_trafotua->simpangambar($data);
	                }
				}
				redirect('Trafotua');
			}
			else
			{
				$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
									  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									  <strong>Maaf!</strong> File Gambar Lokasi Belum Di Isi
									  </div>";
				$red="Trafotua/addtrafo/$id";
				redirect($red);
			}
			                
		}
		
		function addtrafoline()
		{
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
			$this->load->model('m_trafotua');
		    $query=$this->m_trafotua->cektrafo($this->input->post('id_lok'));
		    $cek=$query->row();
		     if($cek->count > 0)
		        {
					$hasil=$this->m_trafotua->edittrafolinetodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Berhasil Diubah
					  </div>";
				}
			 else
				{
					$hasil=$this->m_trafotua->simpantrafolinetodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Telah Tersimpan
					  </div>";
				}
				redirect('Trafotua');
		}
        
        public function logout() //fungsi logout
        {
              session_destroy(); //session destroy
             redirect("c_login");//buka halaman login/v_form
         }
     }