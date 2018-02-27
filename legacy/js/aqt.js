$(function() {
    var nav = $('#nav');
    var navHomeY = nav.offset().top;
    var isFixed = false;
    var $w = $(window);
    $w.scroll(function() {
        var scrollTop = $w.scrollTop();
        var shouldBeFixed = scrollTop > navHomeY;
        if (shouldBeFixed && !isFixed) {
            nav.css({
                position: 'fixed',
                top: 0,
                left: nav.offset().left,
                width: nav.width()
            });
            isFixed = true;
        }
        else if (!shouldBeFixed && isFixed)
        {
            nav.css({
                position: 'static'
            });
            isFixed = false;
        }
    });
});

//<![CDATA[ 
$(window).load(function(){
  $('div.slideUp').delay(2000).animate({top: 0});
  $('#slider').nivoSlider();
  });//]]>  

$(document).ready(function(){
  $(".nivoSlider").delay(3000).show('fade',1000);

// GALLERY using simple jQuery toggles, v0.9 (20131201)
// (c) 2013 Andrew Q Tran

// Expand into single image view; hide gallery grid
  $(".entry").click(function(){ 							//each thumnail is an .entry
	$(document).scrollTop( $("#projects").offset().top ); 	//resets location to top of PROJECTS section
	$(this).next(".entryDetails").show('fade',500);			//shows selected entry
	$(this).prev(".entryDetails").hide();					//hides the previously expanded entry
	$(this).nextAll(".entry").hide();						//hides all subsequent thumbnails in grid
	$(this).prevAll(".entry").hide();						//hides all preceding thumbnails in grid
	$(".entry").removeClass("entry").addClass("nullEntry"); //disables clicking on thumbnail
	$(".closeEntry").show('fade',300);						//shows button to return to gallery
	$(".closeEntry").addClass("rotate");					//add .rotate to animate arrow on button onclick
//	$(".navEntry").show('fade',500);						//leftover code to be developed next version
	});
 
// Hide single image view; show gallery grid (i.e., reset)
  $(".closeEntry").click(function(){						//button to return to gallery is .closeEntry
	$(this).nextAll(".entryDetails").hide();
	$(this).prevAll(".entryDetails").hide();
	$(this).hide('fade',100);
	$(".nullEntry").removeClass("nullEntry").addClass("entry");
	$(".entry").show('fade', 500);
	$(this).removeClass("rotate");							//remove .rotate
	});

// Reset to gallery grid from button on site navbar	
  $("#projectsNav").click(function(){
	$(".entryDetails").hide();
	$(".closeEntry").hide('fade',100);
	$(".nullEntry").removeClass("nullEntry").addClass("entry");
	$(".entry").show('fade', 500);
	$(this).removeClass("rotate");
	});

// END GALLERY	
	
// START CONTENT TOGGLE
  var viewCV = 'View Curriculum Vitae';
  var overview = 'Return to Overview';
  //var plus = '<i class="icon-plus-sign"></i>';
  //var minus = '<i class="icon-minus-sign"></i>';
  
  $("#aboutNav").click(function(){
	$("#downloadCV, #linkedin, #cv, .compact#bio1").hide();
	$("#biography").show('fade');
	//$(".more#bio1").html(plus);
	$(".more#bio1").removeClass("turn");
	$(".showCV").text(viewCV);
	});
	
  $(".more#bio1").click(function(){
    $(".compact#bio1").slideToggle("slow");
	//$(this).html($(this).html() == minus ? plus : minus);
	$(this).toggleClass("turn");
	});
		
  $(".showCV").click(function(){
    $(".compact#cv, #biography").slideToggle("slow");
	$("#downloadCV, #linkedin").toggle();
	$(this).text($(this).text() == viewCV ? 'Return to Biography' : viewCV);
    });
    
  $("#researchNav").click(function(){
	$(".button.acknowledgement").text('Acknowledgement');
	$(".button.background").text('Background');
	$(".button.acknowledgement, .button.background, #researchMain").show('fade');
	$(".hide#background, .hide#acknowledgement").hide();
	});
	
  $(".button.background").click(function() {
	$(".hide#background, #researchMain").slideToggle("slow");
	$(".button.acknowledgement").toggle();
	$(".button.blog").toggle();
	$(this).text($(this).text() == 'Background' ? overview : 'Background');
    });
   
  $(".button.acknowledgement").click(function() {
	$(".hide#acknowledgement, #researchMain").slideToggle("slow");
	$(".button.background").toggle();
	$(".button.blog").toggle();
	$(this).text($(this).text() == 'Acknowledgement' ? overview : 'Acknowledgement');
    });
// END CONTENT TOGGLE	

  $( ".draggable" ).draggable(); //Easteregg for draggable objects
  
}); 

