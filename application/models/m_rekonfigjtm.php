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
			$query="insert into kol_jtmrek(no_gmb1,no_gmb2,lks,ex_sist,penylang,jml_ganggu,ryn,mtsu,ctivm,cgu) values('".$bgr_no."','".$gbr2_no."','".$lks."','".$ex_sist."','".$penylang."','".$jml_ganggu."','".$ryn."','0','0','0')";
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
			$this->db->query("DELETE FROM rekjtm_ugs WHERE id_lokasi = '".$id."'");
			$this->db->query("DELETE FROM td_gmbrejtm WHERE id_lks = '".$id."'");
			$query="DELETE FROM kol_jtmrek WHERE id = '".$id."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function ceksut($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM rekjtm_sut WHERE id_lok1='".$id."'");
			return $hasil;
		}
		function cekctivm($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM rekjtm_ticmv WHERE id_lok1='".$id."'");
			return $hasil;
		}
		function cekcgu($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM rekjtm_ugc WHERE id_lokasi='".$id."'");
			return $hasil;
		}
		
		function simpanmtsutodb($data)
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
			$query="insert into rekjtm_sut values('','".$idlok."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."','".$o."','".$p."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."','".$f1."','".$g1."','".$h1."','".$i1."','".$j1."','".$k1."','".$n1."','".$o1."','".$p1."','".$q."','".$r."','".$s."','".$t."','".$u."')";
			$hasil=$this->db->query($query);
			$this->db->query("UPDATE kol_jtmrek set mtsu='1' WHERE id='".$idlok."' ");
			return $hasil;
		}
		
		function editmtsutodb($data)
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
			$query="UPDATE rekjtm_sut SET TM1M='".$a."',TM2M='".$b."',TM4M='".$c."',TM5M='".$e."',TM8M='".$f."',TM10M='".$i."',TM11M='".$k."',CONDUCTOR='".$l."',EST_JARAK='".$m."',GWM='".$n."',HGWM='".$o."',SPM='".$p."',TM1UB='".$a1."',TM2UB='".$b1."',TM4UB='".$c1."',TM4XUB='".$d1."',TM5UB='".$e1."',TM8UB='".$f1."',TM8XUB='".$g1."',TM8XCUB='".$h1."',TM10UB='".$i1."',TM10XUB='".$j1."',TM11UB='".$k1."',GWUB='".$n1."',HGWUB='".$o1."',SPUB='".$p1."',UTAMA='".$q."',PENYANGGA='".$r."',FERLENG_STUCK='".$s."',GROUND_DALAM='".$t."',GROUND_LUAR='".$u."' WHERE id_lok='".$idlok."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function simpanctivmtodb($data)
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
			$query="insert into rekjtm_ticmv values('','".$idlok."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."','".$f1."','".$i1."','".$j1."','".$k1."','".$l."','".$m."')";
			$hasil=$this->db->query($query);
			$this->db->query("UPDATE kol_jtmrek set ctivm='1' WHERE id='".$idlok."' ");
			return $hasil;
		}
		
		function editctivmtodb($data)
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
			$query="UPDATE rekjtm_ticmv SET MVTIC1M='".$a."',MVTIC2M='".$b."',MVTIC4M='".$c."',MVTIC4AM='".$d."',MVTIC5M='".$e."',MVTIC5AM='".$f."',MVTIC='".$g."',EST_JARAK1='".$h."',GWM1='".$i."',HGWM1='".$j."',SPM1='".$k."',MVTIC1UB='".$a1."',MVTIC2UB='".$b1."',MVTIC4UB='".$c1."',MVTIC4AUB='".$d1."',MVTIC5UB='".$e1."',MVTIC5AUB='".$f1."',GWUB1='".$i1."',HGWUB1='".$j1."',SPUB1='".$k1."',UTAMA1='".$l."',PENYANGGA1='".$m."' WHERE id_lok='".$idlok."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function simpancgutodb($data)
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
			$query="insert into rekjtm_ugc values('','".$idlok."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$a1."','".$b1."','".$c1."','".$d1."','".$e1."')";
			$hasil=$this->db->query($query);
			$this->db->query("UPDATE kol_jtmrek set cgu='1' WHERE id='".$idlok."' ");
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
			$query="UPDATE rekjtm_ugc set SKTM_UGC='".$a."',DITANAM='".$b."',CROSSING_JLN='".$c."',OUTDOOR='".$d."',INDOOR='".$e."',JOINT='".$f."',SKTM_UGC1='".$a1."',DITANAM1='".$b1."',CROSSING_JLN1='".$c1."',OUTDOOR1='".$d1."',INDOOR1='".$e1."' WHERE id_lok='".$idlok."'";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function cekgmb($id)
		{
			$hasil=$this->db->query("SELECT COUNT(*) AS count FROM td_gmbrejtm WHERE id_lks='".$id."'");
			return $hasil;
		}
		
		function gambarlinefromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM td_gmbrejtm WHERE id_lks='".$id."'")->result();
			return $hasil;
		}
		
		function simpangambar($data)
		{
			$id_lok=$data['id_lks'];
			$gmb=$data['gambar'];
			$ryn=$data['ryn'];
			$query="insert into td_gmbrejtm values('','".$id_lok."','".$gmb."','".$ryn."')";
			$hasil=$this->db->query($query);
			return $hasil;
		}
		
		function showmtsufromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM rekjtm_sut WHERE id_lok='".$id."'");
			return $hasil;
		}
		
		function showctivmfromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM rekjtm_ticmv WHERE id_lok='".$id."'");
			return $hasil;
		}
		
		function showcgufromdb($id)
		{
			$hasil=$this->db->query("SELECT * FROM rekjtm_ugc WHERE id_lok='".$id."'");
			return $hasil;
		}
		
		function showexviewfromdb($ryn)
		{
			$hasil=$this->db->query("SELECT * FROM kol_jtmrek a INNER JOIN rekjtm_ticmv b ON a.id=b.id_lok INNER JOIN rekjtm_sut c ON a.id=c.id_lok INNER JOIN rekjtm_ugc d ON a.id=d.id_lok WHERE a.ryn='".ucfirst($ryn)."'")->result();
			return $hasil;
		}
	}
?>