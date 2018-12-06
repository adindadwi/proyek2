<section class="content-header">
     <h1>Uprating Jaringan TR</h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-archive"></i> <?=$title?></a></li>
              <li><a href="<?php echo base_url()?>UpRTR">lokasi</a></li>
            </ol>
</section><section class="content">
<?php echo $_SESSION['log'];
	$_SESSION['log']="";
 ?>
     <!-- Page content -->
          <div class="row">
             <div class="col-xs-12">
			 
			  <div class="box">
                <div style="background-color: #2db030;" class="box-header">
                    <h3 class="box-title"><font color="#f4f2f3">Area Malang</font></h3>
                </div><!-- /.box-header -->
			    <div class="box-body table-responsive">
				<form action="<?php echo base_url()?>UpRTR/lokasi" method="POST">
					<div class="form-group">
                        <label for="nama" class="col-md-1 control-label">Rayon</label>
                        <div class="col-md-5">
							<select class="form-control1" name="rayon" id="select">
								<option selected value="">--Pilih Rayon--</option>
								<option value="Lawang">Lawang</option>
								<option value="Bululawang">Bululawang</option>
								<option value="Batu">Batu</option>
								<option value="Singosari">Singosari</option>
								<option value="Kepanjen">Kepanjen</option>
								<option value="Gondanglegi">Gondanglegi</option>
								<option value="Dampit">Dampit</option>
								<option value="Ngantang">Ngantang</option>
								<option value="Sumber Pucung">Sumber Pucung</option>
								<option value="Dinoyo">Dinoyo</option>
								<option value="Blimbing">Blimbing</option>
								<option value="Malang Kota">Malang Kota</option>
								<option value="Kebon Agung">Kebon Agung</option>
								<option value="Semua">--Semua--</option>
							</select>
                        </div>
                    </div>
					<br><br><br>
					<input type="submit" class="btn btn-success" name='sbmtrayon' value="submit">&nbsp;&nbsp;<input type="reset" class="btn btn-warning" name='rstrayon' value="Reset"><br><br>
				</form>
				</div>
			</div>
			 
             <div class="box">
                <div style="background-color: #4db4f9;" class="box-header">
                    <h3 class="box-title"><font color="#f4f2f3">Penggantian JTR penghantar telanjang menjadi TIC 3x70+50mm2</font></h3>
                </div><!-- /.box-header -->
			    <div class="box-body table-responsive">
                   <table id="lok_rejtm" class="table table-bordered table-hover">
                       <thead bgcolor="#f9f9f9">
								<tr>
									<tr>
									<th hidden="yes" style="vertical-align: middle;" class="text-center">&nbsp;&nbsp;#&nbsp;&nbsp;</th>
									<th style="vertical-align: middle;" class="text-center" >
										No.Gambar
									</th>
									<th style="vertical-align: middle;" class="text-center" >
										Lokasi&nbsp;Pekerjaan
									</th>
									<th style="vertical-align: middle;" class="text-center" >
										Rayon
									</th><th style="vertical-align: middle;" class="text-center" >
										Exsist
									</th>									
									<th style="vertical-align: middle;" class="text-center" >
										Jumlah<small> X&nbsp;&nbsp;</small><br>( kali ) Gangguan dalam 3 bulan
									</th>
									<th style="vertical-align: middle;" class="text-center" >
										Aksi
									</th>
								</tr>
								</tr>
							</thead>
							<tbody>
								<?php
								$i=1;
								foreach($hasil as $listhasil):
								echo "<tr>";
									echo "<td hidden='yes' class='text-center'>".$i."</td>";
									echo "<td class='text-center'>".$listhasil->gmb12."</td>";
									echo "<td class='text-center'>".$listhasil->lokasi."</td>";
									echo "<td class='text-center'>".$listhasil->rayon."</td>";
									echo "<td class='text-center'>".$listhasil->eksis."</td>";
									echo "<td class='text-center'>".$listhasil->jumX."</td>";
									?>
								<td width="175" class="text-center">
								<?php if($_SESSION['rayon']!="Semua") {?>
								<a class="btn btn-xs btn-danger" title="Hapus Data"  href="<?php echo base_url()?>UpRTR/deletelok/<?php echo $listhasil->lokrtr_id?>" onclick="return confirm('Anda Yakin Akan Menghapus DATA ?')"><i class="glyphicon glyphicon-trash"></i>&nbsp;Hapus</a>
								<?php echo "<a class='btn btn-xs btn-success' title='Ubah Data' href='".base_url()."UpRTR/addline/".$listhasil->lokrtr_id."'><i class='glyphicon glyphicon-edit'></i>&nbsp;Edit</a>";
								}else{ ?>
									<input type="checkbox" name="sutm<?=$listhasil->id?>">	
									<input type="checkbox" name="mvtic<?=$listhasil->id?>">	
									<input type="checkbox" name="ugc<?=$listhasil->id?>">	
									<?php }
								echo "</td></tr>";
								$i++;
								endforeach;
								?>
							</tbody>							
	                   </table>
	                   <br>               
	                   		<!--<a class="btn btn-success" href="<?php echo base_url()?>reconducmv/exporttoexcel">Export Excel</a> -->
	             </div><!-- /.box-body -->
	            </div><!-- /.box -->
			</div>
		</div>
	</section>
	
	<section class="content">
<?php echo $_SESSION['log'];
	$_SESSION['log']="";
 ?>
    
	</section>
	
	
	<!-- modal e bos -->
	<div class="modal fade" id="inaddModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div style="width: 1000px; height: 600px" class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title">ADD LOKASI</h4>
			      </div>
			      <div class="modal-body">
			        <div class="row">
			         <form method="POST" action="<?php echo base_url()?>UpRTR/saveaddlokasi" class="form-horizontal" role="form">
		        <div class="panel panel-primary filterable">
		            <div class="panel-heading">
		                <h6 class="panel-title">LOKASI Penggantian JTR penghantar telanjang menjadi TIC 3x70+50mm2</h6>
		            </div>	
				<table class="table table-bordered" border="2" width="100%">
					<thead bgcolor="#a8acb7">
						<tr>
							<th class="text-center" >
								No.Gambar
							</th>
							<th class="text-center" >
								Lokasi 
							</th>
							<th class="text-center" >
								Exsist
							</th>
							<th class="text-center" >
								Jumlah x <br>Gangguan dalam 3 bulan
							</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td style="vertical-align: middle;" rowspan="2" class="text-center"><input type="text" name="gmb12" class="form-control1" placeholder="No.Gambar..."/></td>
						<td style="vertical-align: middle;" rowspan="2" class="text-center"><input type="text" name="lokasi" class="form-control1" placeholder="Lokasi..."/></td>
						<td style="vertical-align: middle;" rowspan="2"><input type="text" name="eksis" class="form-control1" placeholder="Exsist..."/></td>
						<td class="text-center"><input type="text" name="jumX" class="form-control1" placeholder="Jumlah x Gangguan..."/></td>
						
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
	
