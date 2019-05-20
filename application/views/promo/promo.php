
		<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Promo</h2>
						 <?php //echo $message;?>
						
						<!-- Search form dan tombol tambah user-->
						<div class="navbar-right col-lg-10">
							<a href="<?=site_url()?>/c_promo/add_page" class="navbar-right btn btn-info ">Tambah Promo</a>
							
							<div class="navbar-right col-sm-4">
								<div class="input-group">
									<input type="text" class="form-control col-sm-8" name="title1" id="title1" placeholder="Cari promo">
									<div class="input-group-btn">
										<a title="Cari" id="btn_ok1" name="btn_ok1" class="btn btn-default"><i class="fa fa-search fa-fw"></i></a>
										<a title="Refresh" class="btn btn-default" href="<?=site_url()?>/c_promo"><i class="glyphicon glyphicon-refresh icon-refresh"></i></a>
									</div>
								</div><!-- /input-group -->
							</div><!-- /navbar-right col-sm-4 -->
						</div><!-- /navbar-right col-lg-10 -->
						<!-- /search -->
						
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">promo</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content style_tab">
						
							<div role="tabpanel" class="tab-pane active" id="home">								
								<div id="table-javascript1"></div>
						</div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
		
		
<script type="text/javascript">	
</script>

<script>

function operateFormatter1(value, row, index) {
	return [
		'<a title="Lihat Detil" href="<?=site_url()?>/c_promo/view_page/'+row['id']+'" class="btn btn-primary">',
			'<i class="fa fa-eye fa-fw"></i>',
		'</a> ',
		'<a title="Ubah" href="<?=site_url()?>/c_promo/edit_page/'+row['id']+'" class="btn btn-success">',
			'<i class="fa fa-edit fa-fw"></i>',
		'</a> ',
		'<a title="Hapus" href="" data-id="'+row['id']+'" class="btn btn-danger remove">',
			'<i class="fa fa-times fa-fw"></i>',
		'</a>'
	].join('');
}

function operateFormattergambar(value, row, index) {
	return [
		'<img width="280px" src="<?=base_url()?>assets/images/promo/'+row['foto']+'"',
			'',
		' />'
	].join('');
}

window.operateEvents = {
	'click .remove': function (e, value, row, index) {
		var url="<?=site_url()?>/";
		var answer = confirm ("Menghapus data dapat merusak database. Apakah Anda yakin?");
		if (answer==true){
			$.ajax({
			type: "post",
			url: url+"c_promo/delete/"+row['id'],
			success: function (){
					$('#table-javascript1').bootstrapTable('refresh');
					alert("Sukses didelete!");
				} //tutup function
				}); //tutup ajax
		}
		
	}
};

	
function tablePegawai2() {
	$('#table-javascript1').bootstrapTable({
		method: 'post',
		url: '<?=site_url()?>/json/json_promo',
		cache: true,
		striped: true,
		pagination: true,
		pageSize: 10,
		pageList: [5, 10, 25, 50, 100],
		minimumCountColumns: 1,
		clickToSelect: true,
		columns: [{
			field: 'id',
			title: 'No',
			align: 'left',
			valign: 'middle',
			sortable: true
		},{
			field: 'title',
			title: 'Title',
			align: 'left',
			valign: 'middle',
			sortable: true
		},{
			field: 'isi',
			title: 'Content',
			align: 'left',
			valign: 'middle',
			sortable: true
		},{
			field: 'foto',
			title: 'Foto Makanan',
			align: 'left',
			valign: 'middle',
			sortable: true,
			formatter : operateFormattergambar
		},{
			field: 'operate',
			title: '',
			align: 'left',
			valign: 'middle',
			clickToSelect: false,
			formatter : operateFormatter1,
			events: operateEvents
		}]
	});
};

function tablePegawai3() {
	var url_string = "<?=site_url()?>/json/json_promo_search";
	var title = $('#title1').val()==""?"null":$('#title1').val();
	var finals = url_string+"/"+title;
	$('#table-javascript1').bootstrapTable({
		method: 'post',
		url: finals,
		cache: true,
		striped: true,
		pagination: true,
		pageSize: 10,
		pageList: [5, 10, 25, 50, 100],
		minimumCountColumns: 1,
		clickToSelect: true,
		columns: [{
			field: 'id',
			title: 'No',
			align: 'left',
			valign: 'middle',
			sortable: true
		},{
			field: 'title',
			title: 'Title',
			align: 'left',
			valign: 'middle',
			sortable: true
		},{
			field: 'isi',
			title: 'Content',
			align: 'left',
			valign: 'middle',
			sortable: true
		},{
			field: 'foto',
			title: 'Foto Makanan',
			align: 'left',
			valign: 'middle',
			sortable: true,
			formatter : operateFormattergambar
		},{
			field: 'operate',
			title: '',
			align: 'left',
			valign: 'middle',
			clickToSelect: false,
			formatter : operateFormatter1,
			events: operateEvents
		}]
	});
};

tablePegawai2();	
$('#btn_ok1').click(function(){
	$('#table-javascript1').bootstrapTable('destroy');
	tablePegawai3();
});
</script>