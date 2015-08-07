<?php 
include('MVC/model.php');
//let's say each article costs 15.00 bucks

try {
		require_once('Stripe/lib/Stripe.php');
		Stripe::setApiKey("sk_test_FdzifGh0q2QQh56Ol3KnuJCB");
	
		$charge = Stripe_Charge::create(array(
		"amount" => $_REQUEST['template'],
		"currency" => "usd",
		"card" => $_POST['stripeToken'],
		"description" => "Charge for Download Templates.")
	);
	//send the file, this line will be reached if no error was thrown above
	


}

catch(Stripe_CardError $e) {
	
}

//catch the errors in any way you like

 catch (Stripe_InvalidRequestError $e) {
  // Invalid parameters were supplied to Stripe's API

} catch (Stripe_AuthenticationError $e) {
  // Authentication with Stripe's API failed
  // (maybe you changed API keys recently)

} catch (Stripe_ApiConnectionError $e) {
  // Network communication with Stripe failed
} catch (Stripe_Error $e) {

  // Display a very generic error to the user, and maybe send
  // yourself an email
} catch (Exception $e) {

  // Something else happened, completely unrelated to Stripe
}

if ($charge->paid == true) 
{
	//
		$obj=new model();
		$conn=$obj->database();
		
		$email=$_POST['stripeEmail'];
		$amount=$_POST['in_usd'];
		$transfer='paid';
		$conf=$obj->buy($email,$amount,$transfer,$conn);
		$obj->mail_for_client_buy($email);
		if($conf==1)
		{
			//$obj->mail_for_client_enq($name,$email,$message);
			//$obj->send_mail($name,$email,'','','templates_buy_REQUEST',$contact,'');	
			//$data = array('status' => 200, 'message' => 'Our Customer representative contact you shortly');
	       	//echo json_encode($data);
			//header('location:designed-templates.php?paid=1');
		}
		else
		{
			//$data = array('status' => 400, 'message' => 'Your query Not submitted successfully');
	        //echo json_encode($data);
			//header('location:designed-templates.php?paid=0');
		}
}
?>