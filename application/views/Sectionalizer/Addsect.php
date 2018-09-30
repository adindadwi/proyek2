
<section class="content-header">
     <h1>PRK.2015 DIT.1.11 </h1>
            <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-archive"></i> Sectionalizer</a></li>
              <li><a href="<?php echo base_url()?>Section"><?php foreach($hasil as $listhasil): echo $listhasil->rayon; endforeach;?></a></li>
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
                    <h3 class="box-title"><font color="#f4f2f3">Pengadaan dan Pemasangan Sectionalizer</font></h3>
                </div><!-- /.box-header -->
			    <div class="box-body table-responsive">
    			 <table class="table table-bordered table-hover">
                       <thead bgcolor="#f9f9f9">
								<tr>
									
									<th style="vertical-align: middle;" class="text-center">
										NO. Gambar
									</th>
									<th style="vertical-align: middle;" class="text-center">
										Lokasi
									</th>
									<th style="vertical-align: middle;" class="text-center">
										Exsist/Penyulang
									</th>
									<th style="vertical-align: middle;" class="text-center">
										KET
									</th>
									
									
								</tr>
								
							</thead>
							<tbody>
							<?php
								foreach($hasil as $listhasil):
								echo "<tr>";
									echo "<td class='text-center'>".$listhasil->no_gambar."<br>".$listhasil->no_gambar2."</td>";
									echo "<td class='text-center'>".$listhasil->lokasi."</td>";
									echo "<td class='text-center'>".$listhasil->exsist."<br>".$listhasil->penyulang."</td>";									
									echo "<td class='text-center'><input type='text' class='form-control1' name='ket'></td>";
								echo "</tr>";
								endforeach;
								?>
							</tbody>
						</table>
					</div>
					</div>
					<div style="height: 60px;">
			<?php echo form_open_multipart('Section/do_upload','class="form-horizontal"'); ?>
			<table>
				<tr>
					<?php
					foreach($hasil as $listhasil):
					echo "<input type='hidden' value='".$listhasil->id."' name='id_lok'>";
					endforeach;
					?>
					<td><label>Gambar : &nbsp;&nbsp;</label></td>
					<td><input type="file" class="form-control1" name="gambar_lok"></td>
					<td><button class="btn btn-primary" type="submit" name="gmb">Kirim</button></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td><a class="btn btn-small btn-warning" data-toggle="modal" data-target="#gambarModal">Lihat Gambar</a></td>
				</tr>
			</table>
			<?php echo form_close(); ?>
			</div>
			<div class="box">
        <!-- /.box-header -->
		<div class="box-body table-responsive">
			<div class="panel-group" id="accordion1">
			  <div class="panel panel-danger">
			    <div class="panel-heading">
			      <a data-toggle="collapse" data-parent="#accordion1" href="#collapseFive">
			      <h4 class="panel-title">
			      Masukan Data
			      </h4>
			      </a>
			    </div>
			    <div id="collapseFive" class="panel-collapse collapse in">			    
			    <form action="<?php echo base_url()?>Section/addsectline" method="POST" name="">
			    <div style="border: 0px solid 00000; color: black; font-family: arial; height: auto; overflow: auto; padding: 4px; text-align: left; width: auto;">
			    
					<table class="table table-bordered" width="100%" id="tab_logic">
                       <thead bgcolor="#f9f9f9">

							<tr>
								
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										Section KE
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="12">
										Kondisi Pemasangan di Lokasi
									</th>							
									
									
								</tr>
							<tr style="height: 10px">									
									<th class="text-center" colspan="7">
										EX. KONSTRUKSI
									</th>
									<th class="text-center" colspan="3">
										TAMBAHAN
									</th>
									<th class="text-center" colspan="2">
										KEBUTUHAN KELENGKAPAN
									</th>
								</tr>				
							<tr style="height: 10px">	
								
									<th class="text-center">
										TM 1
									</th>
									<th class="text-center">
										TM 2
									</th>
									<th class="text-center">
										TM 5
									</th>
									<th class="text-center">
										AVS
									</th>
									<th class="text-center">
										RECLOZER
									</th>
									<th class="text-center">
										LBS MOTORIZED PLUS RTU
									</th>
									<th class="text-center">
										LBS MOTORIZED NON RTU
									</th>
									<th class="text-center">
										RECLOZER
									</th>							
									<th class="text-center">
										LBS MOTORIZED PLUS RTU
									</th>
									<th class="text-center">
										LBS MOTORIZED NON RTU
									</th>
									<th class="text-center">
										PONDASI
									</th>
									<th class="text-center">
										...
									</th>
								</tr>
								<tr style="height: 10px;">
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
								</tr>
						</thead>
						<tbody>
								<?php
								foreach($hasil as $listhasil):
								echo "<input type='hidden' value='".$listhasil->id."' name='id_lok'>";
								endforeach;
								?>
								<td><input type="text"  maxlength="3" name="section_ke" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="tm1" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="tm2" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="tm5" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="avs" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="reclozer" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="lbs_mprtu" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="lbs_mnrtu" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"></td>
								<td><input type="text"  maxlength="3" name="reclozer2" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="lbs_mprtu2" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="lbs_mnrtu2" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="pondasi" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="lainnya" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								
						

						</tbody>
					</table>
					<br>
					</div>
					<br>
					<button type="submit" class="btn btn-primary">Simpan</button>&nbsp&nbsp<button type="reset" class="btn btn-success">Reset</button><br><br><br>
			      </form>
			      </div>
			    </div>
			  
			</div>
			 	
		 </div>
	   </div>
	</div>
	</div> 
	
</section><!-- /.content -->

<!-- modal e bos -->
	<div class="modal fade" id="gambarModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div style="width: 1080px; height: auto;" class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title"><span class="fa fa-picture-o"></span>&nbsp&nbsp Gambar Lokasi</h4>
			      </div>
			      <div class="modal-body">
			          <?php
			          if($cekgmb==0)
						 {
						 	echo "<font color='red'><center><b>Gambar Belum Di Inputkan</b></center></font>";
						 }
					  else
						 {
							foreach($gambar as $listhasil1):
						 	echo "<img style='height: 600px; width: 1020px;' src='".base_url()."assets/img/".$listhasil1->gambar."'/>";
							endforeach;
						}
						?>                               
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

<script src="<?php echo base_url()?>assets/dist/js/addline.min.js" type="text/javascript"></script>

<script language="javascript"> 
	function getkey(e) { 
	if (window.event) return window.event.keyCode; 
	else if (e) return e.which; 
	else return null; 
	} 
	function goodchars(e, goods, field) {
		 var key, keychar; key = getkey(e); 
		 if (key == null) return true; keychar = String.fromCharCode(key); 
		 keychar = keychar.toLowerCase(); goods = goods.toLowerCase(); // check goodkeys 
	if (goods.indexOf(keychar) != -1) return true; // control keys 
	if ( key==null || key==0 || key==8 || key==9 || key==27 ) return true; if (key == 13) { 
	var i; 
	for (i = 0; i < field.form.elements.length; i++) 
	if (field == field.form.elements[i]) break; i = (i + 1) % field.form.elements.length; 
	field.form.elements[i].focus(); return false; }; 
	return false; } 
	</script>