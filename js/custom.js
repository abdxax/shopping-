/*Show and hide menu */

$(document).ready(function(){
 
'use strict';
$(window).scroll(function(){
'use strict';

if ($(window).scrollTop()<80) {
	$('.navbar').css({
      'margin-top':'-100px',
      'opcity':'0'

	});

	$('.navbar-default').css({
      
       'background-color':'rgba(59,59,59,0)'


	});
}
else{

  $('.navbar').css({
      'margin-top':'0px',
      'opcity':'1'

	});

  $('.navbar-default').css({
      
       'background-color':'rgba(59,59,59,0.7)',
       'border-color':'#444'


	});

  $('.navbar-brand img').css({
   
   'height':'35px',
   'padding-top':'0px'

   
  });

  $('.navbar-nav > li > a').css({
    
    'padding-top':'15px'

  });


}
});

});


/*add smooth scrolling */
$(document).ready(function(){
 'use strict';
 $('.nav-item').click(function(){

  if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;



  }
}


 });
});

/* active menu item on click */
$(document).ready(function(){
  'use strict';

  $('.navbar-nav li a').click(function(){
    'use strict';
    $('.navbar-nav li a').parent().removeClass("active");

    $(this).parent().addClass("active");
  });


});

/* highlight menu item on scroll */
$(document).ready(function(){
 'use strict';
 $(window).scroll(function(){
  'use strict';
  $("section").each(function(){
   'use strict';
    var bb=$(this).attr("id");
    var hrg=$(this).outerHeight();
    var grttop=$(this).offset().top-70;
    if ($(window).scrollTop()>grttop && $(window).scrollTop()<grttop+height) {
    	$("navbar-nav li a[href='#"+bb +"']").parent().addClass("active");
    }
    else{
    	$("navbar-nav li a[href='#"+bb +"']").parent().removeClass("active");
    }
  });
 });
});