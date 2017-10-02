$(document).ready(function(){
	//$('.carousel-inner').find('.item:first').addClass('active');/*adds active class to the 1st child for banner slider*/
	//$('.contentArea').find('hr:last').addClass('hidden');/*removes the horizontal line on the last search(result) page*/

  /*adds hover effect to thumbnails*/
  $('.hover-image').hover(doThis, doThis);
    function doThis(){
    var $this = $(this);
    $this.toggleClass('opacity70');
  }

  /*adds the animation class to trigger animate.css*/
  $('.post-a').addClass("hideAnimation").viewportChecker({
      classToAdd: 'viewAnimation animated fadeIn',
      offset: 250
  });
  $('.post-b').addClass("hideAnimation").viewportChecker({
      classToAdd: 'viewAnimation animated flipInX',
      offset: 250
  });
  $('.post-c').addClass("hideAnimation").viewportChecker({
      classToAdd: 'viewAnimation animated bounceIn',
      offset: 250
  });
  $('.post-d').addClass("hideAnimation").viewportChecker({
      classToAdd: 'viewAnimation animated fadeInUp',
      offset: 200
  });
  $('.post-e').addClass("hideAnimation").viewportChecker({
      classToAdd: 'viewAnimation animated fadeInLeft',
      offset: 250
  });
  $('.post-f').addClass("hideAnimation").viewportChecker({
      classToAdd: 'viewAnimation animated fadeInRight',
      offset: 250
  });

  //fix ie BUG on fixed-background CSS
  if(navigator.userAgent.match(/Trident\/7\./)) { // if IE
    $('body').on("mousewheel", function () {
        // remove default behavior
        event.preventDefault(); 

        //scroll without smoothing
        var wheelDelta = event.wheelDelta;
        var currentScrollPosition = window.pageYOffset;
        window.scrollTo(0, currentScrollPosition - wheelDelta);
    });
  }

});