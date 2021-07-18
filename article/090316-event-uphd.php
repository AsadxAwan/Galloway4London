<?php

    // no change need
    $bn = basename(__FILE__, '.php'); 
    $get_url = "http://$_SERVER[HTTP_HOST]";

    // amend details according to each article 
    $article = array(
        'title'             =>      'EVENT: A London for all - Including Private hire drivers',
        'short_description' =>      'Hosted by the United Private Hire Drivers, George Galloway will answers question in a Q&A on how he will work towards establishing a london for all if elected Mayor.',
        'article_url'       =>      '090316-event-uphd.php',
        'article_img'       =>      '090316-event-uphd.jpg',
        
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
                    <p align="justify" style="color:#000000;">Hosted by the United Private Hire Drivers, George Galloway will answers question in a Q&A on how he will work towards establishing a london for all if elected Mayor.</p>
                </header>
                
                
    
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
   
            <!-- img 1 -->
			<div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
            	<a class="portfolio-popup" href="../images/image3.JPG" />
            	<div class="portfolio-box">       
            	<img src="../images/image3.JPG" alt=" image" /><!-- close portfolio image -->                       
                </div>
                </a>              
			</div><!-- close portfolio -->
            
                <div class="clear"></div>

              


<br><p align="justify" style="color:#000000;"> Come along and watch George Galloway set out his plans for making a London, truly a London for all in this Q&A event.

<br><br><strong>Event Details</strong>: A London for all - Including Private hire drivers<br><br><strong>Date/Time</strong>: 9th March, 7.30pm<br><br><strong>Address</strong>: Queens Crescent Community Association, NW5 4QE<br>

<br><strong>Reserve your seat</strong>: You can book your seat <a href="">here</a><br></p>



<p align="justify" style="color:#000000;">Help George Galloway and the #Galloway4London team run against the big party political machines by donating <a href="https://www.startjoin.com/galloway4London" target="_blank">here</a>.</p><br><br>

            </div>
	
	
<?php
    // do not modify
    include_once("_footer.php");
?>


