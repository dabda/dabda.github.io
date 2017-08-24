<?php
if(isset($_POST['email'])) {
	
	// CHANGE THE TWO LINES BELOW
	$email_to = "damjan.vidonja@gmail.com";
	$email_subject = "WCFB festival 2017";
	
	
	function died($error) {
		// your error code can go here
		?>

		<!-- place your own fail html below -->
		<body>

		<div class="fail">
		  	<span class="medium_rotalic title_text">
		    SORRY...<br>
			</span>
		    <br>
		    <span class="regular_rotalic normal_text">
		    <?php
				echo "We're sorry, but there's errors found with the form you submitted.<br /><br />";
				echo $error."<br /><br />";
				echo "Please go back and fix these errors.<br /><br />";
		    ?>
		    </span>
		</div>

		<style>
			@font-face {
			  font-family: "regular_rotalic";
			  src: url(../fonts/GT-Haptik-Regular-Rotalic.woff) format('woff');
			}

			@font-face {
			  font-family: "light_rotalic";
			  src: url(../fonts/GT-Haptik-Light-Rotalic.woff) format('woff');
			}

			@font-face {
			  font-family: "medium_rotalic";
			  src: url(../fonts/GT-Haptik-Medium-Rotalic.woff) format('woff');
			}
			.regular_rotalic{
			  font-family: regular_rotalic;
			}
			.light_rotalic{
			  font-family: light_rotalic;
			}
			.medium_rotalic{
			  font-family: medium_rotalic;
			}
			.title_text{
			  font-size: 1.45vw;
			}
			.normal_text{
			  font-size: 1.3vw;
			}
			body{
			  background-color:#ED1B55;
			}
			.fail{
			color: white;
			margin-top: 15%;
			margin-left: 40%;
			width:25%;
			/*border: solid white;*/
			-ms-transform: rotate(355deg); /* IE 9 */
			-webkit-transform: rotate(355deg); /* Chrome, Safari, Opera */
			transform: rotate(355deg);
			}
		</style>

		<?php
		die();
	}
	
	// validation expected data exists
	if(!isset($_POST['first_name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['comments'])) {
		died('We are sorry, but there appears to be a problem with the form you submitted.');		
	}
	
	$first_name = $_POST['first_name']; // required
	$email_from = $_POST['email']; // required
	$comments = $_POST['comments']; // required
	
	$error_message = "";
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	if(!preg_match($email_exp,$email_from)) {
		$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
	}
	$string_exp = "/^[A-Za-z .'-]+$/";
	if(!preg_match($string_exp,$first_name)) {
		$error_message .= 'The First Name you entered does not appear to be valid.<br />';
	}
	if(strlen($comments) < 2) {
		$error_message .= 'The Comments you entered do not appear to be valid.<br />';
	}
	if(strlen($error_message) > 0) {
		died($error_message);
	}
	$email_message = "Form details below.\n\n";
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}
	
	$email_message .= "First Name: ".clean_string($first_name)."\n";
	$email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Comments: ".clean_string($comments)."\n";
	
	
	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);  
?>

<!-- place your own success html below -->
<body>

<div class="success">
  	<span class="medium_rotalic title_text">
    SUCCESS<br>
	</span>
    <br>
    <span class="regular_rotalic normal_text">
    Thank you for contacting us. We will be<br>
    in touch with you very soon.<br>
    </span>
</div>

<style>
	@font-face {
	  font-family: "regular_rotalic";
	  src: url(../fonts/GT-Haptik-Regular-Rotalic.woff) format('woff');
	}

	@font-face {
	  font-family: "light_rotalic";
	  src: url(../fonts/GT-Haptik-Light-Rotalic.woff) format('woff');
	}

	@font-face {
	  font-family: "medium_rotalic";
	  src: url(../fonts/GT-Haptik-Medium-Rotalic.woff) format('woff');
	}
	.regular_rotalic{
	  font-family: regular_rotalic;
	}
	.light_rotalic{
	  font-family: light_rotalic;
	}
	.medium_rotalic{
	  font-family: medium_rotalic;
	}
	.title_text{
	  font-size: 1.45vw;
	}
	.normal_text{
	  font-size: 1.3vw;
	}
	body{
	  background-color:#00B3F0;
	}
	.success{
	color: white;
	margin-top: 15%;
	margin-left: 40%;
	width:25%;
	/*border: solid white;*/
	-ms-transform: rotate(355deg); /* IE 9 */
	-webkit-transform: rotate(355deg); /* Chrome, Safari, Opera */
	transform: rotate(355deg);
	}
</style>

</body>


<?php
}
die();
?>