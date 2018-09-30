<?php
	class m_mvtic extends CI_Model
	{
		function __construct()
		 {
		  parent::__construct();
		 }
		 
		function showlokfromdb()
		{
			$hasil=$this->db->query("SELECT * FROM MVTIC ORDER BY id ASC")->result();
			return $hasil;
		}
		
		function showrlvfromdb()
		{
			$hasil=$this->db->query("SELECT * FROM v_rlv ORDER BY id ASC")->result();
			return $hasil;
		}
		
		function addlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM lok_rlv WHERE id='".$id."'")->result();
			return $hasil;
		}
		
		function gambarlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_gambar WHERE id_lokasi='".$id."'")->result();
			return $hasil;
		}
		
		function cekgmb($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_gambar WHERE id_lokasi='".$id."'");
			return $hasil;
		}
		
		function cekrvline($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM rlv WHERE id_lok_rlv='".$id."'");
			return $hasil;
		}
		
		function simpangambar($data)
		{
			$id_lok=$data['id_lokasi'];
			$gmb=$data['gambar'];
			$query="insert into tb_gambar values('','".$id_lok."','".$gmb."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function simpanlokasitodb($data)
		{
			$awal=$data['awal'];
			$revisi=$data['revisi'];
			$lokasi=$data['lokasi'];
			$exsist=$data['exsist'];
			$no_gmb=$data['no_gmb'];
			$s_kordinat=$data['s_kordinat'];
			$e_kordinat=$data['e_kordinat'];
			$query="insert into lok_rlv(no_awal,no_revisi,lokasi,exsist,no_gambar,koordinat_s,koordinat_e) values('".$awal."','".$revisi."','".$lokasi."','".$exsist."','".$no_gmb."','".$s_kordinat."','".$e_kordinat."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function simpanrvlinetodb($data)
		{
			$idlok=$data['id'];
			$pasang=$data['pasang'];
			$pasang1=$data['pasang1'];
			$a=$data['a'];
			$b=$data['b'];
			$c=$data['c'];
			$e=$data['e'];
			$f=$data['f'];
			$i=$data['i'];
			$k=$data['k'];
			$l=$data['l'];
			$m=$data['m'];
			$n=$data['n'];
			$o=$data['o'];
			$p=$data['p'];
			$q=$data['q'];
			$r=$data['r'];
			$s=$data['s'];
			$t=$data['t'];
			$u=$data['u'];
			$v=$data['v'];
			$w=$data['w'];
			$x=$data['x'];
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
			$query="insert into RLV values('','".$idlok."','".$pasang."".$pasang1."','".$a."','".$b."','".$c."','".$e."','".$f."','".$i."','".$k."','".$l."','".$m."','".$n."','".$o."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."','".$f1."','".$g1."','".$h1."','".$i1."','".$j1."','".$k1."','".$l1."','".$m1."','".$n1."','".$o1."','".$p."','".$q."','".$r."','".$s."','".$t."','".$u."','".$v."','".$w."','".$x."')";
			$hasil=$this->db->query($query);
			$this->db->query("update lok_rlv set rlv='1' WHERE id='".$idlok."'");
			return $hasil;
		}
		
		function deleteadbfromdb($id)
		{
			$query="DELETE FROM lok_rlv WHERE id = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
	}
?>