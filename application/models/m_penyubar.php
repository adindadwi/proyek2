<?php
	class m_penyubar extends CI_Model
	{
		function __construct()
		 {
		  parent::__construct();
		 }
		 
		function showlokfromdb()
		{
			if($_SESSION['rayon']=="Semua")
			{
				$hasil=$this->db->query("SELECT * from kol_pnybar ORDER BY id ASC")->result();
			}
			else
			{
				$hasil=$this->db->query("SELECT * from kol_pnybar WHERE ryn='".$_SESSION['rayon']."' ORDER BY id ASC")->result();
			}
			return $hasil;
		}
		
		function simpanlokasitodb($data)
		{
			$gmb=$data['n_gbr1'];
			$gmb1=$data['n_gbr2'];
			$lokasi=$data['lks'];
			$exsist=$data['ex_sist'];
			$penyulang=$data['penylang'];
			$jml_ganggu=$data['jlm_gangguan'];
			 $rayon=$data['ryn'];
			$query="insert into kol_pnybar values('','".$gmb."','".$gmb1."','".$lokasi."','".$exsist."','".$penyulang."','".$jml_ganggu."','".$rayon."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function showlokaddlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * from kol_pnybar WHERE id='".$id."'");
			return $hasil;
		}
		
		function deleteadbfromdb($id)
		{
			$query="DELETE from kol_pnybar WHERE id = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function gambarlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_gmbpenyubar WHERE lokasi_id='".$id."'")->result();
			return $hasil;
		}
		function cekgmb($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_gmbpenyubar WHERE lokasi_id='".$id."'");
			return $hasil;
		}
		function simpangambar($data)
		{
			$id_lok=$data['lokasi_id'];
			$gambar=$data['gambar2'];
			$query="insert into tb_gmbpenyubar values('','".$id_lok."','".$gambar."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		function ceksutm($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM penyer_sutm WHERE id_lok1='".$id."'");
			return $hasil;
		}
		function cekmvtic($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM penyer_mvtc WHERE id_lok1='".$id."'");
			return $hasil;
		}
		function cekugc($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM penyer_ugc WHERE id_lok='".$id."'");
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
			$query="insert into penyer_sutm values('','".$idlok."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."','".$o."','".$p."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."','".$f1."','".$g1."','".$h1."','".$i1."','".$j1."','".$k1."','".$n1."','".$o1."','".$p1."','".$q."','".$r."','".$s."','".$t."','".$u."')";
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
			$query="UPDATE rekjtm_sut SET MT1M='".$a."',MT2M='".$b."',MT4M='".$c."',MT5M='".$e."',MT8M='".$f."',MT10M='".$i."',MT11M='".$k."',CONDUC='".$l."',JRA_EST='".$m."',MWG='".$n."',HGWM='".$o."',MPS='".$p."',MT1UB='".$a1."',MT2UB='".$b1."',MT4UB='".$c1."',MT4XUB='".$d1."',MT5UB='".$e1."',MT8UB='".$f1."',MT8XUB='".$g1."',MT8XCUB='".$h1."',MT10UB='".$i1."',MT10XUB='".$j1."',MT11UB='".$k1."',UBGM='".$n1."',UBWGH='".$o1."',BUPS='".$p1."',UTAM1='".$q."',PEYANG='".$r."',FERLE_STRUCK='".$s."',GROUN_DLM='".$t."',GROUN_LAR='".$u."' WHERE id_lok1='".$idlok."'";
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
			$query="insert into penyer_mvtc values('','".$idlok."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."','".$f1."','".$i1."','".$j1."','".$k1."','".$l."','".$m."')";
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
			$query="UPDATE rekjtm_ticmv SET CITVM1M='".$a."',CITVM2M='".$b."',CITVM4M='".$c."',CITVM4AM='".$d."',CITVM5M='".$e."',CITVM5AM='".$f."',CITVM='".$g."',EST_JRK1='".$h."',MWG1='".$i."',MWGH1='".$j."',MPS1='".$k."',CITVM1UB='".$a1."',CITVM2UB='".$b1."',CITVM4UB='".$c1."',CITVM4AUB='".$d1."',CITVM5UB='".$e1."',CITVM5AUB='".$f1."',BUWG1='".$i1."',UBWGH='".$j1."',UBPS1='".$k1."',UTAM1='".$l."',PENYANG1='".$m."' WHERE id_lok1='".$idlok."'";
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
			$query="insert into penyer_ugc values('','".$idlok."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."')";
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
			$hasil=$this->db->query("SELECT * from kol_pnybar a INNER JOIN penyer_mvtic b ON a.id=b.id_lok INNER JOIN penyer_sutm c ON a.id=c.id_lok INNER JOIN penyer_ugc d ON a.id=d.id_lok WHERE a.rayon='".ucfirst($rayon)."'")->result();
			return $hasil;
		}
	}
?>