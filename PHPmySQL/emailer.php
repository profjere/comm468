<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Thanks for the e-mail</title>
		<link rel="stylesheet" href="php_mailer.css">
		
		</head>
	<body>
		
	<h1>Thank you</h1>	
<?php
echo 'We appreciate the e-mail.';

	$count=1;
while($count <=20)
{
	echo "$count ";
	++$count;
};

	?>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$myTextComment=$_POST['myTextComment'];


if (isset($_POST['subject'])) {
$subject = $_POST['subject'];
}

if (isset($_POST['timeFactor'])) {
$timeFactor = $_POST['timeFactor'];
}


echo '<p>Thanks for the email '.htmlspecialchars($name,ENT_QUOTES,'UTF-8').'</p>';
echo '<p>Your e-mail is '.htmlspecialchars($email,ENT_QUOTES,'UTF-8').'</p>';
echo '<p>Your subject heading is '.htmlspecialchars($subject,ENT_QUOTES,'UTF-8').'</p>';
echo '<p>Your comment is '.htmlspecialchars($myTextComment,ENT_QUOTES,'UTF-8').'</p>';
echo '<p>This message is '.htmlspecialchars($timeFactor,ENT_QUOTES,'UTF-8').'</p>';

if ($name == 'Zev')
{
	echo ('We have a special gift for people named Zev.');
};

$to="jsarachan@sjfc.edu";
$from = "From: $email";
$fullSubject=$timeFactor.' '.$subject;
mail ($to,$fullSubject,$myTextComment,$from);
		?>
		

		
		</body>
	</html>
