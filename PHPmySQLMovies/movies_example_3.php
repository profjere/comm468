<html>
<head>
<title>PHP test</title>
</head>

<body>

<?php


if (isset($_POST['genreChoice'])) {
$genre = $_POST['genreChoice'];


//lines 9-15 not necessary, but useful for debugging
$count=1;
while($count<=12)
{
echo "$count ";
++$count;
}

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
//use a particular search
	try
	{$sql = "SELECT * FROM `Movies` WHERE genre='$genre'";
	 echo "<br/>$sql";
	 $result = $pdo->query($sql);

	 
	}
	catch (PDOExeption $e)
	{
		$error='Error fetching table'.$e->getMessage();
		echo  $error;
		exit();
	}
//put results into an array
	while ($row=$result->fetch())
	{
		$theFilms[]=array('Title'=>$row['title'],'Rating'=>$row['rating'],'Genre'=>$row['genre']);
		
	}

echo '<p>';
//print array, one line at a time
	foreach($theFilms as $films){
		echo($films['Title']);
		echo ' ';
		
		echo($films['Rating']);
		
		echo ' ';
		
		echo($films['Genre']);
		echo '<p>';
	}
}
	?>


	
<form action="movies_example_3.php" method="post" id="genre">
<div>
	<label for="genreChoice">Genre:</label>
	<select  name="genreChoice">
  <option value="Comedy" selected >Comedy</option>
  <option value="Drama">Drama</option>
  <option value="Sci-Fi">Science-Fiction</option>
		<option value="Musical" >Musical</option>
</select>
	<br/>
	<div>
	<input type="submit" value="Select Genre" id="submit" />
	
</div>
	</div>	
	
</form>
	
<form action="add_Movie.php" method="post">
	<div>
	<label for="filmTitle">Title:</label>
	<input type="text" size=40 id="filmTitle" name="filmTitle"/>
</div>

	<div>
	<span >Rating:</span>
	<input type="radio" id="rating" name="rating" value="1" />
	<label for "1">1</lable>
	<input type="radio" id="rating" name="rating" value="1.5" />
	<label for "1">1.5</lable>
	<input type="radio" id="rating" name="rating" value="2" />
	<label for "1">2</lable>
	<input type="radio" id="rating" name="rating" value="2.5" />
	<label for "1">2.5</lable>
	<input type="radio" id="rating" name="rating" value="3" />
	<label for "1">3</lable>
		<input type="radio" id="rating" name="rating" value="3.5" />
	<label for "1">3.5</lable>
		<input type="radio" id="rating" name="rating" value="4" />
	<label for "1">4</lable>
		<input type="radio" id="rating" name="rating" value="4.5" />
	<label for "1">4.5</lable>
		<input type="radio" id="rating" name="rating" value="5" />
	<label for "1">5</lable>
</div>
	
	<div>
	<label for="genreChoice" class="title">Genre:</label>
	<select  name="genreChoice">
  <option value="Comedy" selected >Comedy</option>
  <option value="Drama">Drama</option>
  <option value="Sci-Fi">Science-Fiction</option>
		<option value="Musical" >Musical</option>
</select>
	<br/>
	<div>
	<br/>
	<div>
	<input type="submit" value="Add Film" id="submit" />
	
</div>
	
</div>
	</div>	
	
</form>

</body>
</html>
