<?php

$name = $_POST['user_name'];
$firstname = $_POST['user_firstname'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$message = $_POST['user_message'];


if(isset($_POST['user_cars'])) {
    $cars = $_POST['user_cars'];
}

echo 'Merci ' .$name . $firstname. ' de nous avoir contacté à propos de '. $cars ;
echo ' ';
echo 'Un de nos conseiller vous contactera soit à l’adresse  ' . $email . ' ou par téléphone au '. $phone. ' dans les plus brefs délais pour traiter votre demande :';
echo ' ';
echo $message;