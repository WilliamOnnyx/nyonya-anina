<?php foreach ($data as $items) { ?>
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
						<?php echo form_open_multipart('c_about/edit');?>
						  <div class="form-group">
							<label for="" class="col-sm-3 control-label">Nama<sup>*</sup></label>
							<div class="col-sm-6">
								<input type="hidden" class="form-control" name="id" id="id" value="<?php echo $items['id'];?>">
							  <input type="text" maxlength="50" class="form-control" name="about" id="about" placeholder="Nama about"value="<?php echo $items['nama'];?>">
							</div>
						  </div>
						  <div class="form-group">
							<label for="" class="col-sm-3 control-label">About Us <sup>*</sup></label>
							<div class="col-sm-6">
							  <textarea class="form-control" name="desk" id="desk" placeholder="Masukkan Deskripsi"><?php echo $items['about'];?></textarea>
							</div>
						  </div>
						  <div class="form-group">
							<label for="" class="col-sm-3 control-label">Alamat <sup>*</sup></label>
							<div class="col-sm-6">
							  <input type="text" maxlength="50" class="form-control" name="alamat" id="alamat" placeholder="alamat" value="<?php echo $items['alamat'];?>">
							</div>
						  </div>
						  <div class="form-group">
							<label for="" class="col-sm-3 control-label">Telepon <sup>*</sup></label>
							<div class="col-sm-6">
							  <input type="text" maxlength="50" class="form-control" name="telepon" id="telepon" placeholder="telepon" value="<?php echo $items['telepon'];?>">
							</div>
						  </div>
						  <div class="form-group">
							<label for="" class="col-sm-3 control-label">Logo <sup>*</sup></label>
							<div class="col-sm-6">
							  <img width="280px" src="<?=base_url()?>assets/images/logo/<?php echo $items['logo'];?>" />
							  <input type = "file" class="form-control" name = "foto" id = "foto" />
							</div>
						  </div>
						  
						  </div>
						  <div class="form-group">
							<div class="col-sm-offset-3 col-sm-10">
							  <input type="submit" value="Ubah" name="update" class="btn btn-primary"></input>
							</div>
						  </div>
						</form>
					</div>
					<div role="tabpanel" class="tab-pane" id="profile">
						
					
				<?php
				//echo $output;
				?>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php }?>