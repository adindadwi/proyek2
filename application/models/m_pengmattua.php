<?php
	class m_pengmattua extends CI_Model
	{
		function __construct()
		 {
		  parent::__construct();
		 }
		 
		function showlokfromdb()
		{
			if($_SESSION['rayon']=="Semua")
			{
				$hasil=$this->db->query("SELECT * FROM tb_lokpengmattua ORDER BY id ASC")->result();
			}
			else
			{
				$hasil=$this->db->query("SELECT * FROM tb_lokpengmattua WHERE RAYON2='".$_SESSION['rayon']."' ORDER BY id ASC")->result();
			}
			return $hasil;
		}
		
		function showrlvfromdb()
		{
			$hasil=$this->db->query("SELECT * FROM v_rlv ORDER BY id ASC")->result();
			return $hasil;
		}
		
		function addmattuafromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_lokpengmattua WHERE id='".$id."'")->result();
			return $hasil;
		}
		
		function gambarlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_gmbmattua WHERE id_lokasi='".$id."'")->result();
			return $hasil;
		}
		
		function cekgmb($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_gmbmattua WHERE id_lokasi='".$id."'");
			return $hasil;
		}
		
		function cekmattua($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM peng_materialtua WHERE id_pengmattua='".$id."'");
			return $hasil;
		}
		
		function simpangambar($data)
		{
			$id_lok=$data['id_lokasi'];
			$gmb=$data['gambar'];
			$query="insert into tb_gmbmattua values('','".$id_lok."','".$gmb."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function simpanlokasitodb($data)
		{
			$lokasi=$data['lokasi'];
			$exsist=$data['exsist'];
			$penyulang=$data['penyulang'];
			$rayon=$data['rayon'];
			$query="insert into tb_lokpengmattua values('','".$lokasi."','".$exsist."','".$penyulang."','".$rayon."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function simpanmattualinetodb($data)
		{
			$idlok=$data['id'];
			$light_arreeas_um=$data['a'];
			$cut_out_switch_um=$data['b'];
			$pin_isulator_um=$data['c'];
			$sr_insulator_um=$data['d'];
			$lvco_um=$data['e'];
			$lvpanel2_um=$data['f'];
			$lvpanel4_um=$data['g'];
			$light_arreeas_ub=$data['a1'];
			$cut_out_switch_ub=$data['b1'];
			$pin_isulator_ub=$data['c1'];
			$sr_insulator_ub=$data['d1'];
			$lvco_ub=$data['e1'];
			$lvpanel2_ub=$data['f1'];
			$lvpanel4_ub=$data['g1'];
			$query="insert into peng_materialtua values('','".$idlok."','".$light_arreeas_um."','".$cut_out_switch_um."','".$pin_isulator_um."','".$sr_insulator_um."','".$lvco_um."','".$lvpanel2_um."','".$lvpanel4_um."','".$light_arreeas_ub."','".$cut_out_switch_ub."','".$pin_isulator_ub."','".$sr_insulator_ub."','".$lvco_ub."','".$lvpanel2_ub."','".$lvpanel4_ub."')";
			
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function deletemattuafromdb($id)
		{
			$query="DELETE FROM tb_lokpengmattua WHERE id = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
	}
?>