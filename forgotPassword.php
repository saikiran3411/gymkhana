<?php
if (isset($_POST['send'])) {
	if (!empty($_POST['emailId'])) {
        include('dashboard/db.php');
		$emailId = mysqli_escape_string($conn,$_POST['emailId']);
		$search = "SELECT * FROM login WHERE emailId = '$emailId'";
		  $match = mysqli_query($conn, $search);
    $rows = mysqli_num_rows($match);
    if ($rows == 1) {
    	if ($row = mysqli_fetch_assoc($match)) {
    		$to = $emailId;
			$subject = "Password reset";
			$body = "Hi,\n\nGot to this link: www.strangerpro.com/SG/reset.php\n\n Use this password :".$row['password']." for resetting the password.";
			$headers = "From: noreply@iitbbs.ac.in" . "\r\n" ;
			if (mail($to, $subject, $body, $headers)) {
			?><script type="text/javascript">alert('Reset Instrusctions are sent to your mail Id');window.location.href= 'login.php';</script><?php
			} else {
			echo("<p>Email delivery failed…</p>");
			}
    	}

    }elseif ($rows==0) {
    	?><script type="text/javascript">alert('You Donot have access');window.location.href='login.php'</script><?php
    }else{
    	?><script type="text/javascript">alert('Your account has been hacked contact higher authorities');window.location.href='login.php';</script><?php
    }
	}else{
		?><script type="text/javascript">alert('Please Enter Email Id')</script><?php
	}
}else{
	
}
?>
<?php include("header1.php") ?>


        <div class="s-promo-block-v1 g-bg-color--primary-to-blueviolet-ltr g-fullheight--md" >
            <div class="container g-ver-center--md g-padding-y-100--xs">
                <div class="row g-hor-centered-row--md g-margin-t-30--xs g-margin-t-20--sm">
                    <div class="col-lg-6 col-sm-6 g-hor-centered-row__col g-text-center--xs g-text-left--md g-margin-b-60--xs g-margin-b-0--md">
                        <div class="s-promo-block-v1__square-effect g-margin-b-60--xs">
                            <h1 class="g-font-size-32--xs g-font-size-45--sm g-font-size-50--lg g-color--white">USER PORTAL</h1>
                            <p class="g-font-size-20--xs g-font-size-26--md g-color--white g-margin-b-0--xs">Feel the real experience of new<br> User Interface</p>
                        </div>

                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4 col-sm-4 g-hor-centered-row__col">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <form class="center-block g-width-300--xs g-bg-color--white-opacity-lightest g-box-shadow__blueviolet-v1 g-padding-x-30--xs g-padding-y-60--xs g-radius--4" action="forgotPassword.php" method="POST">
                                <div class="g-text-center--xs g-margin-b-40--xs">
                                    <h2 class="g-font-size-30--xs g-color--white">Forgot Password</h2>
                                </div>
                                <div class="g-margin-b-30--xs">
                                    <input type="email" name="emailId" class="form-control s-form-v3__input" placeholder="* Email">
                                </div>
                                <div class="g-text-center--xs">
                                    <button type="submit" name = "send" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">Send Mail</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script src="js/jquery.min.js" type="text/javascript" ></script>
<?php include('footer.php');?>
