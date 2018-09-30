<?php
	class m_rekonfigjtr extends CI_Model
	{
		function __construct()
		 {
		  parent::__construct();
		 }
		 
		function showlokfromdb()
		{
			if($_SESSION['rayon']=="Semua")
			{
				$hasil=$this->db->query("SELECT * FROM LOK_REKJTR ORDER BY id ASC")->result();
			}
			else
			{
				$hasil=$this->db->query("SELECT * FROM LOK_REKJTR WHERE RAYON='".$_SESSION['rayon']."' ORDER BY id ASC")->result();
			}
			return $hasil;
		}
		
		function simpanlokasitodb($data)
		{
			$gmb=$data['gmb'];
			$gmb1=$data['gmb1'];
			$lokasi=$data['lokasi'];
			$exsist=$data['exsist'];
			$penyulang=$data['penyulang'];
			$jml_ganggu=$data['jml_ganggu'];
			$rayon=$data['rayon'];
			$query="insert into lok_rekjtr(no_gmb1,no_gmb2,lokasi,exsist,penyulang,rayon,status) values('".$gmb."','".$gmb1."','".$lokasi."','".$exsist."','".$penyulang."','".$rayon."','0')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function showlokaddlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM lok_rekjtr WHERE id='".$id."'");
			return $hasil;
		}
		
		function deleteadbfromdb($id)
		{
			$this->db->query("DELETE FROM rekjtr_input WHERE id_lok = '".$id."'");
			$this->db->query("DELETE FROM tb_gmb_rejtr WHERE id_lokasi = '".$id."'");
			$query="DELETE FROM lok_rekjtr WHERE id = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function cekinput($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM rekjtr_input WHERE id_lok='".$id."'");
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
			$m=$data['m'];
			$n=$data['n'];
			$o=$data['o'];
			$p=$data['p'];
			$q=$data['q'];
			$r=$data['r'];
			$s=$data['s'];
			$t=$data['t'];
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
			$query="insert into rekjtr_input values('','".$idlok."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."','".$o."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."','".$f1."','".$g1."','".$h1."','".$i1."','".$j1."','".$m1."','".$n1."','".$o1."','".$p."','".$q."','".$r."','".$s."','".$t."')";
			$hasil=$this->db->query($query);
			$this->db->query("UPDATE lok_rekjtr set status='1' WHERE id='".$idlok."' ");
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
			$m=$data['m'];
			$n=$data['n'];
			$o=$data['o'];
			$p=$data['p'];
			$q=$data['q'];
			$r=$data['r'];
			$s=$data['s'];
			$t=$data['t'];
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
			$query="UPDATE rekjtr_input set TR1M='".$a."',TR2M='".$b."',TR3M='".$c."',TR3AM='',TR4M='".$e."',TR4AM='".$f."',TR5M='$g',TR6M='$h',TR6AM='".$i."',TR7M='',CONDUCTOR='".$k."',EST_JARAK='".$l."',GWM='".$m."',GWNM='".$n."',HGWM='".$o."',TR1UB='".$a1."',TR2UB='".$b1."',TR3UB='".$c1."',TR3AUB='".$d1."',TR4UB='".$e1."',TR4AUB='".$f1."',TR5UB='".$g1."',TR6UB='".$h1."',TR6AUB='".$i1."',TR7UB='".$j1."',GWUB='".$m1."',GWNUB='".$n1."',HGWUB='".$o1."',SP='".$p."',PONDASI='".$q."',UTAMA='".$r."',UTAMA_E='".$s."',NON_UTAMA='".$t."' WHERE id_lok='".$idlok."'";
			$hasil=$this->db->query($query);
			$this->db->query("UPDATE lok_rekjtr set status='1' WHERE id='".$idlok."' ");
			return $hasil;
		}
		
		function showinputfromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM rekjtr_input WHERE id_lok='".$id."'");
			return $hasil;
		}
		
		function cekgmb($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_gmb_rejtr WHERE id_lokasi='".$id."'");
			return $hasil;
		}
		
		function gambarlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_gmb_rejtr WHERE id_lokasi='".$id."'")->result();
			return $hasil;
		}
		
		function simpangambar($data)
		{
			$id_lok=$data['id_lokasi'];
			$gmb=$data['gambar'];$rayon=$data['rayon'];
			$query="insert into tb_gmb_rejtr values('','".$id_lok."','".$gmb."','".$rayon."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function showrinputfromdb($rayon)
		{
			$hasil=$this->db->query("SELECT * FROM lok_rekjtr a INNER JOIN rekjtr_input b ON a.id = b.id_lok WHERE rayon='".$rayon."'")->result();
			return $hasil;
		}
	}
?>