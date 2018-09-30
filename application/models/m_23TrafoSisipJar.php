<?php
	class M_23TrafoSisipJar extends CI_Model
	{
		function __construct()
		 {
		  parent::__construct();
		 }
		 
		function showlokfromdb()
		{
			if($_SESSION['rayon']=="Semua")
			{
				$hasil=$this->db->query("SELECT * FROM lok_tsj ORDER BY id_loktsj ASC")->result();
			}
			else
			{
				$hasil=$this->db->query("SELECT * FROM lok_tsj WHERE RAYON='".$_SESSION['rayon']."' ORDER BY id_loktsj ASC")->result();
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
			$hasil=$this->db->query("SELECT * FROM lok_tsj WHERE id_loktsj='".$id."'")->result();
			return $hasil;
		}
		function gambarlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_gambarrtmdua WHERE id_lokasi='".$id."'")->result();
			return $hasil;
		}
		function cekgmb($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_gambartsj WHERE id_lokasi='".$id."'");
			return $hasil;
		}
		function simpangambar($data)
		{
			$id_lok=$data['id_lokasi'];
			$gmb=$data['gambar'];
			$query="insert into tb_gambartsj values('','".$id_lok."','".$gmb."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function cekmvline($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM mvline WHERE id_adb='".$id."'");
			return $hasil;
		}
		
		
		
		function simpanlokasitodb($data)
		{
			$no_gambar1=$data['no_gambar1'];
			$no_gambar2=$data['no_gambar2'];
			$lokasi=$data['lokasi'];
			$exsist=$data['exsist'];
			$penyulang=$data['penyulang'];
			$jumlah_x=$data['jumlah_x'];
			$rayon=$data['rayon'];
			$query="insert into lok_tsj values('','','".$no_gambar1."','".$no_gambar2."','".$lokasi."','".$exsist."','".$penyulang."','".$jumlah_x."','".$rayon."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function deletelokfromdb($id)
		{
			$query="DELETE FROM lok_tsj WHERE id_loktsj = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function showlokaddlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM lok_tsj WHERE id_loktsj='".$id."'");
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