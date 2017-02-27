<meta HTTP-EQUIV="REFRESH" content="0; url=index.html"><?php

/*

if(empty($_GET['senderEmail'])){

	echo"no email address found";

	exit;

}

*/

$senderName		= $_GET['senderName'];

$senderEmail	= $_GET['senderEmail'];

$senderMsg		= nl2br($_GET['senderMsg']);

//$userName		= $_POST['userName'];

//$userName		= "WEBSITE";

$userName		= "WEBSITE";

$sitename		= "WEBSITE";

$date 			= date("m/d/Y H:i:s");



$jpg = $GLOBALS["HTTP_RAW_POST_DATA"];





//define the receiver of the email 

//$to = 'blagerman@cardiopuls.com'; 

//$to = 'blagerman@cardiopuls.com'; 

$to = 'blagerman@cardiopuls.com';

//define the subject of the email 

$subject = 'Cardiopuls Website Contact'; 

//create a boundary string. It must be unique 

//so we use the MD5 algorithm to generate a random hash 

$random_hash = md5(date('r', time())); 

//define the headers we want passed. Note that they are separated with \r\n 

$headers = "From: blagerman@cardiopuls.com\r\nReply-To: blagerman@cardiopuls.com\r\n"; 

//add boundary string and mime type specification 

$headers .= "MIME-Version: 1.0\r\n";

$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

//read the atachment file contents into a string,

//encode it with MIME base64,

//and split it into smaller chunks

//$attachment = chunk_split(base64_encode($_FILES('VISAgiftcard.jpg'))); 

//define the body of the message. 

ob_start(); //Turn on output buffering 

?> 



<h4>Hello Bruce, a visitor from Cardiopuls.com has sent you a message!</h4> <br /><br />

<?php 



foreach ($_POST as $key => $value) 

{

echo "$key: ".$value."<br>";

}

?>


<?php 

//copy current buffer contents into $message variable and delete current output buffer 

$message = ob_get_clean(); 

//send the email 

$mail_sent = @mail( $to, $subject, $message, $headers ); 

//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 

$status = $mail_sent ? 1 : 0; 

header("Location: contact.php?sent=".$status); /* Redirect browser */
exit();

?>