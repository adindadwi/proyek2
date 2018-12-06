
<section class="content-header">
     <h1>PRK.2015 DJT.1.1</h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-archive"></i> RekonfigJTM</a></li>
              <li><a href="<?php echo base_url()?>RekonfigJTM"><?php foreach($hasil as $listhasil): echo $listhasil->ryn; endforeach;?></a></li>
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
                    <h3 class="box-title"><font color="#f4f2f3">Uraian & Lokasi (Rayon <?php foreach($hasil as $listhasil): echo $listhasil->ryn; endforeach;?>)</font></h3>
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
									echo "<td class='text-center'>".$listhasil->bgr_no."<br>".$listhasil->gbr2_no."</td>";
									echo "<td style='vertical-align: middle;'>".$listhasil->lks."</td>";
									echo "<td class='text-center'>".$listhasil->ex_sist."<br>".$listhasil->penylang."</td>";
									echo "<td style='vertical-align: middle;' class='text-center'>".$listhasil->jlm_ganggu."</td>";
									echo "<td class='text-center'><input type='text' class='form-control1' name='ket'></td>";
								endforeach;
								?>
							</tbody>							
	                   </table>
	               </div>
	         </div>
	                 
	        <div style="height: 60px;">
			<?php echo form_open_multipart('RekonfigJTM/uploadgambar','class="form-horizontal"'); ?>
			<table>
				<tr>
					<?php
					foreach($hasil as $listhasil):
					echo "<input type='hidden' value='".$listhasil->id."' name='id_lok'>";
					echo "<input type='hidden' value='".$listhasil->ryn."' name='rayon'>";
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
			      <?php 
			      foreach($hasil as $listhasil):
					if($listhasil->mtsu=="1")
					{
						$status="<span class='badge pull-right bg-green'>Status</span>";
					}
					elseif($listhasil->mtsu=="0")
					{
						$status="<span class='badge pull-right bg-red'>Status</span>";
					}
				endforeach;
				echo "PEKERJAAN JARINGAN SUTM ".$status."";
			      ?>
			      </h4>
			      </a>
			    </div>
			    <div id="collapseFive" class="panel-collapse collapse <?php echo $act;?>">			    
			    <form action="<?php echo base_url()?>RekonfigJTM/addsutm" method="POST" name="mvline">
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
							echo "<input type='hidden' value='".$listhasil->lokasi."' name='lok'>";
							echo "<input type='hidden' value='".$listhasil->rayon."' name='rayon'>";
							endforeach;
							if($ceksutm=="0")
							{
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
								<td><input name="j" type="text" class="form-control" onFocus="startCalc();" onBlur="stopCalc();" onKeyPress="return goodchars(event,'0123456789',this)"  maxlength="3"/></td>
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
							<?php
			        		}
			        		else
			        		{
			        			foreach($sut as $list):
			        		?>
			        		
			        		<tr id='addr0'>
								<td class="text-center">M</td>
								<td><input type="text" value="<?php echo $list->TM1M ?>" maxlength="3" name="a" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list->TM2M ?>" maxlength="3" name="b" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list->TM4M ?>" maxlength="3" name="c" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list->TM4XM ?>" maxlength="3" name="d" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list->TM5M ?>" maxlength="3" name="e" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list->TM8M ?>" maxlength="3" name="f" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list->TM8XM ?>" maxlength="3" name="g" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"></td>
								<td><input type="text" value="<?php echo $list->TM8XCM ?>" maxlength="3" name="h" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list->TM10M ?>" maxlength="3" name="i" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list->TM10XM ?>" maxlength="3" name="j" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list->TM11M ?>" maxlength="3" name="k" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->CONDUCTOR ?>" maxlength="3" name="l" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->EST_JARAK ?>" maxlength="3" name="m" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list->GWM ?>" maxlength="3" name="n" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list->HGWM ?>" maxlength="3" name="o" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list->SPM ?>" maxlength="3" name="p" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->UTAMA ?>" maxlength="3" name="q" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td >
								<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->PENYANGGA ?>" maxlength="3" name="r" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->FERLENG_STUCK ?>" maxlength="3" name="s" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->GROUND_DALAM ?>" maxlength="8" name="t" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->GROUND_LUAR ?>" maxlength="3" name="u" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
						
							</tr>
							<tr id='addr1'>
								<td class="text-center">UB</td>
								<td><input type='text' value='<?php echo $list->TM1UB ?>' maxlength='3' name='a1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus='startCalc();' onBlur='stopCalc();'/></td>
								<td><input type='text' value='<?php echo $list->TM2UB ?>' maxlength='3' name='b1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text' value='<?php echo $list->TM4UB ?>' maxlength='3' name='c1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text' value='<?php echo $list->TM4XUB ?>' maxlength='3' name='d1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text' value='<?php echo $list->TM5UB ?>' maxlength='3' name='e1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text' value='<?php echo $list->TM8UB ?>' maxlength='3' name='f1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text' value='<?php echo $list->TM8XUB ?>' maxlength='3' name='g1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text' value='<?php echo $list->TM8XCUB ?>' maxlength='3' name='h1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text' value='<?php echo $list->TM10UB ?>' maxlength='3' name='i1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text' value='<?php echo $list->TM10XUB ?>' maxlength='3' name='j1' onFocus='startCalc();' onBlur='stopCalc();'  onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md'/></td>
								<td><input type='text' value='<?php echo $list->TM11UB ?>' maxlength='3' name='k1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text' value='<?php echo $list->GWUB ?>' maxlength='3' name='n1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text' value='<?php echo $list->HGWUB ?>' maxlength='3' name='o1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text' value='<?php echo $list->SPUB ?>' maxlength='3' name='p1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
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
					<button type="submit" class="btn btn-primary">Simpan</button>&nbsp;&nbsp;<button type="reset" class="btn btn-success">Reset</button><br><br><br>
			      </form>
			      </div>
			    </div>
			  <div class="panel panel-info">
			    <div class="panel-heading">
			    <a data-toggle="collapse" data-parent="#accordion1" href="#collapseSix">
			      <h4 class="panel-title">
			      <?php 
			      foreach($hasil as $listhasil):
					if($listhasil->ctivm=="1")
					{
						$status1="<span class='badge pull-right bg-green'>Status</span>";
					}
					elseif($listhasil->ctivm=="0")
					{
						$status1="<span class='badge pull-right bg-red'>Status</span>";
					}
				endforeach;
				echo "PEKERJAAN JARINGAN MVTIC ".$status1."";
			      ?>
			      </h4>
			    </a>
			    </div>
			    <div id="collapseSix" class="panel-collapse collapse <?php echo $act1;?>">
			      <div class="panel-body">
			      	<form action="<?php echo base_url()?>RekonfigJTM/addmvtic" method="POST" name="dt">
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
									<th bgcolor="#f3504b" style="vertical-align: middle;" class="text-center" rowspan="2">
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
							echo "<input type='hidden' value='".$listhasil->lokasi."' name='lok'>";
							echo "<input type='hidden' value='".$listhasil->rayon."' name='rayon'>";
							endforeach;
							if($cekmvtic=="0")
							{
							?>
							<tr id='addr0'>
								<td class="text-center">M</td>
								<td><input type="text" maxlength="3" name="a" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
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
							<?php
			        		}
			        		else
			        		{
			        			foreach($ticmv as $list1):
			        		?>
			        		
			        		<tr id='addr0'>
								<td class="text-center">M</td>
								<td><input type="text" value="<?php echo $list1->MVTIC1M ?>" maxlength="3" name="a" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list1->MVTIC2M ?>" maxlength="3" name="b" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list1->MVTIC4M ?>" maxlength="3" name="c" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list1->MVTIC4AM ?>" maxlength="3" name="d" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list1->MVTIC5M ?>" maxlength="3" name="e" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list1->MVTIC5AM ?>" maxlength="3" name="f" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list1->MVTIC ?>" maxlength="3" name="g" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list1->EST_JARAK1 ?>" maxlength="3" name="h" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list1->GWM1 ?>" maxlength="3" name="i" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list1->HGWM1 ?>" maxlength="3" name="j" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list1->SPM1 ?>" maxlength="3" name="k" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list1->UTAMA1 ?>" maxlength="3" name="l" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list1->PENYANGGA1 ?>" maxlength="3" name="m" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
							</tr>
							<tr id='addr1'>
								<td class="text-center">UB</td>
								<td><input type='text' value='<?php echo $list1->MVTIC1UB ?>' maxlength='3' name='a1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus='startCalc();' onBlur='stopCalc();'/></td>
								<td><input type='text' value='<?php echo $list1->MVTIC2UB ?>' maxlength='3' name='b1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text' value='<?php echo $list1->MVTIC4UB ?>' maxlength='3' name='c1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text' value='<?php echo $list1->MVTIC4AUB ?>' maxlength='3' name='d1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text' value='<?php echo $list1->MVTIC5UB ?>' maxlength='3' name='e1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text' value='<?php echo $list1->MVTIC5AUB ?>' maxlength='3' name='f1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text' value="<?php echo $list1->GWUB1 ?>" maxlength='3' name='i1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
								<td><input type='text' value="<?php echo $list1->HGWUB1 ?>" maxlength='3' name='j1' onFocus='startCalc();' onBlur='stopCalc();'  onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md'/></td>
								<td><input type='text' value="<?php echo $list1->SPUB1 ?>" maxlength='3' name='k1' onFocus='startCalc();' onBlur='stopCalc();' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' /></td>
							</tr>
			        		
			        		<?php 
								endforeach; 
							}
							?>
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
			       <?php 
			      foreach($hasil as $listhasil):
					if($listhasil->cgu=="1")
					{
						$status2="<span class='badge pull-right bg-green'>Status</span>";
					}
					elseif($listhasil->cgu=="0")
					{
						$status2="<span class='badge pull-right bg-red'>Status</span>";
					}
				endforeach;
				echo "PEKERJAAN   UGC / KABEL TANAH ".$status2."";
			      ?>
			      </h4>
			   </a>
			    </div>
			    <div id="collapseSeven" class="panel-collapse collapse <?php echo $act2;?>">
			      <div class="panel-body">
			        <form action="<?php echo base_url()?>RekonfigJTM/addugc" method="POST" name="lvline">
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
								echo "<input type='hidden' value='".$listhasil->lokasi."' name='lok'>";
								echo "<input type='hidden' value='".$listhasil->rayon."' name='rayon'>";
								endforeach;
								if($cekugc=="0")
								{
								?>
				        		<tr id='addrw0'>
									<td><input type="text"  maxlength="3" name="a" class="form-control1" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="b" class="form-control1" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="c" class="form-control1" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text"  maxlength="3" name="d" class="form-control1"/></td>
								<td><input type="text"  maxlength="3" name="e" class="form-control1" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text"  maxlength="3" name="f" class="form-control1" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        			</tr>
			        			<tr id='addrw1'>
			        				<td><input type='text'  maxlength='3' name='a1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control1 input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text'  maxlength='3' name='b1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control1 input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text'  maxlength='3' name='c1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control1 input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text'  maxlength='3' name='d1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control1 input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text'  maxlength='3' name='e1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control1 input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        			</tr>
			        			<?php
				        		}
				        		else
				        		{
				        			foreach($cgu as $list2):
				        		?>
				        		
				        		<tr id='addrw0'>
								<td><input type="text" value="<?php echo $list2->SKTM_UGC ?>" maxlength="3" name="a" class="form-control1" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list2->DITANAM ?>" maxlength="3" name="b" class="form-control1" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list2->CROSSING_JLN ?>" maxlength="3" name="c" class="form-control1" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td><input type="text" value="<?php echo $list2->OUTDOOR ?>" maxlength="3" name="d" class="form-control1"/></td>
								<td><input type="text" value="<?php echo $list2->INDOOR ?>" maxlength="3" name="e" class="form-control1" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list2->JOINT ?>" maxlength="3" name="f" class="form-control1" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        			</tr>
			        			<tr id='addrw1'>
			        				<td><input type='text' value='<?php echo $list2->SKTM_UGC1 ?>' maxlength='3' name='a1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control1 input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value='<?php echo $list2->DITANAM1 ?>' maxlength='3' name='b1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control1 input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value='<?php echo $list2->CROSSING_JLN1 ?>' maxlength='3' name='c1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control1 input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value='<?php echo $list2->OUTDOOR1 ?>' maxlength='3' name='d1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control1 input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value='<?php echo $list2->INDOOR1 ?>' maxlength='3' name='e1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control1 input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
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
						<button type="submit" class="btn btn-primary">Simpan</button>&nbsp;&nbsp;<button type="reset" class="btn btn-info">Reset</button><br><br><br>
						</form>
			      </div>
			    </div>
			  </div>
			</div>
	      </div><!-- /.box-body -->
	     </div><!-- /.box -->
	     <small><b>Note</b> : Jika salah satu pekerjaan memang kosong dan perlu untuk di export, maka tekan tombol simpan di box pekerjaan kosong agar status berubah menjadi hijau, karena pekerjaan rekonfigJTM dapat di export jika semua status pekerjaan bewarna hijau</small>
		</div>
	</div>
	
</section>
	
	
<!-- model e bos -->
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
						 	echo "<img style='height: 600px; width: 1020px;' src='".base_url()."assets/img/lokasi/Rekonfig JTM/".$listhasil1->gambar2."'/>";
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
	