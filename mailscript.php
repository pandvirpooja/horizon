<?php 
 $send = mail("sahir.k@digitaltokri.com","PHP mail functionality check","PLEASE DO IGNORE THIS MAIL,this is a test mail to check the mailscript functionality","From:support@digitaltokri.com");
 if($send){
echo "PHP-mail script executed successfully from server ";
}else
 {
echo "sorry,message was not sent";
};
?>