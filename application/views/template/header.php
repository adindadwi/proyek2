
<header class="header">
            <a href="<?php echo base_url()?>home" class="logo">
               <img src="<?php echo base_url()?>assets/img/1.PNG"> PLN Malang
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $_SESSION['nama'] ?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
 
                                <li class="user-header bg-light-blue">
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
                                    <p>
                                        <?php echo $_SESSION['nama'] ?> - Web Developer
                                        <small></small>
                                    </p>
                                </li>

                                <li class="user-footer">
                                    <div class="pull-left">
									<?php if($_SESSION['rayon']=="Semua")
									{echo "<a href='c_sigup' class='btn btn-default btn-flat'>Daftar</a>";?>
                                        
									<?php } ?>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url()?>home/logout" class="btn btn-default btn-flat">Keluar</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>