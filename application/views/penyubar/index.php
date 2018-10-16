
<section class="content-header">
     <h1>Pembangunan Penyulang Baru</h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-archive"></i> <?=$title?></a></li>
              <li><a href="<?php echo base_url()?>penyubar">lokasi</a></li>
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
                    <h3 class="box-title"><font color="#f4f2f3">Uraian & Lokasi (Rayon <?=$_SESSION['rayon']?>)</font></h3>
                </div><!-- /.box-header -->
			    <div class="box-body table-responsive">
                   <table id="lok_rejtm" class="table table-bordered table-hover">
                       <thead bgcolor="#f9f9f9">
								<tr>
									<th style="vertical-align: middle;">#&nbsp;</th>
									<th style="vertical-align: middle;" class="text-center">NO. Gambar</small></th>
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
										KETERANGAN
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
									echo "<tr>";
									echo "<td style='vertical-align: middle;' class='text-center'>".$i."</td>";
									echo "<td class='text-center'>".$listhasil->n_gbr1."<br>".$listhasil->n_gbr2."</td>";
									echo "<td style='vertical-align: middle;'>".$listhasil->lks."</td>";
									echo "<td style='vertical-align: middle;'>".$listhasil->ryn."</td>";
									echo "<td class='text-center'>".$listhasil->ex_sist."<br>".$listhasil->penylang."</td>";
									echo "<td style='vertical-align: middle;' class='text-center'>".$listhasil->jlm_gangguan."</td>";
									echo "<td>&nbsp;</td>";
									?>
								<td width="175" class="text-center">
								<?php if($_SESSION['rayon']!="Semua") {?>
								<a class="btn btn-xs btn-danger" title="Hapus Member"  href="<?php echo base_url()?>penyubar/hapuslok/<?php echo $listhasil->id?>" onclick="return confirm('Anda Yakin Akan Menghapus DATA ?')"><i class="glyphicon glyphicon-trash"></i>&nbsp;Hapus</a>
								<?php echo "<a class='btn btn-xs btn-success' title='Ubah Data Member' href='".base_url()."penyubar/tambahjtm/".$listhasil->id."'><i class='glyphicon glyphicon-edit'></i>&nbsp;Edit</a>";
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
	                   	<!--<a class="btn btn-success" href="<?php echo base_url()?>penyubar/exporttoexcel/<?php echo $_SESSION['rayon'] ?>">Export Excel</a>-->
						
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
			         <form method="POST" action="<?php echo base_url()?>penyubar/saveaddlokasi" class="form-horizontal" role="form">
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
							<th style="vertical-align: middle;" class="text-center">NO. Gambar</small></th>
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
						<td class="text-center"><input type="text" name="nogmb" class="form-cont rol1"></td>
						<td style="vertical-align: middle" rowspan="2" class="text-center"><input type="text" name="lks" class="form-control1"></td>
						<td><input type="text" name="exsist" class="form-control1"></td>
						<td style="vertical-align: middle" class="text-center" rowspan="2"><input type="text" name="jlm_gangguan" class="form-control1"></td>
					</tr>
					<tr>
						<td class="text-center"><input type="text" name="n_gbr2" class="form-control1"></td>
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

