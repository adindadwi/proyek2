<?php
$now = strtotime(date("Y"));
$addth = 1;
$date = date('Y', strtotime('+'.$addth.'Year', $now));
$nama_file = "LKAI_RekonfigJTM_".$date."(".$rayon.").xls";    
header("Pragma: public");   
header("Expires: 0");   
header("Cache-Control: must-revalidate, post-check=0,pre-check=0");     
header("Content-Type: application/force-download");     
header("Content-Type: application/octet-stream");   
header("Content-Type: application/download");   
header("Content-Disposition: attachment;filename=".$nama_file."");  
header("Content-Transfer-Encoding: binary ");
?>
<table>
<tr>
<td align="center"><img src="<?php echo base_url()?>assets/img/nyoh.jpg"></td>
</tr>
<tr>
<td align="center"></td>
</tr>
<tr>
<td align="center"></td>
</tr>
<tr>
	<td></td>
	<td><font color='red' size="4"><b>PROGRAM PERKUATAN JARINGAN</b></font></td>
</tr>
<tr>
	<td></td>
	<td><font size="4"><b>PRK.2015 DJT.1.1</b></font></td>
</tr>
<tr>
<td></td>
<td><font color='red' size="4"><b>REKONFIGURASI JARINGAN JTM</b></font></td>
</tr>
<tr>
<td></td>
<td>

 	<table cellpadding="8" style="border-collapse:collapse;" border="1">
		<thead style="font-size: 11px" bgcolor="#bbbdb9">
			<tr>
				<th class="text-center" rowspan="2" colspan="5" bgcolor="#ffffff">
					URAIAN & LOKASI
				</th>
				<th class="text-center" colspan="22" bgcolor="#f9c1bb">
					SUTM
				</th>
				<th class="text-center" colspan="14" bgcolor="#7ccee2">
					MVTIC
				</th>
				<th class="text-center" colspan="6" bgcolor="#d0a7f5">
					UGC
				</th>
			</tr>
			<tr>
				<th class="text-center" colspan="22" bgcolor="#ffffff">
					AAACS 150 mm2
				</th>
				<th class="text-center" colspan="14" bgcolor="#ffffff">
					3 x 150 + 1 x 95 mm2
				</th>
				<th class="text-center" colspan="6" bgcolor="#ffffff">
					3 x 150 mm2
				</th>
			</tr>
			<tr bgcolor="#c5c4be">
				<th class="text-center" rowspan="3">
					No
				</th>
				<th class="text-center" rowspan="3">
					No.Gambar
				</th>
				<th class="text-center" rowspan="3">
					Lokasi Pekerjaan
				</th>
				<th class="text-center" rowspan="3">
					Exsist/Penyulang
				</th>
				<th class="text-center" rowspan="3">
					JUMLAH X( kali )Gangguan dalam 3 bulan
				</th>
				<th bgcolor="#c5c4be" class="text-center" rowspan="3">
					KONSTRUKSI
				</th>
				<th class="text-center" colspan="11"  bgcolor="#f9c1bb">
					POLE TOP ARRANGEMENT
				</th>
				<th class="text-center" class="text-center" rowspan="2" bgcolor="#f9c1bb">
					CONDUCTOR
				</th>
				<th bgcolor="#76ae6a" class="text-center" rowspan="2">
					Estimasi Jarak
				</th>
				<th class="text-center" colspan="3" bgcolor="#f9c1bb">
					POLE SUPPORTER
				</th>
				<th class="text-center" colspan="2" bgcolor="#f9c1bb">
					TIANG BETON
				</th>
				<th class="text-center" colspan="3" bgcolor="#f9c1bb">
					POLE ACC.
				</th>
				<th bgcolor="#c5c4be" class="text-center" rowspan="3">
					PASANGAN
				</th>
				<th class="text-center" colspan="6">
					POLE TOP ARRANGEMENT MVTIC
				</th>
				<th class="text-center" class="text-center" rowspan="2">
					MVTIC
				</th>
				<th bgcolor="#76ae6a" class="text-center" rowspan="2">
					Estimasi Jarak
				</th>
				<th class="text-center" colspan="3">
					POLE SUPPORTER
				</th>
				<th class="text-center" colspan="2">
					TIANG BETON
				</th>
				<th bgcolor="#b97bf0" class="text-center" rowspan="2">
					SKTM / UGC
				</th>
				<th bgcolor="#d0a7f5" class="text-center" colspan="2">
					SKTM / UGC
				</th>
				<th bgcolor="#d0a7f5" class="text-center" colspan="3">
					TERMINATION
				</th>
			</tr>
			<tr bgcolor="#f9c1bb">
				<th class="text-center">TM-1</th>
				<th class="text-center">TM-2</th>
				<th class="text-center">TM-4</th>
				<th class="text-center">TM-4X</th>
				<th class="text-center">TM-5</th>
				<th class="text-center">TM-8</th>
				<th class="text-center">TM-8X</th>
				<th class="text-center">TM-8XC</th>
				<th class="text-center">TM-10</th>
				<th class="text-center">TM-10X</th>
				<th class="text-center">TM-11</th>
				<th class="text-center">GW</th>
				<th class="text-center">HGW</th>
				<th class="text-center">SP</th>
				<th class="text-center">Utama</th>
				<th class="text-center">Penyangga</th>
				<th class="text-center">Ferleng<br>Stuck</th>
				<th class="text-center">Ground<br>Dalam</th>
				<th class="text-center">Ground<br>Luar</th>
				<th class="text-center" bgcolor="#7ccee2">MVTIC1</th>
				<th class="text-center" bgcolor="#7ccee2">MVTIC2</th>
				<th class="text-center" bgcolor="#7ccee2">MVTIC4</th>
				<th class="text-center" bgcolor="#7ccee2">MVTIC4A</th>
				<th class="text-center" bgcolor="#7ccee2">MVTIC5</th>
				<th class="text-center" bgcolor="#7ccee2">MVTIC5A</th>
				<th class="text-center" bgcolor="#7ccee2">GW</th>
				<th class="text-center" bgcolor="#7ccee2">HGW</th>
				<th class="text-center" bgcolor="#7ccee2">SP</th>
				<th class="text-center" bgcolor="#7ccee2">Utama</th>
				<th class="text-center" bgcolor="#7ccee2">Penyangga</th>
				<th class="text-center" bgcolor="#d0a7f5">Ditanam</th>
				<th class="text-center" bgcolor="#d0a7f5">Crossing<br>Jalan</th>
				<th class="text-center" bgcolor="#d0a7f5">Outdoor</th>
				<th class="text-center" bgcolor="#d0a7f5">Indoor</th>
				<th class="text-center" bgcolor="#d0a7f5">Joint</th>
			</tr>
			<tr style="height: 15px;" bgcolor="#f9c1bb">
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
				<th class="text-center" bgcolor="#76ae6a">Gawang</th>
				<th class="text-center">Set</th>
				<th class="text-center">Set</th>
				<th class="text-center">Set</th>
				<th class="text-center">Bh</th>
				<th class="text-center">Bh</th>
				<th class="text-center">Set</th>
				<th class="text-center">Set</th>
				<th class="text-center">Set</th>
				<th class="text-center" bgcolor="#7ccee2">Set</th>
				<th class="text-center" bgcolor="#7ccee2">Set</th>
				<th class="text-center" bgcolor="#7ccee2">Set</th>
				<th class="text-center" bgcolor="#7ccee2">Set</th>
				<th class="text-center" bgcolor="#7ccee2">Set</th>
				<th class="text-center" bgcolor="#7ccee2">Set</th>
				<th class="text-center" bgcolor="#7ccee2">Kms</th>
				<th class="text-center" bgcolor="#76ae6a">Gawang</th>
				<th class="text-center" bgcolor="#7ccee2">Set</th>
				<th class="text-center" bgcolor="#7ccee2">Set</th>
				<th class="text-center" bgcolor="#7ccee2">Set</th>
				<th class="text-center" bgcolor="#7ccee2">Bh</th>
				<th class="text-center" bgcolor="#7ccee2">Bh</th>
				<th class="text-center" bgcolor="#b97bf0">ms</th>
				<th class="text-center" bgcolor="#d0a7f5">Mtr</th>
				<th class="text-center" bgcolor="#d0a7f5">Mtr</th>
				<th class="text-center" bgcolor="#d0a7f5">Set</th>
				<th class="text-center" bgcolor="#d0a7f5">Set</th>
				<th class="text-center" bgcolor="#d0a7f5">Set</th>
			</tr>
		</thead>
		<tbody style="font-size: 12px">
			<tr>
				<td style="text-align: center; vertical-align: middle;" colspan="5" bgcolor="#faee05"><b>Rayon <?php echo $rayon ?></b></td>
				<?php
				for($i = 1; $i < 43; $i++){
					echo "<td></td>";
				}
				?>
			</tr>
			<?php
			$n=1;
			$i=14;
			$j=15;
			foreach($hasil as $listhasil):
			echo "<tr>";
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2'>".$n."</td>";
			echo "<td class='text-center'>".$listhasil->bgr_no."</td>";
			echo "<td style='vertical-align: middle;' rowspan='2'>".$listhasil->lks."</td>";
			echo "<td style='text-align: center; vertical-align: middle;'>".$listhasil->ex_sist."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2'>".$listhasil->jlm_ganggu."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >M</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT1M."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT2M."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT4M."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT4XM."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT5M."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT8M."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT8XM."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT8MCX."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT10M."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT10MX."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT11M."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2' >".$listhasil->CONDUC."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' bgcolor='#76ae6a' rowspan='2' >=(S".$i."*1000)/SUM(H".$i.":R".$j.")-(K".$i."+K".$j."+N".$i."+N".$j."+Q".$i."+Q".$j.")</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MWG."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->HGWM."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MPS."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2' bgcolor='#f9c1bb'>".$listhasil->UTAM1."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2' bgcolor='#f9c1bb'>".$listhasil->PEYANG."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2' >".$listhasil->FERLE_STRUCK."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2' >".$listhasil->GROUN_DLM."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2' bgcolor='#f9c1bb'>".$listhasil->GROUN_LAR."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >M</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->CITVM1M."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->CITVM2M."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->CITVM4M."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->CITVM4MA."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->CITVM5M."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->CITVM5MA."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2'>".$listhasil->CITVM."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2' bgcolor='#76ae6a'>=TRUNC(AJ".$i."*1000/(AD".$i."+AE".$i."+AF".$i."+AH".$i."+AI".$i."+AD".$j."+AE".$j."+AF".$j."+AG".$j."+AH".$j."+AI".$j.")/1)*1</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MWG1."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MWGH1."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MPS1."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2' bgcolor='#7ccee2'>=SUM(AD".$i.":AI".$i.")</td>";
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2' bgcolor='#7ccee2'>=AM".$i."+AN".$i."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->SKTM_UGC."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->DITANAM."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->CROSSING_JLN."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->OUTDOOR."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->INDOOR."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2' bgcolor='#d0a7f5'>=TRUNC((AQ".$i."/250)/1)*1</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->gbr2_no."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->penylang."</td>";
			echo "<td style='text-align: center; vertical-align: middle;'>UB</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT1UB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT2UB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT4UB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT4XUB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT5UB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT8UB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT8XUB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT8XCUB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT10UB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT10XUB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->MT11UB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->UBGW."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->UBWGH."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->BUPS."</td>";
			echo "<td style='text-align: center; vertical-align: middle;'>UB</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->CITVM1UB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->CITVM2UB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->CITVM4UB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->CITVM4AUB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->CITVM5UB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->CITVM5AUB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->BUWG1."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->UBWGH."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->UBPS1."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->SKTM_UGC1."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->DITANAM1."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->CROSSING_JLN1."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->OUTDOOR1."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->INDOOR1."</td>";
			echo "</tr>";
			$n++;
			$i=$i+2;
			$j=$j+2;
			endforeach;
			echo "<tr>";
			echo "<td style='text-align: center; vertical-align: middle;' colspan='5'></td>";
			echo "</tr>";
			echo "<tr bgcolor='#d7d3dc'>";
			echo "<td style='text-align: center; vertical-align: middle;' colspan='5' rowspan='2'><b>JUMLAH</b></td>";
			echo "<td style='text-align: center; vertical-align: middle;'>M</td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td rowspan='2'></td>";
			echo "<td rowspan='2' bgcolor='#76ae6a'></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td rowspan='2'></td>";
			echo "<td rowspan='2' bgcolor='#f9c1bb'></td>";
			echo "<td rowspan='2' bgcolor='#f9c1bb'></td>";
			echo "<td rowspan='2'></td>";
			echo "<td rowspan='2'></td>";
			echo "<td rowspan='2' bgcolor='#f9c1bb'></td>";
			echo "<td style='text-align: center; vertical-align: middle;'>M</td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td rowspan='2'></td>";
			echo "<td rowspan='2' bgcolor='#76ae6a'></td>";
			echo "<td rowspan='2'></td>";
			echo "<td rowspan='2'></td>";
			echo "<td rowspan='2'></td>";
			echo "<td rowspan='2' bgcolor='#7ccee2'></td>";
			echo "<td rowspan='2' bgcolor='#7ccee2'></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td rowspan='2' bgcolor='#d0a7f5'></td>";
			echo "</tr>";
			echo "<tr bgcolor='#d7d3dc'>";
			echo "<td style='text-align: center; vertical-align: middle;'>UB</td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td style='text-align: center; vertical-align: middle;'>UB</td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "</tr>";
			?>
		</tbody>
	</table>

</td>
</tr>
</table>