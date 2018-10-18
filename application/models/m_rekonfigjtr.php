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
				$hasil=$this->db->query("SELECT * FROM tb_lokrekjtr ORDER BY id ASC")->result();
			}
			else
			{
				$hasil=$this->db->query("SELECT * FROM tb_lokrekjtr WHERE rayon2='".$_SESSION['rayon']."' ORDER BY id ASC")->result();
			}
			return $hasil;
		}
		
		function simpanlokasitodb($data)
		{
			$gmb12=$data['gmb12'];
			$gmb22=$data['gmb22'];
			$lokasi=$data['lokasi'];
			$eksis=$data['eksis'];
			$penyulang2=$data['penyulang2'];
			$rayon2=$data['rayon2'];
			
			$query="insert into tb_lokrekjtr(gmb12,gmb22,lokasi,eksis,penyulang2,rayon2,status) values('".$gmb12."','".$gmb22."','".$lokasi."','".$eksis."','".$penyulang2."','".$rayon2."','0')";
		
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function showlokaddlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_lokrekjtr WHERE id='".$id."'");
			return $hasil;
		}
		
		function deleteadbfromdb($id)
		{
			// $this->db->query("DELETE FROM tb_lokrekjtr WHERE id = '".$id."'");
			$this->db->query("DELETE FROM tb_gmbrejtr WHERE id = '".$id."'");
			$query="DELETE FROM tb_lokrekjtr WHERE id = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function cekinput($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_inputrekjtr WHERE id_lok='".$id."'");
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
			$query="insert into tb_inputrekjtrvalues('','".$idlok."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."','".$o."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."','".$f1."','".$g1."','".$h1."','".$i1."','".$j1."','".$m1."','".$n1."','".$o1."','".$p."','".$q."','".$r."','".$s."','".$t."')";
			$hasil=$this->db->query($query);
			$this->db->query("UPDATE tb_lokrekjtr set status='1' WHERE id='".$idlok."' ");
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
			$query="UPDATE tb_inputrekjtrset input_TR1M='".$a."',input_TR2M='".$b."',input_TR3M='".$c."',TR3AM='',TR4M='".$e."',TR4AM='".$f."',TR5M='$g',TR6M='$h',TR6AM='".$i."',TR7M='',CONDUCTOR='".$k."',EST_JARAK='".$l."',GWM='".$m."',GWNM='".$n."',HGWM='".$o."',TR1UB='".$a1."',TR2UB='".$b1."',TR3UB='".$c1."',TR3AUB='".$d1."',TR4UB='".$e1."',TR4AUB='".$f1."',TR5UB='".$g1."',TR6UB='".$h1."',TR6AUB='".$i1."',TR7UB='".$j1."',GWUB='".$m1."',GWNUB='".$n1."',HGWUB='".$o1."',SP='".$p."',PONDASI='".$q."',UTAMA='".$r."',UTAMA_E='".$s."',NON_UTAMA='".$t."' WHERE id_lok='".$idlok."'";
			$hasil=$this->db->query($query);
			$this->db->query("UPDATE tb_lokrekjtr set status='1' WHERE id='".$idlok."' ");
			return $hasil;
		}
		
		function showinputfromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_inputrekjtr WHERE id_lok='".$id."'");
			return $hasil;
		}
		
		function cekgmb($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_gmbrejtr WHERE id='".$id."'");
			return $hasil;
		}
		
		function gambarlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_gmbrejtr WHERE id='".$id."'")->result();
			return $hasil;
		}
		
		function simpangambar($data)
		{
			$id_lok=$data['id_lokasi'];
			$gmb=$data['gambar'];$rayon=$data['rayon'];
			$query="insert into tb_gmbrejtr values('','".$id_lok."','".$gmb."','".$rayon."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function showrinputfromdb($rayon)
		{
			$hasil=$this->db->query("SELECT * FROM tb_lokrekjtr a INNER JOIN tb_inputrekjtrb ON a.id = b.id_lok WHERE rayon='".$rayon."'")->result();
			return $hasil;
		}
	}
?>