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

	//enable textarea on select change
	$('.timeline_review>select').change(function(){
		if($(this).val() !== 'null'){
			$('.timeline_review textarea').removeAttr('disabled');
		}
		else{
			$('.timeline_review textarea').attr('disabled', 'disabled');

		}
	});

	//back-to-top on-click
	    var duration = 500;
        $('.back-to-top').click(function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop: 0}, duration);
            return false;
        })

    //close message on-click
    $('.error_messages').click(function(){
    	$('.error_messages').hide();
    });
       $('.success_messages').click(function(){
    	$('.success_messages').hide();
    });

    //fade-out messages on-load
    //$('.success_messages').fadeOut(5000);
    //$('.error_messages').fadeOut(5000);

});
