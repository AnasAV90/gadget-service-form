<?php

require 'email.php';
$html= "";
$subject = 'Enquiry From Fix Squad ';
foreach($_POST as $field => $value){
    $html .= "<p><b>$field </b> = ".htmlentities($value)."</p>";
    
}
$mail_status = sendMail($subject,$html);
echo $mail_status;
?>
