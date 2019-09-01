<?php include("header1.php") ?>



<script type="text/javascript">
            function openTab(th)
            {
                window.open(th.name,'_blank');
            }
        </script>
<link rel="stylesheet" type="text/css" href="css/director.css">

    <div class="row">
        <div class="col-sm-1 logos" style="margin-left: 0; padding-left:0;">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <!-- <div class="g-text-center--xs g-margin-b-80--xs">

                    <h2 class="g-font-size-40--xs g-font-size-30--sm g-font-size-40--md">Our Societies
                    </h2>
                </div> -->
                <div class="row " id="logos" >
                    <div class="container">
                        <section class="customer-logos slider1 col-sm-3" style="width: 120px;">
                            <a href="aaroh.php">
                                <div class="slide1"><img src="img/aaroh/logo.jpg"></div>
                            </a>

                            <a href="cinewave.php">
                                <div class="slide1"><img src="img/cinewave/logo.png"></div>
                            </a>
                            <a href="dgang.php">
                                <div class="slide1"><img src="img/dgang/logo.png"></div>
                            </a>
                            <a href="kalakriti.php">
                                <div class="slide1"><img src="img/kalakriti/logo.png"></div>
                            </a>
                            <a href="sfs.php">
                                <div class="slide1"><img src="img/sfs/logo.png"></div>
                            </a>
                            <a href="risc.php">
                                <div class="slide1"><img src="img/risc/logo.png"></div>
                            </a>
                            <a href="webd.php">
                                <div class="slide1"><img src="img/webd/logo.png"></div>
                            </a>
                            <a href="clix.php">
                                <div class="slide1"><img src="img/clix/logo.png"></div>
                            </a>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8 sl">
            <!--========== SWIPER SLIDER ==========-->
            <div class="s-swiper js__swiper-one-item" style="overflow: hidden; width: 100%;">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    <div class="g-fullheight--xs g-bg-position--center swiper-slide"
                        style="background: url('img/campus/7.jpg');">

                    </div>
                    <div class="g-fullheight--xs g-bg-position--center swiper-slide"
                        style="background: url('img/campus/8.jpg');">

                    </div>
                    <div class="g-fullheight--xs g-bg-position--center swiper-slide"
                        style="background: url('img/campus/9.jpg');">

                    </div>
                    <div class="g-fullheight--xs g-bg-position--center swiper-slide"
                        style="background: url('img/campus/6.jpg');">

                    </div>
                    <div class="g-fullheight--xs g-bg-position--center swiper-slide"
                        style="background: url('img/campus/4.jpg');">

                    </div>



                </div>
                <!-- End Swiper Wrapper -->

                <!-- Arrows -->
                <a href="javascript:void(0);"
                    class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
                <a href="javascript:void(0);"
                    class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
                <!-- End Arrows -->

                <a href="#about" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
                    <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
                    <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Learn More</p>
                </a>
            </div>
            <!--========== END SWIPER SLIDER ==========-->
        </div>
        <div class="col-sm-3" style="padding-top: 100px;">
            <div style="padding-right:10px;">
                <h2 class="section-heading text-highlight" style="font-size: 25px; text-align: center;">News &amp; Updates</h2>
                <ul class="list-group-item" style="margin-left: 0; padding-left:0;height: 70vh;padding-right: 0px; overflow-y: scroll;">
                    <?php
                    include "dashboard/db.php";
                    $search = "SELECT * FROM news ORDER BY id DESC";
                    $match = mysqli_query($conn,$search);
                    $count = mysqli_num_rows($match);
                    if ($count<6) {
                      for ($i=0; $i <$count; $i++) {
                      $data = mysqli_fetch_assoc($match); 
                      echo '<li class="list-group-item" style="width:100%;margin: 0px; border: none;border-bottom: dotted 1px;"><a onClick="openTab(this)" href="#" name="news/'.$data['id'].'_acc.pdf">'.$data["Name"].'</a></li>';
                    }
                    }else{
                      for ($i=0; $i <6; $i++) { 
                      $data = mysqli_fetch_assoc($match); 
                      echo '<li class="list-group-item" style="width:100%;margin: 0px; border: none;border-bottom: dotted 1px;"><aonClick="openTab(this)" href="#" name="news/'.$data['id'].'_acc.pdf">'.$data["Name"].'</a></li>';
                    }
                    }
                    mysqli_close($conn);
                    ?> 
                    <li class="list-group-item" style="width:100%;margin: 0px; border: none;border-bottom: dotted 1px;"><a href="news.php">See all --></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- <br></br><br></br> -->
    <!--========== PAGE CONTENT ==========-->

    <div id="about" class="g-promo-section">
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="row">

                <div class="col-md-8 col-md-offset-0.5">
                    <p class="g-font-size-18 xsg-radius--left-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">About</h2>
                        </div>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">Students Gymkhana</h2>
                        </div>
                        <!-- <br></br> -->
                        <p style="font-weight: 400;color: black;text-align: justify;">
                            With the sole purpose to ensure development and to utilize the talents and the abilities
                            of the students we have instituted, Students’ Gymkhana a student body, to foster all
                            student activities at IIT Bhubaneswar and to bridge the gap between the students and
                            the authorities. Since the year 2010, it has sought to cultivate various qualitative
                            approaches amongst students to master an enhanced life. We have made Students;
                            Gymkhana the nucleus of the numerous extra-curricular, technical and co-curricular
                            activities held in IIT Bhubaneswar spanning activities of different genres of sports,
                            cultural and technical fields. It has played a cardinal role in cultivating and nurturing
                            their
                            extra-curricular talents here by encouraging their participation in a number of
                            contrasting events. The Student’s Gymkhana has worked towards our ideal aim to bring
                            all-round development in the students through their active role in extra-curricular
                            activities to supplement education and advancing the general welfare of our students.
                            The hierarchy of Students Gymkhana comprises the President, Students; Senate, an
                            elected representative body and the elected executives: the Vice President, General
                            Secretary Socio-Cultural Council, General Secretary Science and Technology Council,
                            General Secretary Sports Council. The elected Senate lays down the general guideline
                            for the functions of the executives and their associated councils. General Elections are
                            held every year during spring for various offices of powers. We conduct elections for
                            every post which is presided over by an election commissioner. The Gymkhana
                            Elections and its healthy functioning are done in accordance to the Gymkhana
                            Constitution.<br>
                            With the dedicated efforts of the hard-working members of the Gymkhana, the student
                            culture has evolved exceptionally in the last decade. The Gymkhana has never failed to
                            provide opportunities to every deserving student. As a result of these tireless and
                            selfless actions, the achievements of the institute in various fields have been steadily
                            improving. I wish that every student utilizes their abilities and develop their talents as
                            they move forward in their life.
                        </p>

                        <div
                            class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-10--xs g-padding-y-10--xs">
                            <p
                                class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">
                            </p>
                            <h3 class="g-font-size-22--xs g-letter-spacing--1"><a
                                    href="http://www.iitbbs.ac.in/director.php"> -
                                    Prof. R. V. Rajakumar</a></h3>
                            <p>Director<br>
                                IIT Bhubaneswar</p>
                        </div>

                </div>
            </div>
        </div>
        <div
            class="col-sm-4 g-promo-section__img-right--lg g-bg-position--center g-height-100-percent--md js__fullwidth-img director">
            <img class="img-responsive" src="team/dir.jpg" alt="Image">
        </div>
    </div>

    <!-- Parallax -->



    <!-- News -->
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="g-text-center--xs g-margin-b-80--xs">

            <h2 class="g-font-size-40--xs g-font-size-30--sm g-font-size-40--md">President's Word
            </h2>
        </div>
        <div class="row">
            <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                <!-- News -->
                <article>
                    <img class="img-responsive" src="team/1.jpg" alt="Image">
                    <div
                        class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-10--xs g-padding-y-10--xs">
                        <p
                            class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">
                        </p>
                        <h3 class="g-font-size-22--xs g-letter-spacing--1"><a
                                href="http://www.iitbbs.ac.in/profile.php/sankarsan/">Dr. Sankarsan Mohapatro</a></h3>
                        <p>-President<br>
                            Students Gymkhana</p>
                    </div>
                </article>
                <!-- End News -->
            </div>





            <div class="col-sm-8">
                <p class="g-font-size-17--xs " style="font-weight: 500;text-align:justify; ">Indian Institute of
                    Technology, Bhubaneswar, from its humble start in 2008 has come down a long way in its strife to
                    become one of the leading institutes of the country. Achieving this success in this short a journey
                    would have been impossible without the contribution of the students and extensive support of the
                    Students' Gymkhana, the students' representative body. Established in 2009, the Gymkhana has been
                    efficiently working as an independent, self-governing and democratic organization that has bridged
                    the gap between the students and the administration. From managing various societies catering to
                    different interests and talents of the students, organizing various intra-college co-curricular,
                    technical and sports events and competitions, holding informative workshops, celebrating the
                    festivals at hostels with great fervor and organizing the institute's very own socio-cultural and
                    technical fests, Alma Fiesta and Wissenaire respectively, the Students' Gymkhana has played a
                    commendable role in nurturing the extra-curricular talents of the students, enhancing their
                    personality and cultivating leadership qualities in them to equip them for a successful independent
                    corporate and social life. It gives me immense pride and pleasure to be heading this organization, I
                    congratulate all its members for their achievements so far and extend my support and good wishes to
                    continue these appreciable efforts.
                </p>
            </div>
        </div>
    </div>
    <!-- End News -->
    <!-- Testimonials -->
    
    <link rel="stylesheet" type="text/css" href="css/carousel.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
    <!-- <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="g-text-center--xs g-margin-b-80--xs">

            <h2 class="g-font-size-40--xs g-font-size-30--sm g-font-size-40--md">Our Societies
            </h2>
        </div>
        <div class="row">
            <div class="container">
                <section class="customer-logos slider1">
                    <a href="aaroh.php">
                        <div class="slide1"><img src="img/aaroh/logo.jpg"></div>
                    </a>

                    <a href="cinewave.php">
                        <div class="slide1"><img src="img/cinewave/logo.png"></div>
                    </a>
                    <a href="dgang.php">
                        <div class="slide1"><img src="img/dgang/logo.png"></div>
                    </a>
                    <a href="kalakriti.php">
                        <div class="slide1"><img src="img/kalakriti/logo.png"></div>
                    </a>
                    <a href="sfs.php">
                        <div class="slide1"><img src="img/sfs/logo.png"></div>
                    </a>
                    <a href="risc.php">
                        <div class="slide1"><img src="img/risc/logo.png"></div>
                    </a>
                    <a href="webd.php">
                        <div class="slide1"><img src="img/webd/logo.png"></div>
                    </a>
                    <a href="clix.php">
                        <div class="slide1"><img src="img/clix/logo.png"></div>
                    </a>
                </section>
            </div>
        </div>
    </div> -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('.customer-logos').slick({
                vertical: true,
                verticalSwiping: true,
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>


<?php include("footer.php");?>
