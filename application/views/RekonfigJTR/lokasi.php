
<section class="content-header">
     <h1>Rekonfig Jaringan TR</h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-archive"></i> <?=$title?></a></li>
              <li><a href="<?php echo base_url()?>RekonfigJTR">lokasi</a></li>
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
                <div style="background-color: #2db030;" class="box-header">
                    <h3 class="box-title"><font color="#f4f2f3">Area Malang</font></h3>
                </div><!-- /.box-header -->
			    <div class="box-body table-responsive">
				<form action="<?php echo base_url()?>RekonfigJTR/lokasi" method="POST">
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
                    <h3 class="box-title"><font color="#f4f2f3">Uraian & Lokasi(Rayon  <?php echo $_SESSION['rayon'] ?>)</font></h3>
                </div><!-- /.box-header -->
			    <div class="box-body table-responsive">
                   <table id="lok_rejtm" class="table table-bordered table-hover">
                       <thead bgcolor="#f9f9f9">
								<tr>
									<th style="vertical-align: middle;">#&nbsp;</th>
									<th style="vertical-align: middle;" class="text-center">NO. Gambar</th>
									<th style="vertical-align: middle;" class="text-center">
										Lokasi
									</th>
									<th style="vertical-align: middle;" class="text-center">
										Rayon
									</th>
									<th style="vertical-align: middle;" class="text-center">
										Exsist/Penyulang
									</th>
									<th style="vertical-align: middle;" class="text-center">
										Status
									</th>
									<th style="vertical-align: middle;" class="text-center">
										AKSI
									</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i=1;
								foreach($hasil as $listhasil):
								if($listhasil->status=="1")
								{
									$status="<span class='badge bg-green'>&nbsp;</span>";
								}
								else
								{
									$status="<span class='badge bg-red'>&nbsp;</span>";
								}
								echo "<tr>";
									echo "<td style='vertical-align: middle;' class='text-center'>".$i."</td>";
									echo "<td class='text-center'>".$listhasil->no_gmb1."<br>".$listhasil->no_gmb2."</td>";
									echo "<td style='vertical-align: middle;'>".$listhasil->lokasi."</td>";
									echo "<td style='vertical-align: middle;'>".$listhasil->rayon."</td>";
									echo "<td class='text-center'>".$listhasil->exsist."<BR>".$listhasil->penyulang."</td>";
									echo "<td style='vertical-align: middle;' class='text-center'>".$status."</td>";
									?>
								<td width="175" class="text-center">
								<?php if($_SESSION['rayon']!="Semua") {?>
								<a class="btn btn-xs btn-danger" title="Hapus Member"  href="<?php echo base_url()?>RekonfigJTR/hapuslok/<?php echo $listhasil->id?>" onclick="return confirm('Anda Yakin Akan Menghapus DATA ?')"><i class="glyphicon glyphicon-trash"></i>&nbsp;Hapus</a>
								<?php echo "<a class='btn btn-xs btn-success' title='Ubah Data Member' href='".base_url()."RekonfigJTR/tambahjtr/".$listhasil->id."'><i class='glyphicon glyphicon-edit'></i>&nbsp;Edit</a>";
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
	                   	<a class="btn btn-success" href="<?php echo base_url()?>RekonfigJTR/exporttoexcel/<?php echo $_SESSION['rayon'] ?>">Export Excel</a>
						
	                </div><!-- /.box-body -->
	            </div><!-- /.box -->
			</div>
		</div>
	</section>
	
	<?php
	if($_SESSION['rayon']!="Semua")
	{
	?>
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
			         <form method="POST" action="<?php echo base_url()?>RekonfigJTR/saveaddlokasi" class="form-horizontal" role="form">
		        <div class="panel panel-primary filterable">
		            <div class="panel-heading">
		                <h6 class="panel-title">LOKASI</h6>
		            </div>	
				<table class="table table-bordered" border="2" width="100%">
					<thead bgcolor="#f9f9f9">
						<tr>
							<th class="text-center" colspan="4">
								Uraian & Lokasi
							</th>
						</tr>
						<tr>
							<th style="vertical-align: middle;" class="text-center">NO. Gambar</th>
							<th style="vertical-align: middle;" class="text-center">
								Lokasi
							</th>
							<th colspan="2" style="vertical-align: middle;" class="text-center">
								Exsist/Penyulang
							</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<input type="hidden" value="<?php echo $_SESSION['rayon'] ?>" name="rayon">
						<td class="text-center"><input type="text" name="nogmb" class="form-control1"></td>
						<td style="vertical-align: middle" rowspan="2" class="text-center"><input type="text" name="lokasi" class="form-control1"></td>
						<td style="vertical-align: middle" rowspan="2" class="text-center"><input type="text" name="exsist" class="form-control1"></td>
						<td style="vertical-align: middle" rowspan="2" class="text-center"><input type="text" name="penyulang" class="form-control1"></td>
					</tr>
					<tr>
						<td class="text-center"><input type="text" name="nogmb1" class="form-control1"></td>
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
	<?php
	}
	?>
