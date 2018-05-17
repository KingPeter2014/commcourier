<?php
  require_once('config.php');
  //foreach (glob("stripephp670/lib/*.php") as $filename)
  //{
    //include $filename;
  //}
  require_once('stripephp670/lib/Stripe.php');
  require_once('stripephp670/lib/StripeObject.php');
  require_once('stripephp670/lib/ApiResource.php');
  require_once('stripephp670/lib/Customer.php');
 
 // function __autoload($className) {
  //  require_once $className . '.php';
  //}
 

  $token  = $_POST['stripeToken'];
  $email  = $_POST['stripeEmail'];
  $amount  = $_POST['amount'];

  //$customer = \Stripe\Customer::create(array(
  $customer = Customer::create(array(
      'email' => $email,
      'source'  => $token,
      'amount'  => $amount
  ));

  //$charge = \Stripe\Charge::create(array(
  $charge = Charge::create(array(  
      'customer' => $customer->id,
      'amount'   => $amount,
      'currency' => 'usd'
  ));

  echo '<h1>Successfully charged $50.00!</h1>';
?>