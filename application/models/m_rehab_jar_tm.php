<?php
	class m_rehab_jar_tm extends CI_Model
	{
		function _construct()
		 {
		  parent::_construct();
		 }
		 
		function showlokfromdb()
		{
			if($_SESSION['rayon']=="Semua")
			{
				$hasil=$this->db->query("SELECT * FROM lok_rehab_jar_tm1 ORDER BY id_2lomm ASC")->result();
			}
			else
			{
				$hasil=$this->db->query("SELECT * FROM lok_rehab_jar_tm1 WHERE ryn='".$_SESSION['rayon']."' ORDER BY id_2lomm ASC")->result();
			}
			return $hasil;
		}
		function showlokfromdb1()
		{
			if($_SESSION['rayon']=="Semua")
			{
				$hasil1=$this->db->query("SELECT * FROM kol_rhab_jar_tm2 ORDER BY id_3lomm ASC")->result();
			}
			else
			{
				$hasil1=$this->db->query("SELECT * FROM kol_rhab_jar_tm2 WHERE ryn='".$_SESSION['rayon']."' ORDER BY id_3lomm ASC")->result();
			}
			return $hasil1;
		}
		
		function showrmvfromdb()
		{
			$hasil=$this->db->query("SELECT * FROM v_rmv ORDER BY id ASC")->result();
			return $hasil;
		}
		
		function addlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM lok_rehab_jar_tm1 WHERE id_2lomm='".$id."'")->result();
			return $hasil;
		}
		
		function gambarlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_gmbjtm1 WHERE lokasi_id='".$id."'")->result();
			return $hasil;
		}
		function gambarlinefromdb2($id)
		{
			$hasil1=$this->db->query("SELECT * FROM tb_gmbjtm2 WHERE lokasi_id='".$id."'")->result();
			return $hasil1;
		}
		
		function cekgmb($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_gmbjtm1 WHERE lokasi_id='".$id."'");
			return $hasil;
		}
		function cekgmb2($id)
		{
			$hasil1=$this->db->query("SELECT COUNT(*) AS count FROM tb_gmbjtm2 WHERE lokasi_id='".$id."'");
			return $hasil1;
		}
		function cekmvline($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM aacs_jtm_rehab WHERE mm2_id='".$id."'");
			return $hasil;
		}
		function cekmvline1($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM mvtic_jtm_reha WHERE mm3_id='".$id."'");
			return $hasil;
		}
		
		function simpangambar($data)
		{
			$id_lok=$data['lokasi_id'];
			$gmb=$data['gambar2'];
			$query="insert into tb_gmbjtm1 values('','".$id_lok."','".$gmb."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function simpangambar1($data)
		{
			$id_lok=$data['lokasi_id'];
			$gmb=$data['gambar2'];
			$query="insert into tb_gmbjtm2 values('','".$id_lok."','".$gmb."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function simpanlokasitodb($data)
		{
			$gmr_no=$data['gmr_no'];
			$lks=$data['lks'];
			$ex_sist=$data['ex_sist'];
			$jlm_x=$data['jlm_x'];
			$ryn=$data['ryn'];
			$query="insert into lok_rehab_jar_tm1 values('','','".$gmr_no."','".$lks."','".$ex_sist."','".$jlm_x."','".$ryn."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function simpanlokasitodb1($data)
		{
			$gmr_no=$data['gmr_no'];
			$lks=$data['lks'];
			$ex_sist=$data['ex_sist'];
			$jlm_x=$data['jlm_x'];
			$ryn=$data['ryn'];
			$query="insert into kol_rhab_jar_tm2 values('','','".$gmr_no."','".$lks."','".$ex_sist."','".$jlm_x."','".$ryn."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function deletermvfromdb($id)
		{
			$this->db->query("DELETE FROM tb_gmbjtm1 WHERE lokasi_id = '".$id."'");
			$query="DELETE FROM lok_rmv WHERE id = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function showlokaddlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM lok_rehab_jar_tm1 WHERE id_2lomm='".$id."'");
			return $hasil;
		}
		function showlokaddlinefromdb2($id)
		{
			$hasil1=$this->db->query("SELECT * FROM kol_rhab_jar_tm2 WHERE id_3lomm='".$id."'");
			return $hasil1;
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
			$query="DELETE FROM lok_rehab_jar_tm1 WHERE id_2lomm = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function deletelokfromdb1($id)
		{
			$query="DELETE FROM kol_rhab_jar_tm2 WHERE id_3lomm = '".$id."'";
			$hasil1=$this->db->query($query);
			return $hasil1;
		}
		
		function simpanmvlinetodb($data)
		{
			$id_2lomm=$data['id_2lomm'];
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
			$query="insert into aacs_jtm_rehab values('','".$id_2lomm."','','','".$a."','".$b."','".$c."' ,'".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."','".$o."','".$p."','".$q."','".$r."','".$s."','".$t."','".$u."','".$v."','".$w."','".$x."','".$y."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."','".$f1."','".$g1."','".$h1."','".$i1."','".$j1."','".$k1."','".$l1."','".$m1."','".$n1."','".$o1."','".$p1."','".$q1."','".$r1."','".$s1."','".$t1."','".$u1."','".$v1."','".$w1."','".$x1."','".$y1."')";
			$hasil=$this->db->query($query);
			
			return $hasil;
		}
		function simpanmvlinetodb1($data)
		{
			$id_3lomm=$data['id_3lomm'];
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
			$query="insert into mvtic_jtm_reha values('','".$id_3lomm."','','','".$a."','".$b."','".$c."' ,'".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."','".$o."','".$p."','".$q."','".$r."','".$s."','".$t."','".$u."','".$v."','".$w."','".$x."','".$y."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."','".$f1."','".$g1."','".$h1."','".$i1."','".$j1."','".$k1."','".$l1."','".$m1."','".$n1."','".$o1."','".$p1."','".$q1."','".$r1."','".$s1."','".$t1."','".$u1."','".$v1."','".$w1."','".$x1."','".$y1."')";
			$hasil=$this->db->query($query);
			
			return $hasil;
		}
	}
?>