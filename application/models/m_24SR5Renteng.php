<?php
	class M_24SR5Renteng extends CI_Model
	{
		function __construct()
		 {
		  parent::__construct();
		 }
		 
		function showlokfromdb()
		{
			if($_SESSION['rayon']=="Semua")
			{
				$hasil=$this->db->query("SELECT * FROM lok_srr ORDER BY id_loksrr ASC")->result();
			}
			else
			{
				$hasil=$this->db->query("SELECT * FROM lok_srr WHERE RAYON='".$_SESSION['rayon']."' ORDER BY id_loksrr ASC")->result();
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
			$hasil=$this->db->query("SELECT * FROM lok_ssr WHERE id_lokssr='".$id."'")->result();
			return $hasil;
		}
		
		function simpanmvlinetodb($data)
		{
			$idlok=$data['id'];
			//$pasang=$data['pasang'];
//$pasang1=$data['pasang1'];
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
			$p1=$data['p1'];
			$q1=$data['q1'];
			$r1=$data['r1'];
			$s1=$data['s1'];
			$t1=$data['t1'];
			$u1=$data['u1'];
			$v1=$data['v1'];
			$w1=$data['w1'];
			$query="insert into srr values('','".$idlok."','','','".$a."','".$b."','".$c."',
			'".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."'
			,'".$l."','".$m."',
			'".$n."','".$o."',
			'".$p."','".$q."',
			'".$r."','".$s."',
			'".$t."','".$u."','".$v."',
			'".$w."','".$a1."','".$b1."','".$c1."',
			'".$d1."','".$e1."','".$f1."','".$g1."','".$h1."','".$i1."','".$j1."','".$k1."'
			,'".$l1."','".$m1."',
			'".$n1."','".$o1."',
			'".$p1."','".$q1."',
			'".$r1."','".$s1."',
			'".$t1."','".$u1."','".$v1."',
			'".$w1."','".$x."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function cekmvline($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM srr WHERE id_loksrr='".$id."'");
			return $hasil;
		}
		function gambarlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_gambarssr WHERE id_lokasi='".$id."'")->result();
			return $hasil;
		}
function cekgmb($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_gambarssr WHERE id_lokasi='".$id."'");
			return $hasil;
		}
function simpangambar($data)
		{
			$id_lok=$data['id_lokasi'];
			$gmb=$data['gambar'];
			$query="insert into tb_gambarssr values('','".$id_lok."','".$gmb."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function simpanlokasitodb($data)
		{
			$no_gambar1=$data['no_gambar1'];
			$no_gambar2=$data['no_gambar2'];
			$lokasi=$data['lokasi'];
			$penyulang=$data['penyulang'];
			$exsist=$data['exsist'];
			$rayon=$data['rayon'];
			$query="insert into LOK_SRR values('','','".$no_gambar1."','".$no_gambar2."','".$lokasi."','".$penyulang."','".$exsist."','".$rayon."')";
			
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function deletelokfromdb($id)
		{
			$query="DELETE FROM lok_srr WHERE id_loksrr = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function showlokaddlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM lok_srr WHERE id_loksrr='".$id."'");
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