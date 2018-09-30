
<section class="content-header">
     <h1>PRK.2015 DIT.1.10</h1>
            <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-archive"></i> <?=$title?></a></li>
              <li><a href="<?php echo base_url()?>Trafotua"><?php foreach($hasil as $listhasil): echo $listhasil->rayon; endforeach;?></a></li>
              <li class="active">Edit</li>
            </ol>
</section>

<section class="content">
<?php echo $_SESSION['log'];
	$_SESSION['log']="";
 ?>
     <!-- Page content -->
          <div class="row">
             <div class="col-xs-12">
             <div class="box">
                <div style="background-color: #4db4f9;" class="box-header">
                    <h3 class="box-title"><font color="#f4f2f3">TRAFO TUA-CADANG</font></h3> <br>  <small></small><br>
                </div><!-- /.box-header -->
				<div class="panel-group" id="accordion1">
			  <div class="panel panel-danger">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseFive">
			          Pengganti Trafo tua / cadang
			        </a>
			      </h4>
			    </div>
			    <div id="collapseFive" class="panel-collapse collapse">			    
			    <form action="<?php echo base_url()?>m_trafotua/showlokfromdb" method="POST" name="mvline">
			    <div style="border: 0px solid 00000; color: black; font-family: arial; height: auto; overflow: auto; padding: 4px; text-align: left; width: auto;">
			    
                  <table id="lok_rdt" class="table table-bordered table-hover">
                       <thead bgcolor="#f9f9f9">
								<tr>
									<th hidden="yes" style="vertical-align: middle;" class="text-center">&nbsp;&nbsp;#&nbsp;&nbsp;</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										No.
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										Lokasi
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										Exist
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										Penyulang
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										Pasangan
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="13">
										Kondisi Trafo di Lokasi
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="2" colspan="3">
										Trafo Pengganti
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										KET
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										Aksi
									</th>
									
								</tr>
								
								<tr style="height: 10px">									
									<th class="text-center" colspan="5">
										Daya Trafo
									</th>
									<th class="text-center" colspan="3">
										Type Tiang
									</th>
									<th class="text-center" rowspan="2">
										Produksi TH
									</th>
									<th class="text-center" rowspan="3">
										Pabrik
									</th>
									<th class="text-center" rowspan="3">
										No. Seri
									</th>
									<th class="text-center" rowspan="3">
										Beban(%)
									</th>
									<th class="text-center" rowspan="3">
										Lama Operasi(TH)
									</th>
								</tr>
								
								<tr style="height: 10px">	
								
									<th class="text-center">
										50KVA
									</th>
									<th class="text-center">
										100KVA
									</th>
									<th class="text-center">
										160KVA
									</th>
									<th class="text-center">
										200KVA
									</th>
									<th class="text-center">
										250KVA
									</th>
									<th class="text-center">
										1Tiang
									</th>
									<th class="text-center">
										2Tiang
									</th>
									<th class="text-center">
										Pondasi
									</th>							
									<th class="text-center">
										100KVA
									</th>
									<th class="text-center">
										160KVA
									</th>
									<th class="text-center">
										250KVA
									</th>
								</tr>
								
								<tr style="height: 10px;">
									<th class="text-center">Bh</th>
									<th class="text-center">Bh</th>
									<th class="text-center">Bh</th>
									<th class="text-center">Bh</th>
									<th class="text-center">Bh</th>
									<th class="text-center">Bh</th>
									<th class="text-center">Bh</th>
									<th class="text-center">Set</th>
									<th class="text-center">Set</th>
									<th class="text-center">Bh</th>
									<th class="text-center">Bh</th>
									<th class="text-center">Bh</th>
								</tr>
								
							</thead>
							<tbody>
							<?php
								$i=1;
								foreach($hasil as $listhasil):
								
								
								echo "<tr>";
									echo "<td hidden='yes' class='text-center'>".$i."</td>";
									echo "<td class='text-center'>".$listhasil->NO_AWAL."</td>";
									echo "<td class='text-center'>".$listhasil->NO_REVISI."</td>";
									echo "<td>".$listhasil->LOKASI."</td>";
									echo "<td class='text-center'>".$listhasil->EXSIST."</td>";
									echo "<td class='text-center'>".$listhasil->NO_GAMBAR."</td>";
									echo "<td class='text-center'>".$listhasil->KOORDINAT_S."<br>".$listhasil->KOORDINAT_E."</td>";
									
									?>
								<td width="175" class="text-center"><a class="btn btn-xs btn-danger" title="Hapus Member"  href="<?php echo base_url()?>rlv/deleterlvadb/<?php echo $listhasil->ID?>" onclick="return confirm('Anda Yakin Akan Menghapus DATA ?')"><i class="glyphicon glyphicon-trash"></i>&nbsp;Hapus</a>
								<?php echo "<a class='btn btn-xs btn-success' title='Ubah Data Member' href='".base_url()."rlv/addvline/".$listhasil->ID."'><i class='glyphicon glyphicon-edit'></i>&nbsp;Edit</a></td>";
								echo "</tr>";
								$i++;
								endforeach;
								?>
							</tbody>
	                   </table>
					   <br>
					   </div>
						</div>
						</div>
						
						
	                   
					   
					  
	            </div><!-- /.box -->
			</div>
		</div>
	</section>
	
	<!-- modal e bos -->
	<div class="modal fade" id="inaddModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div style="width: 800px" class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title">ADD LOKASI</h4>
			      </div>
			      <div class="modal-body">
			        <div class="row">
			         <form method="POST" action="<?php echo base_url()?>reconducmv/saveaddlokasi" class="form-horizontal" role="form">
		        <div class="panel panel-primary filterable">
		            <div class="panel-heading">
		                <h6 class="panel-title">LOKASI</h6>
		            </div>	
				<table class="table-bordered" border="2" width="100%">
					<thead bgcolor="#a8acb7">
						<tr>
							<th class="text-center" colspan="2">
								No.Urut Lokasi
							</th>
							<th class="text-center" rowspan="2">
								Lokasi
							</th>
							<th class="text-center" rowspan="2">
								Exsist
							</th>
							<th class="text-center" rowspan="2">
								No.Gambar
							</th>
							<th class="text-center" rowspan="2">
								Koordinat
							</th>
						</tr>
						<tr>
							<th class="text-center">AWAL<br>(KONTRAK)</th>
							<th class="text-center">PENGGANTI<br>(REVISI)</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td rowspan="2" class="text-center"><input type="text" name="awal" class="form-control" placeholder="No.Awal..."/></td>
						<td rowspan="2" class="text-center"><input type="text" name="revisi" class="form-control" placeholder="No.Revisi..."/></td>
						<td rowspan="2"><input type="text" name="lokasi" class="form-control" placeholder="Lokasi..."/></td>
						<td rowspan="2"><input type="text" name="exsist" class="form-control" placeholder="Exsist..."/></td>
						<td class="text-center" rowspan="2"><input type="text" name="no_gmb" class="form-control" placeholder="No.Gambar..."/></td>
						<td><input type="text" name="s_kordinat" class="form-control" placeholder="Koordinat S..."/></td>
					</tr>
					<tr>
						<td><input type="text" name="e_kordinat" class="form-control" placeholder="Koordinat E..."/></td>
					</tr>
					</tbody>
				</table>
			   </div>
		    </div>
                                  
			      </div>
					<div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			        <button class="btn btn-primary">Kirim</button>
			        </form>
					</div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
	