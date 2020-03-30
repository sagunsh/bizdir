<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<title><?php echo $title ?></title>

	<link rel="canonical" href="https://businessdirectory.com/">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- Favicons -->
	<link rel="icon" href="<?php echo base_url() ?>assets/images/favicon.png" type="image/png">

	<!-- Fontawesome -->
	<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>" />
</head>
<body>
<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand pl-5 ml-5" href="<?php echo site_url('dir'); ?>">Biz Dir</a>

		<div class="collapse navbar-collapse justify-content-end">
			<a class="navbar-brand btn btn-danger" href="<?php echo site_url('add'); ?>">Add Listing</a>
		</div>
	</nav>
</header>
