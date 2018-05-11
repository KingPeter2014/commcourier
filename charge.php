<?php
  require_once('config.php');
  //foreach (glob("stripephp670/lib/*.php") as $filename)
  //{
    //include $filename;
  //}
 // require_once('stripephp670/lib/StripeObject.php');
  //require_once('stripephp670/lib/ApiResource.php');
  require_once('stripephp670/lib/Customer.php');
 
  
 function __autoload($class_name) 
    {
        //class directories
        $directorys = array(
            'stripephp670/lib/',
            'stripephp670/lib/ApiOperations/'
        );
        echo 'Class name
        ;'.$class_name.'<br>';
        $ex = explode('\\', $class_name);
        $cname= $ex[1];
        echo $cname.'<br>';
        
        //for each directory
        foreach($directorys as $directory)
        {
            //see if the file exsists
            if(file_exists($directory.$class_name . '.php'))
            {
                require_once($directory. $class_name . '.php');
                echo $directory.$class_name . '.php'.' Loaded<br>';
                //only require the class once, so quit after to save effort (if you got more, then name them something else 
                return;
            }
            else {
              echo $directory.$class_name . '.php'.' does not exist<br>';
            }            
        }
    }


  $token  = $_POST['stripeToken'];
  $email  = $_POST['stripeEmail'];
  $amount  = $_POST['amount'];

  $customer = \Stripe\Customer::create(array(
  //$customer = Customer::create(array(
      'email' => $email,
      'source'  => $token,
      'amount'  => $amount
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => $amount,
      'currency' => 'usd'
  ));

  echo '<h1>Successfully charged $50.00!</h1>';
?>