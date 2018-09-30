<section class="content-header">
  <h1>Input <small>Line</small></h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-archive"></i> UPRTM</a></li>
              <li><a href="<?php echo base_url()?>UpRTM"><?php foreach($hasil as $listhasil): echo $listhasil->rayon; endforeach;?></a></li>
              <li class="active">Edit</li>
      </ol>
</section>

 
<section class="content">
<?php echo $_SESSION['log'];
	$_SESSION['log']="";
 ?>
      <!-- Page content --><div class="row">
             <div class="col-xs-12">
             <div class="box">
                <div style="background-color: #4db4f9;" class="box-header">
                    <h3 class="box-title"><font color="#f4f2f3">Uraian & Lokasi (Rayon <?=$_SESSION['rayon']?>)</font></h3>
                </div><!-- /.box-header -->
			    <div class="box-body table-responsive">
    			 <table class="table table-bordered table-hover">
                       <thead bgcolor="#f9f9f9">
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
										Jumlah<small> X&nbsp;&nbsp;</small><br>( kali ) Gangguan dalam 3 bulan
									</th>
									<th style="vertical-align: middle;" class="text-center">
										KETERANGAN
									</th>
								</tr>
								
							</thead>
							<tbody>
							<?php
								foreach($hasil as $listhasil):
								echo "<tr>";
									echo "<td class='text-center'>".$listhasil->no_gambar."</td>";
									echo "<td class='text-center'>".$listhasil->lokasi."</td>";
									echo "<td class='text-center'>".$listhasil->exsist."</td>";
									echo "<td class='text-center'>".$listhasil->jumlah_X."</td>";
									echo "<td class='text-center'><input type='text' class='form-control1' name='z'></td>";
								echo "</tr>";
								endforeach;
								?>
							</tbody>
						</table>
					</div>
			<div style="height: 60px;">
			<?php echo form_open_multipart("UpRTM/uploadgambar"); ?>
			<table>
				<tr>
					<?php
					foreach($hasil as $listhasil):
					echo "<input type='hidden' value='".$listhasil->id_lokmm2."' name='id_lok'>";
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
			          Penggantian JTM penghantar kecil menjadi A3CS 150 mm2
			        </a>
			      </h4>
			    </div>		   
				<div id="collapseFive" class="panel-collapse collapse ">			    
			    <form action="<?php echo base_url()?>UpRTM/addmvline" method="POST" name="mvline">
			    <div style="border: 0px solid 00000; color: black; font-family: arial; height: auto; overflow: auto; padding: 4px; text-align: left; width: auto;">
			    
					<table class="table table-bordered" width="100%" id="tab_logic">
						<thead class="table-reponsive" >
							<tr>
									<th hidden="yes" style="vertical-align: middle;" class="text-center">&nbsp;&nbsp;#&nbsp;&nbsp;</th>
									
									<th style="vertical-align: middle;" class="text-center" rowspan="3">
										Pasangan
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="11">
										POLE TOP ARRANGEMENT
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="2">
										POLE ACC.<br><small>( Konst. yang melewati di... )</small>
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="2">
										AACS
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="2" bgcolor="#CCC">
										Estimasi<br>Jarak
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="2">
										Cond.<br>Lama
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="4">
										POLE SUPORTER
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="5">
										KONST. PENGAMAN
									</th>								
								</tr>
								<tr>
									<th class="text-center">&nbsp&nbspTM-1&nbsp&nbsp</th>
									<th class="text-center">&nbsp&nbspTM-2&nbsp&nbsp</th>
									<th class="text-center">&nbsp&nbspTM-4&nbsp&nbsp</th>
									<th class="text-center">&nbsp&nbspTM-4X&nbsp&nbsp</th>
									<th class="text-center">&nbsp&nbspTM-5&nbsp&nbsp</th>
									<th class="text-center">&nbsp&nbspTM-8&nbsp&nbsp</th>
									<th class="text-center">&nbsp&nbspTM-8X&nbsp&nbsp</th>
									<th class="text-center">&nbspTM-8XC&nbsp</th>
									<th class="text-center">TM-10</th>
									<th class="text-center">&nbspTM-10X&nbsp</th>
									<th class="text-center">&nbspTM-11&nbsp</th>
									<th class="text-center">GTT/<BR><small>KONST./ dll</small></th>
									<th class="text-center">AVS/LBS/<BR><small>dll</small></th>
									<th class="text-center">&nbsp&nbsp&nbspGW&nbsp&nbsp&nbsp</th>
									<th class="text-center">&nbsp&nbsp&nbspGW-N&nbsp&nbsp&nbsp</th>
									<th class="text-center">&nbspHGW&nbsp</th>
									<th class="text-center">&nbspSP&nbsp</th>
									<th class="text-center">Tibet<br>Utama</th>
									<th class="text-center">Tibet<br>Penyangga</th>
									<th class="text-center">Pin<br>Isulator</th>
									<th class="text-center">Strain<br>Insulator</th>
									<th class="text-center">Material<br>Lain...</th>
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
								<th class="text-center">Set</th>
								<th class="text-center">Unit</th>
								<th class="text-center">Set</th>
								<th class="text-center">Kms</th>
								<th class="text-center" bgcolor="#CCC">Gawang</th>
								<th class="text-center">ms</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Bh</th>
								<th class="text-center">Bh</th>
								<th class="text-center"></th>
							</tr>
							<tr>
								<th class="text-center"></th>								
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
								<th class="text-center"></th>
							</tr>
							</thead>
						<tbody>
						<?php
						foreach($hasil as $listhasil):
						echo "<input type='hidden' value='".$listhasil->id_lokmm2."' name='id_lokmm2'>";
						endforeach;
						?>
							<tr id='addr0'>
								<td class="text-center" name="pasangan">M</td>
								<td><input type="text"  maxlength="3" name="a" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="b" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="c" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="d" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();" id="dis1" /></td>
								<td><input type="text"  maxlength="3" name="e" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="f" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="g" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();" id="dis2" /></td>
								<td><input type="text"  maxlength="3" name="h" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();" id="dis3" /></td>
								<td><input type="text"  maxlength="3" name="i" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="j" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();" id="dis4" /></td>
								<td><input type="text"  maxlength="3" name="k" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="l" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="m" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="n" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="3" name="o" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td ><input type="text"  maxlength="3" name="p" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td ><input type="text"  maxlength="3" name="q" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td >
								<td ><input type="text"  maxlength="3" name="r" class="form-control"  /></td>
								<td ><input type="text"  maxlength="3" name="s" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td ><input type="text"  maxlength="8" name="t" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td ><input type="text"  maxlength="3" name="u" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td ><input type="text"  maxlength="3" name="v" class="form-control" /></td>
								<td ><input type="text"  maxlength="3" name="x" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td ><input type="text"  maxlength="3" name="w" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td ><input type="text"  maxlength="3" name="y" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>

							</tr>
							<tr id='addr1'>
								<td class="text-center" name="pasangan1">UB</td>
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
								<td><input type='text'  maxlength='3' name='x1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='y1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
							</tr>
						</tbody>
					</table>
					<br>
					</div>
					<br>
					<button type="submit" class="btn btn-primary">Simpan</button>&nbsp;&nbsp;<button type="reset" class="btn btn-success">Reset</button><br><br><br>
			      </form>
			      </div>
			    </div>
			  
		 </div>
	   </div>
	  </div>
	</div></div>
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
						 	echo "<img style='height: 600px; width: 1020px;' src='".base_url()."assets/img/lokasi/".$listhasil1->GAMBAR."'>";
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