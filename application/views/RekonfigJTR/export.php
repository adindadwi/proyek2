<?php
$now = strtotime(date("Y"));
$addth = 1;
$date = date('Y', strtotime('+'.$addth.'Year', $now));
$nama_file = "LKAI_RekonfigJTR_".$date."(".$rayon.").xls";    
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
	<td><font size="4"><b>PRK.2015 DJT.1.2</b></font></td>
</tr>
<tr>
<td></td>
<td><font color='red' size="4"><b>REKONFIGURASI JARINGAN JTR</b></font></td>
</tr>
<tr>
<td></td>
<td>
  <table cellpadding="8" style="border-collapse:collapse;" border="1">
		<thead style="font-size: 11px" bgcolor="#bbbdb9">
			<tr bgcolor="#a9a7a0">
				<th class="text-center" rowspan="4">
					No
				</th>
				<th class="text-center" rowspan="4">
					No.Gambar
				</th>
				<th class="text-center" rowspan="4">
					Lokasi Pekerjaan
				</th>
				<th class="text-center" rowspan="4">
					Exsist/Penyulang
				</th>
				<th class="text-center" colspan="21" bgcolor="#30b1d1">
					SUTR
				</th>
			</tr>
			<tr bgcolor="#30b1d1">
				<th class="text-center" rowspan="3">
					PASANGAN
				</th>
				<th class="text-center" colspan="10">
					POLE TOP ARRANGEMENT
				</th>
				<th class="text-center" class="text-center" rowspan="2">
					CONDUCTOR
				</th>
				<th bgcolor="#76ae6a" class="text-center" rowspan="2">
					Estimasi Jarak
				</th>
				<th class="text-center" colspan="5">
					POLE SUPPORTER
				</th>
				<th class="text-center" colspan="3">
					TIANG BETON
				</th>
			</tr>
			<tr bgcolor="#30b1d1">
				<th class="text-center">
					TR-1
				</th>															
				<th class="text-center">
					TR-2
				</th>
				<th class="text-center">
					TR-3
				</th>
				<th class="text-center">
					TR-3A
				</th>
				<th class="text-center">
					TR-4
				</th>
				<th class="text-center">
					TR-4A
				</th>
				<th class="text-center">
					TR-5
				</th>
				<th class="text-center">
					TR-6
				</th>
				<th class="text-center">
					TR-6A
				</th>							
				<th class="text-center">
					TR-7
				</th>
				<th class="text-center">
					GW
				</th>
				<th class="text-center">
					GWN
				</th>
				<th class="text-center">
					HGW
				</th>
				<th class="text-center">
					SP
				</th>
				<th class="text-center">
					PONDASI
				</th>
				<th class="text-center">
					UTAMA
				</th>
				<th class="text-center">
					UTAMA (E)
				</th>
				<th class="text-center">
					NON UTAMA
				</th>
			</tr>
			<tr style="height: 15px;" bgcolor="#30b1d1">
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
				<th class="text-center" bgcolor="#76ae6a">gawang</th>	
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
		<tbody style="font-size: 12px">
			<tr>
				<td style="text-align: center; vertical-align: middle;" colspan="4" bgcolor="#faee05"><b>Rayon <?php echo $rayon ?></b></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<?php
			$n=1;
			$i=12;
			$j=13;
			foreach($hasil as $listhasil):
			echo "<tr>";
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2'>".$n."</td>";
			echo "<td class='text-center'>".$listhasil->no_gmb1."</td>";
			echo "<td style='vertical-align: middle;' rowspan='2'>".$listhasil->lokasi."</td>";
			echo "<td style='text-align: center; vertical-align: middle;'>".$listhasil->exsist."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >M</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->TR1M."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->TR2M."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->TR3M."</td>";
			echo "<td bgcolor='#b0dbe8' ></td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->TR4M."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->TR4AM."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->TR5M."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->TR6M."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->TR6AM."</td>";
			echo "<td bgcolor='#b0dbe8' ></td>";
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2' >".$listhasil->CONDUCTOR."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' bgcolor='#76ae6a' rowspan='2' >=Q".$i."*1000/(SUM(G".$i.":O".$j.")-((0.5*(J".$i."+J".$j."))))</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->GWM."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->GWNM."</td>";		
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->HGWM."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2'>".$listhasil->SP."</td>";	
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2'>".$listhasil->PONDASI."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2' bgcolor='#b0dbe8'></td>";
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2'>".$listhasil->UTAMA_E."</td>";		
			echo "<td style='text-align: center; vertical-align: middle;' rowspan='2' bgcolor='#b0dbe8'></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->no_gmb2."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->penyulang."</td>";
			echo "<td style='text-align: center; vertical-align: middle;'>UB</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->TR1UB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->TR2UB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->TR3UB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->TR3AUB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->TR4UB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->TR4AUB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->TR5UB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->TR6UB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->TR6AUB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->TR7UB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->GWUB."</td>";
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->GWNUB."</td>";		
			echo "<td style='text-align: center; vertical-align: middle;' >".$listhasil->HGWUB."</td>";		
			echo "</tr>";
			$n++;
			$i=$i+2;
			$j=$j+2;
			endforeach;
			echo "<tr>";
			echo "<td style='text-align: center; vertical-align: middle;' colspan='4'></td>";
			echo "</tr>";
			echo "<tr bgcolor='#d7d3dc'>";
			echo "<td style='text-align: center; vertical-align: middle;' colspan='4' rowspan='2'><b>JUMLAH</b></td>";
			echo "<td style='text-align: center; vertical-align: middle;'>M</td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td rowspan='2'></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td rowspan='2'></td>";
			echo "<td rowspan='2'></td>";
			echo "<td rowspan='2'></td>";
			echo "<td rowspan='2'></td>";
			echo "<td rowspan='2'></td>";
			echo "<td rowspan='2'></td>";
			echo "<td rowspan='2'></td>";
			echo "<td rowspan='2'></td>";
			echo "<td rowspan='2'></td>";
			echo "<td rowspan='2'></td>";
			echo "<td rowspan='2'></td>";
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
			echo "</tr>";
			?>
		</tbody>
	</table>
 </td>
</tr>
</table>