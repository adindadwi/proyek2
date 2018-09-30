<section class="content-header">
  <h1>Input <small>Line</small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
</section>

 
<section class="content">
<?php echo $_SESSION['log'];
	$_SESSION['log']="";
 ?>
      <!-- Page content -->
      <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
          <div class="row">
            <div class="col-md-12">
             <div class="panel panel-primary filterable">
				<div class="panel-heading">
				   <h3 class="panel-title">PROGRAM PENURUNAN SUSUT DISTRIBUSI</h3>
				 </div>	
             <table class="table-bordered" width="100%">
							<thead bgcolor="#a8acb7">
								<tr>
									<th class="text-center" rowspan="2">
										No.Gambar
									</th>
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
							<?php
								foreach($hasil as $listhasil):
								echo "<tr>";
									echo "<td class='text-center'>".$listhasil->no_gambar1."<br>".$listhasil->no_gambar2."</td>";
									echo "<td rowspan='2' class='text-center'>".$listhasil->lokasi."</td>";
									echo "<td rowspan='2' class='text-center'>".$listhasil->penyulang."</td>";
									echo "<td class='text-center'>".$listhasil->exsist."</td>";
								echo "</tr>";
								endforeach;
								?>
							</tbody>
						</table>
					</div>
			<div style="height: 60px;">
			<?php echo form_open_multipart("SRR/uploadgambar"); ?>
			<table>
				<tr>
					<?php
					foreach($hasil as $listhasil):
					echo "<input type='hidden' value='".$listhasil->id_loksrr."' name='id_lok'>";
					endforeach;
					?>
					<td><label>Gambar : &nbsp&nbsp</label></td>
					<td><input type="file" class="form-control1" name="gambar_lok"></td>
					<td><button class="btn btn-primary" type="submit" name="gmb">Kirim</button></td>
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
					<td><a class="btn btn-small btn-warning" data-toggle="modal" data-target="#gambarModal">Lihat Gambar</a></td>
				</tr>
			</table>
			<?php echo form_close(); ?>
			</div>
			
			<div class="panel-group" id="accordion1">
			  <div class="panel panel-danger">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseFive">
			          Pembangunan SUTR untuk seri SR diatas 5 buah
			        </a>
			      </h4>
			    </div>
				
			   
				<div id="collapseFive" class="panel-collapse collapse ">			    
			    <form action="<?php echo base_url()?>SRR/addmvline" method="POST" name="mvline">
			    <div style="border: 0px solid 00000; color: black; font-family: arial; height: auto; overflow: auto; padding: 4px; text-align: left; width: auto;">
			    
					<table class="table table-bordered" width="100%" id="tab_logic">
						<thead class="table-reponsive" >
							<tr>
									<th hidden="yes" style="vertical-align: middle;" class="text-center">&nbsp;&nbsp;#&nbsp;&nbsp;</th>
									
									<th style="vertical-align: middle;" class="text-center" colspan="21">
										SUTR
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="3">
										SR
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										KETERANGAN
									</th>
																		
								</tr>
								<tr>
									<th class="text-center" rowspan="3">PASANGAN</th>
									<th class="text-center" colspan="10">POLE TOP ARRANGEMENT</th>
									<th class="text-center" rowspan="2">CONDUCTOR</th>
									<th class="text-center" rowspan="2" bgcolor="#CCC">ESTIMASI<BR>JARAK</th>
									<th class="text-center" colspan="5">POLE SUPORTER</th>
									<th class="text-center" colspan="3">TIANG BETON</th>
									<th class="text-center" colspan="3">KONSTRUKSI</th>
								</tr>
							<tr>
								<th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;TR-1&nbsp;&nbsp;&nbsp;&nbsp;</th>
								<th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;TR-2&nbsp;&nbsp;&nbsp;&nbsp;</th>
								<th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;TR-3&nbsp;&nbsp;&nbsp;&nbsp;</th>
								<th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;TR-3A&nbsp;&nbsp;&nbsp;&nbsp;</th>
								<th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;TR-4&nbsp;&nbsp;&nbsp;&nbsp;</th>
								<th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;TR-4A&nbsp;&nbsp;&nbsp;&nbsp;</th>
								<th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;TR-5&nbsp;&nbsp;&nbsp;&nbsp;</th>
								<th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;TR-6&nbsp;&nbsp;&nbsp;&nbsp;</th>
								<th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;TR-6A&nbsp;&nbsp;&nbsp;&nbsp;</th>
								<th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;TR-7&nbsp;&nbsp;&nbsp;&nbsp;</th>
								
								<th class="text-center">GW</th>
								<th class="text-center">GW-N</th>
								<th class="text-center">HGW</th>
								<th class="text-center">SP</th>
								<th class="text-center">PONDASI<BR>TIANG</th>
								<th class="text-center">UTAMA</th>
								<th class="text-center">UTAMA (E)</th>
								<th class="text-center">NON<BR>UTAMA</th>
								<th class="text-center">SDES1</th>
								<th class="text-center">SDES2</th>
								<th class="text-center"></th>
								
								
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
								
								<th class="text-center">Kms</th>
								<th class="text-center" bgcolor="#CCC">Gawang</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Bh</th>
								<th class="text-center" >Bh</th>
								<th class="text-center">Bh</th>
								<th class="text-center" >Bh</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center"></th>
							</tr>
							
							</thead>
						<tbody>
						<?php
						foreach($hasil as $listhasil):
						echo "<input type='hidden' value='".$listhasil->id_loksrr."' name='id_lok'>";
						endforeach;
						?>
							<tr name="pasangan1" id='addr0'>
								<td class="text-center">M</td>
								<td><input type="text"  maxlength="3" name="a" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="b" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="c" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="d" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"></td>
								<td><input type="text"  maxlength="3" name="e" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="f" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="g" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"></td>
								<td><input type="text"  maxlength="3" name="h" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"></td>
								<td><input type="text"  maxlength="3" name="i" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="j" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"></td>
								<td><input type="text"  maxlength="3" name="k" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="l" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="m" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="n" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="o" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td ><input type="text"  maxlength="3" name="p" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td ><input type="text"  maxlength="3" name="q" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td >
								<td ><input type="text"  maxlength="3" name="r" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td ><input type="text"  maxlength="3" name="s" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td ><input type="text"  maxlength="8" name="t" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td ><input type="text"  maxlength="3" name="u" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td ><input type="text"  maxlength="3" name="v" class="form-control" /></td>
								<td ><input type="text"  maxlength="3" name="w" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: midle;" rowspan=2><input type="text"  maxlength="100" name="x" class="form-control1" /></td>
							</tr>
							<tr id='addr1'>
								<td name="pasangan1" class="text-center">UB</td>
								<td><input type='text'  maxlength='3' name='a1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus='startCalc();' onBlur='stopCalc();'/></td>
								<td><input type='text'  maxlength='3' name='b1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='c1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='d1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='e1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='f1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='g1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='h1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='i1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='j1' onFocus='startCalc();' onBlur='stopCalc();' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md'/></td>
								
								<td><input type='text'  maxlength='3' name='k1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='l1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='m1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='n1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='o1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>								
								<td><input type='text'  maxlength='3' name='p1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus='startCalc();' onBlur='stopCalc();'/></td>
								<td><input type='text'  maxlength='3' name='q1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus='startCalc();' onBlur='stopCalc();'/></td>
								<td><input type='text'  maxlength='3' name='r1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='s1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='t1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='u1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='v1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='w1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
							
							</tr>
						</tbody>
					</table>
					<br>
					</div>
					<br>
					&nbsp&nbsp<button type="submit" class="btn btn-primary">Simpan</button>&nbsp&nbsp<button type="reset" class="btn btn-success">Reset</button><br><br><br>
			      </form>
							<tbody>
							
							</tbody>
							<!-- JUMLAHNYA TARUH SINI NANTI -->
							
	                   </table>
				
					<br>
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
						 	echo "<img style='height: 600px; width: 1020px;' src='".base_url()."assets/img/lokasi/".$listhasil1->gambar."'>";
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