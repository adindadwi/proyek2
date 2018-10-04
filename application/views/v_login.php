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
		<title>Form Login Page</title>
	<style type="text/css">
		.center {
     float: none;
     margin-left: auto;
     margin-right: auto;
     margin-top: auto;
     margin-bottom: auto;
		}
		.login-container {
	  margin: 0 auto;
	  width: 400px;
	  height: 150px;
        }
        .body{
	    background: url('background.jpg');
	    color: #fff;
        }
        .imgcenter {
      display: block;
      margin: 0px auto;
      text-align: center;
      width: 100px;
      height: 150px;
}
	</style>
	<script type="text/javascript" src="<?php echo base_url()?>vendor/jquery-2.1.0-beta2.js"></script>
	</head>
	<body>
	<br><br><br>
	<div class="container center">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                    </div>     
                    <div style="padding-top:30px" class="panel-body" >
                        <?php echo $log ?>
                            
                        <?php echo form_open('c_login'); ?>
                            <img class="imgcenter" src="assets/img/images.jpg" >
                            <br>
                            <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Username / Email">                                                                
                                    </div>
                                <font color="#ef4423"><?php echo form_error('username'); ?></font>
                            <div style="margin-top: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Kata Sandi">
                                    </div>      
                                <font color="#ef4423"><?php echo form_error('password'); ?></font>
								<br \>
								<div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
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
                            <div class="input-group">
                                      <div class="checkbox"></div>
                                    </div>

                                <div style='margin-top:10px;' class="form-group">
                                    <!-- Button -->
										
                                    <div class="col-sm-13 controls" style='margin-top:10px;'>
                                      <button id="btn-login" class="btn btn-success">Login</button>
                                    </div>  
                                </div>

                            <?php echo form_close(); ?>

                        </div>                     
                    </div> 
              </div>
        </div>
      
		<script src="<?php echo base_url()?>assets/dist/js/bootstrap.min.js"></script>
	</body>
</html>