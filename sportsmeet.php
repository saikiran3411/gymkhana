<?php include("header1.php") ?>

<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; $split = explode('/',$actual_link);
            $currentPage = end($split);$newSplit = explode('.',$currentPage);$society='sports';?>
        <!--========== PROMO BLOCK ==========-->
        <div class="s-promo-block-v3 g-bg-position--center g-fullheight--sm" style="background: url('img/1920x1080/sportscouncil.jpg');">
            <div class="container g-ver-center--sm g-padding-y-125--xs g-padding-y-0--sm">
                <div class="g-margin-t-30--xs g-margin-t-0--sm g-margin-b-30--xs g-margin-b-70--md">
									<br></br>
                    <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-50--lg g-color--white">Inter IIT Sports Meet</h1>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-sm-push-4 g-margin-b-50--xs g-margin-b-0--md">
                        <div class="s-promo-block-v3__divider g-display-none--xs g-display-block--md"></div>

                            <div class="g-margin-b-30--xs g-margin-b-0--md">
                                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                                    <p class="g-font-size-18--xs g-color--white-opacity">

Even though IITs are expected to be elite institutes to provide knowledge and exposure in tech word, there is a lot more that they provide for a holistic development of the students. Sports is one of the biggest part of this IIT experience, and the biggest stage for any sportsman at an IIT is the InterIIT Sports Meet. It is an Olympics of our own!									
									</p>
                                </div>
                            </div>


                    </div>
                    <div class="col-sm-4 col-sm-pull-8">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">

                             <a href="about" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-50--xs">About Us</a>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <br></br>
                <br></br>
                <br></br>
                <br></br>

        <!-- Tab -->
        <div class="container g-margin-t-o-100--xs g-margin-b-125--xs" id="about">
            <div class="row g-row-col--15">
                <div class="col-sm-4" >
                    <!-- Filter -->
                    <article>
                        <img class="img-responsive" src="img/slogo/sports.png" alt="Image">
                        <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-10--xs g-padding-y-10--xs">
                            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2"></p>
                            <h3 class="g-font-size-22--xs g-letter-spacing--1"><?php $dir = "img/slogo/details/sports.txt";include($dir);?></h3>
                        </div>
                    </article>
                </div>
                <!-- End Filter -->

                <!-- Grid -->
                <div class="col-sm-8">
                    <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-padding-x-30--xs g-padding-x-60--sm g-padding-y-60--xs g-padding-y-80--sm js__tab-eqaul-height-v1">
                        <?php $dir = "text/about/sports_acc.txt";include($dir);?>
       <!--           <p>Held annually, in the winter break (late December), it sees all the IITs participating and competing against each other with the aim of winning 'The General Championship Trophy'. The sports meet is hosted by all IITs in turn. The 53nd InterIIT (year 2018) is going to be held at IIT Guwahati. Over 2000 students roaming around sporting jerseys, banners and flags of their IITs, make the event feel no less than the grand Olympics. Contingents including over 100s of students each, represent their IITs in various sports events. Tournaments are held in 13 different sports, namely Athletics, Badminton, Basketball, Cricket,Football, Hockey, Lawn Tennis, Squash, Swimming, Table Tennis, Volleyball, Water Polo and Weightlifting. Each sports sees a tournament winner and points are awarded according to the standings, thus making an overall points tally, topping which and winning the GC Trophy is every contingent's aim.</p>



                                <p>
The tournament was envisioned to seed the feelings of sportsmanship, teamwork and leadership, and also to promote socialization and friendship among students of different IITs. To help with this aim, the tournament sees many social and cultural events as well, like DJ Nights, concerts, dinners and get-togethers. Famous personalities like Sachin Tendulkar, Mary Kom and many other have visited the InterIIT events. IIT Bhubaneswar actively participates in almost all the sports at InterIIT Sports Meets. The teams practice the entire year to give their best and make the institution proud at the prestigious event. The institute shows great potential and is expected to perform great in the upcoming editions of InterIIT as well.
</p> -->



                    </div>
                    <!-- End Grid -->
                </div>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- About -->

        <!-- End About -->

        <!-- Service -->

        <!-- News -->
        <?php $dir ="text/societyAchievement/".$society."/"; $k=0; if(is_dir($dir)){if ($dh = opendir($dir)) {;while (($achievementloc = readdir($dh)) !== false){
                        if($achievementloc == "."||$achievementloc == ".."){}else{
                            if (strpos($achievementloc, '_acc') !== false) {$k=1;}
                        }
                        
                    } closedir($dh);}}?>
        <div class="g-bg-color--sky-light" >
            <div class="container g-padding-y-80--xs g-padding-y-125--sm" style="display:<?php if($k==1){echo "block;";}else{echo "none;";} ?>">
                <div class="g-text-center--xs g-margin-b-80--xs">


                    <h2 class="g-font-size-32--xs g-font-size-36--md g-letter-spacing--1">Achievements</h2>
                </div><div>
                <?php if(is_dir($dir)){if ($dh = opendir($dir)) {$k=0;while (($achievementloc = readdir($dh)) !== false){
                        if($achievementloc == "."||$achievementloc == ".."){}else{
                            if (strpos($achievementloc, '_acc') !== false) {$newdir = "text/societyAchievement/".$society."/".$achievementloc;
                      $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                      $matter = explode('/', $achievement);$y =3; $result = fmod($k,$y);if ($result==0) {echo '</div><div class="row" style="margin-bottom: 10px;">';}echo '<div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>

                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">

                                <h3 class="g-font-size-22--xs g-letter-spacing--1">'.$matter[0].'</h3>
                                <h5 class="g-font-size-22--xs g-letter-spacing--1">Year:'.$matter[3].'</h5>
                                <p>'.$matter[1].'</p>
                                  <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">'.$matter[2].' Place</p>
                            </div>
                        </article>
                        <!-- End News -->
                    </div>';$k=$k+1; fclose($myfile);}
                        }
                        
                    } closedir($dh);}} ?>
            </div>
        </div>
        <!-- End News -->
		<!-- Portfolio Filter -->
		<?php $dir= "img/".$society."/";$k=0;if(is_dir($dir)){if ($dh = opendir($dir)) {while(($file = readdir($dh)) !== false){if($file == "."||$file == ".."){}else{ $actualDir = $dir.$file."/";
            if (is_dir($actualDir)) {
                if ($newDh=opendir($actualDir)) {
                    while (($images = readdir($newDh)) !== false){
                        if($images == "."||$images == ".."){}else{
                            if (strpos($images, '_acc') !== false) {$k=1;}
                        }
                        
                    }
                    closedir($newDh);
                }
            }}} closedir($dh);}}?>
        <div style="display: <?php if($k==1){echo 'block;';}else{echo 'none;';} ?>">
        <div class="container g-padding-y-80--xs">
            <div class="g-text-center--xs g-margin-b-40--xs">
                <h2 class="g-font-size-32--xs g-font-size-36--md">Gallery</h2>
            </div>
            
            <div class="s-portfolio">
                <div id="js__filters-portfolio-gallery" class="s-portfolio__filter-v1 cbp-l-filters-text cbp-l-filters-center">
                    <?php $dir= "img/".$society."/";if(is_dir($dir)){if ($dh = opendir($dir)) { $j=0; while (($file = readdir($dh)) !== false){
                        $i=0;
        if($file == "."||$file == ".."){}else{       
            $actualDir = $dir.$file."/";
            if (is_dir($actualDir)) {
                if ($newDh=opendir($actualDir)) {
                    while (($images = readdir($newDh)) !== false){
                        if($images == "."||$images == ".."){}else{
                            if (strpos($images, '_acc') !== false) {$i=1;}
                        }
                        
                    }
                    closedir($newDh);
                }
            }
            if($i==1){
                if ($j==0) {
                    echo '<div data-filter=".logos" class="s-portfolio__filter-v1-item cbp-filter-item cbp-filter-item-active">'.$file.'</div>';
                    $j=1;
                }else{echo '<div data-filter=".'.$file.'" class="s-portfolio__filter-v1-item cbp-filter-item cbp-filter-item-active">'.$file.'</div>';}
            }
        }
      
    }
    closedir($dh);}}?>
                </div>
            </div>
        </div>
        <!-- End Portfolio Filter -->

        <!-- Portfolio Gallery -->
        <div class="container g-margin-b-100--xs">
            <div id="js__grid-portfolio-gallery" class="cbp">
                <!-- Item -->
        <?php $dir= "img/".$society."/";if(is_dir($dir)){if ($dh = opendir($dir)) { $j=0; while (($file = readdir($dh)) !== false){
                        $i=0;
        if($file == "."||$file == ".."){}else{       
            $actualDir = $dir.$file."/";
            if (is_dir($actualDir)) {
                if ($newDh=opendir($actualDir)) {
                    while (($images = readdir($newDh)) !== false){
                        if($images == "."||$images == ".."){}else{
                            if (strpos($images, '_acc') !== false) {
                                $img = $actualDir.$images;
                                echo '<div class="s-portfolio__item cbp-item ';if ($j==0) {echo "logos";}else{echo $file;} echo'">
                    <div class="s-portfolio__img-effect">
                        <img src="';echo $img;echo'" alt="students gymkhana">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">


                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="';echo $img;echo'" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Alma Fiesta   ">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <br></br>
                            <h4 class="g-font-size-10--xs g-color--white g-margin-b-5--xs">Click here to View Gallery</h4>
                        </ul>
                    </div>
                </div>';$i=1;
                            }
                        }
                        
                    }
                    closedir($newDh);
                }
            }
        }if($i==1){$j=1;}
      
    }
    closedir($dh);}}?>
            </div>
          </div>
      </div>
            <!-- End Portfolio Gallery -->
        <!-- End News -->

        <!-- Feedback Form -->
<script src="js/jquery.min.js" type="text/javascript" ></script>
                 <?php include("footer.php") ?>
