
<section class="content-header">
     <h1>PRK.2015 DJT.1.4</h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-archive"></i> PEMBANGUNAN PENYULANG BARU PERSIAPAN OPERASI TRAFO GI</a></li>
              <li><a href="<?php echo base_url()?>penyubar_gi"><?php  echo $listhasil->ryn;?></a></li>
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
                    <h3 class="box-title"><font color="#f4f2f3">Uraian & Lokasi (Rayon <?=$_SESSION['rayon']?>)</font></h3>
                </div><!-- /.box-header -->
			    <div class="box-body table-responsive">
    			 <table class="table table-bordered table-hover">
                       <thead bgcolor="#f9f9f9">
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
									<th style="vertical-align: middle;" class="text-center">
										KETERANGAN
									</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach($hasil as $listhasil):
								echo "<tr>";
									echo "<td class='text-center'>".$listhasil->n_gbr1."<br>".$listhasil->n_gbr2."</td>";
									echo "<td style='vertical-align: middle;'>".$listhasil->lks."</td>";
									echo "<td class='text-center'>".$listhasil->ex_sist."<br>".$listhasil->penylang."</td>";
									echo "<td style='vertical-align: middle;' class='text-center'>".$listhasil->jlm_gangguan."</td>";
									echo "<td class='text-center'><input type='text' class='form-control1' name='ket'></td>";
								endforeach;
								?>
							</tbody>							
	                   </table>
	                  </div>
	                 </div>
	        <div style="height: 60px;">
			<?php echo form_open_multipart('penyubar_gi/uploadgambar','class="form-horizontal"'); ?>
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
			<?php echo form_close() ?>
			</div>
			
       <div class="box">
        <div style="background-color: #fac445" class="box-header">
                    <h3 class="box-title"><font color="#f4f2f3">INPUT</font></h3> <br>  <small></small><br>
        </div><!-- /.box-header -->
		<div class="box-body table-responsive">
			<div class="panel-group" id="accordion1">
			  <div class="panel panel-danger">
			    <div class="panel-heading">
			      <a data-toggle="collapse" data-parent="#accordion1" href="#collapseFive">
			      <h4 class="panel-title">
			          PEKERJAAN JARINGAN SUTM
			      </h4>
			      </a>
			    </div>
			    <div id="collapseFive" class="panel-collapse collapse in">			    
			    <form action="<?php echo base_url()?>penyubar_gi/addsutm" method="POST" name="mvline">
			    <div style="border: 0px solid 00000; color: black; font-family: arial; height: auto; overflow: auto; padding: 4px; text-align: left; width: auto;">
			    
					<table class="table table-bordered" width="100%" id="tab_logic">
                       <thead bgcolor="#f9f9f9">
								<tr>
									
									<th style="vertical-align: middle;" class="text-center" colspan="22">
										AAACS 150 mm2
									</th>
										
								</tr>
								<tr>
									<th style="vertical-align: middle;" class="text-center" rowspan="3">
										<font size="1">KONSTRUKSI</font>
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="11">
										POLE TOP ARRANGEMENT
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="2">
										Conductor
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="2" bgcolor="#f78784">
										Estimasi<br>Jarak
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="3">
										POLE SUPPORTER
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="2">
										TIANG BETON
									</th>									
									<th style="vertical-align: middle;" class="text-center" colspan="3">
										POLE ACC
									</th>
									
								</tr>
								<tr>
									<th class="text-center">&nbsp;&nbsp;TM-1&nbsp;&nbsp;</th>
									<th class="text-center">&nbsp;&nbsp;TM-2&nbsp;&nbsp;</th>
									<th class="text-center">&nbsp;&nbsp;TM-4&nbsp;&nbsp;</th>
									<th class="text-center">&nbsp;&nbsp;TM-4X&nbsp;&nbsp;</th>
									<th class="text-center">&nbsp;&nbsp;TM-5&nbsp;&nbsp;</th>
									<th class="text-center">&nbsp;&nbsp;TM-8&nbsp;&nbsp;</th>
									<th class="text-center">&nbsp;&nbsp;TM-8X&nbsp;&nbsp;</th>
									<th class="text-center">&nbsp;TM-8XC&nbsp;</th>
									<th class="text-center">&nbsp;TM-10&nbsp;</th>
									<th class="text-center">&nbsp;TM-10X&nbsp;</th>
									<th class="text-center">&nbsp;TM-11&nbsp;</th>
									<th class="text-center">&nbsp;&nbsp;&nbsp;GW&nbsp;&nbsp;&nbsp;</th>
									<th class="text-center">&nbsp;&nbsp;HGW&nbsp;&nbsp;</th>
									<th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;SP&nbsp;&nbsp;&nbsp;&nbsp;</th>
									<th class="text-center">&nbsp;Utama&nbsp;</th>
									<th class="text-center">Penyangga</th>
									<th class="text-center">Ferleng<br>Stuck</th>
									<th class="text-center">Ground<br>Dalam</th>
									<th class="text-center">Ground<br>Luar</th>
									
								</tr>
								<tr style="height: 10px">
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
									<th class="text-center">Kms</th>
									<th class="text-center" bgcolor="#f78784">Gawang</th>
									<th class="text-center">Set</th>
									<th class="text-center">Set</th>
									<th class="text-center">Set</th>
									<th class="text-center">Bh</th>
									<th class="text-center">Bh</th>
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
							<tr id='addr0'>
								<td class="text-center">M</td>
								<td><input type="text"  maxlength="3" name="a" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="b" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="c" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="d" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="e" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="f" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="g" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="h" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="i" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="j" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="k" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="3" name="l" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="3" name="m" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="n" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="o" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="p" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="3" name="q" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td >
								<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="3" name="r" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="3" name="s" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="8" name="t" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="3" name="u" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
						
							</tr>
							<tr id='addr1'>
								<td class="text-center">UB</td>
								<td><input type='text'  maxlength='3' name='a1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus='startCalc();' onBlur='stopCalc();'/></td>
								<td><input type='text'  maxlength='3' name='b1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='c1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='d1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='e1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='f1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='g1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='h1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='i1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='j1' onFocus='startCalc();' onBlur='stopCalc();'  onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md'/></td>
								<td><input type='text'  maxlength='3' name='k1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='n1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='o1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='p1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
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
			  <div class="panel panel-info">
			    <div class="panel-heading">
			    <a data-toggle="collapse" data-parent="#accordion1" href="#collapseSix">
			      <h4 class="panel-title">
			          PEKERJAAN JARINGAN MVTIC
			      </h4>
			    </a>
			    </div>
			    <div id="collapseSix" class="panel-collapse collapse">
			      <div class="panel-body">
			      	<form action="<?php echo base_url()?>penyubar_gi/addmvtic" method="POST" name="dt">
			       	   <div style="border: 0px solid 00000; color: black; font-family: arial; height: auto; overflow: auto; padding: 4px; text-align: left; width: auto;">
			       		<table class="table table-bordered" width="100%">
			       			<thead bgcolor="#f9f9f9">
								<tr>
									</th>
										<th style="vertical-align: middle;" class="text-center" colspan="14">
										3 x 150 +1 x 95 mm2
									</th>
								</tr>
								<tr>
									<th style="vertical-align: middle;" class="text-center" rowspan="3">
										<font size="1">PASANGAN</font>
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="6">
										POLE TOP ARRANGEMENT MVTIC
									</th>	
									<th style="vertical-align: middle;" class="text-center" rowspan="2">
										&nbsp;&nbsp;MVTIC&nbsp;&nbsp;
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="2">
										Estimasi<br>Jarak
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="3">
										POLE SUPORTER
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="2">
										TIANG BETON
									</th>
									
								</tr>
								<tr>
									<th class="text-center">MVTIC1</th>
									<th class="text-center">MVTIC2</th>
									<th class="text-center">MVTIC4</th>
									<th class="text-center">MVTIC4A</th>
									<th class="text-center">MVTIC5</th>
									<th class="text-center">MVTIC5A</th>
									<th class="text-center">&nbsp;&nbsp;&nbsp;GW&nbsp;&nbsp;&nbsp;</th>
									<th class="text-center">&nbsp;&nbsp;HGW&nbsp;&nbsp;</th>
									<th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;SP&nbsp;&nbsp;&nbsp;&nbsp;</th>
									<th class="text-center">&nbsp;&nbsp;Utama&nbsp;&nbsp;</th>
									<th class="text-center">Penyangga</th>
									
								</tr>
								<tr>
									
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Kms</th>
								<th class="text-center" bgcolor="#f3504b">Gawang</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Set</th>
								<th class="text-center">Bh</th>
								<th class="text-center">Bh</th>	
								</tr>
							</thead>
			       			<tbody>
			       			<?php
							foreach($hasil as $listhasil):
							echo "<input type='hidden' value='".$listhasil->id."' name='id_lok'>";
							endforeach;
							?>
							<tr id='addr0'>
								<td class="text-center">M</td>
								<td><input type="text"  maxlength="3" name="a" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="b" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="c" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="d" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="e" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="f" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="3" name="g" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="3" name="h" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="i" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="j" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="k" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="3" name="l" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="3" name="m" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
							</tr>
							<tr id='addr1'>
								<td class="text-center">UB</td>
								<td><input type='text'  maxlength='3' name='a1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus='startCalc();' onBlur='stopCalc();'/></td>
								<td><input type='text'  maxlength='3' name='b1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='c1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='d1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='e1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='f1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='i1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text'  maxlength='3' name='j1' onFocus='startCalc();' onBlur='stopCalc();'  onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md'/></td>
								<td><input type='text'  maxlength='3' name='k1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
							</tr>
						</tbody>
			       		</table>
			       		</div>
			       		<br>
			       		<button type="submit" class="btn btn-primary">Simpan</button>&nbsp;&nbsp;<button type="reset" class="btn btn-info">Reset</button>
			       		<br><br>
			       		</form>
			      </div>
			    </div>
			  </div>
			  <div class="panel panel-success">
			    <div class="panel-heading">
			    <a data-toggle="collapse" data-parent="#accordion1" href="#collapseSeven">
			      <h4 class="panel-title">
			           PEKERJAAN   UGC / KABEL TANAH
			      </h4>
			   </a>
			    </div>
			    <div id="collapseSeven" class="panel-collapse collapse">
			      <div class="panel-body">
			        <form action="<?php echo base_url()?>penyubar_gi/addugc" method="POST" name="lvline">
			         <div style="border: 0px solid 00000; color: black; font-family: arial; height: auto; overflow: auto; padding: 4px; text-align: left; width: auto;">
			        	<table class="table table-bordered" width="100%" id="tab_logic">
			        		<thead bgcolor="#f9f9f9">
								<tr>
									<th style="vertical-align: middle;" class="text-center" colspan="6">
										3 x 150 mm2
									</th>
								</tr>
								<tr>
									<th style="vertical-align: middle;" class="text-center" rowspan="2">
										SKTM /<BR>UGC
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="2">
										SKTM / UGC
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="3">
										TERMINATION
									</th>
								</tr>
								<tr>
									<th class="text-center">Ditanam</th>
									<th class="text-center">Crossing<br>Jalan</th>
									<th class="text-center">Outdoor</th>
									<th class="text-center">Indoor</th>
									<th class="text-center">Joint</th>
							
								</tr>
								<tr>															
								<th class="text-center">ms</th>
								<th class="text-center">Mtr</th>
								<th class="text-center">Mtr</th>
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
			        			<tr id='addrw0'>
									<td><input type="text"  maxlength="3" name="a" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="b" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="c" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="d" class="form-control"/></td>
								<td><input type="text"  maxlength="3" name="e" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="3" name="f" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        			</tr>
			        			<tr id='addrw1'>
			        				<td><input type='text'  maxlength='3' name='a1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text'  maxlength='3' name='b1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text'  maxlength='3' name='c1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text'  maxlength='3' name='d1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text'  maxlength='3' name='e1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        			</tr>
			        		</tbody>
			        	</table>
			        	<br>
			        	</div>
			        	<br>
						<button type="submit" class="btn btn-primary">Simpan</button>&nbsp;&nbsp;<button type="reset" class="btn btn-info">Reset</button><br><br><br>
						</form>
			      </div>
			    </div>
			  </div>
			</div>
	      </div><!-- /.box-body -->
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
						 	echo "<img style='height: 600px; width: 1020px;' src='".base_url()."assets/img/lokasi/".$listhasil1->gambar2."'/>";
							endforeach;
						}
						?>                               
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div>  /.modal