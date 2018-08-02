$(document).ready(function(){

	//navigation button on-click
		$('.nav-btn').click(function(){
			$('.navigation-bar').show();
		});

	//navigation close on-click
		$('.close-nav').click(function(){
			$('.navigation-bar').hide();
		});

	//language select on-change
	$('.language_select').change(function(){
		$('.lang_submit').click();
	});

});