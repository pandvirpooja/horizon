<?php
require 'vendor/autoload.php';
//$val= var_dump($_POST);
//echo $val;
//exit();

	
if(isset($_POST['utm_source']) && !empty($_POST['utm_source']) &&
isset($_POST['utm_campaign_name']) && !empty($_POST['utm_campaign_name']) &&
isset($_POST['utm_campaign_id']) && !empty($_POST['utm_campaign_id']) &&
isset($_POST['pname']) && isset($_POST['pemail']) && isset($_POST['pmobile']) &&
!empty($_POST['pname']) && !empty($_POST['pmobile'])){

			$mail = new PHPMailer;
			$mail->isSMTP();
		    $mail->Host = 'md-in-29.webhostbox.net';
			/*SSL $mail->Host = 'mail.kohinoortinseltown.in';*/
			$mail->SMTPAuth = true;
			$mail->Username = 'support@iradigital.com';
			$mail->Password = 'Dak~E}P1oNW0';
			$mail->SMTPSecure = 'ssl';
			$mail->Port = 465;
			$mail->setFrom('support@digitaltokri.com', '24 SUNSHINE Towers');
			$mail->addAddress('24sunshinedigital@gmail.com');
			//$mail->addAddress('sales@24sunshine.in');
			// $mail->addAddress('rahul.shinde261089@gmail.com'); 
			//$mail->addAddress('nikita.z@digitaltokri.com');
			//$mail->addAddress('supriya.w@digitaltokri.com');
			$mail->addBCC('iradigital15@gmail.com'); 
		    $mail->addBCC('sahir.k@digitaltokri.com'); 
			$mail->isHTML(true);
			$mail->Subject = '24 SUNSHINE Towers | Landing Page Enquiry';
			$mail->Body    = '<h2>Enquiry Generated by</h2>
    			<p>Name : '.$_POST['pname'].'</p>
    			<p>Email : '.$_POST['pemail'].'</p>
    			<p>Contact No. : '.$_POST['pmobile'].'</p>
    		    <p>Source : '.$_POST['utm_source'].'</p>
    			<p>Sub Source : '.$_POST['utm_campaign_name'].'</p>';
    			
			
			if($mail->send()) {
				echo 200;
			} else {
			    echo $mail->ErrorInfo;
				echo 5001;
			}

}else{
	echo 5004;	
}
?>



