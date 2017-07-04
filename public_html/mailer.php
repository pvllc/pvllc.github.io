<?php session_start();
if(isset($_POST['Submit'])) {  
$youremail = 'peter@petervelez.com';
$fromsubject = 'Website Contact Form';
$title = $_POST['title'];
$fname = $_POST['fname'];
$mail = $_POST['mail'];
$country = $_POST['country']; 
$phone = $_POST['phone']; 
$mpriority = $_POST['mpriority']; 
$subject = $_POST['subject']; 
$message = $_POST['message']; 
	$to = $youremail; 
	$to2 = 'michael@petervelez.com';
	$mailsubject = 'Message recived from'.$fromsubject.' Contact Page';
	$body = $fromsubject.'
	
	The person that contacted you is  '.$fname.'
	 Country: '.$country.'
	 Phone Number: '.$phone.'
	 E-mail: '.$mail.'
	 Priority: '.$mpriority.'
	 Subject: '.$subject.'
	
	 Message: 
	 '.$message.'
	
	|---------END MESSAGE----------|'; 
echo "Thank you fo your feedback. I will contact you shortly if needed.<br/>Go to <a href='/index.html'>Home Page</a>"; 
								mail($to, $subject, $body);
								mail($to2, $subject, $body);
		unset($_SESSION['chapcha_code']);

 } else { 
echo "You must write a message. </br> Please go to <a href='/contact.html'>Contact Page</a>"; 
}
?> 