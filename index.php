<?php include('header.php'); ?>

<div class="row">
   <div class="large-4 large-centered columns"><img src="img/logo.jpg"></div>

   <div class="large-4 large-centered columns">
   		<?php

			/**
			 * A simple PHP Login Script / ADVANCED VERSION
			 * For more versions (one-file, minimal, framework-like) visit http://www.php-login.net
			 *
			 * @author Panique
			 * @link http://www.php-login.net
			 * @link https://github.com/panique/php-login-advanced/
			 * @license http://opensource.org/licenses/MIT MIT License
			 */

			// check for minimum PHP version
			if (version_compare(PHP_VERSION, '5.3.7', '<')) {
			    exit('Sorry, this script does not run on a PHP version smaller than 5.3.7 !');
			} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
			    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
			    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
			    require_once('login/libraries/password_compatibility_library.php');
			}
			// include the config
			require_once('config/config.php');

			// include the to-be-used language, english by default. feel free to translate your project and include something else
			require_once('translations/en.php');

			// include the PHPMailer library
			require_once('libraries/PHPMailer.php');

			// load the login class
			require_once('classes/Login.php');
						// load the registration class
			require_once('classes/Registration.php');

			// create the registration object. when this object is created, it will do all registration stuff automatically
			// so this single line handles the entire registration process.
			$registration = new Registration();

			// showing the register view (with the registration form, and messages/errors)

			// create a login object. when this object is created, it will do all login/logout stuff automatically
			// so this single line handles the entire login process.
			$login = new Login();
			// show potential errors / feedback (from login object)
			if (isset($login)) {
			    if ($login->messages) {
			        foreach ($login->messages as $message) {
			             echo '<div data-alert class="alert-box success radius">'.
			            $message
			              .'<a href="#" class="close">&times;</a>
			            </div>';
			            
			        }
			    }
			}
			
			// show potential errors / feedback (from registration object)
			if (isset($registration)) {
			    if ($registration->messages) {
			        foreach ($registration->messages as $message) {
			            echo '<div data-alert class="alert-box success radius">'.
			            $message
			              .'<a href="#" class="close">&times;</a>
			            </div>';
			        }
			    }
			}

   			if ($login->isUserLoggedIn() == true) {

			    // the user is logged in. you can do whatever you want here.
			    // for demonstration purposes, we simply show the "you are logged in" view.
			    include("views/logged_in.php");

			} else {
			    // the user is not logged in. you can do whatever you want here.
			    // for demonstration purposes, we simply show the "you are not logged in" view.
			    echo '<center><ul class="button-group round">
					  <li><a href="#login" data-reveal-id="login" class="button small ">Login</a></li>
					  <li><a href="#register" data-reveal-id="register" class="button small info">Registration</a></li>
					</ul></center>';
			}
   		?>
   		
   	
   </div>

   <div id='loading'>loading...</div>

	<div id='calendar'></div>
</div>
<div id="login" class="reveal-modal tiny" data-reveal>
	<h2>Login</h2>
	<?php include('views/not_logged_in.php'); ?>

<a class="close-reveal-modal">&#215;</a>
</div>
<div id="register" class="reveal-modal tiny" data-reveal>
  <h2>Register</h2>
	<?php include('views/register.php'); ?>
  <a class="close-reveal-modal">&#215;</a>
</div>
 <script>
 	 var x = location.hash;
 	 $(x).foundation('reveal','open');
    $(document).foundation();
  </script>
</body>
</html>