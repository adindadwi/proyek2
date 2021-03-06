
<section class="content-header">
     <h1>Pemasangan Keypoint/Sectionalizer </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-archive"></i> <?=$title?></a></li>
              <li><a href="<?php echo base_url()?>Section">lok_sect</a></li>
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
                    <h3 class="box-title"><font color="#f4f2f3">PENGADAAN DAN PEMASANGAN SECTIONALIZER</font></h3>
                </div><!-- /.box-header -->
			    <div class="box-body table-responsive">
                   <table id="lok_rejtm" class="table table-bordered table-hover">
                       <thead bgcolor="#f9f9f9">
								<tr>
									<tr>
									<th style="vertical-align: middle;" class="text-center">#</th>
									<th style="vertical-align: middle;" class="text-center">Tanggal</small></th>
									<th style="vertical-align: middle;" class="text-center" >
										Lokasi
									</th>
									<th style="vertical-align: middle;" class="text-center" >
										Rayon
									</th>
									<th style="vertical-align: middle;" class="text-center" >
										Exsist/Penyulang
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
									echo "<td class='text-center'>".$listhasil->gambar_no."<br>".$listhasil->gambar_no2	."</td>";
									echo "<td class='text-center'>".$listhasil->lok_sect."</td>";
									echo "<td class='text-center'>".$listhasil->wilayah."</td>";
									echo "<td class='text-center'>".$listhasil->exsisting."<br>".$listhasil->penyalur."</td>";
									
									?>
								<td width="175" class="text-center">
								<?php if($_SESSION['rayon']!="Semua") {?>
								<a class="btn btn-xs btn-danger" title="Hapus Member"  href="<?php echo base_url()?>section/deletesect/<?php echo $listhasil->id_?>" onclick="return confirm('Anda Yakin Akan Menghapus DATA ?')"><i class="glyphicon glyphicon-trash"></i>&nbsp;Hapus</a>
								<?php echo "<a class='btn btn-xs btn-success' title='Ubah Data Member' href='".base_url()."section/addsection/".$listhasil->id_."'><i class='glyphicon glyphicon-edit'></i>&nbsp;Detail</a>";
								}else{ ?>
									<input type="checkbox" name="sutm<?=$listhasil->id_?>">	
									<input type="checkbox" name="mvtic<?=$listhasil->id_?>">	
									<input type="checkbox" name="ugc<?=$listhasil->id_?>">	
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
			   <div style="width: 1000px; height: 600px" class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title">ADD LOKASI</h4>
			      </div>
			      <div class="modal-body">
			        <div class="row">
			         <form method="POST" action="<?php echo base_url()?>section/saveaddlokasi" class="form-horizontal" role="form">
		        <div class="panel panel-primary filterable">
		            <div class="panel-heading">
		                <h6 class="panel-title">LOKASI</h6>
		            </div>	
				<table class="table table-bordered" border="2" width="100%">
					<thead bgcolor="#a8acb7">
						<tr>
							<th class="text-center" rowspan="2">
								Tanggal
							</th>
							<th class="text-center" rowspan="2">
								Lokasi
							</th>
							<th class="text-center" rowspan="2">
								Exsist/Penyulang
							</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td class="text-center"><input type="text" name="gambar_no" class="form-control1"></td>
						<td style="vertical-align: middle" rowspan="2" class="text-center"><input type="text" name="lok_sect" class="form-control1"></td>
						<td><input type="text" name="exsisting" class="form-control1"></td>
						
					</tr>
					<tr>
						<td class="text-center"><input type="text" name="gambar_no2" class="form-control1"></td>
						<td class="text-center"><input type="text" name="penyalur" class="form-control1"></td>
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
