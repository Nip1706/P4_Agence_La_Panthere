<?php	
	if(empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['input_504']) && strlen($_POST['input_504']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	$name = $_POST['name'];
	$email = $_POST['email'];
	$input_504 = $_POST['input_504'];
	$message = $_POST['message'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from your website";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail: $email \nInput_504: $input_504 \nMessage: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $input_504";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;
	< SiModule  mod_expires.c >
  ExpireActif le

 # Images 
  ExpiresByType image/jpeg  "accès plus 1 an" 
  ExpiresByType image/gif  "accès plus 1 an" 
  ExpiresByType image/png  "accès plus 1 an" 
  ExpiresByType image/webp  "accès plus 1 an" 
  ExpiresByType image/svg+xml  "accès plus 1 an" 
  ExpiresByType image/x-icon  "accès plus 1 an"

  # Vidéo 
  ExpiresByType video/webm  "accès plus 1 an" 
  ExpiresByType video/mp4  "accès plus 1 an" 
  ExpiresByType video/mpeg  "accès plus 1 an"

  # Polices 
  ExpiresByType font/ttf  "access plus 1 an" 
  ExpiresByType font/otf  "access plus 1 an" 
  ExpiresByType font/woff  "access plus 1 an" 
  ExpiresByType font/woff2  "access plus 1 an" 
  ExpiresByType application/font-woff  "access plus 1 an"

  # CSS, JavaScript 
  ExpiresByType text/css  "accès plus 1 an" 
  ExpiresByType text/javascript  "accès plus 1 an" 
  ExpiresByType application/javascript  "accès plus 1 an"

  # Autres 
  ExpiresByType application/pdf  "access plus 1 an" 
  ExpiresByType image/vnd.microsoft.icon  "access plus 1 an" 
</ IfModule >			
?>