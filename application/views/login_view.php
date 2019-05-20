<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $nama;?> Admin Site</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=base_url()?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

	<div class="confirm-div"><?php echo $this->session->flashdata('msg');?></div>
    <div class="container">
        <div class="row" style="margin-top:100px;">
            <div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading" style="text-align:center;">
						<img width="280px" src="<?=base_url()?>assets/images/logo/<?php echo $logo;?>" />
					</div>
					<div class="panel-body">
						<form name="form1" method="POST" action="<?=site_url()?>/login/login_action">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
                            </fieldset>
                        </form>
					</div>
					<div class="panel-footer">
					</div>
				</div>
			</div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
