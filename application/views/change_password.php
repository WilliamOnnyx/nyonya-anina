		
		<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Ganti Password</h2>
						<?php echo validation_errors();?>
						<?php echo $message;?>
						<form name="form" class="form-horizontal form-style" method="POST" action="<?=site_url()?>/c_change_password/change_password" >
						  <div class="form-group">
							<label for="" class="col-sm-3 control-label">Password Lama</label>
							<div class="col-sm-6">
							  <input type="text" maxlength="25" class="form-control" name="opass" id="opass" placeholder="password lama">
							</div>
						  </div>
						  <div class="form-group">
							<label for="" class="col-sm-3 control-label">Password Baru</label>
							<div class="col-sm-6">
							  <input type="password" maxlength="25" class="form-control" name="npass" id="npass" placeholder="password baru">
							</div>
						  </div>
						  <div class="form-group">
							<label for="" class="col-sm-3 control-label">Ketik Ulang Password Baru</label>
							<div class="col-sm-6">
								<input type="password" maxlength="25" class="form-control" name="npassre" id="npassre" placeholder="Ketik ulang password baru">
							</div>
						  </div>
						  <div class="form-group">
							<div class="col-sm-offset-3 col-sm-10">
							  <input type="reset" class="btn btn-default"></input>
							  <input type="submit" name="ganti" value="Ganti" class="btn btn-primary"></input>
							</div>
						  </div>
						</form>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->