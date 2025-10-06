<?php

//print_r($_POST);

if ( isset($_POST['submit']) && isset($_POST['emailadd']) && isset($_POST['reqsrc']) ) 
{
    //echo 'mail';

    $messagerror = "";
    $fullname = @trim(stripslashes($_POST['fullname']));
    $emailadd = @trim(stripslashes($_POST['emailadd']));
    $phoneno = @trim(stripslashes($_POST['phoneno']));
    $subject = @trim(stripslashes($_POST['subject']));
    $message = @trim(stripslashes($_POST['message']));
    $reqsrc = @trim(stripslashes($_POST['reqsrc']));

    $contact_topic = @trim(stripslashes($_POST['contact_topic']));
    $message .= ' Topic: ' . $contact_topic;

    $otp = @trim(stripslashes($_POST['otp']));

    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $httpReferer = $_SERVER['HTTP_REFERER'];

    if($POST['schedulecall']=='TRUE') { $date = @trim(stripslashes($_POST['date'])); }
    $email_from = $emailadd;

    $subject = "An Enquiry from gdprconsultants.in";
    $body = "We have received an enquiry from gdprconsultants.in \n User Name : $fullname \n User Email : $emailadd \n User Phone : $phoneno \n Subject : $subject \n Comment Or Message : \n $message \n ";

    require_once "Mail.php";

    $host = "smtp-mail.outlook.com";
    $port = "587";
    $username = 'webconnect@gdprconsultants.in';
    $password = 'dpdP@142';

    $from = "webconnect@gdprconsultants.in";

    // $to = 'sandy3073@gmail.com, info@gdprconsultants.in';
    $to = 'connect@gdprconsultants.in';
    // $to = 'jaspal.singh@dpdpconsultants.com, jaspal.dpdp@gmail.com';

    if(str_contains($emailadd,"yopmail") || str_contains($emailadd,"dpdpconsultants")) {
        $to = 'jaspal.dpdp@gmail.com';
    }

    if($act !== 'contact') { $to = 'jaspal.dpdp@gmail.com'; }


    $subject = "An Enquiry from gdprconsultants.in";
    $body = "We have received an enquiry from gdprconsultants.in \n User Name : $fullname \n User Email : $emailadd \n User Phone : $phoneno \n Subject : $subject \n Comment Or Message : \n $message \n ";
    if($POST['schedulecall']=='TRUE') { $body .= " \n Schedule Date: $date \n "; }
    $body .= " \n IP Address: $ipAddress \n $userAgent \n $reqsrc - $httpReferer \n ";

    $headers = array ('From' => $from, 'To' => $to,'Subject' => $subject);
    $smtp = Mail::factory('smtp',
        array ('host' => $host,
        'port' => $port,
        'auth' => true,
        'username' => $username,
        'password' => $password));

    $mail = $smtp->send($to, $headers, $body);



    if (PEAR::isError($mail)) {

        // echo($mail->getMessage());

        $messagerror ="<span style='max-width:100%;    color: #a94442;
                    background-color: #f2dede;
                    border-color: #ebccd1;padding:10px 8px;text-align:center;margin:5px 0px; display:block;'>Ooops! Something goes wrong, Please try again.</span>";

    } else {

        echo("Message successfully sent!\n");
        // echo"<script>document.location.href=\"thanks.php?act=\";</script>";
    }


}

?>
