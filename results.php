<html>
<head>
	<title>Search Results</title>
	<?php require("styles.php"); ?>
</head>
<body>
	<?php 
		// var_dump($_GET['search']);
		// $search = $_GET['search'];

		// extract($_GET);
		extract($_POST);
		var_dump($_POST);
		// var_dump($search);
		// var_dump($test);
		if(strlen($search) < 2){
			header("Location:index.php");
		}


	 ?>
	<?php require("nav.php"); ?>

	<h1>You searched for <?= $search; ?> </h1>
</body>
</html>