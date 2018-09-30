<section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <?php 
                                  if($_SESSION['foto']=="")
                                  {
								  	echo "<img src='".base_url()."assets/img/dp/no-img.jpg' class='img-circle' alt='User Image' />";
								  }
								  else
								  {
								  	echo "<img src='".base_url()."assets/img/dp/".$_SESSION['foto']."' class='img-circle' alt='User Image' />";
								  }
                             ?>
                        </div>
                        <div class="pull-left info">
                        	<p>Selamat Datang,</p>
                        	
                            <font color=""><?php echo $_SESSION['nama'] ?></font>
                        </div>
                    </div>
                   
                    <ul class="sidebar-menu">
                        <li <?php echo $side1; ?>>
                            <a href="<?php echo base_url()?>home">
                                <i class="fa fa-home"></i> <span>Home</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-archive"></i> <span>Perkuatan Jaringan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                           
                            <ul class="treeview-menu">
                             <li><a href="<?php echo base_url()?>RekonfigJTM"><i class="fa fa-caret-right"></i> Rekonfig Jar TM</a></li>
                             <li><a href="<?php echo base_url()?>rekonfigJTR"><i class="fa fa-caret-right"></i> Rekonfig Jar TR</a></li>
                             <li><a href="<?php echo base_url()?>penyubar"><i class="fa fa-caret-right"></i> Penyulang Baru</a></li>
                             <li><a href="<?php echo base_url()?>penyubar_gi"><i class="fa fa-caret-right"></i> Penyulang Baru-GI</a></li>
                             <li><a href="<?php echo base_url()?>rehab_jar_tm"><i class="fa fa-caret-right"></i> Rehab-Jar TM</a></li>
                             <li><a href="<?php echo base_url()?>rehab_jar_tr"><i class="fa fa-caret-right"></i> Rehab-Jar TR</a></li>
                             <li><a href="<?php echo base_url()?>PemGSW"><i class="fa fa-caret-right"></i> Pemasangan GSW</a></li>
                             <li><a href="<?php echo base_url()?>Pengmattua"><i class="fa fa-caret-right"></i> Pengganti Material-tua</a></li>
                             <li><a href="<?php echo base_url()?>Section"><i class="fa fa-caret-right"></i> Sectionaliser</a></li>
                                
                            </ul>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-film"></i> <span>Penekanan Susut Dist</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                           
                            <ul class="treeview-menu">
                             <li><a href="<?php echo base_url()?>UpRTM"><i class="fa fa-caret-right"></i> Up Rating TM</a></li>
                             <li><a href="<?php echo base_url()?>UpRTR"><i class="fa fa-caret-right"></i> Up Rating TR</a></li>
                             <!--<li><a href="<?php echo base_url()?>TrafoSisipJar"><i class="fa fa-caret-right"></i> Trafo Sisip + Jar</a></li>
                             <li><a href="<?php echo base_url()?>SRR"><i class="fa fa-caret-right"></i> SR 5 Renteng</a></li>-->
                            </ul>
                        </li>
                        
                       <li <?php echo $side3; ?>>
                            <a href="<?php echo base_url()?>home/savecom">
                                <i class="fa fa-envelope"></i> <span>Comment</span>
                            </a> 
                        </li>
						<li>	                  
							<font color="white"><marquee id='#screen' onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="up" width="220" height="200" align="center">
							<?php foreach($content as $row){
								echo "<a href='".base_url()."home/showcomment'><div class='pancok panel-info'>";
								echo"<p align='left'>";
								echo "Name : ".$row['nama']."";
								echo "<br \>";
								echo "Rayon : ".$row['rayon']."";
								echo "<br \>";
								echo "said : <i>".$row['isi']."</i>";
								echo "<br \>";
								echo $row['time'];
								echo "<br \>";
								echo"</div></a>";
							}?>
							</marquee>
							</font>
						</li>
						
                    </ul>
     </section>
<script>
$(document).ready(function(){
	setInterval(function(){
		$("#screen").load('sidebar.php')
    }, 10000);
});
</script>