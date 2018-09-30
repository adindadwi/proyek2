<?php
	class m_penyubar_gi extends CI_Model
	{
		function __construct()
		 {
		  parent::__construct();
		 }
		 
		function showlokfromdb()
		{
			if($_SESSION['rayon']=="Semua")
			{
				$hasil=$this->db->query("SELECT * FROM lok_penyubar_gi ORDER BY id ASC")->result();
			}
			else
			{
				$hasil=$this->db->query("SELECT * FROM lok_penyubar_gi WHERE RAYON='".$_SESSION['rayon']."' ORDER BY id ASC")->result();
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
			$query="insert into lok_penyubar_gi values('','".$gmb."','".$gmb1."','".$lokasi."','".$exsist."','".$penyulang."','".$jml_ganggu."','".$rayon."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function showlokaddlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM LOK_penyubar_gi WHERE id='".$id."'");
			return $hasil;
		}
		
		function deleteadbfromdb($id)
		{
			$query="DELETE FROM lok_penyubar_gi WHERE id = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function gambarlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_gambar_penyubar_gi WHERE id_lokasi='".$id."'")->result();
			return $hasil;
		}
		function cekgmb($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_gambar_penyubar_gi WHERE id_lokasi='".$id."'");
			return $hasil;
		}
		function simpangambar($data)
		{
			$id_lok=$data['id_lokasi'];
			$gmb=$data['gambar'];
			$query="insert into tb_gambar_penyubar_gi values('','".$id_lok."','".$gmb."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function ceksutm($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM penyubar_gi_sutm WHERE id_lok='".$id."'");
			return $hasil;
		}
		function cekmvtic($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM penyubar_gi_mvtic WHERE id_lok='".$id."'");
			return $hasil;
		}
		function cekugc($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM penyubar_gi_ugc WHERE id_lok='".$id."'");
			return $hasil;
		}
		function simpansutmtodb($data)
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
			$n1=$data['n1'];
			$o1=$data['o1'];
			$p1=$data['p1'];
			$query="insert into penyubar_gi_sutm values('','".$idlok."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."','".$o."','".$p."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."','".$f1."','".$g1."','".$h1."','".$i1."','".$j1."','".$k1."','".$n1."','".$o1."','".$p1."','".$q."','".$r."','".$s."','".$t."','".$u."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
			function editsutmtodb($data)
		{
			$idlok=$data['id'];
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
			$n1=$data['n1'];
			$o1=$data['o1'];
			$p1=$data['p1'];
			$query="UPDATE rekjtm_sutm SET TM1M='".$a."',TM2M='".$b."',TM4M='".$c."',TM5M='".$e."',TM8M='".$f."',TM10M='".$i."',TM11M='".$k."',CONDUCTOR='".$l."',EST_JARAK='".$m."',GWM='".$n."',HGWM='".$o."',SPM='".$p."',TM1UB='".$a1."',TM2UB='".$b1."',TM4UB='".$c1."',TM4XUB='".$d1."',TM5UB='".$e1."',TM8UB='".$f1."',TM8XUB='".$g1."',TM8XCUB='".$h1."',TM10UB='".$i1."',TM10XUB='".$j1."',TM11UB='".$k1."',GWUB='".$n1."',HGWUB='".$o1."',SPUB='".$p1."',UTAMA='".$q."',PENYANGGA='".$r."',FERLENG_STUCK='".$s."',GROUND_DALAM='".$t."',GROUND_LUAR='".$u."' WHERE id_lok='".$idlok."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function simpanmvtictodb($data)
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
			$a1=$data['a1'];
			$b1=$data['b1'];
			$c1=$data['c1'];
			$d1=$data['d1'];
			$e1=$data['e1'];
			$f1=$data['f1'];
			$i1=$data['i1'];
			$j1=$data['j1'];
			$k1=$data['k1'];
			$query="insert into penyubar_gi_mvtic values('','".$idlok."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."','".$f1."','".$i1."','".$j1."','".$k1."','".$l."','".$m."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function editmvtictodb($data)
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
			$a1=$data['a1'];
			$b1=$data['b1'];
			$c1=$data['c1'];
			$d1=$data['d1'];
			$e1=$data['e1'];
			$f1=$data['f1'];
			$i1=$data['i1'];
			$j1=$data['j1'];
			$k1=$data['k1'];
			$query="UPDATE rekjtm_mvtic SET MVTIC1M='".$a."',MVTIC2M='".$b."',MVTIC4M='".$c."',MVTIC4AM='".$d."',MVTIC5M='".$e."',MVTIC5AM='".$f."',MVTIC='".$g."',EST_JARAK1='".$h."',GWM1='".$i."',HGWM1='".$j."',SPM1='".$k."',MVTIC1UB='".$a1."',MVTIC2UB='".$b1."',MVTIC4UB='".$c1."',MVTIC4AUB='".$d1."',MVTIC5UB='".$e1."',MVTIC5AUB='".$f1."',GWUB1='".$i1."',HGWUB1='".$j1."',SPUB1='".$k1."',UTAMA1='".$l."',PENYANGGA1='".$m."' WHERE id_lok='".$idlok."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function simpanugctodb($data)
		{
			$idlok=$data['id'];
			$a=$data['a'];
			$b=$data['b'];
			$c=$data['c'];
			$d=$data['d'];
			$e=$data['e'];
			$f=$data['f'];
			$a1=$data['a1'];
			$b1=$data['b1'];
			$c1=$data['c1'];
			$d1=$data['d1'];
			$e1=$data['e1'];
			$query="insert into penyubar_gi_ugc values('','".$idlok."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function editugctodb($data)
		{
			$idlok=$data['id'];
			$a=$data['a'];
			$b=$data['b'];
			$c=$data['c'];
			$d=$data['d'];
			$e=$data['e'];
			$f=$data['f'];
			$a1=$data['a1'];
			$b1=$data['b1'];
			$c1=$data['c1'];
			$d1=$data['d1'];
			$e1=$data['e1'];
			$query="UPDATE rekjtm_ugc set SKTM_UGC='".$a."',DITANAM='".$b."',CROSSING_JLN='".$c."',OUTDOOR='".$d."',INDOOR='".$e."',JOINT='".$f."',SKTM_UGC1='".$a1."',DITANAM1='".$b1."',CROSSING_JLN1='".$c1."',OUTDOOR1='".$d1."',INDOOR1='".$e1."' WHERE id_lok='".$idlok."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function showexviewfromdb($rayon)
		{
			$hasil=$this->db->query("SELECT * FROM lok_penyubar_gi a INNER JOIN penyubar_gi_mvtic b ON a.id=b.id_lok INNER JOIN penyubar_gi_sutm c ON a.id=c.id_lok INNER JOIN penyubar_gi_ugc d ON a.id=d.id_lok WHERE a.rayon='".ucfirst($rayon)."'")->result();
			return $hasil;
		}
	}
?>