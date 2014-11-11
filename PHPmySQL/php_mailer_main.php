<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>E-Mail Form Example </title>
		<link rel="stylesheet" href="php_mailer.css">
		<!--
		<script src="jquery-1.11.1.js" type="text/javascript"></script>
		<script src="jquery.validate.min.js" type="text/javascript"></script>
		<script>
		
			$(function(){
			$('#contact-form').validate({
				rules:{
					name:"required",
					email:{
						required:true,
						email:true
					}
				},
				messages: {
					name:"A name is required.",
					email:"A proper email is required."
				}
			});
		});
		</script>
		-->
		</head>
	
	<body>
	
<?php include 'nav.php'; ?>

<form action="emailer.php" method="post" id="contact-form">
<div>
	<label for="name" class="title">Name:</label>
	<input type="text" size=40 id="name" name="name"/>
</div>
<div>
	<label for="email" class="title">EMail:</label>
	<input type="email" size=40 id="email" name="email"/>
</div>
<div>
	<span >Type of Email:</span>
	<input type="radio" id="comment" name="subject" value="Comment" />
	<label for "Comment">Comment</lable>
	<input type="radio" id="comment" name="subject" value="Question" />
	<label for "Question">Question</lable>
	<input type="radio" id="comment" name="subject" value="Complaint" />
	<label for "Complaint">Complaint</lable>
</div>
<div>
	<textarea name="myTextComment" rows="10" cols="50">Your comments please...</textarea>
</div>
<div>
	<label for="timeFactor" class="title">Timing:</label>
	<select  name="timeFactor">
  <option value="Emergency">Emergency</option>
  <option value="Urgent">Urgent</option>
  <option value="Routine" selected>Routine</option>
</select>
	</div>

<div>
	<input type="submit" value="Submit E-mail" id="submit" />
	
</div>
	
	
</div>		
			
		
</form>
		
	
	</body>
	</html>
