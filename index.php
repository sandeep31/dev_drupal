<?php
phpinfo();

?>




//------------------------------- Recaptcha Validate ----------------------------------------------//

	$rcaptchaKey =  variable_get('recaptcha_site_key');
	$rcaptchaSecret =   variable_get('recaptcha_secret_key');
	$recaptcha = new \ReCaptcha\ReCaptcha($rcaptchaSecret);
	$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
	if (!$resp->isSuccess()):
		
	endif;

//----------------------------------- Recaptcha Validate ------------------------------------------//

