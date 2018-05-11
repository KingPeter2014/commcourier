<?php
//require_once('vendor/autoload.php');
require_once('stripephp670/lib/Stripe.php');


$stripe = array(
  "secret_key"      => "sk_test_wtQemjpV7UEtKyUrZCsowarU",
  "publishable_key" => "pk_test_7yDgRpjDrR7WWFmDgHIXn6y1"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
//Stripe\Stripe::setApiKey($stripe['secret_key']);
?>