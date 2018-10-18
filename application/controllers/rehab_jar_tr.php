<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class rehab_jar_tr extends CI_Controller
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
			$this->load->model('m_rehab_jar_tr');
			$data['content']=$this->m_comment->posts(5,0);
			$data['title']="Rehabilitasi SUTR";
			$data['hasil']=$this->m_rehab_jar_tr->showlokfromdb();
			$data['side1']="";
			$data['side2']="";
			$data['side3']="";
			$data['cekin']=0;
        	$this->template->display('rehab_jtr/lokasi',$data);
        }
		function lokasi(){ 
			$this->load->model('m_rehab_jar_tr');
			
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
					$data['title']="Rehabilitasi SUTR";
					$data['side1']="";
					$data['side3']="";
					$data['side4']="";
					$data['side2']="";
					redirect('rehab_jtr');
				}
				elseif($_SESSION['rayon'] != $_POST['rayon'])
				{
					$_SESSION['log']="<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Maaf!</strong> pilihan rayon Anda tidak sama
					</div>";
					redirect('rehab_jtr');
				}
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$this->m_rehab_jar_tr->showlokfromdb();
			$data['title']="Rehabilitasi SUTR";
			$data['side1']="";
			$data['side3']="";
			$data['side4']="";
			$data['side2']="";
			$this->template->display('rehab_jtr/index',$data);
			}
		}
       /* public function lihatrlvadb()
        {
        	$this->load->model('m_rlv');
			$data['hasil']=$this->m_rlv->showrlvfromdb();
			$data['title']="RLV";
			$data['side1']="";
			$data['side2']="class='active'";
        	$this->template->display('reconduclv/v_rlvadb',$data);
        }*/

		function saveaddlokasi(){
			$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
			  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			  <strong>Selamat!</strong> Data Telah Tersimpan
			</div>";
			$data['gmb']=$this->input->post('nogmb');
			$data['gmb1']=$this->input->post('nogmb1');
			$data['lokasi']=$this->input->post('lokasi');
			$data['exsist']=$this->input->post('exsist');
			$data['JUMLAH_XX']=$this->input->post('JUMLAH_XX');
			$data['rayon']=$_SESSION['rayon'];
			$this->load->model('m_rehab_jar_Tr');
			$hasil=$this->m_rehab_jar_Tr->simpanlokasitodb($data);
			redirect('rehab_jar_tr');
		}
		function deletelok()
		{
			$id=$this->uri->segment(3);
			$this->load->model('m_rehab_jar_tr');
			$hasil=$this->m_rehab_jar_tr->deletelokfromdb($id);
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
			redirect('rehab_jar_tr');
		}
        /*function do_upload()
        {
        $this->form_validation->set_rules('gambar','Gambar Lokasi','required');
        $id=$this->input->post('id_lok');
        if($this->form_validation->run()==true)
        {
	        	$this->load->model('m_rdt');
	        	$query=$this->m_rdt->cekgmb($id);
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
			                
		}*/
		
		public function addline()
        {
        	$id=$this->uri->segment(3);
        	$this->load->model('m_rehab_jar_tr');
			$hasil=$this->m_rehab_jar_tr->showlokaddlinefromdb($id);
			$this->load->model('m_comment');
			$data['content']=$this->m_comment->posts(5,0);
			$data['hasil']=$hasil->result();
			$data['input']=$this->m_rehab_jar_tr->showinputfromdb($id)->result();
        	$data['title']="Input";
        	$data['side1']="";
			$data['side3']="";
			$data['side2']="";
			$data['gambar']=$this->m_rehab_jar_tr->gambarlinefromdb($id);
        	$query=$this->m_rehab_jar_tr->cekgmb($id);
        	$cek=$query->row();
	        $data['cekgmb']=$cek->count;
	        $query1=$this->m_rehab_jar_tr->cekinput($id);
        	$cekin=$query1->row();
	        $data['cekin']=$cekin->count;
			$this->template->display('rehab_jtr/v_addline',$data);
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
			$data['kk']=$this->input->post('kk');
			$data['ll']=$this->input->post('ll');
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
			$data['kk1']=$this->input->post('kk1');
			$data['l1']=$this->input->post('l1');
			$data['ll1']=$this->input->post('ll1');
			$data['m1']=$this->input->post('m1');
			$data['n1']=$this->input->post('n1');
			$data['o1']=$this->input->post('o1');
			$data['p1']=$this->input->post('p1');
			$data['q1']=$this->input->post('q1');
			$data['r1']=$this->input->post('r1');
			$data['s1']=$this->input->post('s1');
			$data['t1']=$this->input->post('t1');
			$data['u1']=$this->input->post('u1');
			$data['z']=$this->input->post('z');
		  	$this->load->model('m_rehab_jar_Tr');
		    $query=$this->m_rehab_jar_Tr->cekinput($this->input->post('id_lok'));
		    $cek=$query->row();
		     if($cek->count > 0)
		        {
					$hasil=$this->m_rehab_jar_Tr->editrejtminputtodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data Berhasil Diubah <b>".$this->input->post('lok')."</b>
					  </div>";
				}
			 else
				{
					$hasil=$this->m_rehab_jar_Tr->simpanrejtrinputtodb($data);
					$_SESSION['log']="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Selamat!</strong> Data PEKERJAAN JARINGAN SUTR Telah Tersimpan <b>".$this->input->post('lok')."</b>
					  </div>";
				}
				$red="rehab_jar_tr/addline/$id";
				redirect($red);
		}
		
        
        public function logout() //fungsi logout
        {
              session_destroy(); //session destroy
             redirect("c_login");//buka halaman login/v_form
         }
		 function uploadgambar()
        {
        $this->form_validation->set_rules('id_lok','ID Lokasi','required');
        $id=$this->input->post('id_lok');
        if($this->form_validation->run()==true)
        {
	        	$this->load->model('m_rehab_jar_tr');
	        	$query=$this->m_rehab_jar_tr->cekgmb($id);
	        	$cek=$query->row();
	        	if($cek->count > 0)
	        	{
					$_SESSION['log']="<div class='alert alert-warning alert-dismissable'>
									  <strong>Maaf!</strong> Gambar Lokasi Sudah Ada, Apakah anda ingin mengupdate ? &nbsp;<button type='submit' class='btn btn-sm btn-warning'>Iya</button>&nbsp;<button type='button' class='btn btn-sm btn-danger' data-dismiss='alert'>Tidak</button> 
									  </div>";
				}
				else
				{
					$config['upload_path']   = './assets/img/lokasi/rehab_jar_tr';
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
		                $this->m_rehab_jar_tr->simpangambar($data);
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
			$red="rehab_jar_tr/addline/$id";
			redirect($red);
			                
		}
     }