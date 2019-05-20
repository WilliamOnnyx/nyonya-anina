<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $nama;?> Admin Site</title>
	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/mix/css/demo.css"/>

	<!-- Dependencies: JQuery and GMaps API should be loaded first -->
	<script src="<?=base_url()?>assets/mix/js/jquery-2.1.1.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<!-- CSS and JS for our code -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/mix/css/jquery-gmaps-latlon-picker.css"/>
	<script src="<?=base_url()?>assets/mix/js/jquery-gmaps-latlon-picker.js"></script>
	
	 <!-- jQuery -->
    <script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=base_url()?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url()?>assets/dist/js/sb-admin-2.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	
    <!-- MetisMenu CSS -->
    <link href="<?=base_url()?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/dist/css/sb-admin-2.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/dist/css/styles.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!--Bootstrap Table -->
	<script src="<?=base_url()?>assets/bootstrap-table.js"></script>
	<script src="<?=base_url()?>assets/bs-table.js"></script>
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>