<?
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message']
$to = "navinkumarcse6@gmail.com";
$subject ="Mail from portfolio" ;
$txt = "Name = ". $name ."\r\nEmail = " . $email . "\r\nSubject = " . $subject "\r\nMessage = ". $message ;

$headers ="From:naveenraj692000@gmail.com" . "\r\n" .

if($email!= NULL ){
	mail($to,$subject,$txt,$headers) ;
}


//  redirect

header("Location:thankyou.html");

?>