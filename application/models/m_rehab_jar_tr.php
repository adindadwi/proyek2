<?php
	class m_rehab_jar_tr extends CI_Model
	{
		function _construct()
		 {
		  parent::_construct();
		 }
		 
		function showlokfromdb()
		{
			if($_SESSION['rayon']=="Semua")
			{
				$hasil=$this->db->query("SELECT * FROM tb_lokrehjtr ORDER BY id ASC")->result();
			}
			else
			{
				$hasil=$this->db->query("SELECT * FROM tb_lokrehjtr WHERE rayon2='".$_SESSION['rayon']."' ORDER BY id ASC")->result();
			}
			return $hasil;
		}
		function showinputfromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_rehabjtr WHERE id_lokJTR='".$id."'");
			return $hasil;
		}
		function cekinput($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_rehabjtr WHERE id_lokJTR='".$id."'");
			return $hasil;
		}

		function addlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_lokrehjtr WHERE id='".$id."'")->result();
			return $hasil;
		}
		
		function gambarlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_gmbjtr WHERE lokasi_id='".$id."'")->result();
			return $hasil;
		}
		
		function cekgmb($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_gmbjtr WHERE lokasi_id='".$id."'");
			return $hasil;
		}
		
		function simpangambar2($data)
		{
			$id_lok=$data['lokasi_id'];
			$gmb=$data['gambar2'];
			$query="insert into tb_gmbjtr values('','".$id_lok."','".$gmb."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function simpanlokasitodb($data)
		{
			$gmb=$data['gmb12'];
			$gmb1=$data['gmb1'];
			$lokasi=$data['lokasi'];
			$exsist=$data['exsist'];
			$JUMLAH_XX=$data['JUMLAH_XX'];
			$rayon2=$data['rayon2'];
			$query="insert into tb_lokrehjtr values('','".$gmb12."','".$gmb1."','".$lokasi."','".$exsist."','".$JUMLAH_XX."','".$rayon."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}

		/*function deletermvfromdb($id)
		{
			$this->db->query("DELETE FROM tb_gmbjtr WHERE lokasi_id = '".$id."'");
			$query="DELETE FROM lok_rmv WHERE id = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}*/
		function showlokaddlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_lokrehjtr WHERE id='".$id."'");
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
			$query="DELETE FROM tb_lokrehjtr WHERE id = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function simpanrejtrinputtodb($data)
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
			$kk=$data['kk'];
			$ll=$data['ll'];
			$m=$data['m'];
			$n=$data['n'];
			$o=$data['o'];
			$p=$data['p'];
			$q=$data['q'];
			$r=$data['r'];
			$s=$data['s'];
			$t=$data['t'];
			$u=$data['u'];
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
			$kk1=$data['kk1'];
			$l1=$data['l1'];
			$ll1=$data['ll1'];
			$m1=$data['m1'];
			$n1=$data['n1'];
			$o1=$data['o1'];
			$p1=$data['p1'];
			$q1=$data['q1'];
			$r1=$data['r1'];
			$s1=$data['s1'];
			$t1=$data['t1'];
			$u1=$data['u1'];
			$z=$data['z'];
			$query="insert into tb_rehabjtr values('','".$idlok."','','','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$kk."','".$ll."','".$m."','".$n."','".$o."','".$p."','".$q."','".$r."','".$s."','".$t."','".$u."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."','".$f1."','".$g1."','".$h1."','".$i1."','".$j1."','".$k1."','".$kk1."','".$l1."','".$ll1."','".$m1."','".$n1."','".$o1."','".$p1."','".$q1."','".$r1."','".$s1."','".$t1."','".$u1."','".$z."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function editrejtminputtodb($data)
		{
			$idlok=$data['id'];
			$a=$data['a'];
			$b=$data['b'];
			$c=$data['c'];
			$e=$data['e'];
			$f=$data['f'];
			$g=$data['g'];
			$h=$data['h'];
			$i=$data['i'];
			$k=$data['k'];
			$l=$data['l'];
			$kk=$data['kk'];
			$ll=$data['ll'];
			$m=$data['m'];
			$n=$data['n'];
			$o=$data['o'];
			$p=$data['p'];
			$q=$data['q'];
			$r=$data['r'];
			$s=$data['s'];
			$u=$data['u'];
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
			$m1=$data['m1'];
			$n1=$data['n1'];
			$o1=$data['o1'];
			$query="UPDATE tb_rehabjtr set TR1M='".$a."',TR2M='".$b."',TR3M='".$c."',TR3AM='',TR4M='".$e."',TR4AM='".$f."',TR5M='$g',TR6M='$h',TR6AM='".$i."',TR7M='',CONDUCTOR='".$k."',INSULATED='".$kk."',NONINSULATED='".$ll."',GWM='".$m."',GWNM='".$n."',HGWM='".$o."',TR1UB='".$a1."',TR2UB='".$b1."',TR3UB='".$c1."',TR3AUB='".$d1."',TR4UB='".$e1."',TR4AUB='".$f1."',TR5UB='".$g1."',TR6UB='".$h1."',TR6AUB='".$i1."',TR7UB='".$j1."',GWUB='".$m1."',GWNUB='".$n1."',HGWUB='".$o1."',HGWN='".$p."',SP='".$q."',UTAMA='".$r."',UTAMA_E='".$s."',SR_TIANG='".$t."',GROUND_LUAR='".$u."' WHERE id_lok='".$idlok."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
	}
?>