<?php
	class M_22UpRTR extends CI_Model
	{
		function __construct()
		 {
		  parent::__construct();
		 }
		 
		function showlokfromdb()
		{
			if($_SESSION['rayon']=="Semua")
			{
				$hasil=$this->db->query("SELECT * FROM tb_lokuprtr ORDER BY lokrtr_id ASC")->result();  
			}
			else
			{
				$hasil=$this->db->query("SELECT * FROM tb_lokuprtr WHERE rayon='".$_SESSION['rayon']."' ORDER BY lokrtr_id ASC")->result();
			}
			return $hasil;
		}
		
		function showrmvfromdb()
		{
			$hasil=$this->db->query("SELECT * FROM v_rmv ORDER BY id ASC")->result();
			return $hasil;
		}
		
		function addlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_lokuprtr WHERE lokrtr_id='".$id."'")->result();
			return $hasil;
		}
		
		function gambarlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_gmbrtr WHERE lokasi_id='".$id."'")->result();
			return $hasil;
		}
		
		function cekgmb($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_gmbrtr WHERE lokasi_id='".$id."'");
			return $hasil;
		}
		
		function cekmvline($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM up_rtr WHERE id_rtr='".$id."'");
			return $hasil;
		}
		function simpanmvlinetodb($data)
		{
			$lokrtr_id=$data['lokrtr_id'];
			
			$RT1=$data['a'];
			$RT2=$data['b'];
			$RT3=$data['c'];
			$RT3A=$data['d'];
			$RT4=$data['e'];
			$RT4A=$data['f'];
			$RT5=$data['g'];
			$RT6=$data['h'];
			$RT6A=$data['i'];
			$RT7=$data['j'];
			$CONDUCT=$data['k'];
			$SNI=$data['l'];
			$INS_NON=$data['m'];
			$WG=$data['n'];
			$NWG=$data['o'];
			$WGH=$data['p'];
			$NWGH=$data['q'];
			$PS=$data['r'];
			$UTAM=$data['s'];
			$UTAM_NON=$data['t'];
			$UTAM_SR=$data['u'];
			$LUAR_GROU=$data['v'];
			$KET=$data['w'];
			$RT12=$data['a1'];
			$RT22=$data['b1'];
			$RT32=$data['c1'];
			$RT3A2=$data['d1'];
			$RT42=$data['e1'];
			$RT4A2=$data['f1'];
			$RT52=$data['g1'];
			$RT62=$data['h1'];
			$RT6A2=$data['i1'];
			$RT72=$data['j1'];
			$CONDUCT2=$data['k1'];
			$SNI2=$data['l1'];
			$SNI2_NON=$data['m1'];
			$WG2=$data['n1'];
			$NWN2=$data['o1'];
			$WGH2=$data['p1'];
			$NGWN2=$data['q1'];
			$PS2=$data['r1'];
			$UTAM2=$data['s1'];
			$UTAM2_NON=$data['t1'];
			$UTAM2_SR=$data['u1'];
			$GROU_LUAR2=$data['v1'];			
		
			$query="insert into up_rtr values('','".$lokrtr_id."','','','".$RT1."','".$RT2."','".$RT3."','".$RT3A."','".$RT4."','".$RT4A."','".$RT5."','".$RT6."','".$RT6a."','".$RT7."','".$CONDUCT."','".$SNI."','".$INS_NON."','".$WG."','".$NWG."','".$WGH."','".$NWGH."','".$PS."','".$UTAM."','".$UTAM_NON."','".$UTAM_SR."','".$LUAR_GROU."','".$KET."','".$RT12."','".$RT22."','".$RT32."','".$RT3A2."','".$RT42."','".$RT4A2."','".$RT52."','".$RT62."','".$RT6A2."','".$RT72."','".$CONDUCT2."','".$SNI2."','".$SNI2_NON."','".$WG2."','".$NWG2."','".$WGH2."','".$NGWN2."','".$PS2."','".$UTAM2."','".$UTAM2_NON."','".$UTAM2_SR."','".$GROU_LUAR2."')";
			$hasil=$this->db->query($query);
			
			return $hasil;
		}
		function simpangambar($data)
		{
			$lokasi_id=$data['lokasi_id'];
			$gambar2=$data['gambar2'];
			$query="insert into tb_gmbrtr values('','".$lokasi_id."','".$gambar2."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function simpanlokasitodb($data)
		 {
			$gmb12=$data['gmb12'];
			$lokasi=$data['lokasi'];
			$eksis=$data['eksis'];
			$jumX=$data['jumX'];
			$rayon=$data['rayon'];
			$query="insert into tb_lokuprtr values('','','".$gmb12."','".$lokasi."','".$eksis."','".$jumX."','".$rayon."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function deletelokfromdb($id)
		{
			$query="DELETE FROM tb_lokuprtr WHERE lokrtr_id = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function showlokaddlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_lokuprtr WHERE lokrtr_id='".$id."'");
			return $hasil;
		}
		

		function exporttopdf()
		{
			$query="select NO_AWAL,NO_REVISI,LOKASI,eksis,gmb12,KOORDINAT_S,KOORDINAT_E from lok_rmv ORDER BY id ASC";
			$getData = $this->db->query($query);
			if($getData->num_rows() > 0)
			return $getData->result_array();
			else return null;
		}
		function deleteadbfromdb($id)
		{
			$query="DELETE FROM tb_adb WHERE id = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
	}
?>