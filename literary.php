<?php include("header1.php") ?>
<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; $split = explode('/',$actual_link);
            $currentPage = end($split);$newSplit = explode('.',$currentPage);$society=reset($newSplit);?>
        <!--========== PROMO BLOCK ==========-->
        <div class="s-promo-block-v3 g-bg-position--center g-fullheight--sm" style="background: url('img/1920x1080/literary.jpg');">
            <div class="container g-ver-center--sm g-padding-y-125--xs g-padding-y-0--sm">
                <div class="g-margin-t-30--xs g-margin-t-0--sm g-margin-b-30--xs g-margin-b-70--md">
										<br></br>
                    <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-50--lg g-color--white">Literary Society</h1>
                </div>
            </div>
        </div>

        <!--========== END PROMO BLOCK ==========-->
<br></br>



        <!-- Promo Section -->
        <div class="g-promo-section">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="row">
                    <div class="col-sm-5 col-sm-push-7">
                        <div class="g-margin-b-30--xs">
                            <h3 class="g-font-size-32--xs g-font-size-36--sm">Abhivyakti</h3>
                            <p>

                            The Hindi literary society included events and competitions
that were creative and innovative like never before. “दिल की बात” and “वर्ग पहेली”
are some of the competitions organized during Society Introduction which
attracted many from the first years.
                            </p>
                        </div>
                        <a href="abhivyakti.php" class="text-uppercase s-btn s-btn--sm s-btn--primary-brd g-radius--50 g-padding-x-40--xs">EXPLORE</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 g-promo-section__img-left--md g-bg-position--center g-height-400--xs g-height-100-percent--md js__fullwidth-img">
                <img class="img-responsive" src="img/literary/abhivyakti.jpg" alt="Image">
            </div>
        </div>
            <div class="g-bg-color--sky-light">
        <div class="g-promo-section">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="g-margin-b-30--xs">
                            <h3 class="g-font-size-32--xs g-font-size-36--sm">Panacea</h3>
                            <p>

							The English literary society included events and competitions
that were creative and innovative like never before. The overwhelming
participation of the students carried the momentum forward, thus leaving a mark
among the audience..
							</p>
                        </div>
                        <a href="panacea.php" class="text-uppercase s-btn s-btn--sm s-btn--primary-brd g-radius--50 g-padding-x-40--xs">EXPLORE</a>
                    </div>
                </div>
            </div>



            <div class="col-sm-6 g-promo-section__img-right--md g-bg-position--center g-height-400--xs g-height-100-percent--md js__fullwidth-img">
                <img class="img-responsive" src="img/literary/panacea.jpg" alt="Image">
            </div>
        </div>
      </div>


        <!-- End Promo Section -->






        <div class="g-promo-section">
          <div class="container g-padding-y-80--xs g-padding-y-125--sm">
              <div class="row">
                  <div class="col-sm-5 col-sm-push-7">
                      <div class="g-margin-b-30--xs">
                          <h3 class="g-font-size-32--xs g-font-size-36--sm">Quiz Club</h3>
                      </div>
                      <a href="quiz.php" class="text-uppercase s-btn s-btn--sm s-btn--primary-brd g-radius--50 g-padding-x-40--xs">EXPLORE</a>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-sm-pull-6 g-promo-section__img-right--md g-promo-section__img-left--md g-bg-position--center g-height-400--xs g-height-100-percent--md js__fullwidth-img">
              <img class="img-responsive" src="img/literary/quiz.jpg" alt="Image">
          </div>
        </div>

<script src="js/jquery.min.js" type="text/javascript" ></script>
     <?php include("footer.php") ?>
