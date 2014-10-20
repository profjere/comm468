$(function(){
	$('ul#links li a').click(function(){
		var linkIndex=$('#links li a').index(this);
		$('ul#links li a').removeClass('link-active');
		//$('.content:eq('+linkIndex+')').slideToggle();
		//$('.content:eq(3)').fadeToggle();
		$('.content:eq('+linkIndex+')').fadeToggle();
		$(this).addClass('link-active');
		return false;//stops the link;	
		});
  });
	 
