<html>
<head>
	<title><?php echo $title?> -Lexicon</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Photo Blog meets Etsy">
    <meta name="author" content="Jeanna Anderson">
	
	<!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo base_url(); ?>assets/css/business-casual.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/stylesheet.css">
	<!--<script src="//use.edgefonts.net/poiret-one.js"></script> -->
	
	</style>
</head>
<body>
	<div class="brand"><a href="/<?echo 'index.php'?>"><img src="<?php echo base_url(); ?>assets/img/lexicon.png"></a></div>
	<nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/<?echo 'index.php'?>"><img src="<?php echo base_url(); ?>assets/img/lexicon.png"></a>

          <!-- <a class="navbar-brand" href="/index.php">Lexicon</a> -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/index.php/gallery">Gallery</a></li>
            <li><a href="/index.php/cart">Cart</a></li>
            <li><a href="/index.php/login">Login</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>