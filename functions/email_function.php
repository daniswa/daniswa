





<?php
    if(isset($_POST['submit'])){
        $firstName = $_POST['fName'];
        $lastName = $_POST['lName'];
        $email = $_POST['email'];
        $areaCode = $_POST['areaCode'];
        $phonePrefix = $_POST['phonePrefix'];
        $phoneSuffix = $_POST['phoneSuffix'];
        $timeOfDay = $_POST['timeOfDay'];
        $commentMessage = $_POST['comment'];
        $phoneNumber = $areaCode.'-'.$phonePrefix.'-'.$phoneSuffix;
        composeEmail($firstName, $lastName, $email, $phoneNumber, $timeOfDay, $commentMessage);
    }else{
        $confirm = '*Fields must be completed.';
    }
    function composeEmail($fName, $lName, $eMail, $pNumber, $time, $cMessage){
        $message = $fName.' '.$lName.' would like you to contact them.'."\n\n";
        $message .= 'Name: '.$fName.' '.$lName."\n\n";
        $message .= 'Email: '.$eMail."\n\n";
        if($pNumber > 0){
            $message .= 'Phone: '.$pNumber."\n\n";
        }
        $message .= 'Best Time to Reach: '.$time."\n\n";
        if(strlen($cMessage) > 1){
            $message .= 'Comments: '.$cMessage."\n\n";
        }
        sendEmail($message);
    }
    function sendEmail($emailMessage){
        $emailTo = "swa67dani@gmail.com";
        $emailFrom = "my_web_mailer@daniswa.com";
        $emailSubject = "Someone Inquired At Your Website.";
        $headers .= "From: $emailFrom \r\n";
        $headers .= "Reply-To: $emailFrom \r\n";
        $headers .= "Return-Path: $emailFrom\r\n";
        $headers .= "X-Mailer: PHP \r\n";
        if(mail($emailTo, $emailSubject, $emailMessage, $headers)){
            $confirm = 'Thank you. Your Message Has Been Sent.';
        }else{
            $confirm = 'Email failed. Please try again later.';
        }
    }
?>