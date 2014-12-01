<!DOCTYPE html>
<html lang="en" ng-app="proBinder">
<head>
	<meta charset="UTF-8">
    <!-- <base href="/mtg/"> -->
	<title><?php echo $pageHeadTitle; ?></title>
	<link rel="shortcut icon" href="<?php echo $mainurl; ?>favicon.ico" />
	<link rel="stylesheet" href="<?php echo $bowerurl; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $mainurl; ?>styles/main.min.css">
	
	<!-- BOWER PACKAGES -->
	<script src="<?php echo $bowerurl; ?>bower_components/jquery/dist/jquery.js"></script>
    <script src="<?php echo $bowerurl; ?>bower_components/jquery-ui/jquery-ui.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
	<script src="<?php echo $bowerurl; ?>bower_components/angularjs/angular.js"></script>
    <script src="<?php echo $bowerurl; ?>bower_components/angular-route/angular-route.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Roboto+Slab:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
		<h1 class="website-name"><a href="<?php echo $domain ?>">ProBinder</a></h1>
		<div class="user-settings-control">
			<a href="index.php?logout">Logout</a>
		</div>
	</header>
	