
<section class="content-header">
     <h1>PRK.2015 DJT.2.2</h1>
            <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-archive"></i> UPRTR</a></li>
              <li><a href="<?php echo base_url()?>UpRTR"><?php foreach($hasil as $listhasil): echo $listhasil->rayon; endforeach;?></a></li>
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
                    <h3 class="box-title"><font color="#f4f2f3"></font></h3> <br>  <small></small><br>
                </div><!-- /.box-header -->
				<div class="panel-group" id="accordion1">
			  <div class="panel panel-danger">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseFive">
			          Penggantian JTR penghantar telanjang menjadi TIC 
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
										Jumlah<small>X&nbsp;&nbsp;</small><br> ( kali ) Gangguan dalam 3 bulan
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										P<br>A<br>S<br>A<br>N<br>G<br>A<br>N
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="10">
										POLE TOP ARRANGEMENT
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="3" >
										<small>Conductor</small>
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="3">
										Estimasi<br>Jarak
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="2">
										<small>Conductor<br>Accesoriess</small>
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="5" rowspan="2">
										POLE SUPORTER
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="2">
										TIANG BETON
									</th>
									
									<th style="vertical-align: middle;" class="text-center" colspan="2">
										ACCESORIES
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										KETERANGAN
									</th>									
								</tr>
								<tr>
									<th class="text-center" rowspan="2">&nbsp&nbspTR-1&nbsp&nbsp</th>
									<th class="text-center" rowspan="2">&nbsp&nbspTR-2&nbsp&nbsp</th>
									<th class="text-center" rowspan="2">&nbsp&nbspTR-3&nbsp&nbsp</th>
									<th class="text-center" rowspan="2">&nbsp&nbspTR-3A&nbsp&nbsp</th>
									<th class="text-center" rowspan="2">&nbsp&nbspTR-4&nbsp&nbsp</th>
									<th class="text-center" rowspan="2">&nbsp&nbspTR-4A&nbsp&nbsp</th>
									<th class="text-center" rowspan="2">&nbsp&nbspTR-5&nbsp&nbsp</th>
									<th class="text-center" rowspan="2">&nbspTR-6&nbsp</th>
									<th class="text-center" rowspan="2">TR-6A</th>
									<th class="text-center" rowspan="2">&nbspTR-7&nbsp</th>
									<th class="text-center" colspan="2">LAMA</th>
									<th class="text-center" rowspan="2">UTAMA</th>
									<th class="text-center" rowspan="2">NON UTAMA</th>
									<th class="text-center" rowspan="2">SR di<br>Tiang Utama</th>
									<th class="text-center" rowspan="2">Ground <br> Luar</th>
							</tr>
							<tr>
								<th class="text-center">Insulated</th>
								<th class="text-center">Non<br>Insulated</th>
								<th class="text-center">GW</th>
								<th class="text-center">GW-N</th>
								<th class="text-center">HGW</th>
								<th class="text-center">HGW-N</th>
								<th class="text-center">SP</th>
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
								<th class="text-center" bgcolor="#f3504b">Gawang</th>
								<th class="text-center">Kms</th>
								<th class="text-center">Kms</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Bh</th>
								<th class="text-center">Bh</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
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
	