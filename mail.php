<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DS Machine Stoves - Wilson Coal &amp; Supply</title>
<link href="_css/company_page_style.css" rel="stylesheet" type="text/css" />
<link rel="Shortcut icon" href="_images/favicon/favicon.ico" />

<!-- Designed and Coded by Zack Wilson-->
<!-- SEO Optomization Words -->
<META name="KEYWORD" content="Where to buy stoves, purchase coal stoves, purchase wood stoves, New Jersey Stoves, Sussex stoves,Heating with coal Sussex County NJ, Black Anthracite coal Morris County NJ, Clean coal is clean Warren County NJ, Coal for Stoves Morristown NJ, Black anthracite Passaic County NJ, Coal for sale Milford PA, Fuel coal Newton NJ, Coal Delivery Sparta NJ, Coal Suppliers Edison NJ, Coal where to buy West Milford NJ, Black anthracite coal, stove, buck, nut, rice, "pea coal for sale Sussex, NJ area", Wilson Coal, Coal NJ, danny coal, Hitzer Coal Stoves, Hitzer Stoves, Keystoker Boilers, Keystoker Coal Stoves, Boilers, Keystoker Furnaces, Reading Coal Stoves, Reading Coal, Wilson Coal Stoves, Coal Heats Best, Anthracite coal, Anthracite Coal bagged NJ, Anthracite Coal NJ, Bagged Coal NJ, buy coal bergen county nj, buy coal morris county nj, buy coal passaic county nj, buy coal somerset county nj, buy coal sussex county nj, buy coal nj, clean coal, coal deliveries, coal deliverys, coal delivery sparta nj, coal for sale milford pa, coal for sale nj, coal stove, coal boiler, coal stoker, coal furnace, hand fired stove, stoker stove, coal hopper, coal-trol, coaltrol thermostat, coal-trol thermostat, reading stoker, reading handfed, reading handfired, hitzer hopper, hitzer fireplace insert, hitzer coal stove, hitzer coal furnace, hitzer coal insert, hitzer coal stoker, keystoker stove, keystoker stoker, keystoker coal stove, keystoker coal stoker, keystoker furnace, keystoker coal furnace, keystoker shaker grate, keystoker boiler, keystoker furnace, keystoker triburner, keystoker hopper, coal stove no electric, coal stove non electric, coal stove zero electricity, coal stove blower, coal stove flue, coal stove fire, starting a coal stove, coal sizes, rice coal, buck coal, pea coal, nut coal, peanut coal, chestnut coal, stove coal, coal bags, coal pallet, coal bulk, coal truck, coal hilift, coal hi-lift truck, coal conveyor, coal chute, coal handfire, coal handfired, hand fired stove, coal stoker, coal radiant stove, handfed stove, direct vent, direct vented, coaltrol thermostat, coal-trol thermostat, rheostat, thermostatically controlled, automatic stoker, automatic feed, automatic coal feed, automatic coal feeder, shaker grates, coal shaker grates, fireplace insert, coal fireplace insert, coal insert, hand fire insert, hand fired insert, coal furnace, coal boiler, coal steamer, koker, coal hopper, coal scuttle, coal bin, coal hood" />


</head>

<body>
<div id="banner"><a href="Templates/index.html"><img src="_images/banner/banner.jpg" /></a></div>
    <div class="nav cf">
    	<ul>
        	<li><a href="coal.html">Coal</a></li>
            <li><a href="location.html">Location</a></li>
            <li><a href="delivery.html">Delivery</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="stoves.html">Stoves</a></li>
            <li><a href="coal_safety.html">Coal Safety</a></li>
            <li><a href="faqs.html">FAQ's</a></li>
        </ul>
    </div>
<div id="main_content" style="text-align:center;">
        <?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];
	$formcontent = "From: $name \n Comments: $comments";
	$recipient = "crum.nathan@gmail.com";
	$name = $_POST['name'];
	$subject = "Wilson Coal - Contact Form";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	echo "<br/><br/><br/><h1>Thank You!</h1><br/><br/><br/>";
?>

</div>
<div id="footer">
<p>(973) 729-5555 or <a href="mailto:info@wilsoncoal.com">info@wilsoncoal.com</a><br /> 201 Houses Corner Road, Sparta, NJ. <br /> Mon-Fri 7:30am-4:30pm </br> Saturdays Aug-March 9am-1pm </br> Saturdays April-July open by Appointment only.</p>
<span class="facebook_logo"><a href="https://www.facebook.com/pages/Wilson-Coal-and-Supply-LLC/287851644660690?fref=ts" target="_new"><img src="_images/social_icons/128/facebook_001.jpg"></a></span>
<span class="google_logo"><a href="https://plus.google.com/109242329888080107256" target="_new"><img src="_images/social_icons/128/Google_Plus_001.jpg" alt="Google +"></a></span>
</div>
</body>
</html>


