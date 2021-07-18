<?php

    // no change need
    $bn = basename(__FILE__, '.php'); 
    $get_url = "http://$_SERVER[HTTP_HOST]";

    // amend details according to each article 
    $article = array(
        'title'             =>      'London: The Fatherless Capital',
        'short_description' =>      "Event Description: A public meeting about fatherlessness, family law & gang crime in Britain's capital with George Galloway (Respect Mayoral Candidate), Matt O'Connor (Founder Fathers4Justice) and other speakers",
        'article_url'       =>      '270416-fatherless-capital.php',
        'article_img'       =>      '270416-fatherless.jpg',
        
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
                    <p align="justify" style="color:#000000;">Event Description: 
A public meeting about fatherlessness, family law & gang crime in Britain's capital with George Galloway (Respect Mayoral Candidate), Matt O'Connor (Founder Fathers4Justice) and other speakers</p>
                </header><br>
                
                
    
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
			<center><div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
            	<a class="portfolio-popup" href="../images/270416-fatherless.jpg"/>
            	<div class="portfolio-box">       
            	<img src="../images/270416-fatherless.jpg" /><!-- close portfolio image -->                       
                </div>
                </a>              
			</div></center><!-- close portfolio -->
            
                <div class="clear"></div><br>


<p align="justify" style="color:#000000;"><strong>Reserve your seat</strong>: You can book your seat <a href="https://www.eventbrite.co.uk/e/london-the-fatherless-capital-tickets-24113527209" target="_blank">here</a><br></p>

<p align="justify" style="color:#000000;">Help George Galloway and the #Galloway4London team run against the big party political machines by donating <a href="https://www.startjoin.com/galloway4London" target="_blank">here</a>.</p><br><br>

            </div>
	
	
<?php
    // do not modify
    include_once("_footer.php");
?>


