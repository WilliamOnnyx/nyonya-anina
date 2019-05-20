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
							<label for="" class="col-sm-3 control-label">Nama menu <sup>*</sup></label>
							<div class="col-sm-6">
								<input type="hidden" class="form-control" name="id" id="id" value="<?php echo $items['id'];?>">
							  <input type="text" maxlength="50" class="form-control" name="menu" id="menu" placeholder="Nama Menu"value="<?php echo $items['nama'];?>" disabled>
							</div>
						  </div>
						  <div class="form-group">
							<label for="" class="col-sm-3 control-label">Deskripsi <sup>*</sup></label>
							<div class="col-sm-6">
							  <textarea class="form-control" name="desk" id="desk" placeholder="Masukkan Deskripsi" disabled><?php echo $items['deskripsi'];?></textarea>
							</div>
						  </div>
						  <div class="form-group">
							<label for="" class="col-sm-3 control-label">Harga <sup>*</sup></label>
							<div class="col-sm-6">
							  <input type="text" maxlength="50" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?php echo $items['harga'];?>" disabled>
							</div>
						  </div>
						  <div class="form-group">
							<label for="" class="col-sm-3 control-label">Foto <sup>*</sup></label>
							<div class="col-sm-6">
							  <img width="280px" src="<?=base_url()?>assets/images/menu/<?php echo $items['foto'];?>" />
							</div>
						  </div>
						  <div class="form-group">
							<label for="" class="col-sm-3 control-label">Nama Kategori <sup>*</sup></label>
							  <div class="col-sm-6">
								<input type="text" maxlength="50" class="form-control" name="kategori" id="kategori" placeholder="kategori" value="<?php echo $items['namakate'];?>" disabled>
							</div>
							</div>
						  <div class="form-group">
							<div class="col-sm-offset-3 col-sm-10">
							  <a href="<?=site_url()?>/c_menu" name="batal" class="btn btn-default">Kembali</a>
							  <a href="<?=site_url()?>/c_menu/edit_page/<?php echo $items['id'] ?>" name="batal" class="btn btn-primary">Ubah</a>
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