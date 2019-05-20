		<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
						  <li><a href="#"><?php echo $_prev; ?></a></li>
						  <li class="active"><?php echo $_here; ?></li>
						</ol>
						
						<?php foreach ($data as $items) { ?>
						
						<form class="form-horizontal" method="POST">
						  <div class="form-group">
							<label for="" class="col-sm-3 control-label">Nama kategori <sup>*</sup></label>
							<div class="col-sm-6">
								<input type="hidden" class="form-control" name="id" id="id" value="<?php echo $items['id'];?>">
							  <input type="text" class="form-control" name="kategori" id="kategori" value="<?php echo $items['nama'];?>" placeholder="kategori" disabled>
							</div>
						  </div>
						  <div class="form-group">
							<div class="col-sm-offset-3 col-sm-10">
							  <a href="<?=site_url()?>/c_kategori" name="batal" class="btn btn-default">Kembali</a>
							  <a href="<?=site_url()?>/c_kategori/edit_page/<?php echo $items['id'] ?>" name="batal" class="btn btn-primary">Ubah</a>
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
		<br>
<?php }?>