<?php

    // no change need
    $fn = basename(__FILE__, '.php'); 

    // amend details according to each article 
    $article = array(
        'title'             =>      'George Galloway slowly walks down a foggy street in his campaign video',
        'short_description' =>      'Firebrand George Galloway  released a  Facebook video as part of his campaign to be elected the Mayor of London.',
        'article_url'       =>      '031115-galloway-walks-down-foggy-street.php',
		'article_img'       =>      '031115-galloway-walks-down-foggy-street.jpg', 
        // no change needed here
        'fb_title'          =>      $fn,
    );


    // do not modify
    include("_header.php");
?>


               <!-- section header -->
            <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                <header class="">
                    <h1 class=""><span><?php echo $article['title']; ?></span></h1>
                    <p align="justify">The video starts with Galloway silently walking towards the camera for 30 seconds, before he stops to promise Londoners that he will ban trucks and heavy vehicles from the city between dawn and dusk if they vote him in.<br><br>

At first Galloway appears as a speck in the distance.</p><br>
                </header>
                
                <p align="center"><img src="../images/031115-galloway-walks-down-foggy-street.png" /></p>
    <h6 align="center">Credit: FB</h6> <br>
    
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

<p>Finally, he reaches the camera, you can watch the whole video below:</p><br>

<div id="fb-root"></div><script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script><div class="fb-video" data-allowfullscreen="1" data-href="https://www.facebook.com/OfficialGeorgeGalloway/videos/10153682645005797/"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/OfficialGeorgeGalloway/videos/10153682645005797/"><a href="https://www.facebook.com/OfficialGeorgeGalloway/videos/10153682645005797/"></a><p>&quot;If I&#039;m mayor...&quot; Watch to find out</p>Posted by <a href="https://www.facebook.com/OfficialGeorgeGalloway/">George Galloway MP</a> on Sunday, 1 November 2015</blockquote></div></div><br><br>


Help George Galloway and the #Galloway4London team run against the big party political machines by donating <a href="https://www.startjoin.com/galloway4London" target="_blank">here</a>.</p><br><br>


            </div>
	
	
<?php
    // do not modify
    include_once("_footer.php");
?>


