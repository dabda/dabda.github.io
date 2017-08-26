<?php
include("mdetect.php");
//Instantiate the object to do our testing with.
$uagent_obj = new uagent_info();
//Detect iPhone Tier and iPads...
if (($uagent_obj->DetectTierIphone() == $uagent_obj->true) ||
($uagent_obj->DetectIpad() == $uagent_obj->true))
   { header('Location: http://www.m.whocaresforbeer.com/'); }
//Detect Rich CSS Tier...
else if ($uagent_obj->DetectTierRichCss() == $uagent_obj->true)
   { header('Location: http://www.m.whocaresforbeer.com/'); }
//Detect All Other Mobile Devices...
else if ($uagent_obj->DetectTierOtherPhones() == $uagent_obj->true)
   { header('Location: http://www.m.whocaresforbeer.com/'); }
//Else it's a regular PC browser -- send to regular desktop site
else
//do nothing
?>


<html id="top">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Who Cares For Beer Festival</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/wcfb_favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>

  <body>

    <div style="display: none" id="hideAll">&nbsp;</div>
    <script type="text/javascript">
      document.getElementById("hideAll").style.display = "block";
    </script> 

    <div class="container">

      <div class="Col-0">

        <a id="goto_about" href="#top"></a>
        <a id="goto_breweries" href="#breweries"></a>
        <a id="goto_music" href="#music"></a>
        <a id="goto_food" href="#food"></a>
        <a id="goto_timeline" href="#timeline"></a>

<!--         <div class="beer_can">
          <video class="mp4" autoplay="autoplay" loop="loop" muted playsinline preload="auto">
            <source src="img/can.mp4" type="video/mp4" />
            <img class="gif" src="img/can_1x.gif"  />
          </video>
        </div> -->

        <div class="beer_can desktop">
          <img class="gif" src="img/can_1x.gif"  />
        </div>

        <div class="rock_stage desktop">
          <object type="image/svg+xml" data="img/rock_stage.svg"></object>
        </div>

        <div class="datum desktop">
          <object type="image/svg+xml" data="img/datum.svg"></object>
        </div>

        <div class="vektor dekstop">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 288 3968" style="enable-background:new 0 0 288 3968;" xml:space="preserve">
          <style type="text/css">
            .vektor_menuja{fill:none;}
          </style>
          <path id="MyPath" class="vektor_menuja" d="M66.8,52c39.2,9.4,110.6,4.7,130.5,59.8c13.3,36.8-3,71.1-24.9,105.6c-20,31.6-36,63.1-24.2,103.9
            c11.6,40.4,84.3,68.5,83.9,138.3c-0.4,74.7-54.3,94.4-73.7,133.5c-27.5,55.3,40,90.7,37.2,152c-1.9,41.7-50.5,68.7-53.9,124.7
            c-1.4,23.7,9.9,49.8,24.2,77.4c24.4,47.1,32.7,97-15.4,152.9c-43.1,50.1-16.6,88.1,6.1,135.2c18.4,38,8.6,72.5-15.6,94.4
            c-21.1,19.1-50.2,37.2-73.1,76c-38.6,65.3,5.3,142.1,41.8,204.6c36.5,62.5,49.2,173.5-47.8,259.8c-70.5,62.8-25.5,127.8,12.6,172.8
            c38.2,44.9,86.6,106.1,68.6,183.8c-6.1,26.4-28.4,51.9-44.3,77.9c-9.4,15.4-16.5,31.1-16.5,47.2c-0.2,36.2,31.9,61.8,59.3,83.5
            s54.2,54.1,46.1,89.2c-12.4,53.6-87.9,56.9-88.4,105.6c-0.4,42.6,56.2,55.6,88.6,81.4c74.8,59.7,54.2,151.5,23,188.2
            c-30.3,35.7-66.2,57.1-74.9,104.2c-7,38,13,72,2,132s-66,96-62,154c3.5,50.5,78,107,80,161s-52,60-52,126c0,74.7,102,108,110,182
            s-86,116-94,176"/>
            <text id="menu_text" font-size="20">
            <textPath id="visina" xlink:href="#MyPath" startOffset="50">
              <a id="menu_about" class="enlarge_cross precrtaj" href="#">about</a>&emsp;&nbsp;<a id="menu_breweries" class="enlarge_cross" href="#">breweries</a>&emsp;&nbsp;<a id="menu_music" class="enlarge_cross" href="#">music</a>&emsp;&nbsp;<a id="menu_food" class="enlarge_cross" href="#">food</a>&emsp;&nbsp;<a id="menu_timeline" class="enlarge_cross" href="#">timeline</a>
            </textPath>
            </text>
          </svg>
        </div>

      </div>

      <div class="Col-1">
        
        <div class="facebook">
          <a href="https://www.facebook.com/BevogBrewery/" target="_blank">
            <img src="img/facebook.svg"></img>
          </a>
        </div>
        
        <div class="logo">
          <object type="image/svg+xml" data="img/logo.svg"></object>
        </div>

        <div class="opis_festivala">
          <span class="title_text red_text medium_rotalic">
          THE WHO CARES FOR BEER<br>
          FESTIVAL 17 IS BACK!<br>
          </span>
          <br>
          <span class="normal_text red_text regular_rotalic">
          On 2nd of September at Bevog brewery more<br>
          than 70 craft beers from 15 top international<br>
          breweries will be up for tasting.<br>
          And nothing goes better with beer than cool<br>
          music, delicious food and a good debate, so be<br>
          ready for some awesome rock acts, fresh food<br>
          prepared by our top chefs from Pivohram Golar<br>
           and a relaxed brewers conference!
          </span>
        </div>
      </div>


      <div class="Col-2">
        <div class="bevog_brewery">
          <object type="image/svg+xml" data="img/bevog_brewery.svg"></object>
        </div>

        <div class="slika1">
          <a href="https://www.google.si/maps/place/Bevog+Brauhaus-Brewery/@46.6861636,16.011377,15z/data=!4m5!3m4!1s0x0:0x7b48499ec98e5bf3!8m2!3d46.6861636!4d16.011377" target="_blank">
          <video class="mp4" autoplay="autoplay" loop="loop" muted playsinline preload="auto">
            <source src="img/stuplin.mp4" type="video/mp4" />
            <img class="gif" src="img/stuplin_2x.gif"  />
          </video>
          </a>
        </div>

        <div class="how_to_get_to_festival">
          <object type="image/svg+xml" data="img/how_to_get_to_festival.svg"></object>
        </div>

      </div>


      <div class="Col-3">
        <div class="slika2">
          <video class="mp4" autoplay="autoplay" loop="loop" muted playsinline preload="auto">
            <source src="img/glaz.mp4" type="video/mp4" />
            <img class="gif" src="img/glaz_2x.gif"  />
          </video>
        </div>

        <div class="lokacija">
          <span class="normal_text blue_text regular_rotalic">
          The Bevog brewery is located in<br>
          southern Austria, close to slovenian<br>
          border and near the beautiful town<br>
          of Bad Radkersburg, which is just a<br>
          couple of hours away from major<br>
          cities like Vienna, Graz, Budapest,<br>
          Bratislava, Ljubljana or Zagreb.<br>
          Plan your trip with <a class="red_text" href="https://www.google.si/maps/place/Bevog+Brauhaus-Brewery/@46.6861636,16.011377,15z/data=!4m5!3m4!1s0x0:0x7b48499ec98e5bf3!8m2!3d46.6861636!4d16.011377" target="_blank">GOOGLE MAPS</a><br>
          and please think about group rides,<br>
          accomodations, because drunk<br>
          driving just isn't cool.<br>
          </span>
        </div>
      </div>

      <div id="breweries"></div>
      <div class="Col-4">
        <div class="the_best_craft_breweries">
          <object type="image/svg+xml" data="img/the_best_craft_breweries.svg"></object>
        </div>

        <div class="breweries">
          <span class="normal_text blue_text regular_rotalic">
            15 top breweries will have their beers up for<br>
            tasting at the WCFB festival. Alltogether<br>
            you will be able to taste more than 70<br>
            beers. Check out our <a class="red_text" href="pdf/beer_list.pdf" target="_blank">beer list</a> for more info.<br>
            <br>
            <br>
            <span class="medium_rotalic line_height"><a class="enlarge blue_text no_underline" href="http://birrificiolambrate.com/" target="_blank">Birrificio Lambrate</a></span> <span class="light_rotalic">(Italy)</span><br>
            <span class="medium_rotalic line_height"><a class="enlarge blue_text no_underline" href="http://www.wildbeerco.com/" target="_blank">Wild Beer Co.</a></span> <span class="light_rotalic">(UK)</span><br>
            <span class="medium_rotalic line_height"><a class="enlarge blue_text no_underline" href="http://naparbier.com/en" target="_blank">Naparbier</a></span> <span class="light_rotalic">(Spain)</span><br>
            <span class="medium_rotalic line_height"><a class="enlarge blue_text no_underline" href="http://pohjalabeer.com/en/" target="_blank">Põhjala Brewery</a></span> <span class="light_rotalic">(Estonia)</span><br>
            <span class="medium_rotalic line_height"><a class="enlarge blue_text no_underline" href="http://www.hawidere.at/collabs/" target="_blank">Collabs Brewery</a></span> <span class="light_rotalic">(Austria)</span><br>
            <span class="medium_rotalic line_height"><a class="enlarge blue_text no_underline" href="http://oedipus.com/" target="_blank">Oedipus Brewing</a></span> <span class="light_rotalic">(Netherlands)</span><br>
            <span class="medium_rotalic line_height"><a class="enlarge blue_text no_underline" href="http://www.brlo-brwhouse.de/en/" target="_blank">BRLO Brwhouse</a></span> <span class="light_rotalic">(Germany)</span><br>
            <span class="medium_rotalic line_height"><a class="enlarge blue_text no_underline" href="http://kabinet.rs/en/kabinet-brewery-2/" target="_blank">Kabinet Brewery</a></span> <span class="light_rotalic">(Serbia)</span><br>
            <span class="medium_rotalic line_height"><a class="enlarge blue_text no_underline" href="http://brewage.at/en/" target="_blank">Brew Age</a></span> <span class="light_rotalic">(Austria)</span><br>
            <span class="medium_rotalic line_height"><a class="enlarge blue_text no_underline" href="http://thegarden.hr/brewery/en/" target="_blank">The Garden Brewery</a></span> <span class="light_rotalic">(Croatia)</span><br>
            <span class="medium_rotalic line_height"><a class="enlarge blue_text no_underline" href="http://www.stonebrewing.eu/" target="_blank">Stone Brewing Berlin</a></span> <span class="light_rotalic">(USA-Germany)</span><br>
            <span class="medium_rotalic line_height"><a class="enlarge blue_text no_underline" href="https://bevog.at/" target="_blank">Bevog Brewery</a></span> <span class="light_rotalic">(Austria)</span><br>
            <span class="medium_rotalic line_height"><a class="enlarge blue_text no_underline" href="http://brouwerijdemolen.nl/" target="_blank">Brouwerij De Molen</a></span> <span class="light_rotalic">(Netherlands)</span><br>
            <span class="medium_rotalic line_height"><a class="enlarge blue_text no_underline" href="https://barutbrew.com/about-us/" target="_blank">Barut Brewing and Blending</a></span> <span class="light_rotalic">(Slovenia)</span><br>
            <span class="medium_rotalic line_height"><a class="enlarge blue_text no_underline" href="https://www.beerlovers.at/" target="_blank">BeerLovers</a></span> <span class="light_rotalic">(Austria)</span><br>
            <br>
            <a class="red_text medium_rotalic" href="pdf/breweries.pdf" target="_blank">DETAILED OVERVIEW</a>
          </span>
        </div>
        <div class="slika3">
          <video class="mp4" autoplay="autoplay" loop="loop" muted playsinline preload="auto">
            <source src="img/tank.mp4" type="video/mp4" />
            <img class="gif" src="img/tank_2x.gif"  />
          </video>
        </div>
      </div>


      <div class="Col-5">

        <div class="more_than_70_beers">
          <object type="image/svg+xml" data="img/more_than_70_beers.svg"></object>
        </div>

        <div class="conference">
          <span class="normal_text blue_text regular_rotalic">
            We’re organizing a beer conference,<br>
            where top brewers and representatives<br>
            of the best craft breweries, together<br>
            with Vasja Golar will share their views on<br>
            beer, tell their stories and answer all your<br>
            questions.<br>
            You can also bring your CRAFT(!) beer or<br>
            homebrew (max 5 pieces) to the festival,<br>
            where you can exchange and share them<br>
            with other brewers and visitors.<br>
          </span>
        </div>
        <div class="kids">
          <span class="normal_text blue_text regular_rotalic">
            For our youngest ones, we’ll have a<br>
            cool kids corner, where they can even<br>
            get tatoos! Under supervision, of<br>
            course, so you can have all the fun at<br>
            tasting beers.<br>
            <br>
            We are surrounded by beautiful<br>
            nature, so it might be a good idea not<br>
            to drive drunk and pick up your car the<br>
            other day and enjoy the views!
          </span>
        </div>
      </div>

      <div id="music"></div>
      <div class="Col-6">
        <div class="slika4">
          <video class="mp4" autoplay="autoplay" loop="loop" muted playsinline preload="auto">
            <source src="img/keg.mp4" type="video/mp4" />
            <img class="gif" src="img/keg_2x.gif"  />
          </video>
        </div>
        <div class="music">
          <span class="normal_text red_text regular_rotalic">
          Music goes well with beer,<br>
          so bring your ear plugs and<br>
          get ready to rock with:<br>
          <br>
          <span class="medium_rotalic line_height"><a class="enlarge red_text no_underline" href="http://vidunderband.com/" target="_blank">Vidunder</a></span> <span class="light_rotalic">(Sweden)</span><br>
          <span class="medium_rotalic line_height"><a class="enlarge red_text no_underline" href="http://www.carnaval.si/" target="_blank">Carnaval</a></span> <span class="light_rotalic">(Slovenia)</span><br>
          <span class="medium_rotalic line_height"><a class="enlarge red_text no_underline" href="https://clockworkpsycho.bandcamp.com/" target="_blank">Clockwork Psycho</a></span> <span class="light_rotalic">(Slovenia)</span><br>
          <br>
          <a class="blue_text medium_rotalic" href="pdf/bands.pdf" target="_blank">CHECK OUT THE BANDS IN DETAIL</a><br>
          </span>
        </div>
        <div class="awesome_rock_stage">
          <object type="image/svg+xml" data="img/awesome_rock_stage.svg"></object>
        </div>
      </div>


      <div id="food"></div>
      <div class="Col-7">
        <div class="golar">
          <span class="normal_text blue_text regular_rotalic">
          The <a class="red_text" href="http://www.pivohram.si/" target="_blank">Pivohram Golar</a> from nearby Gornja<br>
          Radgona will be preparing fresh, quality<br>
          food throughout the festival, so your taste<br>
          buds won’t only be spoiled by great beer,<br>
          but also delicious food for all - meat eaters,<br>
          vegetarians and vegans.<br>
          </span>
        </div>
        <div class="delicious_food">
          <object type="image/svg+xml" data="img/delicious_food.svg"></object>
        </div>
        <div class="slika5">
          <video class="mp4" autoplay="autoplay" loop="loop" muted playsinline preload="auto">
            <source src="img/beerocado.mp4" type="video/mp4" />
            <img class="gif" src="img/beerocado_2x.gif"  />
          </video>
        </div>
      </div>

      <div id="timeline"></div>
      <div class="Col-8">
        <div class="timeline">
          <object type="image/svg+xml" data="img/timeline.svg"></object>
        </div>
        <div class="time_table">
          <span class="normal_text red_text regular_rotalic">
          <span class="title_text blue_text medium_rotalic line_height">BEER</span><br>
          15<sup>00</sup> - 24<sup>00</sup>  / <span class="medium_rotalic">Beer Tasting</span><br>
          16<sup>00</sup> - 18<sup>00</sup> / <span class="medium_rotalic">Beer Conference</span><br>
          <br>
          <span class="title_text blue_text medium_rotalic line_height">FOOD</span><br>
          18<sup>00</sup> - 22<sup>00</sup> / <span class="medium_rotalic">Delicious Eats</span><br>
          </span>
        </div>
        <div class="band_time_table">
          <span class="normal_text red_text regular_rotalic">
          <span class="title_text blue_text medium_rotalic line_height">MUSIC</span><br>
          19<sup>45</sup>  / <span class="medium_rotalic">TBA</span><br>
          20<sup>45</sup>  / <span class="medium_rotalic"><a class="enlarge red_text no_underline" href="https://clockworkpsycho.bandcamp.com/" target="_blank">Clockwork Psycho</a></span><span class="light_rotalic"> (Slovenia)</span><br>
          21<sup>45</sup>  / <span class="medium_rotalic"><a class="enlarge red_text no_underline" href="http://www.carnaval.si/" target="_blank">Carnaval</a></span><span class="light_rotalic"> (Slovenia)</span><br>
          22<sup>45</sup>  / <span class="medium_rotalic"><a class="enlarge red_text no_underline" href="http://vidunderband.com/" target="_blank">Vidunder</a></span><span class="light_rotalic"> (Sweden)</span><br>
          <br>
          <span class="title_text blue_text medium_rotalic line_height">KIDS</span><br>
          15<sup>00</sup> - 20<sup>00</sup> / <span class="medium_rotalic">Cool Kids Corner</span><br>
          </span>
          </span>
        </div>
      </div>


      <div class="Col-9">
        <div class="rules1">
          <span class="small_text red_text regular_rotalic">
          <span class="title_text red_text medium_rotalic">RULES</span><br>
          <br>
          We will homebrew on the festival again. You can<br>
          bring your CRAFT(!) beer or homebrew (max 5 <br>
          pieces) to the festival but we ask you to be careful<br>
          with the bottles and packaging. You can exchange<br>
          these bottles / cans with other participants of the<br>
          festival or you can of course share them with<br>
          others. Please throw empty cans, bottles... into<br>
          the trash. We ask for fair and decent behavior<br>
          towards all the festival visitors, so come and find<br>
          new friends.<br>
          We will not serve alcohol to younger than 16 years<br>
          of age. There will be non-alcoholic beverages<br>
          available.
          </span>
        </div>

        <div class="contact">
          <span class="title_text red_text medium_rotalic">ASK US ANYTHING!</span><br>
          <br>
          <form name="htmlform" method="post" action="html_form_send.php" target="_blank">
            <input  class="vnos normal_text blue_text regular_rotalic" type="text" name="first_name" required placeholder="  NAME">
            <input  class="vnos normal_text blue_text regular_rotalic" type="email" name="email" required placeholder="  E-MAIL">
            <textarea  class="vnos normal_text blue_text regular_rotalic" name="comments" rows="6" required placeholder="  MESSAGE"></textarea>
            <input class="tipka normal_text blue_text regular_rotalic" type="submit" value="  SEND  ">
          </form>
        </div>

      </div>


      <div class="footer">
        <svg class="footer_svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 585.61 149.91">
        <style type="text/css">
          .vektor_footera{fill:none;}
        </style>
        <path id="MyFooter" class="vektor_footera" d="M0,136.76c70-1.5,135.14-69.68,204.5-56.5C265,91.76,302.32,163,392.34,147.09,479.84,131.59,490-17.24,585.51,2.26"/>
          <text id="footer_text" fill="#ed1a55" class="small_text">
            <textPath xlink:href="#MyFooter" startOffset="30">
              Copyright 2017 @ <a id="footer_bevog" class="enlarge" href="https://bevog.at/">Bevog Brewery</a>, Bad Radkersburg / e: <a id="footer_bevog" class="enlarge" href="mailto:info@bevog.at?Subject=Who%20Cares%20For%20Beer%20Festival%202017">info@bevog.at</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Made by: <a id="footer_bevog" class="enlarge" href="https://francfranc.si/">FRANCFRANC</a>
            </textPath>
          </text>
        </svg>
      </div>   


    </div><!-- End of container-->
  </body>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/scroll.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
  <script type="text/javascript" src="js/switch_.js"></script>

</html>