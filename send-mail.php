<?php

//     $servername="localhost";
// 	$username="digitwk4_24Sunshine";
// 	$password="twml@)L~=v^2";
// 	$database="digitwk4_24sunshine";

// 	$con=mysqli_connect($servername,$username,$password,$database);
	
    $name =   $_POST['pname'];
    $email    =   $_POST['pemail'];
    $mobile=   $_POST['pmobile'];
    // $floor_plan=   $_POST['floor-pl'];
    $utm_source=   $_POST['utm_source'];
    $utm_campaign_name=   $_POST['utm_campaign_name'];
    $utm_campaign_id=   $_POST['utm_campaign_id'];
    $utm_campaign_city=   $_POST['utm_campaign_city'];

//     $query = "INSERT INTO lead_info(name,email,mobile_no,source,capaignname,capaignid,capaigncity) VALUES('$name','$email','$mobile','$utm_source','$utm_campaign_name','$utm_campaign_id','$utm_campaign_city')";
// 	$query_run = mysqli_query($con,$query);

//$to = "supriya.w@digitaltokri.com";
// $to = "sales@24sunshine.in";
$to = "chahatrpamnani@gmail.com, supriya.w@digitaltokri.com";
$subject = "Horizon";
$message = "
<html>
    <head>
        <title>thank-you</title>
    </head>
    <body>
           <table cellspacing='0' style='border:1pt solid rgb(191,191,191); width: 400px; height:300px;'>
           <tr style='background-color:#00d2be;padding: 35px;'>
                <th >Name:</th><td>  ".$name."</td>
            </tr>
            <tr>
                <th>Email Id:</th><td> ".$email."</td>
            </tr>
            <tr>
                <th>Mobile:</th><td> ".$mobile."</td>
            </tr>
             <tr>
                <th>Source:</th><td> ".$utm_source."</td>
            </tr>
            <tr>
                <th>Campaign Name:</th><td> ".$utm_campaign_name."</td>
            </tr>
            <tr>
                <th>Capmaign Id:</th><td> ".$utm_campaign_id."</td>
            </tr>
            <tr>
                <th>Capmaign City:</th><td> ".$utm_campaign_city."</td>
            </tr>
     </table>
    </body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <support@digitaltokri.com>' . "\r\n";
$headers .= 'Bcc: iradigital15@gmail.com' . "\r\n";
if(mail($to,$subject,$message,$headers))
{
    header( "Location: thank-you.php?utm_source=$utm_source&utm_campaign_name=$utm_campaign_name&utm_campaign_id=$utm_campaign_id&utm_campaign_city=$utm_campaign_city");
}



?>

