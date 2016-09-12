<?php

if ($_SERVER[REQUEST_METHOD] == "POST") {
	$name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
	$email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
	$detail = trim(filter_input(INPUT_POST, "details", FILTER_SANITIZE_SPECIAL_CHARS));

	if ($name == "" || $email == "" || $details = "") {
		echo "Please fill in the required feild: Name, Email, or Details";
		exit;
	} else if ($_POST["address"] != "") {
		echo "Incorrect Input";
		exit;
	}

	require("inc/PHPMailer/PHPMailerAutoload.php");

	$mail = new PHPMailer;

	if (!$mail->ValidateAddress($email)) {
		echo "Not an email";
		exit;
	}

	$email_body = "";
	$email_body .= "Name" . $name . "\n";
	$email_body .= "Email" . $email . "\n";
	$email_body .= "Details" . $detail . "\n";


$mail->isMail();                                      // Set mailer to use SMTP
$mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'kcw11kx@gmail.com';                 // SMTP username
$mail->Password = 'bas1nos1';                           // SMTP password
/*$mail->SMTPSecure = 'ssl'; */                           // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;
// TCP port to connect to
$mail->SMTPDebug = 2;                                   

$mail->setFrom($email, $name);
$mail->addAddress('kcw11kx@gmail.com', 'K Weeks');     // Add a recipient
$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->isHTML(false);                                  // Set email format to HTML

$mail->Subject = 'Suggestion from' . $name;
$mail->Body    =  $email_body;


if(!$mail->Send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

header("Location: suggest.php?status=thanks");

}

$pageTitle = "Suggest Form";

include("inc/header.php");
?>

<div class="form">

	<?php if (isset($_GET["status"]) && $_GET["status"] = "thanks") {
		echo "<p class='thanks'>Thank you.</>";
		} else {?>

	<form method="post" action="suggest.php">
		<label for="first_name">First Name: </label>
		<input type="text" name="name" id="name"/>
		<label for="email">Email: </label>
		<input type="text" name="email" id="email"/>
		<label for="address" style="display:none">Address: </label>
		<input type="text" name="address" id="address" style="display:none"/>
		<p style="display:none">Please do not fill out this field.</p>
		<label for="details">Details: </label>
		<textarea name="details" id="details"></textarea>
		<input type="submit" value="Submit" id="submit"/>
	</form>

<?php }?>

</div>



<?php
	include("inc/footer.php");
?>