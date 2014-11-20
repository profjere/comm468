<html>
<head>
<title>PHP test</title>
	<style>
		#eachFilm{
			border:2px solid #000;
			float:left;
			clear:both;
		}	
		#filmName,#ratingImage,#moviePoster{
		float:left;
		padding:2px;
	}
	
	</style>
</head>

<body>

<?php

$count=1;
while($count<=12)
{
echo "$count ";
++$count;
}

if (isset($_POST['genreChoice'])) {
$genre = $_POST['genreChoice'];


//lines 9-15 not necessary, but useful for debugging


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
		$theFilms[]=array('Title'=>$row['title'],'Rating'=>$row['rating'],'Image'=>$row['image'],'Genre'=>$row['genre']);
		
	}

echo ("<p><div id='movieBox'>");
echo ("<h1>".$genre."</h1>");

//print array, one line at a time
	foreach($theFilms as $films){
		echo("<div id='eachFilm'>");
		echo("<div id='filmName'>".$films['Title']."</div>");
		
		if ($films['Rating']=='5'){
			
			$starImage='5_stars.png';
		};
		if ($films['Rating']=='4'){
			
			$starImage='4_stars.png';
		};
		if ($films['Rating']=='3'){
			
			$starImage='3_stars.png';
		};
		if ($films['Rating']=='2'){
			
			$starImage='2_stars.png';
		};
		if ($films['Rating']=='1'){
			
			$starImage='1_star.png';
		};
		$ratingImage="<div id='ratingImage'><img src='images/$starImage'></div>";
		echo($ratingImage);
		
		$posterLink=$films['Image'];
		$moviePoster="<div id='moviePoster'><a href='images/$posterLink'><img src='images/$posterLink'></a></div>";
		echo($moviePoster);
		echo("</div>");
		
		
	}
	
	
}

	?>
	
<form action="movies_example_4_images.php" method="post" id="genre">
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
	<input type="submit" value="Select Genre" id="submit" />
	
</div>
	</div>	
	
</form>
	

</body>
</html>
