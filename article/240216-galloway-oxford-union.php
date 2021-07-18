<?php

    // no change need
    $bn = basename(__FILE__, '.php'); 
    $get_url = "http://$_SERVER[HTTP_HOST]";

    // amend details according to each article 
    $article = array(
        'title'             =>      'Oxford Union: in proposition "This House Believes The West Has No Responsibility To Take Military Action Against ISIS"',
        'short_description' =>      'Oxford Union: in proposition "This House Believes The West Has No Responsibility To Take Military Action Against ISIS"',
        'article_url'       =>      '240216-galloway-oxford-union',
        'article_img'       =>      '#',
        
        // no change needed here
        'fb_title'          =>      $bn,
    );


    // do not modify
    include("_header.php");
?>


               <!-- section header -->
            <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                <header class="">
                    <h1 class=""><span><?php echo $article['title']; ?></span></h1>
                    <p align="justify">George Galloway make an appearance at the Oxford union to debate whether western governments has the responsibility to take military action against the Islamist State in Iraq & Syria.</p>
                </header>
                
                <center><div id="fb-root"></div><script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script><div class="fb-post" data-href="https://www.facebook.com/OfficialGeorgeGalloway/videos/10153905348545797/" data-width="500"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/OfficialGeorgeGalloway/videos/10153905348545797/"><p>Oxford Union: in proposition &quot;This House Believes The West Has No Responsibility To Take Military Action Against ISIS&quot;</p>Posted by <a href="https://www.facebook.com/OfficialGeorgeGalloway/">George Galloway MP</a> on&nbsp;<a href="https://www.facebook.com/OfficialGeorgeGalloway/videos/10153905348545797/">Tuesday, 23 February 2016</a></blockquote></div></div></center><br> 
    
    <!--  SECTION CAN BE REMOVED!
    <aside id="sticky-social">
    <ul>
        <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.facebook.com/" class="entypo-facebook" target="_blank"><span>Facebook</span></a></li>
        <li><a a href="https://twitter.com/home?status=Vote%20for%20a%20fairer%20London,%20Vote%20George%20Galloway%202016" class="entypo-twitter" target="_blank"><span>Twitter</span></a></li>
        <li><a href="#" class="entypo-gplus" target="_blank"><span>Google+</span></a></li>
        <li><a href="#" class="entypo-linkedin" target="_blank"><span>LinkedIn</span></a></li>
         <li><a href="#" class="entypo-mail" target="_blank"><span>Email</span></a></li>
        <li><a href="#" class="entypo-pinterest" target="_blank"><span>Pinterest</span></a></li>
    </ul>
</aside>
   -->

<p align="justify">Help George Galloway and the #Galloway4London team run against the big party political machines by donating <a href="https://www.startjoin.com/galloway4London" target="_blank">here</a>.</p><br><br>


            </div>
	
	
<?php
    // do not modify
    include_once("_footer.php");
?>


