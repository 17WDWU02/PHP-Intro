<html>
<head>
	<title>PHP Recap</title>
	<?php require("styles.php"); ?>
</head>
<body>
	<?php require("nav.php"); ?>

	<h1>PHP Recap</h1>

	<?php 

	echo "Hello";
	echo "<h2>This is an H2</h2>";

	var_dump("this is a var dump");

	//die("This is dieing");

	/*
		dsafdsa
		dsfadsfds
		dsfsdafsd
	*/

		$variableName = "Class Scores";
	?>

	<h2><?php echo $variableName; ?></h2>

	<?php 
		$scores = array(10,72,45,65,82,43);
	 ?>

	 <p>There are <?= count($scores); ?> scores</p>
	 <ul>
	 	<?php foreach($scores as $singleScore): ?>
	 		<li>This persons score is <?= $singleScore ?></li>
	 	<?php endforeach; ?>
	 </ul>

	 <?php 
	 	$totalScore = 0;
	 	foreach($scores as $singleScore){
	 		$totalScore += $singleScore;
	 	}
	 	$averageScore = $totalScore / count($scores);
	  ?>

	<?php if($averageScore > 50): ?>
		<p>The class has passed</p>
		<p>Well done</p>
	<?php else: ?>
		<p>The class has failed</p>
	<?php endif; ?>

	<?php 

		$comment = "I LIKE PHP";
		echo strtolower($comment);
		echo "<br>";
		$lowercaseString = "this string started as lowercase";
		echo strtoupper($lowercaseString);
		echo "<br>";
		$string = "this is testing all first letters to uppercase";
		echo ucwords($string);

	 ?>

	<form action="results.php" method="POST">
		<input type="text" name="search">
		<input type="text" name="test">
		<input type="submit">
	</form>
















	<?php require("scripts.php"); ?>
</body>
</html>