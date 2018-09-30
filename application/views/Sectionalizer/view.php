
<section class="content-header">
     <h1>Table <small>View</small></h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Widgets</li>
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
                    <h3 class="box-title"><font color="#f4f2f3">Table Data Sectionaliser</font></h3>                                    
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
				          <div style="border: 0px solid 00000; color: black; font-family: arial; height: auto; overflow: auto; padding: 4px; text-align: left; width: auto;">
						<table class="table table-bordered" width="100%">
							<thead style="font-size: 11px" bgcolor="#bbbdb9">
								<tr>
									<th hidden="yes" style="vertical-align: middle;" class="text-center">&nbsp;&nbsp;#&nbsp;&nbsp;</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										No.
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										No. Gambar
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										Lokasi
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										Exist
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										Penyulang
									</th>
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										Section KE
									</th>
									<th style="vertical-align: middle;" class="text-center" colspan="12">
										Kondisi Pemasangan di Lokasi
									</th>							
									<th style="vertical-align: middle;" class="text-center" rowspan="4">
										KET
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
							<tbody style="font-size: 12px">
							<?php
									
									echo "<td class='text-center' rowspan='2'>".$listhasil->NO_GAMBAR."</td>";				
									echo "<td rowspan='2'>".$listhasil->LOKASI."</td>";
									echo "<td class='text-center'>".$listhasil->EXSIST."</td>";
									echo "<td class='text-center'>".$listhasil->PENYULANG."</td>";
									echo "<td class='text-center'>".$listhasil->SECTION_KE."</td>";
									echo "<td class='text-center'>".$listhasil->TM1."</td>";
									echo "<td class='text-center'>".$listhasil->TM2."</td>";
									echo "<td class='text-center'>".$listhasil->TM5."</td>";
									echo "<td class='text-center'>".$listhasil->LBS_MPRTU."</td>";
									echo "<td class='text-center'>".$listhasil->LBS_MNRTU."</td>";
									echo "<td class='text-center'>".$listhasil->RECLOZER2."</td>";
									echo "<td class='text-center'>".$listhasil->LBS_MPRTU2."</td>";
									echo "<td class='text-center'>".$listhasil->LBS_MNRTU2."</td>";
									echo "<td class='text-center'>".$listhasil->PONDASI."</td>";
									echo "<td class='text-center'>".$listhasil->LAINNYA."</td>";							
									echo "<td class='text-center'>".$listhasil->KET."</td>";
									
								endforeach;
								?>
							</tbody>
						</table>
						<br><br>
					   </div>
				    </div>
				</div>
			</div>
		</div>
	</section>