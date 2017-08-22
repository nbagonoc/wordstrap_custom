$(document).ready(function(){
	$('.carousel-inner').find('.item:first').addClass('active');/*adds active class to the 1st child for banner slider*/
	$('.contentArea').find('hr:last').addClass('hidden');/*removes the horizontal line on the last search(result) page*/
  
  //inlides the footer menu	
  $('#menu-main-nav-1').addClass('list-inline');
  
   	/*adds hover effect to thumbnails*/
   	$('.featuredPostThumbnail').hover(doThis, doThis);
    	function doThis(){
			var $this = $(this);
			$this.toggleClass('opacity70');
    }

    /*adds the animation class to trigger animate.css*/
    $('.post').addClass("hideAnimation").viewportChecker({
        classToAdd: 'viewAnimation animated fadeIn',
        offset: 200
    });

    //makes the dropdown parent menu clickable
    //$('a.dropdown-toggle').addClass('disabled');

    /*Dropdown menu opens during hover, but clickable/tappable during mobile view*/
    $('.dropdown').on('mouseenter mouseleave click tap', function(event) {
      if (!$('.navbar-toggle').is(':visible')) {
        $(this).toggleClass("open");
      }
    });

});