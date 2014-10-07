
var theAnswer=Math.floor(Math.random()*101);
var guesses=0;

function checkNumber(){	
	
	
	var x1 = document.guessingGame.aNumber.value;
	var x=Number(x1);
	
	
	if (x<theAnswer){
		var response="<p>higher</p>";
		guesses++;
	} else if (x>theAnswer){
		var response="<p>lower</p>";
		guesses++;
	} else {
		var response="<p>You're right. This took "+guesses+" guesses.</p><a href='#' onclick='redo();'>Start again</a>"
	}

	var el=document.getElementById('answerDiv');
    el.innerHTML=response;
	
	
	}

function redo(){
	theAnswer=Math.floor(Math.random()*101);
	guesses=0;
	document.guessingGame.aNumber.value=" ";
	response=" ";
	var el=document.getElementById('answerDiv');
    el.innerHTML=response;
	
}
	
	
	

		
	

				
	
	
	
	
