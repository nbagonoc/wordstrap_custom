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

});