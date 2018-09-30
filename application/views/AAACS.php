
<section class="content-header">
     <h1>REHABILITASI JARINGAN</h1>
	 <h3> - Penggantian JTM telanjang menjadi AAAC-S 150 mm2 / jaringan tua	</h3>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Dashboard</li>
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
                    <h3 class="box-title"><font color="#f4f2f3">Tabel Lokasi</font></h3>                                    
                </div><!-- /.box-header -->
                <div class="box-body">
                   <table id="lok_rdt" class="table table-bordered table-hover">
                       <thead bgcolor="#f9f9f9">
								<tr>
									<th hidden="yes" style="vertical-align: middle;" class="text-center">&nbsp;&nbsp;#&nbsp;&nbsp;</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="3">
										No.
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="3">
										No.Gambar
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="3">
										Lokasi
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="3">
										EXSIST
									<th style="vertical-align: middle;" class="text-center" colspan="3">
										JUMLAH X (kali) Gangguan dalam 3 bulan
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="3">
										Aksi
									</th>
									
								</tr>
								
							</thead>
							<tbody>
							<?php
								$i=1;
								foreach($hasil as $listhasil):
								
								
								echo "<tr>";
									echo "<td hidden='yes' class='text-center'>".$i."</td>";
									echo "<td class='text-center'>".$listhasil->NO_GAMBAR."</td>";
									echo "<td class='text-center'>".$listhasil->LOKASI."</td>";
									echo "<td class='text-center'>".$listhasil->EXSIST."</td>";
									echo "<td class='text-center'>".$listhasil->JUMLAH."</td>";
															
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
	                   	<a class="btn btn-success" href="<?php echo base_url()?>reconducmv/exporttoexcel">Export Excel</a>
						<a class="btn btn-success" href="<?php echo base_url()?>reconducmv/exporttopdf">Export PDF</a>
	                </div><!-- /.box-body -->
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
			         <form method="POST" action="<?php echo base_url()?>rlv/saveaddlokasi" class="form-horizontal" role="form">
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
	