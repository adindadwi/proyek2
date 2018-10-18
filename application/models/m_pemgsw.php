<?php
	class m_pemgsw extends CI_Model
	{
		function __construct()
		 {
		  parent::__construct();
		 }
		 
		function showlokfromdb()
		{
			if($_SESSION['rayon']=="Semua")
			{
				$hasil=$this->db->query("SELECT * FROM pemasangan_gswire ORDER BY id ASC")->result();
			}
			else
			{
				// $hasil=$this->db->query("SELECT * FROM pemasangan_gswire WHERE RAYON='".$_SESSION['rayon']."' ORDER BY id ASC")->result();
				$hasil=$this->db->query("SELECT * FROM pemasangan_gswire ORDER BY id ASC")->result();
			}
			return $hasil;
		}
		
		function showgswfromdb()
		{
			$hasil=$this->db->query("SELECT * FROM v_rlv ORDER BY id ASC")->result();
			return $hasil;
		}
		
		function addgswfromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM pemasangan_gswire WHERE id='".$id."'")->result();
			return $hasil;
		}
		
		function cekgswline($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM pemasangan_gsw WHERE id_pemgsw='".$id."'");
			return $hasil;
		}
		
		function simpanlokasitodb($data)
		{
			$no_gambar=$data['no_gambar'];
			$no_gambar2=$data['no_gambar2'];
			$lokasi=$data['lokasi'];
			$rayon=$data['rayon'];
			$query="insert into pemasangan_gswire values('','".$no_gambar."','".$no_gambar2."','".$lokasi."','".$rayon."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function simpangswlinetodb($data)
		{
				
			$idlok=$data['idlok'];
			$penyulang=$data['penyulang'];
			$satu=$data['satu'];
			$dua=$data['dua'];
			$tiga=$data['tiga'];
			$pjg_gsw=$data['pjg_gsw'];
			$est_jarak=$data['est_jarak'];
			$light_arr_ground=$data['light_arr_ground'];
			
			$query="insert into pemasangan_gsw values('','".$idlok."','".$penyulang."','".$satu."','".$dua."','".$tiga."','".$pjg_gsw."','".$est_jarak."','".$light_arr_ground."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function deletegswfromdb($id)
		{
			$query="DELETE FROM pemasangan_gswire WHERE id = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function gambarlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_gmbgsw WHERE id_lokasi='".$id."'")->result();
			return $hasil;
		}
		
		function cekgmb($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_gmbgsw WHERE id_lokasi='".$id."'");
			return $hasil;
		}
		
		function simpangambar($data)
		{
			$id_lok=$data['id_lokasi'];
			$gmb=$data['gambar'];
			$query="insert into tb_gmbgsw values('','".$id_lok."','".$gmb."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
	}
?>