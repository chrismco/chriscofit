jQuery(document).ready(function($) {
    //Mobile Menu
	$("#menu-primary-menu").hide();
    $(".mtoggle").click(function() {
        $("#menu-primary-menu").slideToggle(500);
    });
	
	//INPUT CLEAR
	var el = $('input[type=text], textarea');
    el.focus(function(e) {
        if (e.target.value == e.target.defaultValue)
            e.target.value = '';
    });
    el.blur(function(e) {
        if (e.target.value == '')
            e.target.value = e.target.defaultValue;
    });


        var pgurl = window.location.href;
        console.log(pgurl);
        $(".menu li a").each(function(){
            if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
                $(this).parent('li').addClass("active");
        });

	
	
	var $map = $('#wpgmza_map');
	var $quote = $('.menu-item-22 a');
    $quote.addClass('eModal-1');
	$map.detach();
	$map.appendTo('.map .col-md-12');
});