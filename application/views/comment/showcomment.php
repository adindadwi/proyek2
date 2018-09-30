<section class="content-header">
<section class="content">
	<div class="row">
      <div class="col-xs-12">
        <div class="box">
            <div style="background-color: #4db4f9;" class="box-header">
                    <h1 class="box-title"><font color="#f4f2f3">Comment</font></h1>
             </div><!-- /.box-header -->
			 <?=$pages?>
			 <?php 
			 foreach($fullco as $row)
			 {
				 echo "<div class='panel panel-info'>";
				echo"<p align='left'>";
				echo "Name : ".$row['nama']."";
				echo "<br \>";
				echo "Rayon : ".$row['rayon']."";
				echo "<br \>";
				echo "said : <i>".$row['isi']."</i>";
				echo "<br \>";
				echo $row['time'];
				echo "<br \>";
				echo"</div>";
			 }
			 ?>
              	<div class="box-body table-responsive">
                  <div class="container center">
                    
                    
                  </div>
              	</div>
        </div>
      </div>
      <!-- /.box-body -->
	     </div><!-- /.box -->
	     
	    