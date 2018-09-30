
<section class="content-header">
     <h1>Penggantian Trafo Tua/Cadang</h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-archive"></i> <?=$title?></a></li>
              <li><a href="<?php echo base_url()?>Trafotua">lokasi</a></li>
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
                   <table id="lok_rejtm" class="table table-bordered table-hover">
                       <thead bgcolor="#f9f9f9">
								<tr>
									<tr>
									<th style="vertical-align: middle;" class="text-center">#</th>
									<th style="vertical-align: middle;" class="text-center" >
										Lokasi
									</th>
									<th style="vertical-align: middle;" class="text-center" >
										Rayon
									</th>
									<th style="vertical-align: middle;" class="text-center" >
										Exsist
									</th>
									<th style="vertical-align: middle;" class="text-center" >
										Penyulang
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
									echo "<td class='text-center'>".$listhasil->lokasi."</td>";
									echo "<td class='text-center'>".$listhasil->rayon."</td>";
									echo "<td class='text-center'>".$listhasil->exsist."</td>";
									echo "<td class='text-center'>".$listhasil->penyulang."</td>";
									
									?>
								<td width="175" class="text-center">
								<?php if($_SESSION['rayon']!="Semua") {?>
								<a class="btn btn-xs btn-danger" title="Hapus Member"  href="<?php echo base_url()?>Trafotua/deletetrafo/<?php echo $listhasil->id?>" onclick="return confirm('Anda Yakin Akan Menghapus DATA ?')"><i class="glyphicon glyphicon-trash"></i>&nbsp;Hapus</a>
								<?php echo "<a class='btn btn-xs btn-success' title='Ubah Data Member' href='".base_url()."Trafotua/Addtrafo/".$listhasil->id."'><i class='glyphicon glyphicon-edit'></i>&nbsp;Edit</a>";
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
			   <div style="width: 1000px; height: 600px" class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title">ADD LOKASI</h4>
			      </div>
			      <div class="modal-body">
			        <div class="row">
			         <form method="POST" action="<?php echo base_url()?>Trafotua/saveaddlokasi" class="form-horizontal" role="form">
		        <div class="panel panel-primary filterable">
		            <div class="panel-heading">
		                <h6 class="panel-title">LOKASI</h6>
		            </div>	
				<table class="table table-bordered" border="2" width="100%">
					<thead bgcolor="#a8acb7">
						<tr>
							<th class="text-center" rowspan="2">
								Lokasi
							</th>
							<th class="text-center" rowspan="2">
								Exsist
							</th>
							<th class="text-center" rowspan="2">
								Penyulang
							</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td style="vertical-align: middle;" rowspan="2" class="text-center"><input type="text" name="lokasi" class="form-control1" placeholder="Lokasi..."/></td>
						<td style="vertical-align: middle;" rowspan="2" class="text-center"><input type="text" name="exsist" class="form-control1" placeholder="Exsist..."/></td>
						<td style="vertical-align: middle;" rowspan="2" class="text-center"><input type="text" name="penyulang" class="form-control1" placeholder="Penyulang..."/></td>
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
