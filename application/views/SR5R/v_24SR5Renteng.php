
<section class="content-header">
     <h1>PROGRAM PENURUNAN SUSUT DISTRIBUSI</h1>
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
                    <h3 class="box-title"><font color="#f4f2f3">PRK.2015 DJT.2.4</font></h3> <br>  <small></small><br>
                </div><!-- /.box-header -->
				<div class="panel-group" id="accordion1">
			  <div class="panel panel-danger">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseFive">
			          Pembangunan SUTR untuk seri SR Renteng diatas 5 buah:
			        </a>
			      </h4>
			    </div>
			    <div id="collapseFive" class="panel-collapse collapse">			    
			    <form action="<?php echo base_url()?>m_21UpRTM/showlokfromdb" method="POST" name="mvline">
			    <div style="border: 0px solid 00000; color: black; font-family: arial; height: auto; overflow: auto; padding: 4px; text-align: left; width: auto;">
			    
                   <table id="lok_rdt" class="table table-bordered table-hover">
                       <thead bgcolor="#f9f9f9">
								<tr>
									<th hidden="yes" style="vertical-align: middle;" class="text-center">&nbsp;&nbsp;#&nbsp;&nbsp;</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">NO.</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">NO. Gambar</small></th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										Lokasi
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										Exsist
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										Penyulang
									</th>
									
									<th style="vertical-align: middle;" class="text-center" colspan="21">
										SUTR
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="3">
										SR
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										KETERANGAN
									</th>
																		
								</tr>
								<tr>
									<th class="text-center" rowspan="3">P<br>A<br>S<br>A<br>N<br>G<br>A<br>N									</th>
									<th class="text-center" colspan="10">POLE TOP ARRANGEMENT</th>
									<th class="text-center" rowspan="2">CONDUCTOR</th>
									<th class="text-center" rowspan="2">ESTIMASI<BR>JARAK</th>
									<th class="text-center" colspan="5">POLE SUPORTER</th>
									<th class="text-center" colspan="3">TIANG BETON</th>
									<th class="text-center" colspan="3">KONSTRUKSI</th>
								</tr>
							<tr>
								<th class="text-center">TR-1</th>
								<th class="text-center">TR-2</th>
								<th class="text-center">TR-3</th>
								<th class="text-center">TR-3A</th>
								<th class="text-center">TR-4</th>
								<th class="text-center">TR-4A</th>
								<th class="text-center">TR-5</th>
								<th class="text-center">TR-6</th>
								<th class="text-center">TR-6A</th>
								<th class="text-center">TR-7</th>
								
								<th class="text-center">GW</th>
								<th class="text-center">GW-N</th>
								<th class="text-center">HGW</th>
								<th class="text-center">SP</th>
								<th class="text-center">PONDASI<BR>TIANG</th>
								<th class="text-center">UTAMA</th>
								<th class="text-center">UTAMA (E)</th>
								<th class="text-center">NON<BR>UTAMA</th>
								<th class="text-center">SDES1</th>
								<th class="text-center">SDES2</th>
								<th class="text-center"></th>
								
								
							</tr>
							<tr>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								
								<th class="text-center">Kms</th>
								<th class="text-center">Gawang</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Bh</th>
								<th class="text-center" >Bh</th>
								<th class="text-center">Bh</th>
								<th class="text-center" >Bh</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center"></th>
							</tr>
							<tr>
								
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>								
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
							</tr>
							</thead>
							<tbody>
							
							</tbody>
							<!-- JUMLAHNYA TARUH SINI NANTI -->
							
	                   </table>
					   <br>
					   </div>
						</div>
						</div>
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
	