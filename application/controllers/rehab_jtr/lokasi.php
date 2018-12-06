
<section class="content-header">
     <h1>REHABILITASI JARINGAN TR</h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-archive"></i> <?=$title?></a></li>
              <li><a href="<?php echo base_url()?>rehab_jar_tr">lokasi</a></li>
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
                    <h3 class="box-title"><font color="#f4f2f3">Rehabilitasi jaringan SUTR</font></h3>
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
										Exsist
									</th>
									<th style="vertical-align: middle;" class="text-center">
										JUMLAH X GANGGUAN
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
									echo "<td class='text-center'>".$listhasil->no_gmb1."<br>".$listhasil->no_gmb2."</td>";
									echo "<td style='vertical-align: middle;'>".$listhasil->lokasi."</td>";
									echo "<td class='text-center'>".$listhasil->exsist."</td>";
									echo "<td class='text-center'>".$listhasil->jumlah_XX."</td>";
									echo "<td class='text-center'><input type='text' class='form-control1' name='ket'></td>";
								endforeach;
								?>
							</tbody>							
	                   </table>
	             </div>
	         </div>
	                 
	        <div style="height: 60px;">
			<?php echo form_open_multipart('rehab_jar_Tr/uploadgambar','class="form-horizontal"'); ?>
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
                <div style="background-color: #fac445;" class="box-header">
                    <h3 class="box-title"><font color="#f4f2f3">INPUT REHAB JTR</font></h3> <br>  <small></small><br>
                </div><!-- /.box-header -->
				<div class="box-body table-responsive">
			    <form action="<?php echo base_url()?>rehab_jar_tr/input" method="POST" name="dt">
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
									<th style="vertical-align: middle;" class="text-center" colspan="2">
										Conductor Accesoriess
									</th>
									<th class="text-center" colspan="5">
										POLE SUPPORTER
									</th>
									<th class="text-center" colspan="2">
										TIANG BETON
									</th>
									<th class="text-center" colspan="2">
										Accesoriess
									</th>
									<th  style="vertical-align: middle;" class="text-center" rowspan="3">
										KETERANGAN
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
										&nbsp;&nbsp;&nbsp;Insulated&nbsp;&nbsp;&nbsp;
									</th>							
									<th class="text-center">
										&nbsp;&nbsp;&nbsp;Non Insulated&nbsp;&nbsp;&nbsp;
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
										&nbsp;&nbsp;&nbsp;&nbsp;HGW-N&nbsp;&nbsp;&nbsp;&nbsp;
									</th>
									<th class="text-center">
										SP
									</th>
									<th class="text-center">
										&nbsp;&nbsp;UTAMA&nbsp;&nbsp;
									</th>
									<th class="text-center">
										NON &nbsp;&nbsp;UTAMA&nbsp;&nbsp;
									</th>
									<th class="text-center">
										SR &nbsp;&nbsp;TIANG&nbsp;&nbsp;UTAMA
									</th>
									<th class="text-center">
										Ground&nbsp;&nbsp;Luar&nbsp;&nbsp;
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
									<th class="text-center">kms</th>
									<th class="text-center">kms</th>
									<th class="text-center">Set</th>
									<th class="text-center">Set</th>
									<th class="text-center">Set</th>
									<th class="text-center">Set</th>								
									<th class="text-center">Set</th>
									<th class="text-center">Bh</th>
									<th class="text-center">Bh</th>
									<th class="text-center">set</th>
									<th class="text-center">set</th>
									
								</tr>
								
							</thead>
							<tbody>
							<?php
							foreach($hasil as $listhasil):
							echo "<input type='hidden' value='".$listhasil->id."' name='id_lok'>";
							echo "<input type='hidden' value='".$listhasil->lokasi."' name='lok'>";
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
									<td><input type="text"  maxlength="3" name="j" class="form-control"/></td>
									<td><input type="text"  maxlength="3" name="k" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="l" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="kk" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="ll" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="m" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="n" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="o" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="7" name="p" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="q" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td >
									<td><input type="text"  maxlength="3" name="r" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="s" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="t" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text"  maxlength="3" name="u" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type='text'  maxlength='100' name='z' class='form-control1 input-md'  /></td>
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
									<td><input type='text'  maxlength='3' name='k1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text'  maxlength='3' name='kk1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text'  maxlength='3' name='l1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text'  maxlength='3' name='ll1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text'  maxlength='3' name='m1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text'  maxlength='3' name='n1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text'  maxlength='3' name='o1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text'  maxlength='3' name='p1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text'  maxlength='3' name='q1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text'  maxlength='3' name='r1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text'  maxlength='3' name='s1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text'  maxlength='3' name='t1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text'  maxlength='3' name='u1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        			</tr>
			        			<?php
			        			}
			        			else
			        			{
			        				foreach($input as $list):
			        			?>
									<tr id='addrw0'>
			        				<td class="text-center">M</td>
									<td><input type="text" value="<?php echo $list->TR1 ?>"  maxlength="3" name="a" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->TR2 ?>"  maxlength="3" name="b" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->TR3 ?>"  maxlength="3" name="c" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->TR3A ?>"  maxlength="3" name="d" class="form-control" id="dise" disabled/></td>
									<td><input type="text" value="<?php echo $list->TR4 ?>"  maxlength="3" name="e" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->TR4A ?>"  maxlength="3" name="f" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)"  onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->TR5 ?>"  maxlength="3" name="g" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->TR6 ?>"  maxlength="3" name="h" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->TR6A ?>"  maxlength="3" name="i" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->TR7 ?>"  maxlength="3" name="j" class="form-control" id="dise1" disabled/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->CONDUCTOR ?>" maxlength="3" name="k" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->ESTIMASI_JARAK ?>"  maxlength="3" name="l" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->INS ?>" maxlength="3" name="kk" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->NON_INS ?>"  maxlength="3" name="ll" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->GW ?>" maxlength="3" name="m" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->GWN ?>"  maxlength="3" name="n" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type="text" value="<?php echo $list->HGW ?>" maxlength="3" name="o" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->HGWN ?>" maxlength="7" name="p" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->SP ?>" maxlength="3" name="q" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td >
									<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->UTAMA ?>" maxlength="3" name="r" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->NON_UTAMA ?>" maxlength="3" name="s" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->SR_UTAMA ?>" maxlength="3" name="t" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td style="vertical-align: middle;" rowspan="2"><input type="text" value="<?php echo $list->GROUND_LUAR ?>" maxlength="3" name="u" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" onFocus="startCalc();" onBlur="stopCalc();"/></td>
								</tr>
			        			<tr id='addrw1'>
			        				<td class="text-center">UB</td>
			        				<td><input type='text' value="<?php echo $list->TR12 ?>" maxlength='3' name='a1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value="<?php echo $list->TR22 ?>" maxlength='3' name='b1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value="<?php echo $list->TR32 ?>" maxlength='3' name='c1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value="<?php echo $list->TR3A2 ?>" maxlength='3' name='d1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value="<?php echo $list->TR42 ?>" maxlength='3' name='e1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value="<?php echo $list->TR4A2 ?>" maxlength='3' name='f1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value="<?php echo $list->TR52 ?>" maxlength='3' name='g1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value="<?php echo $list->TR62 ?>" maxlength='3' name='h1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value="<?php echo $list->TR6A2 ?>" maxlength='3' name='i1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text' value="<?php echo $list->TR72 ?>" maxlength='3' name='j1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text' value="<?php echo $list->GW2 ?>" maxlength='3' name='m1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
			        				<td><input type='text' value="<?php echo $list->GWN2 ?>" maxlength='3' name='n1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
									<td><input type='text' value="<?php echo $list->HGW2 ?>" maxlength='3' name='o1' onKeyPress="return goodchars(event,'0123456789',this)" class='form-control input-md' onFocus="startCalc();" onBlur="stopCalc();"/></td>
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
				  "<font color='red'><center><b>Gambar Belum Di Inputkan</b></center></font>"                  
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
	