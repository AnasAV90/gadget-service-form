<?php
    require 'mailer/PHPMailerAutoload.php';
    function sendMail($subject,$body){
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host='mail.fixsquad.xyz';
        $mail->Port=465;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='ssl';
        $mail->Username='webmailer@fixsquad.xyz';
        $mail->Password='#Nd#6tI!3zS2O9[';
        $mail->setFrom('webmailer@fixsquad.xyz',' Fix Squad');
        $mail->addAddress('support@fixsquad.ae');
        $mail->addAddress('arunchill92@gmail.com');
        $mail->addAddress('nayanamarkspot@gmail.com');
        $mail->isHTML(true);
        $mail->Subject= $subject;
        $mail->Body=$body;
        if($mail->send()){
            return true;
        }
        else{
            return false;
        }
    }

?>

