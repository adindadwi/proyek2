
<section class="content-header">
     <h1>PRK.2015 DJT.1.2</h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-archive"></i> RekonfigJTR</a></li>
              <li><a href="<?php echo base_url()?>RekonfigJTR"><?php foreach($hasil as $listhasil): echo $listhasil->rayon2; endforeach;?></a></li>
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
                    <h3 class="box-title"><font color="#f4f2f3">Uraian & Lokasi (Rayon <?php foreach($hasil as $listhasil): echo $listhasil->rayon2; endforeach;?>)</font></h3>
                </div><!-- /.box-header -->
			    <div class="box-body table-responsive">
    			 <table class="table table-bordered table-hover">
                       <thead bgcolor="#f9f9f9">
								<tr>
									<th style="vertical-align: middle;" class="text-center">NO. Gambar</th>
									<th style="vertical-align: middle;" class="text-center">
										Lokasi
									</th>
									<th style="vertical-align: middle;" class="text-center">
										Exsist/Penyulang
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
									echo "<td class='text-center'>".$listhasil->gmb12."<br>".$listhasil->gmb22."</td>";
									echo "<td style='vertical-align: middle;'>".$listhasil->lokasi."</td>";
									echo "<td class='text-center'>".$listhasil->eksis."<br>".$listhasil->penyulang2."</td>";
									echo "<td class='text-center'><input type='text' class='form-control1' name='ket'></td>";
								endforeach;
								?>
							</tbody>							
	                   </table>
	             </div>
	         </div>
	                 
	        <div style="height: 60px;">
			<?php echo form_open_multipart('RekonfigJTR/uploadgambar','class="form-horizontal"'); ?>
			<table>
				<tr>
					<?php
					foreach($hasil as $listhasil):
					echo "<input type='hidden' value='".$listhasil->id."' name='id_lok'>";
					echo "<input type='hidden' value='".$listhasil->rayon2."' name='rayon'>";
					endforeach;
					?>
					<td><label>Gambar : &nbsp;&nbsp;</label></td>
					<td><input type="file" class="form-control1" name="gambar_lok"></td>
					<td><button class="btn btn-primary" type="submit" name="gmb">Kirim</button></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td><a class="btn btn-small btn-warning" data-toggle="modal" data-target="#gambarModal">Lihat Gambar</a></td>
				</tr>
			</table>
			<?php echo form_close() ?>
			</div>
					 
             <div class="box">
                <div style="background-color: #fac445;" class="box-header">
                    <h3 class="box-title"><font color="#f4f2f3">INPUT REKONFIG JTR</font></h3> <br>  <small></small><br>
                </div><!-- /.box-header -->
				<div class="box-body table-responsive">
			    <form action="<?php echo base_url()?>RekonfigJTR/input" method="POST" name="dt">
			    <div style="border: 0px solid 00000; color: black; font-family: arial; height: auto; overflow: auto; padding: 4px; text-align: left; width: auto;">
					<table class="table table-bordered" width="100%">
                       <thead bgcolor="#f9f9f9">							
								<tr style="height: 10px">
									<th style="vertical-align: middle;" class="text-center" rowspan="3">
										<font size="1">PASANGAN</font>
									</th>			
									<th class="text-center" colspan="10">
										POLE TOP ARRANGEMENT
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="2">
										CONDUCTOR
									</th>
									<th bgcolor="#f3504b" style="vertical-align: middle;" class="text-center" rowspan="2">
										ESTIMASI JARAK
									</th>
									<th class="text-center" colspan="5">
										POLE SUPPORTER
									</th>
									<th class="text-center" colspan="3">
										TIANG BETON
									</th>
								</tr>
								
								<tr style="height: 10px">	
								
									<th class="text-center">
										&nbsp;&nbsp;&nbsp;TR-1&nbsp;&nbsp;&nbsp;
									</th>															
									<th class="text-center">
										&nbsp;&nbsp;&nbsp;TR-2&nbsp;&nbsp;&nbsp;
									</th>
									<th class="text-center">
										&nbsp;&nbsp;&nbsp;TR-3&nbsp;&nbsp;&nbsp;
									</th>
									<th class="text-center">
										&nbsp;&nbsp;&nbsp;TR-3A&nbsp;&nbsp;&nbsp;
									</th>
									<th class="text-center">
										&nbsp;&nbsp;&nbsp;TR-4&nbsp;&nbsp;&nbsp;
									</th>
									<th class="text-center">
										&nbsp;&nbsp;&nbsp;TR-4A&nbsp;&nbsp;&nbsp;
									</th>
									<th class="text-center">
										&nbsp;&nbsp;&nbsp;TR-5&nbsp;&nbsp;&nbsp;
									</th>
									<th class="text-center">
										&nbsp;&nbsp;&nbsp;TR-6&nbsp;&nbsp;&nbsp;
									</th>
									<th class="text-center">
										&nbsp;&nbsp;&nbsp;TR-6A&nbsp;&nbsp;&nbsp;
									</th>							
									<th class="text-center">
										&nbsp;&nbsp;&nbsp;TR-7&nbsp;&nbsp;&nbsp;
									</th>
									<th class="text-center">
										&nbsp;&nbsp;&nbsp;&nbsp;GW&nbsp;&nbsp;&nbsp;&nbsp;
									</th>
									<th class="text-center">
										&nbsp;&nbsp;&nbsp;GWN&nbsp;&nbsp;&nbsp;
									</th>
									<th class="text-center">
										&nbsp;&nbsp;&nbsp;&nbsp;HGW&nbsp;&nbsp;&nbsp;&nbsp;
									</th>
									<th class="text-center">
										&nbsp;&nbsp;&nbsp;&nbsp;SP&nbsp;&nbsp;&nbsp;&nbsp;
									</th>
									<th class="text-center">
										PONDASI
									</th>
									<th class="text-center">
										&nbsp;&nbsp;UTAMA&nbsp;&nbsp;
									</th>
									<th class="text-center">
										&nbsp;&nbsp;UTAMA&nbsp;&nbsp; (E)
									</th>
									<th class="text-center">
										NON &nbsp;&nbsp;UTAMA&nbsp;&nbsp;
									</th>
								</tr>
								
								<tr style="height: 10px;">
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
									<th class="text-center">kms</th>
									<th class="text-center" bgcolor="#f3504b">gawang</th>	
									<th class="text-center">Set</th>
									<th class="text-center">Set</th>
									<th class="text-center">Set</th>
									<th class="text-center">Set</th>								
									<th class="text-center">Bh</th>
									<th class="text-center">Bh</th>
									<th class="text-center">Bh</th>
									<th class="text-center">Bh</th>
									
								</tr>
								
							</thead>
							<tbody>
							<?php
							foreach($hasil as $listhasil):
							echo "<input type='hidden' value='".$listhasil->id."' name='id_lok'>";
							echo "<input type='hidden' value='".$listhasil->lokasi."' name='lok'>";
							echo "<input type='hidden' value='".$listhasil->rayon2."' name='rayon'>";
							endforeach;
							if($cekin=="0")
							{
							?>
			        			<tr id='addrw0'>
			        				<td class="text-center">M</td>
									<td><input type="text"  maxlength="3" name="a" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="b" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="c" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="d" class="form-control"/></td>
									<td><input type="text"  maxlength="3" name="e" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="f" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="g" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="h" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="i" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="j" class="form-control" id="dise1"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="3" name="k" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="3" name="l" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="m" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="n" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="o" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="7" name="p" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="3" name="q" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td >
									<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="3" name="r" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="3" name="s" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="3" name="t" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								</tr>
			        			<tr id='addrw1'>
			        				<td class="text-center">UB</td>
			        				<td><input type='text'  maxlength='3' name='a1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text'  maxlength='3' name='b1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text'  maxlength='3' name='c1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text'  maxlength='3' name='d1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text'  maxlength='3' name='e1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text'  maxlength='3' name='f1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text'  maxlength='3' name='g1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text'  maxlength='3' name='h1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text'  maxlength='3' name='i1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text'  maxlength='3' name='j1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text'  maxlength='3' name='m1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text'  maxlength='3' name='n1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text'  maxlength='3' name='o1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        			</tr>
			        			<?php
			        			}
			        			else
			        			{
			        				foreach($input as $list):
			        			?>
									<tr id='addrw0'>
			        				<td class="text-center">M</td>
									<td><input type="text" value="<?php echo $list->TR1M ?>"  maxlength="3" name="a" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->TR2M ?>"  maxlength="3" name="b" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->TR3M ?>"  maxlength="3" name="c" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->TR3AM ?>"  maxlength="3" name="d" class="form-control"/></td>
									<td><input type="text" value="<?php echo $list->TR4M ?>"  maxlength="3" name="e" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->TR4AM ?>"  maxlength="3" name="f" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)"  onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->TR5M ?>"  maxlength="3" name="g" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->TR6M ?>"  maxlength="3" name="h" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->TR6AM ?>"  maxlength="3" name="i" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->TR7M ?>"  maxlength="3" name="j" class="form-control"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->CONDUCTOR ?>" maxlength="3" name="k" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->EST_JARAK ?>"  maxlength="3" name="l" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->GWM ?>" maxlength="3" name="m" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->GWNM ?>"  maxlength="3" name="n" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->HGWM ?>" maxlength="3" name="o" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->SP ?>" maxlength="7" name="p" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->PONDASI ?>" maxlength="3" name="q" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td >
									<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->UTAMA ?>" maxlength="3" name="r" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->UTAMA_E ?>" maxlength="3" name="s" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->NON_UTAMA ?>" maxlength="3" name="t" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								</tr>
			        			<tr id='addrw1'>
			        				<td class="text-center">UB</td>
			        				<td><input type='text' value="<?php echo $list->TR1UB ?>" maxlength='3' name='a1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value="<?php echo $list->TR2UB ?>" maxlength='3' name='b1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value="<?php echo $list->TR3UB ?>" maxlength='3' name='c1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value="<?php echo $list->TR3AUB ?>" maxlength='3' name='d1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value="<?php echo $list->TR4UB ?>" maxlength='3' name='e1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value="<?php echo $list->TR4AUB ?>" maxlength='3' name='f1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value="<?php echo $list->TR5UB ?>" maxlength='3' name='g1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value="<?php echo $list->TR6UB ?>" maxlength='3' name='h1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value="<?php echo $list->TR6AUB ?>" maxlength='3' name='i1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text' value="<?php echo $list->TR7UB ?>" maxlength='3' name='j1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text' value="<?php echo $list->GWUB ?>" maxlength='3' name='m1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value="<?php echo $list->GWNUB ?>" maxlength='3' name='n1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text' value="<?php echo $list->HGWUB ?>" maxlength='3' name='o1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									</tr>
								<?php 
								endforeach; 
								}
								?>
							</tbody>
	                   </table>
					   <br>
					   </div>
					   <br>
						<button type="submit" class="btn btn-primary">Simpan</button>&nbsp;&nbsp;<button type="reset" class="btn btn-info">Reset</button>
					</form>
					</div>
				</div><!-- /.box -->
			</div>
		</div>
	</section>
	
<div class="modal fade" id="gambarModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div style="width: 1080px; height: auto;" class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title"><span class="fa fa-picture-o"></span>&nbsp;&nbsp; Gambar Lokasi</h4>
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
						 	echo "<img style='height: 600px; width: 1020px;' src='".base_url()."assets/img/lokasi/Rekonfig JTR/".$listhasil1->RAYON."/".$listhasil1->GAMBAR."'/>";
							endforeach;
						}
						?>                               
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

<script type="text/javascript">
	
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
	