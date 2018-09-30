<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class zzzz extends CI_Controller
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
			//$this->load->model('m_21UpRTM');
			//$data['hasil']=$this->m_21_UpRTM->showlokfromdb();
			$data['title']="zzzz";
			$data['side1']="";
			$data['side2']="";
			$this->template->display('zzzz',$data);
		}
		public function lihatrmv()
        	{
        		$this->load->model('m_rmv');
			$data['hasil']=$this->m_rmv->showrmvfromdb();
			$data['title']="Home";
			$data['side1']="";
			$data['side2']="class='active'";
        		$this->template->display('reconducmv/v_rmv',$data);
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
			$this->load->model('m_rmv');
			$hasil=$this->m_rmv->simpanlokasitodb($data);
			redirect('reconducmv');
		}
		function deletermv()
		{
			$id=$this->uri->segment(3);
			$this->load->model('m_rmv');
			$hasil=$this->m_rmv->deletermvfromdb($id);
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
			redirect('reconducmv');
		}
		public function addline()
        {
        	$id=$this->uri->segment(3);
        	$this->load->model('m_rmv');
			$hasil=$this->m_rmv->showlokaddlinefromdb($id);
			$data['hasil']=$hasil->result();
			$listhasil=$hasil->row();
			
			$data['gambar']=$this->m_rmv->gambarlinefromdb($id);
			$query=$this->m_rmv->cekgmb($id);
	        $cek=$query->row();
	        $data['cekgmb']=$cek->COUNT;
        	$data['title']="InputLine";
        	$data['side1']="class='active'";
        	$data['side2']="";
			$this->template->display('reconducmv/v_addline',$data);
		}
		public function exporttoexcel()
		{
			$data['data_lok'] = $this->db->query("select NO_AWAL,NO_REVISI,LOKASI,EXSIST,NO_GAMBAR,KOORDINAT_S,KOORDINAT_E from lok_rmv ORDER BY id ASC");
        	$this->load->view('reconducmv/export',$data);
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
