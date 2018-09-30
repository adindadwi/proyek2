
<section class="content-header">
     <h1>Upload Gambar</h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-upload"></i> Upload</a></li>
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
                    <h3 class="box-title"><font color="#f4f2f3">Uraian & Lokasi</font></h3>
                </div><!-- /.box-header -->
			    <div class="box-body table-responsive">
				<form action="#" method="POST">
				 <div class="form-horizontal" role="form">
					<br>
					<div class="form-group">
                        <label for="nama" class="col-md-2 control-label">Rayon</label>
                        <div class="col-md-5">
							<select class="form-control1" name="rayon" id="select">
								<option selected value="">--Pilih Rayon--</option>
								<option value="Lawang">Lawang</option>
								<option value="Bululawang">Bulu Lawang</option>
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
							</select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="col-md-2 control-label">Jenis Pekerjaan</label>
                        <div class="col-md-5">
							<select class="form-control1" name="rayon" id="jp">
								<option selected value="">--Pilih Jenis Pekerjaan--</option>
								<option value="Lawang">Perkuatan Jaringan</option>
								<option value="Bululawang">Penekanan Susut Distribusi</option>
							</select>
                        </div>
                    </div>
                   </div>
                   <br>
                        <div class="col-md-5 text-center">
						<button type="submit" class="btn btn-success">Submit</button>&nbsp;&nbsp;<button type="reset" class="btn btn-warning">Reset</button>
                        </div><br><br>
                   </div>
				</form>
				</div>
			</div>
		</div>
	</div>
</section>