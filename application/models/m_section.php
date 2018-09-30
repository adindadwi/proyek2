<?php
	class m_section extends CI_Model
	{
		function __construct()
		 {
		  parent::__construct();
		 }
		 
		function showlokfromdb()
		{
			if($_SESSION['rayon']=="Semua")
			{
				$hasil=$this->db->query("SELECT * FROM lok_sectionaliser ORDER BY id ASC")->result();
			}
			else
			{
				$hasil=$this->db->query("SELECT * FROM lok_sectionaliser WHERE RAYON='".$_SESSION['rayon']."' ORDER BY id ASC")->result();
			}
			return $hasil;
		}
		
		function showsectfromdb()
		{
			$hasil=$this->db->query("SELECT * FROM sectionaliser ORDER BY id ASC")->result();
			return $hasil;
		}
		
		function addsectionfromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM lok_sectionaliser WHERE id='".$id."'")->result();
			return $hasil;
		}
				
		function ceksectline($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM sectionaliser WHERE id_section='".$id."'");
			return $hasil;
		}
		
		function simpanlokasitodb($data)
		{
			$no_gambar=$data['no_gambar'];
			$no_gambar2=$data['no_gambar2'];
			$lokasi=$data['lokasi'];
			$exsist=$data['exsist'];
			$penyulang=$data['penyulang'];
			$rayon=$data['rayon'];
			$query="insert into lok_sectionaliser values('','".$no_gambar."','".$no_gambar2."','".$lokasi."','".$exsist."','".$penyulang."','".$rayon."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function simpansectlinetodb($data)
		{
			
			$idlok=$data['id'];
			$section_ke=$data['section_ke'];
			$tm1=$data['tm1'];
			$tm2=$data['tm2'];
			$tm5=$data['tm5'];
			$avs=$data['avs'];
			$reclozer=$data['reclozer'];
			$lbs_mprtu=$data['lbs_mprtu'];
			$lbs_mnrtu=$data['lbs_mnrtu'];
			$reclozer2=$data['reclozer2'];
			$lbs_mprtu2=$data['lbs_mprtu2'];
			$lbs_mnrtu2=$data['lbs_mnrtu2'];
			$pondasi=$data['pondasi'];
			$lainnya=$data['lainnya'];
			$query="insert into sectionaliser values('','".$idlok."','".$section_ke."','".$tm1."','".$tm2."','".$tm5."','".$avs."','".$reclozer."','".$lbs_mprtu."','".$lbs_mnrtu."','".$reclozer2."','".$lbs_mprtu2."','".$lbs_mnrtu2."','".$pondasi."','".$lainnya."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function deletesectfromdb($id)
		{
			$query="DELETE FROM lok_sectionaliser WHERE id = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function gambarlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_gmbsect WHERE id_lokasi='".$id."'")->result();
			return $hasil;
		}
		
		function cekgmb($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_gmbsect WHERE id_lokasi='".$id."'");
			return $hasil;
		}
		
		function simpangambar($data)
		{
			$id_lok=$data['id_lokasi'];
			$gmb=$data['gambar'];
			$query="insert into tb_gmbsect values('','".$id_lok."','".$gmb."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
	}
?>