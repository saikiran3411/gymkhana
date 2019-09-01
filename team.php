<?php include("header1.php") ;
$dir = "team/details";
?>

<link href="team/css/font-awesome.min.css" rel="stylesheet" />




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
        <div class=" s-promo-block-v3 g-bg-position--center g-fullheight--md js__parallax-window" style="background: url('team/team.jpg') 100%  no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-ver-center--md g-padding-y-150--xs g-padding-y-0--md">
                <div class="g-margin-b-60--xs" style="margin-top: 80px;">
                     <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-50--lg g-color--white">Team Gymkhana</h1>
                    <!-- <p class="g-font-size-18--xs g-font-size-26--md g-color--white-opacity g-margin-b-0--xs">"Winners never quit, and quitters never win". </p> -->
                </div>
                <span class="g-display-block--xs g-display-inline-block--sm g-padding-x-5--xs g-margin-b-10--xs g-margin-b-0--sm">
                    <a href="#about" class="text-uppercase s-btn s-btn-icon--md s-btn--primary-bg g-radius--50 g-padding-x-45--xs">About Us</a>
                </span>
                <!-- <span class="g-display-block--xs g-display-inline-block--sm g-padding-x-5--xs g-margin-b-10--xs g-margin-b-0--sm">
                    <a href="#smooth-scroll" class="text-uppercase s-btn s-btn-icon--md s-btn--white-brd g-radius--50 g-padding-x-65--xs">Contact Us</a>
                </span> -->
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->
        <!--========== PAGE CONTENT ==========-->
        <!-- Start Team Members
        ============================================= -->
        <div class="g-text-center--xs g-margin-b-80--xs">


        </div>
        <div class="team-members-area default-padding text-center" id="about">
            <h2 class="g-font-size-32--xs g-font-size-36--md g-letter-spacing--1">STUDENTS' GYMKHANA OFFICE BEARERS</h2><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/1.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/1.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>President</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:president.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    


                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/2.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/2.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Vice President</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:vpresident.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/22.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/22.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Treasurer</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:kaushik@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


        </div>
      </div>
        <br></br>
        <!-- End Team Members -->
        <!-- End Portfolio -->




 
        </div>

        <div class="team-members-area default-padding text-center">
            <h2 class="g-font-size-32--xs g-font-size-36--md g-letter-spacing--1">ADVISORY COUNCIL</h2>
            <div class="container">
                <div class="row">
				
				
                  <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/23.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/23.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Social & Cultural</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:ankurgupta@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/24.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/24.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Science & Technology</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:tabrez@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/25.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/25.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Sports and Games</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:venugopal@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					
					
					
                </div>


        </div>
      </div>
        <br></br>
        <!-- End Team Members -->
        <!-- End Portfolio -->

		
		
		
		
		
		
		
		
		  
        </div>
        <div class="team-members-area default-padding text-center">
            <h2 class="g-font-size-32--xs g-font-size-36--md g-letter-spacing--1">GENERAL SECRETARIES</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/5.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/5.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Sports and Games</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:gsecsports.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/3.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/3.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Science and Technology</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:gsecsnt.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/4.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/4.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Socio-Cultural</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:gseccul.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


        </div>
      </div>
        <br></br>
        <!-- End Team Members -->
        <!-- End Portfolio -->		
        <br></br>
        <div class="g-bg-color--sky-light">
                <!--========== PAGE CONTENT ==========-->
                <!-- Start Team Members
                ============================================= -->
                  <br></br>
                <div class="g-text-center--xs g-margin-b-80--xs">


                    <h2 class="g-font-size-32--xs g-font-size-36--md g-letter-spacing--1">EXECUTIVE COUNCIL</h2>
                </div>





        <div class="team-members-area default-padding text-center">
            <div class="container">
                <div class="row">
				
				
				
				
				
				
				
                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/26.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/26.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>UG Representative</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:kgp10@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/27.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/27.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>UG Representative</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:mn20@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/28.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/28.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>UG Representative</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:ss66@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
        <br></br>
        <div class="row">
          <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/29.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/29.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>PG Representative</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:ap44@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

        <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/30.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/30.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>PhD Representative</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:rg20@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
        <div class="col-md-4 item">
       
        </div>










            </div>
        </div>
      </div>
    </div>
        <br></br>






	 <br></br>
        <!-- End Team Members -->
        <!-- End Portfolio -->		
        <br></br>
        <div class="g-bg-color--sky-light">
                <!--========== PAGE CONTENT ==========-->
                <!-- Start Team Members
                ============================================= -->
                  <br></br>
                <div class="g-text-center--xs g-margin-b-80--xs">


                    <h2 class="g-font-size-32--xs g-font-size-36--md g-letter-spacing--1">OTHER SECRETARIES</h2>
                </div>





        <div class="team-members-area default-padding text-center">
            <div class="container">
                <div class="row">
				
				
				
				
				
				
				
                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/9.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/9.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Technical Secretary</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:secysnt.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/6.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/6.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Web & Design Secretary</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:secyweb.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/7.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/7.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Robotics Secretary</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:secyrobotics.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
                <br><br><br>

      
	  
	  
	  
	  
	  
	   <div class="row">
				
				
				
				
				
				
				
                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/10.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/10.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Clix Secretary</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:clix.photosoc@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/8.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/8.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Programming Secretary</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:secyprogsoc.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/13.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/13.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Souls for Solace Secretary</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:secysfs.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
                <br><br><br>
				 <div class="row">
				
				
				
				
				
				
				
                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/11.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/11.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Literary Secretary</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:secylitsoc.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/15.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/15.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Cinematics Secretary</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:secycinesoc.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/21.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/21.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Music & Dance Secretary</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:secymnd.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
				
				<br><br><br>
				
				
				
				
				
				
				
				
				 <div class="row">
				
				
				
				
				
				
				
                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/12.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/12.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Fine Arts Secretary</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:secyfinearts.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/14.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/14.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Dramatic Secretary</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:secydrams.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/18.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/18.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Football Secretary</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:secyfootball.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
				
				
				</div>
				
				
				
				
				
				
				
				<br><br><br>
				
				
				
				
				
				
				
				
				
				 <div class="row">
				
				
				
				
				
				
				
                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/17.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/17.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Athletics Secretary</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:secyathletics.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/20.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/20.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Indoor Games Secretary</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:secyindoor.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/19.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/19.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Small Area Sports Secretary</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:secysasports.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
				
				
				
				
				
				
				<br><br><br>
				
				
				
				
				
				
				
				
				
				
				
				 <div class="row">
				
				
				
				
				
				
				
                    <div class="col-md-4 item">
                       
                    </div>
                    <div class="col-md-4 item">
                        <div class="team-member">
                            <div class="team-thumb">
                                <img src="team/16.jpg" alt="Thumb" />
                                <div class="team-info">
                                    <?php
                                    $newdir = "team/details/16.txt";
                                    $myfile=fopen($newdir, 'r'); $achievement=fread($myfile,filesize($newdir));
                                    $matter = explode('/', $achievement);
                                    ?>
                                    <h4><?php echo $matter[0];?></h4>
                                    <span>Cricket Secretary</span>
                                </div>
                            </div>
                            <div class="team-overlay">
                                <div class="bio">
                                    
                                    <h4><?php echo $matter[0];?></h4>
                                    <p>
                                      <?php echo $matter[2];?>
                                    </p>
                                    <p>
                                    Email Id:   <a href="mailto:secycricket.sg@iitbbs.ac.in"><?php echo $matter[1];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        
                    </div>
                </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
        </div>
      </div>
    </div>
        <br></br>	
		
		
		
		
		
		
		
		
		
		
		
		
		
		




        <script src="js/jquery.min.js" type="text/javascript" ></script>
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
