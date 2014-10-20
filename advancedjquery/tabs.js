$(function(){
	$('.content:first').show();
	
	$('#tabs li a:first').addClass('tab-active');

	
	$('ul#tabs li a').bind('click',function(){
		var linkIndex=$('#tabs li a').index(this);
		$('ul#tabs li a').removeClass('tab-active');
		$('.content:visible').hide();
		$('.content:eq('+linkIndex+')').show();
		$(this).addClass('tab-active');
		return false;//stops the link
	});
	
  });
	 
