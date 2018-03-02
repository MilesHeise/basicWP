<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Test Template</title>
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
	<?php wp_head();?>
</head>

<body>

  <nav class="nav">
    <a class="nav-item" href="#">Hey Look</a>
    <a class="nav-item" href="#">No, look here!</a>
    <a class="nav-item" href="#">I am clearly the best one to click</a>
  </nav>

  <div class="header">
  	<h1 class="title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
  	<p class="description"><?php echo get_bloginfo( 'description' ); ?></p>
  </div>
