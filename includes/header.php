<?php
    $company = "Restaurante Top";
    include ('includes/menu.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style>
		.navbar {
			width: 960px;
			margin-left: 187px;
		}
		.navbar a{
            margin: 0 60px;
            color: crimson;
		}
        #footer {
            width: 960px;
            text-align: left;
            margin: 100px auto 0 auto;
            border-collapse: collapse;
        }
        body{
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
        }
	</style>
</head>
<body class="w-100 p-3" background="assets/img/back.jpg">
<div>
	<div class="container" style="text-align: center">
		<img src="assets/img/Bournemouth-Hotel-Restaurant-Town-Centre-1812-HEADER.jpg" class="img-fluid" alt="Responsive image">
	</div>

	<nav class="navbar navbar-expand-sm bg-light justify-content-center">
			<?php include('includes/nav.php'); ?>
	</nav>