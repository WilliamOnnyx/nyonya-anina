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
						<?php echo form_open_multipart('c_menu/edit');?>
						  <div class="form-group">
							<label for="" class="col-sm-3 control-label">Nama menu <sup>*</sup></label>
							<div class="col-sm-6">
								<input type="hidden" class="form-control" name="id" id="id" value="<?php echo $items['id'];?>">
							  <input type="text" maxlength="50" class="form-control" name="menu" id="menu" placeholder="Nama Menu"value="<?php echo $items['nama'];?>">
							</div>
						  </div>
						  <div class="form-group">
							<label for="" class="col-sm-3 control-label">Deskripsi <sup>*</sup></label>
							<div class="col-sm-6">
							  <textarea class="form-control" name="desk" id="desk" placeholder="Masukkan Deskripsi"><?php echo $items['deskripsi'];?></textarea>
							</div>
						  </div>
						  <div class="form-group">
							<label for="" class="col-sm-3 control-label">Harga <sup>*</sup></label>
							<div class="col-sm-6">
							  <input type="text" maxlength="50" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?php echo $items['harga'];?>">
							</div>
						  </div>
						  <div class="form-group">
							<label for="" class="col-sm-3 control-label">Foto <sup>*</sup></label>
							<div class="col-sm-6">
							  <img width="280px" src="<?=base_url()?>assets/images/menu/<?php echo $items['foto'];?>" />
							  <input type = "file" class="form-control" name = "foto" id = "foto" />
							</div>
						  </div>
						  <div class="form-group">
							<label for="" class="col-sm-3 control-label">Nama Kategori <sup>*</sup></label>
							  <div class="col-sm-6">
								<select name="kategori" class="form-control">
									<option value="<?php echo $items['namakate'];?>">Pilih Nama Kategori</option>
									<?php foreach ($output as $item)
										echo '<option value="'.$item['id'].'">'.$item['nama'].'</option>';
										
									?>
								</select>
							</div>
							</div>
						  </div>
						  <div class="form-group">
							<div class="col-sm-offset-3 col-sm-10">
							  <a href="<?=site_url()?>/c_menu" name="batal" class="btn btn-default">Kembali</a>
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