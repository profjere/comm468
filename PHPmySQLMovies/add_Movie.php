<html>
<head>
<title>PHP test</title>
</head>

<body>

Hello.
<br/>


<?php
if (isset($_POST['filmTitle'])) {
$filmTitle = $_POST['filmTitle'];
	$rating = $_POST['rating'];
	$genre = $_POST['genreChoice'];
//next two lines aren't unnecessary
	$allthree=$filmTitle.' '.$rating.' '.$genre;
	echo $allthree;
	
	$sql = "INSERT INTO Movies SET
		title = '$filmTitle',
		rating = '$rating',
		genre = '$genre'";
	
//next two lines aren't unnecessary	
	echo '<br/>';
	echo $sql;

	try
//database connection
{$pdo=new PDO('mysql:host=localhost;dbname=test3','test3','test3');
 $success='Database Connected';
 echo $success;
}
	
catch(PDOException $e)
	{
		$output='Unable to connect.';
		echo $output;
		exit();
	}
//submit film data
	try
	{$s=$pdo->prepare($sql);
	$s->execute();

	 
	}
	catch (PDOExeption $e)
	{
		$error='Error setting up data'.$e->getMessage();
		echo  $error;
		exit();
	}
}
?>
	<br/>
	<a href="movies_example_3.php">Go back to Movies.</a>
	</body>
	</html>
