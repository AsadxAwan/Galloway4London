<?php

    // no change need
    $bn = basename(__FILE__, '.php'); 
    $get_url = "http://$_SERVER[HTTP_HOST]";

    // amend details according to each article 
    $article = array(
        'title'             =>      'My title po here',
        'short_description' =>      'My description goes here',
        'article_url'       =>      'sample-article-2.php',
        'article_img'       =>      '040216-galloway-hustings.jpg',
        
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
                    <p align="justify">With Zac Goldsmith today announced as the Conservative candidate for the 2015 London mayoral race, the Tory MP will now face Sadiq Khan in the race to succeed Boris Johnson as mayor. However, one man who feels he should not be forgotten as a contender is <strong>George Galloway</strong>.</p><br>
                </header>
                
                <img src="../images/articles/040216-galloway-hustings.jpg" /><br>
    <h6 align="right">Credit: Ian Hols</h6> 
    
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

    <p align="justify">Galloway - who is running as an independent candidate for mayor - thinks that there is a gap in the market for him in the race, as Labourâ€™s Sadiq Khan is just not up to it. Speaking on the Daily Politics, Galloway said that while he was disappointed that Tessa Jowell is not Labourâ€™s candidate â€“ given that she differs from him more politically than Khan â€“ Khan is still no real threat to his own bid. Why? Well, apparently Sadiq Khan is a â€˜very boring manâ€™.<br><br>

'Is he a character? If he was sitting here right now most of your viewers would by now be asleep. The very last thing he is is a character. Zac Goldsmithâ€™s more of a character, Boris Johnson and Ken Livingstone were characters. Sadiq Khan is a very boring man, and Iâ€™m not sure London wants a very boring mayor.'<br><br>

<blockquote>"Boris Johnson and Ken Livingstone were characters. Sadiq Khan is a very boring man, and Iâ€™m not sure London wants a very boring mayor."</blockquote><br><br>

With Galloway hoping Labour will rescind his expulsion from the party now Jeremy Corbyn is leader, he may need to keep his sniping in check in order to fit into the Corbyn regime of 'a new kind of politics'.<br><br>

Help George Galloway and the #Galloway4London team run against the big party political machines by donating <a href="https://www.startjoin.com/galloway4London" target="_blank">here</a>.</p><br><br>


            </div>
	
	
<?php
    // do not modify
    include_once("_footer.php");
?>


