<?php
	class m_section extends CI_Model
	{
		function __construct()
		 {
		  parent::__construct();
		 }
		 
		function showlokfromdb()
		{
			if($_SESSION['wilayah']=="Semua")
			{
				$hasil=$this->db->query("SELECT * FROM lok_sectionalizer ORDER BY id_ ASC")->result();
			}
			else
			{
				$hasil=$this->db->query("SELECT * FROM lok_sectionalizer WHERE wilayah='".$_SESSION['wilayah']."' ORDER BY id_ ASC")->result();
			}
			return $hasil;
		}
		
		function showsectfromdb()
		{
			$hasil=$this->db->query("SELECT * FROM lok_sectionalizer ORDER BY id_ ASC")->result();
			return $hasil;
		}
		
		function addsectionfromdb($id_)
		{
			$hasil=$this->db->query("SELECT * FROM lok_sectionalizer WHERE id_='".$id_."'")->result();
			return $hasil;
		}
				
		function ceksectline($id_)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM sectionalizer WHERE id_sect='".$id_."'");
			return $hasil;
		}
		
		function simpanlokasitodb($data)
		{
			$gambar_no=$data['gambar_no'];
			$gambar_no2=$data['gambar_no2'];
			$lok_sect=$data['lok_sect'];
			$exsisting=$data['exsisting'];
			$penyalur=$data['penyalur'];
			$wilayah=$data['wilayah'];
			$query="insert into lok_sectionalizer values('','".$gambar_no."','".$gambar_no2."','".$lok_sect."','".$exsisting."','".$penyalur."','".$wilayah."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function simpansectlinetodb($data)
		{
			
			$id_lok=$data['id_'];
			$sect_ke=$data['sect_ke'];
			$teme1=$data['teme1'];
			$tm2=$data['teme2'];
			$teme5=$data['teme5'];
			$avswitch=$data['avswitch'];
			$recloser=$data['recloser'];
			$lbswitch_mprtu2=$data['lbswitch_mprtu2	'];
			$lbswitch_mnrtu2=$data['lbswitch_mnrtu2'];
			$recloser2=$data['recloser2'];
			$lbswitch_mprtu22=$data['lbswitch_mprtu22'];
			$lbswitch_mnrtu22=$data['lbswitch_mnrtu22'];
			$landasan=$data['landasan'];
			$other=$data['other'];
			$query="insert into sectionalizer values('','".$id_lok."','".$sect_ke."','".$teme1."','".$teme2."','".$teme5."','".$avswitch."','".$recloser."','".$lbswitch_mprtu2	."','".$lbswitch_mnrtu2."','".$recloser2."','".$lbswitch_mprtu22."','".$lbswitch_mnrtu22."','".$landasan."','".$other."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function deletesectfromdb($id_)
		{
			$query="DELETE FROM lok_sectionalizer WHERE id_ = '".$id_."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function gambarlinefromdb($id_)
		{
			$hasil=$this->db->query("SELECT * FROM tb_gmbsect WHERE lokasi_id='".$id_."'")->result();
			return $hasil;
		}
		
		function cekgmb($id_)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_gmbsect WHERE lokasi_id='".$id_."'");
			return $hasil;
		}
		
		function simpangambar($data)
		{
			$id__lok=$data['lokasi_id'];
			$gmb=$data['gambar'];
			$query="insert into tb_gmbsect values('','".$id_lok."','".$gmb."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
	}
?>