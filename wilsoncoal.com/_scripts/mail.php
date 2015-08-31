<?php 

//Normal Input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$reason = "";
$message = $_POST['message'];

//If interested in a purchase there will be data for these fields:
$product = $_POST['interested-product'];
$area = $_POST['area'];
$current = $_POST['current-heat'];
$fireplace = "";
	if($_POST['fireplace'] == 'on') {
		$fireplace = "They have a fireplace.";
	} elseif ($_POST['fireplace'] == 'off') {
		$fireplace = "They do not have a fireplace.";
	} else {
		$fireplace = "They did not specify if they had a fireplace.";
	}

if($_POST['contact-reason'] == "purchase"){
	$reason = "They are interested in purchasing a stove, furnace, or boiler.
	
		They are interested in the $product line.
		The approximate area they wish to heat is $area sq. ft.
		They currently heat their area with $current.
		$fireplace
	";
} elseif ($_POST['contact-reason'] == "question") {
	$reason =  "They have a question about their product.";
} elseif ($_POST['contact-reason'] == "buy-coal") {
	$reason =  "They would like to buy coal.";
}else {
	$reason = "They did not specify a reason for contact.";
}

$content = "Message has been created by $name

Email = $email

Phone = $phone

Reason for contact = $reason

Message sent:

$message";

$recipient = "Judy@wilsoncoal.com";

$mailheader = "From: $email \r\n";
mail($recipient, "Wilson Coal Contact - {$reason}", $content, $mailheader) or die("Error!");

echo "Your message has been submitted!";
?>
 