<?php
	class M_21UpRTM extends CI_Model
	{
		function __construct()
		 {
		  parent::__construct();
		 }
		 
		function showlokfromdb()
		{
			if($_SESSION['rayon']=="Semua")
			{
				$hasil=$this->db->query("SELECT * FROM lok_uprtm_mmdua ORDER BY id_lokmm2 ASC")->result();
			}
			else
			{
				$hasil=$this->db->query("SELECT * FROM lok_uprtm_mmdua WHERE RAYON='".$_SESSION['rayon']."' ORDER BY id_lokmm2 ASC")->result();
			}
			return $hasil;
		}
		function showlokfromdb1()
		{
			if($_SESSION['rayon']=="Semua")
			{
				$hasil1=$this->db->query("SELECT * FROM lok_uprtm_mmtiga ORDER BY id_lokmm3 ASC")->result();
			}
			else
			{
				$hasil1=$this->db->query("SELECT * FROM lok_uprtm_mmtiga WHERE RAYON='".$_SESSION['rayon']."' ORDER BY id_lokmm3 ASC")->result();
			}
			return $hasil1;
		}
		
		function addlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM lok_uprtm_mmdua WHERE id_lokmm2='".$id."'")->result();
			return $hasil;
		}
		function addlinefromdb1($id)
		{
			$hasil=$this->db->query("SELECT * FROM lok_uprtm_mmtiga WHERE id_lokmm3='".$id."'")->result();
			return $hasil;
		}
		function simpanmvlinetodb($data)
		{
			$id_lokmm2=$data['id_lokmm2'];
			//$pasangan=$data['pasangan'];
			//$pasangan1=$data['pasangan1'];
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
			$y=$data['y'];		
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
			$x1=$data['x1'];
			$y1=$data['y1'];
			$query="insert into uprtm_mmdua values('','".$id_lokmm2."','','','".$a."','".$b."','".$c."' ,'".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."','".$o."','".$p."','".$q."','".$r."','".$s."','".$t."','".$u."','".$v."','".$w."','".$x."','".$y."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."','".$f1."','".$g1."','".$h1."','".$i1."','".$j1."','".$k1."','".$l1."','".$m1."','".$n1."','".$o1."','".$p1."','".$q1."','".$r1."','".$s1."','".$t1."','".$u1."','".$v1."','".$w1."','".$x1."','".$y1."')";
			$hasil=$this->db->query($query);
			
			return $hasil;
		}
		function simpanmvlinetodb1($data)
		{
			$id_lokmm3=$data['id_lokmm3'];
			//$pasangan=$data['pasangan'];
			//$pasangan1=$data['pasangan1'];
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
			$y=$data['y'];		
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
			$x1=$data['x1'];
			$y1=$data['y1'];
			$query="insert into uprtm_mmtiga values('','".$id_lokmm3."','','','".$a."','".$b."','".$c."' ,'".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."','".$o."','".$p."','".$q."','".$r."','".$s."','".$t."','".$u."','".$v."','".$w."','".$x."','".$y."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."','".$f1."','".$g1."','".$h1."','".$i1."','".$j1."','".$k1."','".$l1."','".$m1."','".$n1."','".$o1."','".$p1."','".$q1."','".$r1."','".$s1."','".$t1."','".$u1."','".$v1."','".$w1."','".$x1."','".$y1."')";
			$hasil=$this->db->query($query);
			
			return $hasil;
		}
		
		function gambarlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_gambarrtmdua WHERE id_lokasi='".$id."'")->result();
			return $hasil;
		}
		function gambarlinefromdb1($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_gambarrtmtiga WHERE id_lokasi='".$id."'")->result();
			return $hasil;
		}
		
		function cekgmb($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_gambarrtmdua WHERE id_lokasi='".$id."'");
			return $hasil;
		}
		function cekgmb1($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_gambarrtmtiga WHERE id_lokasi='".$id."'");
			return $hasil;
		}
		function simpangambar($data)
		{
			$id_lok=$data['id_lokasi'];
			$gmb=$data['gambar'];
			$query="insert into tb_gambarrtmdua values('','".$id_lok."','".$gmb."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function simpangambar1($data)
		{
			$id_lok=$data['id_lokasi'];
			$gmb=$data['gambar'];
			$query="insert into tb_gambarrtmtiga values('','".$id_lok."','".$gmb."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function cekmvline($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM uprtm_mmdua WHERE id_mm2='".$id."'");
			return $hasil;
		}
		function cekmvline1($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM uprtm_mmtiga WHERE id_mm3='".$id."'");
			return $hasil;
		}
		
		
		
		function simpanlokasitodb($data)
		{
			$no_gambar=$data['no_gambar'];
			$lokasi=$data['lokasi'];
			$exsist=$data['exsist'];
			$jumlah_x=$data['jumlah_x'];
			$rayon=$data['rayon'];
			$query="insert into lok_uprtm_mmdua values('','','".$no_gambar."','".$lokasi."','".$exsist."','".$jumlah_x."','".$rayon."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function simpanlokasitodb1($data)
		{
			$no_gambar=$data['no_gambar'];
			$lokasi=$data['lokasi'];
			$exsist=$data['exsist'];
			$jumlah_x=$data['jumlah_x'];
			$rayon=$data['rayon'];
			$query="insert into lok_uprtm_mmtiga values('','','".$no_gambar."','".$lokasi."','".$exsist."','".$jumlah_x."','".$rayon."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function deletermvfromdb($id)
		{
			$this->db->query("DELETE FROM tb_gambarrtm WHERE id_lokasi = '".$id."'");
			$query="DELETE FROM lok_rmv WHERE id = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function showlokaddlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM LOK_UPRTM_MMDUA WHERE id_lokmm2='".$id."'");
			return $hasil;
		}
		function showlokaddlinefromdb1($id)
		{
			$hasil=$this->db->query("SELECT * FROM LOK_UPRTM_MMTIGA WHERE id_lokmm3='".$id."'");
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
		function deletelokfromdb($id)
		{
			$query="DELETE FROM lok_uprtm_mmdua WHERE id_lokmm2 = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function deletelokfromdb1($id)
		{
			$query="DELETE FROM lok_uprtm_mmtiga WHERE id_lokmm3 = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
	}
?>