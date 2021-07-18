/*

Created:    primewaydesign.com
Author:     Cu.Mar.
Date:       01/2016

*/



// ajax content loader modal box

      $(document).ready(function() {

        $('.mfp-ajax-holder').magnificPopup({
          type: 'ajax',
          alignTop: true,
          overflowY: 'scroll' // as we know that popup content is tall we set scroll overflow by default to avoid jump
        });

        $('.simple-ajax-popup').magnificPopup({
          type: 'ajax'
        });
        
      });
    
   
// portfolio load more feature and button
    
    $(function(){
    $(".load-more").slice(0, 6).show(); // select the first ten
    $("#load-more-click").click(function(e){ // click event for load more
        e.preventDefault();
        $(".load-more:hidden").slice(0, 3).show(); // select next 10 hidden divs and show them - reveal
        if($(".load-more:hidden").length == 0){ // check if any hidden divs still exist
            $("#load-more-click").hide();
            // alert("More work to come"); // alert if there are none left
        }
    });
});


// youtube modal
    
      $(document).ready(function() {
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,

          fixedContentPos: false
        });
      });