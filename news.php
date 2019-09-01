<?php include 'header1.php';?>
<script type="text/javascript">
            function openTab(th)
            {
                window.open(th.name,'_blank');
            }
        </script>
<div id="about" class="g-promo-section">
	<div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="row">

                <div class="col-md-8 col-md-offset-0.5">
                    <p class="g-font-size-18 xsg-radius--left-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h2 class="g-font-size-20--xs g-font-size-30--sm g-font-size-40--md">News and Updates</h2>
                      <?php
                    include "dashboard/db.php";
                    $search = "SELECT * FROM news ORDER BY id DESC";
                    $match = mysqli_query($conn,$search);
                    $count = mysqli_num_rows($match);
                      for ($i=0; $i <$count; $i++) {
                      $data = mysqli_fetch_assoc($match); 
                      echo '<a onClick="openTab(this)" href="#" name="news/'.$data['id'].'_acc.pdf">'.$data["Name"].'</a>';
                    }
                    mysqli_close($conn);
                    ?> 
                        </div>
                    </p>
                </div>
            </div>
        </div>
</div>
<?php include 'footer.php'?>