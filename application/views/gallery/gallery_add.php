		
		<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
						<ol class="breadcrumb">
						  <li><a href="#"><?php echo $_prev; ?></a></li>
						  <li class="active"><?php echo $_here; ?></li>
						</ol>
						<?php echo validation_errors();?>
						<?php echo $message;?>
						<div class="form-horizontal form-style">
						<?php echo form_open_multipart('c_gallery/add');?>
						  <div class="form-group">
							<label for="" class="col-sm-3 control-label">Foto <sup>*</sup></label>
							<div class="col-sm-6">
							  <input type = "file" class="form-control" name = "foto" id = "foto" />
							</div>
						  </div>
						  
						  </div>
						  <div class="form-group">
							<div class="col-sm-offset-3 col-sm-10">
							  <a href="<?=site_url()?>/c_gallery" class="btn btn-default">Kembali</a>
							  <input type="reset" name="reset" class="btn btn-default"></input>
							  <input type="submit" value="Tambah" name="tambah" class="btn btn-primary"></input>
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