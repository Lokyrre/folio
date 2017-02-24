<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jérémy Paroux</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/elastic_grid.min.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bookblock.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/normalize.css"); ?>" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/filter.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.mixitup.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/modernizr.custom.js"); ?>"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand">
	        <img alt="Brand" id="logo" src="<?php echo base_url("assets/images/logo.png"); ?>">
	      </a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse">
	      <ul class="nav navbar-nav navbar-right">
	        <li class="active"><a id="bb-nav-first" class="menu"><?php echo $info ?></a></li>
	        <li><a class="bb-nav-second menu"><?php echo $projects ?></a></li>
	        <li><a class="bb-nav-second menu"><?php echo $skill ?></a></li>
	        <li><a id="bb-nav-last" class="menu">Contact</a></li>
	        <li> 
	        	<a href="<?php echo ($flag == 'fr') ? base_url("index.php/Folio/en") : base_url("index.php/Folio"); ?>" class="navbar-brand menu">
			    	<img alt="Language" id="flag" src="<?php echo base_url("assets/images/$flag.jpg"); ?>">
			    </a>
			</li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>