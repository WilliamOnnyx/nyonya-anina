
		<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Gallery</h2>
						 <?php //echo $message;?>
						
						<!-- Search form dan tombol tambah user-->
						<div class="navbar-right col-lg-10">
							<a href="<?=site_url()?>/c_gallery/add_page" class="navbar-right btn btn-info ">Tambah Gallery</a>
							
						</div><!-- /navbar-right col-lg-10 -->
						<!-- /search -->
						
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">gallery</a></li>
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
		'<a title="Hapus" href="" data-id="'+row['id']+'" class="btn btn-danger remove">',
			'<i class="fa fa-times fa-fw"></i>',
		'</a>'
	].join('');
}

function operateFormattergambar(value, row, index) {
	return [
		'<img width="280px" src="<?=base_url()?>assets/images/gallery/'+row['foto']+'"',
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
			url: url+"c_gallery/delete/"+row['id'],
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
		url: '<?=site_url()?>/json/json_gallery',
		cache: true,
		striped: true,
		pagination: true,
		pageSize: 10,
		pageList: [5, 10, 25, 50, 100],
		minimumCountColumns: 1,
		clickToSelect: true,
		columns: [{
			field: 'foto',
			title: 'Foto',
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
</script>