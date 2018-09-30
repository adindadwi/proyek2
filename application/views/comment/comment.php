<section class="content">
	<div class="row">
      <div class="col-xs-12">
        <div class="box">
            <div style="background-color: #4db4f9;" class="box-header">
                    <h1 class="box-title"><font color="#f4f2f3">Comment</font></h1>                                    
             </div><!-- /.box-header -->
              	<div class="box-body table-responsive">
                  <div class="container center">
                    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
	                  <div class="panel panel-info" >
					  <?php echo form_open('home/savecom'); ?>
	                    <div class="panel-heading">
	                      <div class="panel-title">Silahlan Berkomentar</div>
	                      <div style="float:right; font-size: 80%; position: relative; top:-10px"></div>
                        </div>
	                    <div style="padding-top:30px" class="panel-body" >
	                      <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                        <input id="login-username" type="text" class="form-control" name="username" value="<?=$_SESSION['nama']?>" placeholder="<?=$_SESSION['nama']?>" readonly>
                          </div>
	                      <font color="#ef4423"><?php echo form_error('username'); ?></font>
	                      <div style="margin-top: 25px" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
	                        <input id="login-password" type="read-only" class="form-control" name="rayon" value="<?php if($_SESSION['rayon']=="Semua"){echo"Area";}?>" placeholder="<?=$_SESSION['rayon']?>" readonly>
                          </div>
	                      <font color="#ef4423"><?php echo form_error('password'); ?></font>
                          <br>
                          <br>
	                      <p>
	                        <textarea name="isi" rows="8" cols="75" maxlength="1000" id="komentar" placeholder="Tinggalkan Pesan Bila Perlu . . ."></textarea>
                          </p>
	                      <div class="input-group">
	                        <div class="checkbox">
	                          <div style='margin-top:10px;' class="form-group">
	                            <!-- Button -->
	                            <div class="col-sm-13 controls" style='margin-top:10px;'>
	                              <button id="btn-login2" name="btn_comment" class="btn btn-success">Komentar</button>
                                </div>
                              </div>
	                        </div>
                          </div>
	                      <?php echo form_close(); ?> </div>
                      </div>
                    </div>
                  </div>
                  <script src="<?php echo base_url()?>assets/dist/js/bootstrap.min.js"></script>
              </div><!-- /.box-body -->
	     </div><!-- /.box -->
	     
</section>
	    