<?php
var_dump($_POST);

$name = strip_tags(htmlspecialchars($_POST['name']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$doornumber = strip_tags(htmlspecialchars($_POST['doornumber']));
$addline1 = strip_tags(htmlspecialchars($_POST['addline1']));
$addline2 = strip_tags(htmlspecialchars($_POST['addline2']));
$city = strip_tags(htmlspecialchars($_POST['city']));
$postcode = strip_tags(htmlspecialchars($_POST['postcode']));
$provider = strip_tags(htmlspecialchars($_POST['provider']));
$product = strip_tags(htmlspecialchars($_POST['product']));
$appliance_1 = strip_tags(htmlspecialchars($_POST['appliance_1']));
$appliance_2 = strip_tags(htmlspecialchars($_POST['appliance_2']));
$appliance_3 = strip_tags(htmlspecialchars($_POST['appliance_3']));
$appliance_4 = strip_tags(htmlspecialchars($_POST['appliance_4']));
$appliance_5 = strip_tags(htmlspecialchars($_POST['appliance_5']));
$appliance_6 = strip_tags(htmlspecialchars($_POST['appliance_6']));
$summary = strip_tags(htmlspecialchars($_POST['summary']));

// Create the email and send the message
$to = 'juanlugohost@gmail.com,sheel.shah@utilityswitchboard.com,muhammad.anwar@utilityswitchboard.com,juan-carlos.lugo@utilityswitchboard.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email\n\nDoornumber: $doornumber\n\nAddress Line 1: $addline1\n\nAddress Line 2: $addline2\n\nCity: $city\n\nPostCode: $postcode\n\nProvider: $provider\n\nProduct: $product\n\nSummary: $summary\n\nAppliance 1: $appliance_1\n\nAppliance 2: $appliance_2\n\nAppliance 3: $appliance_3\n\nAppliance 4: $appliance_4\n\nAppliance 5: $appliance_5\n\nAppliance 6: $appliance_6" ;
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true; 