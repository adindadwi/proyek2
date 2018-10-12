<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/bootstrap-responsive.css">
	<link rel="shortcut icon" href="<?php echo base_url()?>assets/img/favicon.ico"/>
		<title>
			sigup page
		</title>
	</head>
	<body>
<div class="container">	
	<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Daftar Rayon</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="<?php echo base_url()?>c_login">Masuk</a></div>
                        </div>  
                        <div style="padding-top:30px" class="panel-body" >                                
                         <?php echo $_SESSION['log'];
                          $_SESSION['log']=""; ?>
                        <div class="form-horizontal" role="form">
                             <?php echo form_open_multipart('c_sigup/daftar'); ?>                              
                                <div class="form-group">
                                    <label for="nama" class="col-md-3 control-label">Nama</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control1" name="nama" placeholder="Nama Lengkap">
                                    </div>  
                                    <font color="#ef4423"><?php echo form_error('nama'); ?></font>
                                </div>
                                  
                                <div class="form-group" >
                                    <label for="user" class="col-md-3 control-label">Email/Username</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control1" name="username" placeholder="Email/Username">
                                    </div>
                                     <font color="#ef4423"><?php echo form_error('username'); ?></font>
                                </div>
                               
                                <div class="form-group" >
                                    <label for="pass" class="col-md-3 control-label">Kata Sandi</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control1" name="password" placeholder="Kata Sandi">
                                    </div>
                                    <font color="#ef4423"><?php echo form_error('password'); ?></font>
                                </div>
                                
                                <div class="form-group" >
                                    <label for="pass" class="col-md-3 control-label">Foto</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control1" name="foto" />
                                    </div>
                                    <font color="#ef4423"><?php echo form_error('foto'); ?></font>
                                </div>
								
								<div class="form-group" >
                                    <label for="rayon" class="col-md-3 control-label">Rayon</label>
                               <div class="col-md-9">
							<select class="form-control1" name="rayon" id="select">
								<option selected value="">--Pilih Rayon--</option>
								<option value="Lawang">Lawang</option>
								<option value="Bululawang">Bululawang</option>
								<option value="Batu">Batu</option>
								<option value="Singosari">Singosari</option>
								<option value="Kepanjen">Kepanjen</option>
								<option value="Gondanglegi">Gondanglegi</option>
								<option value="Dampit">Dampit</option>
								<option value="Ngantang">Ngantang</option>
								<option value="Sumber Pucung">Sumber Pucung</option>
								<option value="Dinoyo">Dinoyo</option>
								<option value="Blimbing">Blimbing</option>
								<option value="Malang Kota">Malang Kota</option>
								<option value="Kebon Agung">Kebon Agung</option>
								<option value="Semua">Semua</option>
							</select>
                                </div>
                                     <font color="#ef4423"><?php echo form_error('rayon'); ?></font>
                                </div>
                                  
                                <div class="form-group">
                                    <label for="captcha" class="col-md-3 control-label"><?php echo $captcha ?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control1" name="captcha" placeholder="Masukan Validasi">
                                    </div>
                                    <font color="#ef4423"><?php echo form_error('captcha');?></font>
                                </div>
                               
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-hand-right"></i> &nbsp Daftar</button>  
                                    </div>
                                </div>
                            <?php echo form_close(); ?>
                            </div>
                         </div>
                    </div>
                </div>
         </div> 
	<script type="text/javascript" src="<?php echo base_url()?>vendor/jquery-2.1.0-beta2.js"></script>
	<script src="<?php echo base_url()?>assets/dist/js/bootstrap.min.js"></script>
	</body>
</html>