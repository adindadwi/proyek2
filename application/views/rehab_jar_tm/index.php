
<section class="content-header">
     <h1>REHABILITASI JARINGAN TM</h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-archive"></i> <?=$title?></a></li>
              <li><a href="<?php echo base_url()?>rehab_jar_tm">lokasi</a></li>
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
			    
			</div>
	
             <div class="box">
                <div style="background-color: #4db4f9;" class="box-header">
                    <h3 class="box-title"><font color="#f4f2f3">Penggantian JTM telanjang menjadi AAAC-S 150 mm2 / jaringan tua</font></h3>
                </div><!-- /.box-header -->
			    <div class="box-body table-responsive">
                   <table id="lok_rejtm" class="table table-bordered table-hover">
                       <thead bgcolor="#f9f9f9">
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
									</th>
									<th style="vertical-align: middle;" class="text-center" >
										Exsist
									</th>									
									<th style="vertical-align: middle;" class="text-center" >
										Jumlah<small> X&nbsp;&nbsp;</small><br>( kali ) Gangguan dalam 3 bulan
									</th>
									<th style="vertical-align: middle;" class="text-center" >
										Aksi
									</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i=1;
								foreach($hasil as $listhasil):
								echo "<tr>";
									echo "<td hidden='yes' class='text-center'>".$i."</td>";
									echo "<td class='text-center'>".$listhasil->no_gambar."</td>";
									echo "<td class='text-center'>".$listhasil->lokasi."</td>";
									echo "<td class='text-center'>".$listhasil->rayon."</td>";
									echo "<td class='text-center'>".$listhasil->exsist."</td>";
									echo "<td class='text-center'>".$listhasil->jumlah_X."</td>";
									?>
								<td width="175" class="text-center"><a class="btn btn-xs btn-danger" title="Hapus Data"  href="<?php echo base_url()?>rehab_jar_tm/deletelok/<?php echo $listhasil->id_lokmm2?>" onclick="return confirm('Anda Yakin Akan Menghapus DATA ?')"><i class="glyphicon glyphicon-trash"></i>&nbsp;Hapus</a>
								<?php echo "<a class='btn btn-xs btn-success' title='Ubah Data' href='".base_url()."rehab_jar_tm/addline/".$listhasil->id_lokmm2."'><i class='glyphicon glyphicon-edit'></i>&nbsp;Edit</a></td>";
								echo "</tr>";
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
     <!-- Page content -->
          <div class="row">
             <div class="col-xs-12">
             <div class="box">
                <div style="background-color: #4db4f9;" class="box-header">
                    <h3 class="box-title"><font color="#f4f2f3">Penggantian JTM telanjang menjadi MVTIC 3X150 mm2 + 1X95 mm2</font></h3>
                </div><!-- /.box-header -->
			    <div class="box-body table-responsive">
				
				<a class="btn btn-primary" data-toggle="modal" data-target="#inaddModal1"><i class="glyphicon glyphicon-plus"></i> Tambah</a><br><br>
                   <table id="lok_rejtm" class="table table-bordered table-hover">
                       <thead bgcolor="#f9f9f9">
								<tr>
									<th hidden="yes" style="vertical-align: middle;" class="text-center">&nbsp;&nbsp;#&nbsp;&nbsp;</th>
									<th style="vertical-align: middle;" class="text-center" >
										No.Gambar
									</th>
									<th style="vertical-align: middle;" class="text-center" >
										Lokasi&nbsp;Pekerjaan
									</th>
									<th style="vertical-align: middle;" class="text-center" >
										Exsist
									</th>									
									<th style="vertical-align: middle;" class="text-center" >
										Jumlah<small> X&nbsp;&nbsp;</small><br>( kali ) Gangguan dalam 3 bulan
									</th>
									<th style="vertical-align: middle;" class="text-center" >
										Aksi
									</th>
								</tr>
						</thead>
						<tbody>
							<?php
								$i=1;
								foreach($hasil1 as $listhasil1):
								echo "<tr>";
									echo "<td hidden='yes' class='text-center'>".$i."</td>";
									echo "<td class='text-center'>".$listhasil1->no_gambar."</td>";
									echo "<td class='text-center'>".$listhasil1->lokasi."</td>";
									echo "<td class='text-center'>".$listhasil1->exsist."</td>";
									echo "<td class='text-center'>".$listhasil1->jumlah_X."</td>";
									?>
								<td width="175" class="text-center">
								<?php if($_SESSION['rayon']!="Semua") {?>
								<a class="btn btn-xs btn-danger" title="Hapus Data"  href="<?php echo base_url()?>rehab_jar_tm/deletelok1/<?php echo $listhasil1->id_lokmm3?>" onclick="return confirm('Anda Yakin Akan Menghapus DATA ?')"><i class="glyphicon glyphicon-trash"></i>&nbsp;Hapus</a>
								<?php echo "<a class='btn btn-xs btn-success' title='Ubah Data Member' href='".base_url()."rehab_jar_tm/addline2/".$listhasil1->id_lokmm3."'><i class='glyphicon glyphicon-edit'></i>&nbsp;Edit</a>";
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
	
	
	
	
	
	
	
	<div class="modal fade" id="inaddModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div style="width: 1000px; height: 600px" class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title">ADD LOKASI</h4>
			      </div>
			      <div class="modal-body">
			        <div class="row">
			         <form method="POST" action="<?php echo base_url()?>rehab_jar_tm/saveaddlokasi" class="form-horizontal" role="form">
		        <div class="panel panel-primary filterable">
		            <div class="panel-heading">
		                <h6 class="panel-title">Penggantian JTM telanjang menjadi AAAC-S 150 mm2 / jaringan tua</h6>
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
						<td style="vertical-align: middle;" rowspan="2" class="text-center"><input type="text" name="no_gambar" class="form-control1" placeholder="No.Gambar..."/></td>
						<td style="vertical-align: middle;" rowspan="2" class="text-center"><input type="text" name="lokasi" class="form-control1" placeholder="Lokasi..."/></td>
						<td style="vertical-align: middle;" rowspan="2"><input type="text" name="exsist" class="form-control1" placeholder="Exsist..."/></td>
						<td class="text-center"><input type="text" name="jumlah_x" class="form-control1" placeholder="Jumlah x Gangguan..."/></td>
						
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
	
<div class="modal fade" id="inaddModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div style="width: 1000px; height: 600px" class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title">ADD LOKASI</h4>
			      </div>
			      <div class="modal-body">
			        <div class="row">
			         <form method="POST" action="<?php echo base_url()?>rehab_jar_tm/saveaddlokasi1" class="form-horizontal" role="form">
		        <div class="panel panel-primary filterable">
		            <div class="panel-heading">
		                <h6 class="panel-title">Penggantian JTM telanjang menjadi MVTIC 3X150 mm2 + 1X95 mm2</h6>
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
						<td style="vertical-align: middle;" rowspan="2" class="text-center"><input type="text" name="no_gambar" class="form-control1" placeholder="No.Gambar..."/></td>
						<td style="vertical-align: middle;" rowspan="2" class="text-center"><input type="text" name="lokasi" class="form-control1" placeholder="Lokasi..."/></td>
						<td style="vertical-align: middle;" rowspan="2"><input type="text" name="exsist" class="form-control1" placeholder="Exsist..."/></td>
						<td class="text-center"><input type="text" name="jumlah_x" class="form-control1" placeholder="Jumlah x Gangguan..."/></td>
						
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
		
			