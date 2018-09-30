<?php
	class m_trafotua extends CI_Model
	{
		function __construct()
		 {
		  parent::__construct();
		 }
		 
		function showlokfromdb()
		{
			if($_SESSION['rayon']=="Semua")
			{
				$hasil=$this->db->query("SELECT * FROM lok_ttuacadang ORDER BY id ASC")->result();
			}
			else
			{
				$hasil=$this->db->query("SELECT * FROM lok_ttuacadang WHERE RAYON='".$_SESSION['rayon']."' ORDER BY id ASC")->result();
			}
			return $hasil;
		}
		
		function showrlvfromdb()
		{
			$hasil=$this->db->query("SELECT * FROM srr ORDER BY id ASC")->result();
			return $hasil;
		}
		
		function addtrafofromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM lok_ttuacadang WHERE id='".$id."'")->result();
			return $hasil;
		}
		
		function gambarlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_gmbtrafo WHERE id_lokasi='".$id."'")->result();
			return $hasil;
		}
		
		function cekgmb($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_gmbtrafo WHERE id_lokasi='".$id."'");
			return $hasil;
		}
		
		function cektrafo($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM trafo_tuacadang WHERE id_trafotua='".$id."'");
			return $hasil;
		}
		
		function simpangambar($data)
		{
			$id_lok=$data['id_lokasi'];
			$gmb=$data['gambar'];
			$query="insert into tb_gmbtrafo values('','".$id_lok."','".$gmb."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function simpanlokasitodb($data)
		{
			$lokasi=$data['lokasi'];
			$exsist=$data['exsist'];
			$penyulang=$data['penyulang'];
			$rayon=$data['rayon'];
			$query="insert into lok_ttuacadang values('','".$lokasi."','".$exsist."','".$penyulang."','".$rayon."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function simpantrafolinetodb($data)
		{
			$idlok=$data['id'];
			$a=$data['a'];
			$b=$data['b'];
			$c=$data['c'];
			$d=$data['d'];
			$e=$data['e'];
			$f=$data['f'];
			$g=$data['g'];
			$h=$data['h'];
			$i=$data['i'];
			$j=$data['j'];
			$k=$data['k'];
			$l=$data['l'];
			$m=$data['m'];
			$n=$data['n'];
			$o=$data['o'];
			$p=$data['p'];
			$a1=$data['a1'];
			$b1=$data['b1'];
			$c1=$data['c1'];
			$d1=$data['d1'];
			$e1=$data['e1'];
			$f1=$data['f1'];
			$g1=$data['g1'];
			$h1=$data['h1'];
			$i1=$data['i1'];
			$j1=$data['j1'];
			$k1=$data['k1'];
			$l1=$data['l1'];
			$m1=$data['m1'];
			$n1=$data['n1'];
			$o1=$data['o1'];
			$p1=$data['p1'];
			$query="insert into trafo_tuacadang values('','".$idlok."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."','".$o."','".$p."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."','".$f1."','".$g1."','".$h1."','".$i1."','".$j1."','".$k1."','".$l1."','".$m1."','".$n1."','".$o1."','".$p."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function deletetrafofromdb($id)
		{
			$query="DELETE FROM lok_ttuacadang WHERE id = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
	}
?>