<?php include("header1.php") ?>

<link href="team/css/font-awesome.min.css" rel="stylesheet" />


<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; $split = explode('/',$actual_link);
            $currentPage = end($split);$newSplit = explode('.',$currentPage);$society=reset($newSplit);?>


<link href="team/css/style.css" rel="stylesheet">
<link href="team/css/responsive.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 5px;
  font-size: 15px;
  width: 15px;
  text-align: center;
  text-decoration: none;
  margin: 1px 2px;
  border-radius: 100%;
}

.fa:hover {
    opacity: 0.6;
}

.fa-facebook {

  color: white;
}

.fa-twitter {

  color: white;
}

.fa-google {

  color: white;
}

.fa-linkedin {

  color: white;
}

.fa-skype {

  color: white;
}

</style>


        <!--========== PROMO BLOCK ==========-->
        <div class="s-promo-block-v3 g-bg-position--center g-fullheight--md js__parallax-window" style="background: url(img/1920x1080/risc.jpg) 100%  no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-ver-center--md g-padding-y-150--xs g-padding-y-0--md">
                <div class="g-margin-b-60--xs">
                    <p><img style="height:250px;" src="img/risc/logo.png"/>   </p>
                    <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">RISC</h1>
                    <p class="g-font-size-18--xs g-font-size-26--md g-color--white-opacity g-margin-b-0--xs">THE ROBOTICS AND INTELLIGENT SYSTEM SOCIETY.</p>
                </div>
                <span class="g-display-block--xs g-display-inline-block--sm g-padding-x-5--xs g-margin-b-10--xs g-margin-b-0--sm">
                    <a href="#about" class="text-uppercase s-btn s-btn-icon--md s-btn--primary-bg g-radius--50 g-padding-x-45--xs">About Us</a>
                </span>
                <span class="g-display-block--xs g-display-inline-block--sm g-padding-x-5--xs g-margin-b-10--xs g-margin-b-0--sm">
                    <a href="#smooth-scroll" class="text-uppercase s-btn s-btn-icon--md s-btn--white-brd g-radius--50 g-padding-x-65--xs">Contact Us</a>
                </span>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- About -->
        <div id="about" class="smooth-scroll">
          <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-60--xs g-margin-b-100--md">
                <div class="col-sm-3 col-xs-6 g-hor-centered-row__col">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="img/400x500/risc.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 g-hor-centered-row__col g-margin-b-60--xs g-margin-b-0--md">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                        <img class="img-responsive" src="img/400x550/risc.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5 g-hor-centered-row__col">

                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">About Us</h2>
                    <p class="g-font-size-18--sm"><?php $dir = "text/about/".$society."_acc.txt";include($dir);?><!-- RISC provides a forum for the students to pursue and learn innovative technology. The RISC consists
of a group of dedicated members and serves those students whose interest lie in learning about and
building robots. Forging ahead with an aim to promote and advance in the art of robotics, the Society
strives to advance in innovation, education, and fundamental and applied research in Robotics and
Automation by working in a fun-filled environment sharing knowledge, information and ideas. Several
workshops and events are conducted by the RISC on regular basis. It includes Inhouse workshops
and competitions conducted for the students with in the institute. There are also several projects that
are undertaken by the RISC members and provide an opportunity for a healthy student interaction
and a very well real practical learning. RISC also conducts a national robotics competition YANTHRIX
during WISSENAIRE , the techno-management fest of IIT Bhubaneswar. --> </p>
                </div>
            </div>


        </div>
      </div>
    </div>
        <!-- End About -->


        <!-- End Process -->






        <!-- Testimonials -->
        <div class="g-hor-divider__dashed--sky-light g-padding-y-80--xs g-padding-y-125--xsm" style="width: 100%;overflow: hidden;">
            <div class="container g-text-center--xs ">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-50--xs">Annual Report</p>
                <embed src="text/annualreport/<?php echo $society;?>_acc.pdf" width="100%" height="500" type="application/pdf">
              <!--   <div class="s-swiper js__swiper-testimonials">

                    <div class="swiper-wrapper g-margin-b-50--xs">
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">

                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--heading"><i>Kick off Bot: Using a Bluetooth and an android phone, two bots were made which could be controlled wirelessly.
									 </i></p><p class="g-font-size-22--xs g-font-size-28--sm g-color--heading"><i>Conducted demo competitions of Kick-off and Robowars.
  </i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                               <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs">Society Intro
                                </h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">

                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--heading"><i>Line follower bot: Line follower bot and its hardware working were showcased.
									</i></p><p class="g-font-size-22--xs g-font-size-28--sm g-color--heading"><i>Music LEDs :  LEDs that are operated as a response to the music played were displayed.
  </i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                               <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs">Society Intro
                                </h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">

                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--heading"><i>Full standard Kick-off competition was conducted where participants were required to make a bot which can move and kick a ball. Using these bots, they would contest against each other in the predefined arena to score maximum number of goals. This was conducted in the first week of November

                                    </i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                            <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs">Kick-off competition
                                </h4>
                            </div>
                        </div>


                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">

                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--heading"><i>Competitions which would be conducted in Wissenaire as part of Yantrix were designed and were be conducted by the society members. For this we have designed competitions and their problem statements which are released in Wissenaire website. The competitions are Clean India, Robo wars, Kick-off, Maze Runner, Bomb squad, Trekk-on.
                                    </i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs">Yantrix Events
                                </h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">

                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--heading"><i>Workshops were organised for the students of the institute.
                                    </i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs">Workshops
                                </h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">

                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--heading"><i>For the first time an in house robotics competitions open for all branches was organised as a part of Innovation Challenge IIT Bhubaneswar. The problem statements were designed and the events were organised successfully.
                                    </i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs">Innovation Challenge
                                </h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">

                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--heading"><i>In this semester members of the society have participated in Robotics events conducted by IIT kanpur
                                    </i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                                 <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs">participation
                                </h4>
                            </div>
                        </div>

                    </div>

                    <div class="g-font-size-22--xs g-color--heading js__swiper-fraction"></div>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--primary-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--primary-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
                </div> -->
            </div>
        </div>
        <!-- End Testimonials -->


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
                                <h3 class="g-font-size-18--xs g-letter-spacing--1">Year:'.$matter[3].'</h3>

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
                                <a href="';echo $img;echo'" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="'.$file.'">
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

        <div class="g-bg-color--sky-light" style="width: 100%;overflow:scroll;">
              <div class="container">
              <div id="smooth-scroll" class="container g-padding-y-80--xs g-padding-y-125--xsm">
                  <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-80--xs g-margin-b-100--md">
                      <div class="col-sm-5 g-hor-centered-row__col">

                          <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">Contact Us</h2>
                          <p class="g-font-size-18--sm">We are very approchable and would like to speak to you. Feel Free to Send us Email</p>
                          <p><a href="mailto:secyrisc.sg@iitbbs.ac.in"><img style="height:27px;" src="img/slogo/mail.png"/></a></p>

                            <p> Follow on us on facebook page
                          </p>
        <p class="g-letter-spacing--2g-margin-b-25--xs">
          <script src="https://apis.google.com/js/platform.js"></script>


      <br></br>

        </p>

                      </div>
                      <div class="col-sm-1"></div>
                      <div class="col-sm-5 g-hor-centered-row__col">

                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Frisc.iitbbs%2F&tabs=timeline&width=783&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="450" style="border:none;overflow:scroll;" scrolling="yes" frameborder="0" allowTransparency="true"></iframe>

                      </div>





                  </div>




                          </div>
                        </div>


                  </div>

            <!-- Start Team Members
            ============================================= -->
            <div class="team-members-area default-padding text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 item">
                            <div class="team-member">
                                <div class="team-thumb">
                                    <?php echo'<img src="img/'.$society.'/gov/1st.jpg" alt="Thumb" />';?>
                                    <div class="team-info">
                                        <?php
                                        $dir = "img/".$society."/gov/details/1st.txt";
                                            $dh = fopen($dir, "r");
                                           $details = fread($dh,filesize($dir));
                                           $matter = explode('/', $details);
                                        
                                        ?>
                                        <h4><?php echo $matter[0];?></h4>
                                        <span>Governor</span>
                                    </div>
                                </div>
                                <div class="team-overlay">
                                    <div class="bio">
                                        <h4><?php echo $matter[0]?></h4>
                                        <p>
                                          Contact number: <?php echo $matter[2];?>
                                        </p>
                                        <p>
                                        Email Id:   <a href="mailto:<?php echo $matter[1];?> "><?php echo $matter[1];?></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 item">
                            <div class="team-member">
                                <div class="team-thumb">
                                    <?php echo'<img src="img/'.$society.'/gov/2nd.jpg" alt="Thumb" />';?>
                                    <div class="team-info">
                                        <?php
                                        $dir = "img/".$society."/gov/details/2nd.txt";
                                        
                                            $dh = fopen($dir, "r");
                                           $details = fread($dh,filesize($dir));
                                           $matter = explode('/', $details);
                                        
                                        ?>
                                        <h4><?php echo $matter[0];?></h4>
                                        <span>Governor</span>
                                    </div>
                                </div>
                                <div class="team-overlay">
                                    <div class="bio">
                                        <h4><?php echo $matter[0]?></h4>
                                        <p>
                                          Contact number: <?php echo $matter[2];?>
                                        </p>
                                        <p>
                                        Email Id:   <a href="mailto:<?php echo $matter[1];?> "><?php echo $matter[1];?></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 item">
                            <div class="team-member">
                                <div class="team-thumb">
                                    <?php echo'<img src="img/'.$society.'/gov/3rd.jpg" alt="Thumb" />';?>
                                    <div class="team-info">
                                        <?php
                                        $dir = "img/".$society."/gov/details/3rd.txt";
                                        
                                            $dh = fopen($dir, "r");
                                           $details = fread($dh,filesize($dir));
                                           $matter = explode('/', $details);
                                       
                                        ?>
                                        <h4><?php echo $matter[0];?></h4>
                                        <span>Governor</span>
                                    </div>
                                </div>
                                <div class="team-overlay">
                                    <div class="bio">
                                        <h4><?php echo $matter[0]?></h4>
                                        <p>
                                          Contact number: <?php echo $matter[2];?>
                                        </p>
                                        <p>
                                        Email Id:   <a href="mailto:<?php echo $matter[1];?> "><?php echo $matter[1];?></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 10px;">
  <div class="col-md-4 item">
  </div>

<div class="col-md-4 item">
                            <div class="team-member">
                                <div class="team-thumb">
                                    <?php echo'<img src="team/7.jpg" alt="Thumb" />';?>
                                    <div class="team-info">
                                        <?php
                                        $dir = "team/details/7.txt";
                                        
                                            $dh = fopen($dir, "r");
                                           $details = fread($dh,filesize($dir));
                                           $matter = explode('/', $details);
                                       
                                        ?>
                                        <h4><?php echo $matter[0];?></h4>
                                        <span>Secretary</span>
                                    </div>
                                </div>
                                <div class="team-overlay">
                                    <div class="bio">
                                        <h4><?php echo $matter[0]?></h4>
                                        <p>
                                          Contact number: <?php echo $matter[2];?>
                                        </p>
                                        <p>
                                        Email Id:   <a href="mailto:<?php echo $matter[1];?> "><?php echo $matter[1];?></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-4 item">
                    </div>

                  </div>

					</div>



<br></br>











                </div>
            </div>
            <!-- End Team Members -->
        </div>
        <br></br>

      </div>
      <script src="js/jquery.min.js" type="text/javascript" ></script>
     <!--  <script src="team/js/jquery-1.12.4.min.js"></script> -->
      <script src="team/js/bootstrap.min.js"></script>
      <script src="team/js/equal-height.min.js"></script>
      <script src="team/js/jquery.appear.js"></script>
      <script src="team/js/jquery.easing.min.js"></script>
      <script src="team/js/jquery.magnific-popup.min.js"></script>

      <script src="team/js/owl.carousel.min.js"></script>
      <script src="team/js/wow.min.js"></script>

      <script src="team/js/imagesloaded.pkgd.min.js"></script>
      <script src="team/js/count-to.js"></script>

      <script src="team/js/main.js"></script>

        <!--========== END PAGE CONTENT ==========-->

     <?php include("footer.php") ?>
