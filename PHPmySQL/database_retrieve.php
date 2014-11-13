<html>
<head>
<title>PHP test</title>
</head>

<body>

<?php
$count=1;
while($count<=10)
{
echo "$count ";
++$count;
}
try
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
	try
	{$sql = 'SELECT * FROM `Movies` WHERE genre="Comedy"';
	 $result = $pdo->query($sql);

	 
	}
	catch (PDOExeption $e)
	{
		$error='Error fetching table'.$e->getMessage();
		echo  $error;
		exit();
	}

	while ($row=$result->fetch())
	{
		$theFilms[]=array('Title'=>$row['title'],'Rating'=>$row['rating'],'Genre'=>$row['genre']);
		
	}

echo '<p>';

	foreach($theFilms as $films){
		echo($films['Title']);
		echo ' ';
		
		echo($films['Rating']);
		
		echo ' ';
		
		echo($films['Genre']);
		echo '<p>';
	}
	?>
	
	
	

</body>
</html>
