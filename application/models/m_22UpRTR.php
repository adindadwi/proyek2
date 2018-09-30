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
				$hasil=$this->db->query("SELECT * FROM lok_uprtr ORDER BY id_lokrtr ASC")->result();
			}
			else
			{
				$hasil=$this->db->query("SELECT * FROM lok_uprtr WHERE RAYON='".$_SESSION['rayon']."' ORDER BY id_lokrtr ASC")->result();
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
			$hasil=$this->db->query("SELECT * FROM lok_uprtr WHERE id_lokrtr='".$id."'")->result();
			return $hasil;
		}
		
		function gambarlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_gambarrtr WHERE id_lokasi='".$id."'")->result();
			return $hasil;
		}
		
		function cekgmb($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_gambarrtr WHERE id_lokasi='".$id."'");
			return $hasil;
		}
		
		function cekmvline($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM uprtr WHERE id_rtr='".$id."'");
			return $hasil;
		}
		function simpanmvlinetodb($data)
		{
			$id_lokrtr=$data['id_lokrtr'];
			$tr1=$data['a'];
			$tr2=$data['b'];
			$tr3=$data['c'];
			$tr3a=$data['d'];
			$tr4=$data['e'];
			$tr4a=$data['f'];
			$tr5=$data['g'];
			$tr6=$data['h'];
			$tr6a=$data['i'];
			$tr7=$data['j'];
			$conductor=$data['k'];
			$ins=$data['l'];
			$non_ins=$data['m'];
			$gw=$data['n'];
			$gwn=$data['o'];
			$hgw=$data['p'];
			$hgwn=$data['q'];
			$sp=$data['r'];
			$utama=$data['s'];
			$non_utama=$data['t'];
			$sr_utama=$data['u'];
			$ground_luar=$data['v'];
			$keterangan=$data['w'];
			$tr12=$data['a1'];
			$tr22=$data['b1'];
			$tr32=$data['c1'];
			$tr3a2=$data['d1'];
			$tr42=$data['e1'];
			$tr4a2=$data['f1'];
			$tr52=$data['g1'];
			$tr62=$data['h1'];
			$tr6a2=$data['i1'];
			$tr72=$data['j1'];
			$conductor2=$data['k1'];
			$ins2=$data['l1'];
			$non_ins2=$data['m1'];
			$gw2=$data['n1'];
			$gwn2=$data['o1'];
			$hgw2=$data['p1'];
			$hgwn2=$data['q1'];
			$sp2=$data['r1'];
			$utama2=$data['s1'];
			$non_utama2=$data['t1'];
			$sr_utama2=$data['u1'];
			$ground_luar2=$data['v1'];			
		
			$query="insert into uprtr values('','".$id_lokrtr."','','','".$tr1."','".$tr2."','".$tr3."','".$tr3a."','".$tr4."','".$tr4a."','".$tr5."','".$tr6."','".$tr6a."','".$tr7."','".$conductor."','".$ins."','".$non_ins."','".$gw."','".$gwn."','".$hgw."','".$hgwn."','".$sp."','".$utama."','".$non_utama."','".$sr_utama."','".$ground_luar."','".$keterangan."','".$tr12."','".$tr22."','".$tr32."','".$tr3a2."','".$tr42."','".$tr4a2."','".$tr52."','".$tr62."','".$tr6a2."','".$tr72."','".$conductor2."','".$ins2."','".$non_ins2."','".$gw2."','".$gwn2."','".$hgw2."','".$hgwn2."','".$sp2."','".$utama2."','".$non_utama2."','".$sr_utama2."','".$ground_luar2."')";
			$hasil=$this->db->query($query);
			
			return $hasil;
		}
		function simpangambar($data)
		{
			$id_lok=$data['id_lokasi'];
			$gmb=$data['gambar'];
			$query="insert into tb_gambarrtr values('','".$id_lok."','".$gmb."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function simpanlokasitodb($data)
		{
			$no_gambar=$data['no_gambar'];
			$lokasi=$data['lokasi'];
			$exsist=$data['exsist'];
			$jumlah_x=$data['jumlah_x'];
			$rayon=$data['rayon'];
			$query="insert into LOK_UPRTR values('','','".$no_gambar."','".$lokasi."','".$exsist."','".$jumlah_x."','".$rayon."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function deletelokfromdb($id)
		{
			$query="DELETE FROM lok_uprtr WHERE id_lokrtr = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function showlokaddlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM lok_uprtr WHERE id_lokrtr='".$id."'");
			return $hasil;
		}
		

		function exporttopdf()
		{
			$query="select NO_AWAL,NO_REVISI,LOKASI,EXSIST,NO_GAMBAR,KOORDINAT_S,KOORDINAT_E from lok_rmv ORDER BY id ASC";
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