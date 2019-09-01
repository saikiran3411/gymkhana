<?php
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Students Gymkhana</title>
        <meta name="keywords" content="HTML5 Theme" />
        <meta name="description" content="Students Gymkhana">
        <meta name="author" content="keenthemes.com">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/global/global.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>




        <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-80--xs g-margin-b-100--md">


                <div class="col-sm-7 g-hor-centered-row__col">
                    <img class="img-responsive" src="img/818x470/football.jpg" alt="Mockup Image">
                </div>
                  <div class="col-sm-2"></div>
                <div class="col-sm-5 g-hor-centered-row__col">

                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">football</h2>
                    <p class="g-font-size-18--sm"><?php $dir = "text/about/football_acc.txt";include($dir);?><!-- In India football is a religion which unites the whole nation. And here at IIT Bhubaneswar we have all
the facilities that can help a student develop his footballing skills and live his dreams. In our
permanent campus at Arugul we have our football ground beside the boy’s hostel which includes an
installed practice net. All the required equipment and gears for practice sessions as well as matches
are provided by the gymkhana along with appointment of a suitable and experienced coach.
 -->
                    </p>
                </div>
            </div>


            <div class="row g-margin-b-0--xs">
                <!-- <div class="col-sm-4">
                    <div class="g-margin-t-20--md g-margin-b-40--xs">

                        <p> INTER
IIT sports meet is the major annual event held in the month of December but the heat of football is
up all year round with events like General Championship(GC), Inter Year Tournament, Hostel Day,
friendly matches with local colleges, local tournaments and lot more. As ex Indian skipper M.S.
DHONI said “I believe in giving more than 100% on the field and I don’t really worry about the
result.If there is great commitment on the field that’s victory for me.” So, the football society of IIT
BHUBANESWAR keeps the sport lovers active with a mix of fun events and serious sport.
                        </p>
                    </div>
                </div>
 -->
                <div class="col-lg-10">
                    <!-- Portfolio Gallery -->
                    <div id="js__grid-portfolio-gallery" class="s-portfolio__paginations-v1 cbp">
                        <!-- Item -->
                        <?php $dir = "img/football/"; if(is_dir($dir)){if($dh = opendir($dir)){while (($image = readdir($dh)) !== false){
                            if($image == "."||$image == ".."){}else{if (strpos($image, '_acc') !== false) {$img = $dir.$image;echo'<div class="s-portfolio__item cbp-item logos">
                            <div class="s-portfolio__img-effect">
                                <img src="'.$img.'" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">football</h4>

                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="'.$img.'" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="football">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>';}}
                        }}}?>
                        <!-- Item -->
                        <!-- <div class="s-portfolio__item cbp-item logos">
                            <div class="s-portfolio__img-effect">
                                <img src="img/sports/football/1.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">football</h4>

                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="img/sports/football/1.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Click here to View Gallery">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="s-portfolio__item cbp-item logos">
                            <div class="s-portfolio__img-effect">
                                <img src="img/sports/football/2.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">football</h4>

                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="img/sports/football/2.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Click here to View Gallery">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div><div class="s-portfolio__item cbp-item logos">
                            <div class="s-portfolio__img-effect">
                                <img src="img/sports/football/3.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">football</h4>

                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="img/sports/football/3.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Click here to View Gallery">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div><div class="s-portfolio__item cbp-item logos">
                            <div class="s-portfolio__img-effect">
                                <img src="img/sports/football/4.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">football</h4>

                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="img/sports/football/4.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Click here to View Gallery">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div><div class="s-portfolio__item cbp-item logos">
                            <div class="s-portfolio__img-effect">
                                <img src="img/sports/football/5.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">football</h4>

                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="img/sports/football/5.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Click here to View Gallery">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div><div class="s-portfolio__item cbp-item logos">
                            <div class="s-portfolio__img-effect">
                                <img src="img/sports/football/6.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">football</h4>

                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="img/sports/football/6.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Click here to View Gallery">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div><div class="s-portfolio__item cbp-item logos">
                            <div class="s-portfolio__img-effect">
                                <img src="img/sports/football/7.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">football</h4>

                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="img/sports/football/7.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Click here to View Gallery">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="s-portfolio__item cbp-item logos">
                            <div class="s-portfolio__img-effect">
                                <img src="img/sports/football/8.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">football</h4>

                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="img/sports/football/8.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Click here to View Gallery">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- Item -->

                    </div>
                    <!-- End Portfolio Gallery -->
                </div>
            </div>
        </div>

        </div>



                <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
                <!-- Vendor -->
                <script src="js/jquery.min.js" type="text/javascript" ></script>
                <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
                <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
                <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
                <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
                <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
                <script type="text/javascript" src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
                <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
                <script type="text/javascript" src="vendor/waypoint.min.js"></script>
                <script type="text/javascript" src="vendor/counterup.min.js"></script>
                <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
                <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
                <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>




                <!-- General Components and Settings -->
                <script type="text/javascript" src="js/global.min.js"></script>

                <script type="text/javascript" src="js/components/portfolio-4-col-slider.min.js"></script>





                <!--========== END JAVASCRIPTS ==========-->
                <!--========== END JAVASCRIPTS ==========-->

            </body>
            <!-- End Body -->
        </html>
        </html>
