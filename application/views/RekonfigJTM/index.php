
<section class="content-header">
     <h1>Rekonfig Jaringan TM</h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-archive"></i> RekonfigJTM</a></li>
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
			    <div class="box">
                <div style="background-color: #4db4f9;" class="box-header">
                    <h3 class="box-title"><font color="#f4f2f3">Uraian & Lokasi (Rayon <?php echo $_SESSION['rayon'] ?>)</font></h3>
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
										Jumlah X( kali ) Gangguan dalam 3 bulan
									</th>
									<th style="vertical-align: middle;" class="text-center">
										STATUS
									</th>
									<th style="vertical-align: middle;" class="text-center">
										AKSI
									</th>
								</tr>
							</thead>
							<tbody>
							<form action="" method="post">
								<?php
								$i=1;
								
								foreach($hasil as $listhasil):
								if($listhasil->sutm=="1" AND $listhasil->mvtic=="1" AND $listhasil->ugc=="1")
								{
									$status="<span class='badge bg-green'>&nbsp;</span>";
								}
								elseif($listhasil->sutm=="0" AND $listhasil->mvtic=="0" AND $listhasil->ugc=="0")
								{
									$status="<span class='badge bg-red'>&nbsp;</span>";
								}
								else
								{
									$status="<span class='badge bg-yellow'>&nbsp;</span>";
								}
								echo "<tr>";
									echo "<td style='vertical-align: middle;' class='text-center'>".$i."</td>";
									echo "<td class='text-center'>".$listhasil->bgr_no."<br>".$listhasil->gbr2_no."</td>";
									echo "<td style='vertical-align: middle;'>".$listhasil->lks."</td>";
									echo "<td style='vertical-align: middle;'>".$listhasil->ryn."</td>";
									echo "<td class='text-center'>".$listhasil->exsist."<br>".$listhasil->penylang."</td>";
									echo "<td style='vertical-align: middle;' class='text-center'>".$listhasil->jlm_ganggu."</td>";
									echo "<td style='vertical-align: middle;' class='text-center'>".$status."</td>";
									?>
								<td width="175" class="text-center">
									<?php if($_SESSION['rayon']!="Semua") {?>
									<a class="btn btn-xs btn-danger" title="Hapus Member"  href="<?php echo base_url()?>RekonfigJTM/hapuslok/<?php echo $listhasil->id?>" onclick="return confirm('Anda Yakin Akan Menghapus DATA ?')"><i class="glyphicon glyphicon-trash"></i>&nbsp;Hapus</a>
									<?php echo "<a class='btn btn-xs btn-success' title='Ubah Data Member' href='".base_url()."RekonfigJTM/tambahjtm/".$listhasil->id."'><i class='glyphicon glyphicon-edit'></i>&nbsp;Edit</a>";
									}else{ ?>
									<input type="checkbox" name="sutm<?=$listhasil->id?>">	
									<input type="checkbox" name="mvtic<?=$listhasil->id?>">	
									<input type="checkbox" name="ugc<?=$listhasil->id?>">	
									<?php }
								echo "</td></tr>";
								$i++;
								endforeach;
								?>
								</form>
							</tbody>							
	                   </table>
	                   <br>               
	                   	<a class="btn btn-success" href="<?php echo base_url()?>RekonfigJTM/exporttoexcel/<?php echo $_SESSION['rayon'] ?>">Export Excel</a>
						
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
			         <form method="POST" action="<?php echo base_url()?>RekonfigJTM/saveaddlokasi" class="form-horizontal" role="form">
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
							<th style="vertical-align: middle;" class="text-center">
								Exsist/Penyulang
							</th>
							<th style="vertical-align: middle;" class="text-center">
								Jumlah X( kali ) Gangguan dalam 3 bulan
							</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<input type="hidden" value="<?php echo $_SESSION['rayon'] ?>" name="rayon">
						<td class="text-center"><input type="text" name="bgr_no" class="form-control1"></td>
						<td style="vertical-align: middle" rowspan="2" class="text-center"><input type="text" name="lks" class="form-control1"></td>
						<td><input type="text" name="ex_sist" class="form-control1"></td>
						<td style="vertical-align: middle" class="text-center" rowspan="2"><input type="text" name="jlm_ganggu" class="form-control1"></td>
					</tr>
					<tr>
						<td class="text-center"><input type="text" name="gbr2_no" class="form-control1"></td>
						<td class="text-center"><input type="text" name="penylang" class="form-control1"></td>
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