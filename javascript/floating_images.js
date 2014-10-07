var numberOfBoxes=7;
var numberOfPictures=3;

function makeBoxes(){	
	for (var i=0;i<numberOfBoxes;i++){
		
		var picNumber=i%numberOfPictures;
		var eachBox='<div class="box"><p>'+picNumber+'</p><img src="images/pic'+picNumber+'.jpg"></div>';
		var el = document.getElementById('container');
		el.innerHTML += eachBox;
	}
	
}
		
		
		
