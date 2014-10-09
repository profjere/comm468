$(function(){
	//navigation hide and reappear
	$('#academics').hide();
	$('#people').hide();
	$('#info1 p').hide();
	$('#info2 p').hide();
	
	$('#peoplelink').bind('click',function(event){
		$('#people').toggle();
	});
	
	$('#academicslink').bind('click',function(event){
		$('#academics').toggle();
	});
	
	$('.fontsizeplus').bind('click',function(event){
		var aCurrentSize=$('p').css('font-size');
		currentSize=parseInt(aCurrentSize);
		currentSize=currentSize+1;
		$('p').css('font-size',currentSize);
	});
	
	$('.fontsizeminus').bind('click',function(event){	
		var aCurrentSize=$('p').css('font-size');
		currentSize=parseInt(aCurrentSize);
		currentSize=currentSize-1;
		$('p').css('font-size',currentSize);
	});
		
						
$("ul#navlist").hover(
	function(){
		$(this).filter(':not(:animated)').animate({
			marginLeft:'0px'
		},'slow');
// This only fires if the row is not undergoing an animation when you mouseover it
},
function() {
	$(this).animate({
		marginLeft:'-220px'
	},'slow');
});

$("#info1 h2").bind('click',function(event){
	$('#info1 p.infop').toggle();
});

$("#info2 h2").bind('click',function(event){
	$('#info2 p.infop').toggle();
});
	
$("#box p").bind('click',function(event){
	$('#theBox').fadeToggle();
});


$(document).mousemove(function(e) {
    window.x = e.pageX;
    window.y = e.pageY;

	
	if (window.x>1100){
	$('body').css('background','green');
}
	else {
	$('body').css('background','#fff');
	};
	
	
});
});
