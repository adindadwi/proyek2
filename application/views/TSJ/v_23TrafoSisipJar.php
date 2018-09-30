
<section class="content-header">
     <h1>Trafo Sisip + Jaringan</h1>
            <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-archive"></i> Trafo Sisip + Jaringan</a></li>
              <li><a href="<?php echo base_url()?>Trafosisipjar"><?php foreach($hasil as $listhasil): echo $listhasil->rayon; endforeach;?></a></li>
              <li class="active">Edit</li>
            </ol>
</section>

<section class="content">
<?php echo $_SESSION['log'];
	$_SESSION['log']="";
 ?><!-- Page content -->
      <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
          <div class="row">
            <div class="col-md-12">
             <div class="panel panel-primary filterable">
				<div class="panel-heading">
				    <h3 class="panel-title">PEMBANGUNAN TRAFO SISIPAN, DAN JARINGAN PENUNJANG ( SUTM, SUTR )</h3>
				 </div>	
             <table class="table-bordered" width="100%">
							<thead bgcolor="#a8acb7">
								<tr>
									<th hidden="yes" style="vertical-align: middle;" class="text-center">&nbsp;&nbsp;#&nbsp;&nbsp;</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">NO.</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">NO. Gambar</small></th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										Lokasi
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										Exsist / <br> Penyulang
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										Jumlah<small>X&nbsp;&nbsp;</small><br> ( kali ) Gangguan dalam 3 bulan
									</th>
									
									<th style="vertical-align: middle;" class="text-center" colspan="20">
										SUTM
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="13">
										TRAFO
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="20">
										SUTR
									</th>								
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										KETERANGAN
									</th>									
								</tr>
								<tr>
									<th class="text-center" rowspan="3">P<br>A<br>S<br>A<br>N<br>G<br>A<br>N</th>
									<th class="text-center" colspan="11">POLETOP ARRANGEMENT</th>
									<th class="text-center" rowspan="2">Estimasi<br>Jarak</th>
									<th class="text-center">Conductor<br>ACC</th>
									<th class="text-center" colspan="3">POLE SUPPORTER</th>
									<th class="text-center" colspan="2">TIANG BETON</th>
									<th class="text-center" rowspan="2">KONSTRUKSI<BR>TM-1</th>
									<th class="text-center" colspan="5">DAYA TRAFO</th>
									<th class="text-center" colspan="2">TIANG</th>
									<th class="text-center" colspan="3">KONST. PENGAMAN</th>
									<th class="text-center" colspan="2">PONDASI TIANG</th>
									<th class="text-center" rowspan="3">P<br>A<br>S<br>A<br>N<br>G<br>A<br>N</th>
									<th class="text-center" colspan="10">POLETOP ARRANGEMENT</th>
									<th class="text-center" rowspan="2">Conductor</th>
									<th class="text-center" rowspan="2">Estimasi<br>Jarak</th>
									<th class="text-center" colspan="5">POLE SUPPORTER</th>
									<th class="text-center" colspan="3">TIANG BETON</th>
							</tr>
							<tr>
								<th class="text-center">TM-1</th>
								<th class="text-center">TM-2</th>
								<th class="text-center">TM-4</th>
								<th class="text-center">TM-4X</th>
								<th class="text-center">TM-5</th>
								<th class="text-center">TM-8</th>
								<th class="text-center">TM-8X</th>
								<th class="text-center">TM-8XC</th>
								<th class="text-center">TM-10</th>
								<th class="text-center">TM-10X</th>
								<th class="text-center">TM-10XC</th>
								<th class="text-center">AAAC-S<BR>/AAAC</th>
								
								<th class="text-center">Ferleng<br>Stuck</th>
								<th class="text-center">GUYWIRE</th>
								<th class="text-center">HGW</th>
								<th class="text-center">SP</th>
								<th class="text-center">Utama</th>
								<th class="text-center">Penyangga</th>
								<th class="text-center">50 KVA</th>
								<th class="text-center">100 KVA</th>
								<th class="text-center">160 KVA</th>
								<th class="text-center">200 KVA</th>
								<th class="text-center">250 KVA</th>
								<th class="text-center">13 Mtr</th>
								<th class="text-center">13 Mtr + <br> EARTH (E)</th>
								<th class="text-center">DEAD END<BR>ASS.(DEA)<BR>(TR-3)</th>
								<th class="text-center">JUMLAH<BR>TARIKAN SR DI<BR>TIANG UTAMA</th>
								<th class="text-center">TYPE A<BR>(1 TIANG)</th>
								<th class="text-center">TYPE C/D<BR>(2 TIANG)</th>
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
								<th class="text-center">UTAMA<BR>(E)</th>
								<th class="text-center">PENYANGGA</th>
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
								<th class="text-center">Set</th>
								<th class="text-center">Kms</th>
								<th class="text-center">Gawang</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Bh</th>
								<th class="text-center">Bh</th>
								<th class="text-center">Set</th>
								<th class="text-center">Bh</th>
								<th class="text-center">Bh</th>
								<th class="text-center">Bh</th>
								<th class="text-center">Bh</th>
								<th class="text-center">Bh</th>
								<th class="text-center">Bh</th>
								<th class="text-center">Bh</th>
								<th class="text-center">Bh</th>
								<th class="text-center">Bh</th>
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
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Kms</th>
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
	