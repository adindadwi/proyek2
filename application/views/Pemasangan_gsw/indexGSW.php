<section class="content-header">
     <h1>Pemasangan GSW</h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-archive"></i> <?=$title?></a></li>
              <li><a href="<?php echo base_url()?>PemGSW">lokasi</a></li>
            </ol>
</section>

<section class="content">
<?php echo $_SESSION['log'];
	$_SESSION['log']="";
 ?>
 <div class="row">
             <div class="col-xs-12">
             <div class="box">
                <div style="background-color: #2db030;" class="box-header">
                    <h3 class="box-title"><font color="#f4f2f3">Area Malang</font></h3>
                </div><!-- /.box-header -->
			
			</div>
			
      <!-- Page content -->
          <div class="row">
             <div class="col-xs-12">
             <div class="box">
                <div style="background-color: #4db4f9;" class="box-header">
                    <h3 class="box-title"><font color="#f4f2f3">PEMASANGAN GROUND SHIELD WIRE 22 mm </font></h3>
                </div><!-- /.box-header -->
			    <div class="box-body table-responsive">
                   <table id="lok_rejtm" class="table table-bordered table-hover">
                       <thead bgcolor="#f9f9f9">
								<tr>
									<tr>
									<th style="vertical-align: middle;" class="text-center">#</th>
									<th style="vertical-align: middle;" class="text-center">No. Gambar</th>
									<th style="vertical-align: middle;" class="text-center" >
										Lokasi
									</th>
									<th style="vertical-align: middle;" class="text-center" >
										Rayon
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
									echo "<td style='vertical-align: middle;' class='text-center'>".$i."</td>";
									echo "<td class='text-center'>".$listhasil->no_gambar."<br>".$listhasil->no_gambar2."</td>";
									echo "<td class='text-center'>".$listhasil->lokasi."</td>";
									echo "<td class='text-center'>".$listhasil->rayon."</td>";
								?>
								<td width="175" class="text-center">
								<?php if($_SESSION['rayon']!="Semua") {?>
								<a class="btn btn-xs btn-danger" title="Hapus Member"  href="<?php echo base_url()?>PemGSW/deletegsw/<?php echo $listhasil->id?>" onclick="return confirm('Anda Yakin Akan Menghapus DATA ?')"><i class="glyphicon glyphicon-trash"></i>&nbsp;Hapus</a>
								<?php echo "<a class='btn btn-xs btn-success' title='Ubah Data Member' href='".base_url()."PemGSW/addgsw/".$listhasil->id."'><i class='glyphicon glyphicon-edit'></i>&nbsp;Edit</a>";
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
			         <form method="POST" action="<?php echo base_url()?>PemGSW/saveaddlokasi" class="form-horizontal" role="form">
		        <div class="panel panel-primary filterable">
		            <div class="panel-heading">
		                <h6 class="panel-title">LOKASI</h6>
		            </div>	
				<table class="table table-bordered" border="2" width="100%">
					<thead bgcolor="#a8acb7">
						<tr>
							<th class="text-center" rowspan="2">
								No.Gambar
							</th>
							<th class="text-center" rowspan="2">
								Lokasi
							</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td class="text-center"><input type="text" name="no_gambar" class="form-control1"></td>
						<td style="vertical-align: middle" rowspan="2" class="text-center"><input type="text" name="lokasi" class="form-control1"></td
						
					</tr>
					<tr>
						<td class="text-center"><input type="text" name="no_gambar2" class="form-control1"></td>
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
		<script type="text/javascript">
            $(function() {
                $("#lok_rejtm").dataTable();
            });
        </script>
