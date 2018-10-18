<?php
	class M_rekonfigjtm extends CI_Model
	{
		function __construct()
		 {
		  parent::__construct();
		 }
		 
		function showlokfromdb()
		{
			if($_SESSION['ryn']=="Semua")
			{
				$hasil=$this->db->query("SELECT * FROM kol_jtmrek ORDER BY id ASC")->result();
			}
			else
			{
				$hasil=$this->db->query("SELECT * FROM kol_jtmrek WHERE ryn='".$_SESSION['ryn']."' ORDER BY id ASC")->result();
			}
			return $hasil;
		}
		
		function simpanlkstodb($data)
		{
			$bgr_no=$data['bgr_no'];
			$gbr2_no=$data['gbr2_no'];
			$lks=$data['lks'];
			$ex_sist=$data['ex_sist'];
			$penylang=$data['penylang'];
			$jml_ganggu=$data['jml_ganggu'];
			$ryn=$data['ryn'];
			
			$query="insert into kol_jtmrek(bgr_no,gbr2_no,lks,ex_sist,penylang,jlm_ganggu,ryn,mtsu,ctivm,cgu) values('".$bgr_no."','".$gbr2_no."','".$lks."','".$ex_sist."','".$penylang."','".$jml_ganggu."','".$ryn."','0','0','0')";
		
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function showlokaddlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM kol_jtmrek WHERE id='".$id."'");
			return $hasil;
		}
		
		function deleteadbfromdb($id)
		{
			$this->db->query("DELETE FROM rekjtm_sut WHERE id_lok1 = '".$id."'");
			$this->db->query("DELETE FROM rekjtm_ticmv WHERE id_lok1 = '".$id."'");
			$this->db->query("DELETE FROM rekjtm_ugcable WHERE id_lokasi = '".$id."'");
			$this->db->query("DELETE FROM tb_gmbrejtm WHERE lokasi_id = '".$id."'");
			$query="DELETE FROM kol_jtmrek WHERE id = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function ceksutm($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM rekjtm_sut WHERE id_lok1='".$id."'");
			return $hasil;
		}
		function cekmvtic($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM rekjtm_ticmv WHERE id_lok1='".$id."'");
			return $hasil;
		}
		function cekugc($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM rekjtm_ugcable WHERE id_lokasi='".$id."'");
			return $hasil;
		}
		
		function simpansutmtodb($data)
		{
			$id_lok1=$data['id'];
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
			$query="insert into rekjtm_sut values('','".$id_lok1."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."','".$o."','".$p."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."','".$f1."','".$g1."','".$h1."','".$i1."','".$j1."','".$k1."','".$n1."','".$o1."','".$p1."','".$q."','".$r."','".$s."','".$t."','".$u."')";
			$hasil=$this->db->query($query);
			$this->db->query("UPDATE kol_jtmrek set mtsu='1' WHERE id='".$id_lok1."' ");
			return $hasil;
		}
		
		function editmtsutodb($data)
		{
			$id_lok1=$data['id'];
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
			$query="UPDATE rekjtm_sut SET TM1M='".$a."',TM2M='".$b."',TM4M='".$c."',TM5M='".$e."',TM8M='".$f."',TM10M='".$i."',TM11M='".$k."',CONDUC='".$l."',JRA_EST='".$m."',GWM='".$n."',HGWM='".$o."',MPS='".$p."',TM1UB='".$a1."',TM2UB='".$b1."',TM4UB='".$c1."',TM4XUB='".$d1."',TM5UB='".$e1."',TM8UB='".$f1."',TM8XUB='".$g1."',TM8XCUB='".$h1."',TM10UB='".$i1."',TM10XUB='".$j1."',TM11UB='".$k1."',UBGW='".$n1."',UBWGH='".$o1."',BUPS='".$p1."',UTAM1='".$q."',PEYANG='".$r."',FERLE_STRUCK='".$s."',GROUN_DLM='".$t."',GROUN_LAR='".$u."' WHERE id_lok1='".$idlok1."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function simpanctivmtodb($data)
		{
			$id_lok1=$data['id'];
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
			$query="insert into rekjtm_ticmv values('','".$id_lok1."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."','".$f1."','".$i1."','".$j1."','".$k1."','".$l."','".$m."')";
			$hasil=$this->db->query($query);
			$this->db->query("UPDATE kol_jtmrek set ctivm='1' WHERE id='".$id_lok1."' ");
			return $hasil;
		}
		
		function editctivmtodb($data)
		{
			$idlok1=$data['id'];
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
			$query="UPDATE rekjtm_ticmv SET CITVM1M='".$a."',CITVM2M='".$b."',CITVM4M='".$c."',CITVM4MA='".$d."',CITVM5M='".$e."',CITVM5MA='".$f."',CITVM='".$g."',EST_JRK1='".$h."',MWG1='".$i."',MWGH1='".$j."',MPS1='".$k."',CITVM1UB='".$a1."',CITVM2UB='".$b1."',CITVM4UB'".$c1."',CITVM4AUB='".$d1."',CITVM5UB='".$e1."',CITVM5AUB='".$f1."',BUWG1='".$i1."',UBWGH='".$j1."',UBPS1='".$k1."',UTAM1='".$l."',PEYANG1='".$m."' WHERE id_lok1='".$idlok1."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function simpancgutodb($data)
		{
			$id_lokasi=$data['id'];
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
			$query="insert into rekjtm_ugcable values('','".$id_lokasi."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."')";
			$hasil=$this->db->query($query);
			$this->db->query("UPDATE kol_jtmrek set cgu='1' WHERE id='".$id_lokasi."' ");
			return $hasil;
		}
		
		function editcgutodb($data)
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
			$query="UPDATE rekjtm_ugcable set sktm_ugc1='".$a."',ditanam1='".$b."',crossing_jln1='".$c."',outdoor1='".$d."',indoor1='".$e."',jointing='".$f."',	sktm_ugc2='".$a1."',ditanam2='".$b1."',crossing_jln2='".$c1."',outdoor2='".$d1."',indoor2='".$e1."' WHERE id_lokasi='".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function cekgmb($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM tb_gmbrejtm WHERE lokasi_id='".$id."'");
			return $hasil;
		}
		
		function gambarlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM tb_gmbrejtm WHERE lokasi_id='".$id."'")->result();
			return $hasil;
		}
		
		function simpangambar($data)
		{
			$lokasi_id=$data['lokasi_id'];
			$gambar2=$data['gambar2'];
			$rayon2=$data['rayon2'];
			$query="insert into tb_gmbrejtm values('','".$lokasi_id."','".$gambar2."','".$rayon2."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function showsutmfromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM rekjtm_sut WHERE id_lok1='".$id."'");
			return $hasil;
		}
		
		function showmvticfromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM rekjtm_ticmv WHERE id_lok1='".$id."'");
			return $hasil;
		}
		
		function showugcfromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM rekjtm_ugcable WHERE id_lokasi='".$id."'");
			return $hasil;
		}
		
		function showexviewfromdb($ryn)
		{
			$hasil=$this->db->query("SELECT * FROM kol_jtmrek a INNER JOIN rekjtm_ticmv b ON a.id=b.id_lok1 INNER JOIN rekjtm_sut c ON a.id=c.id_lok1 INNER JOIN rekjtm_ugcable d ON a.id=d.id_lokasi WHERE a.ryn='".ucfirst($ryn)."'")->result();
			return $hasil;
		}
	}
?>