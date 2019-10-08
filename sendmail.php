<?php 
$to_email = $_POST['email'];
$name = $_POST['name'];
$city = $_POST['city'];
$

$subject = 'WELCOME TO ISTANBUL';
$headers = "Form details below\n \nName: $fname\nCity: $city\nEmail: cauldronpumpkin@gmail.com";
$message = "Welcome to the place where Europe and Asia meet and blend in the exotic places and services that the biggest city of Turkey has to offer. Below is a link for the cheapest flights from Delhi to Istanbul.\n \nhttps://www.makemytrip.com/flight/search?itinerary=DEL-IST-06/10/2019&tripType=O&paxType=A-1_C-0_I-0&intl=true&cabinClass=E\n \nHope to see you soon.";
mail($to_email,$subject,$message,$headers);
?>