<?php

if(isset($_POST['form_submit'])) {
    require('constant.php');
    // EDIT THE 2 LINES BELOW AS REQUIRED
   
    $email_to = "info@startdesigns.com";
    $email_subject = "Get-quote";
    $email_subject_responder = "Start Desgins quotes";
    $from = 'no-reply@startdesigns.com';
    //$email_to = "info@startdesigns.com";
    $email_to_reponder = $_POST['email'];
    $error = false;
    $error_message = '';
    $response = [];
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        //!isset($_POST['company']) ||
        //!isset($_POST['website']) ||
        //!isset($_POST['user_budget']) ||
        empty($_POST['inq_service']) ) {
        $error_message .= 'We are sorry, but there appears to be a problem with the form you submitted.<br />';
        $response['status'] = false;
        $response['message'] = $error_message;
        echo json_encode($response); die;
    }

    //reCAPTCHA validation
    if (isset($_POST['g-recaptcha-response'])) {        
        require('component/recaptcha/src/autoload.php'); 
        $recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY);
        $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
        if (!$resp->isSuccess()) {                
            $error_message .= '<b>Captcha</b> Validation Required!.<br />';
            $response['status'] = false;
            $response['message'] = $error_message;
            echo json_encode($response); die;                             
        } 
    }
    if (isset($_POST['g-recaptcha-response-1'])) {        
        require('component/recaptcha/src/autoload.php'); 
        $recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY);
        $resp = $recaptcha->verify($_POST['g-recaptcha-response-1'], $_SERVER['REMOTE_ADDR']);
        if (!$resp->isSuccess()) {                
            $error_message .= '<b>Captcha</b> Validation Required!.<br />';
            $response['status'] = false;
            $response['message'] = $error_message;
            echo json_encode($response); die;                             
        } 
    } 

    
 
    
    $name = $_POST['name']; // required
    $email_from_template = $_POST['email']; // required
    $email_from = $from; // required
    $number = $_POST['phone']; //  required
    $company = $_POST['company']; //   required
    $website = $_POST['website']; //   required
    $user_budget = $_POST['user_budget']; //   required
    $inq_service = $_POST['inq_service']; // required
    $information = $_POST['information'];
    $service = implode(',', $inq_service);
   

    $message = '';

    function clean_text($string)
    {
        $string = trim($string);
        $string = stripslashes($string);
        $string = htmlspecialchars($string);
        return $string;
    }

    $path = 'upload_document/' . $_FILES["inquiry_file"]["name"][0];
    move_uploaded_file($_FILES["inquiry_file"]["tmp_name"][0], $path);
    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }


      if($error) {
        $response['status'] = false;
        $response['message'] = $error_message;
        echo json_encode($response); die;
      }else{

            $data["name"]   = clean_string($name);
            $data["email"]   = clean_string($email_from_template);
            $data["number"]       = clean_string($number);
            $data["company"]   = clean_string($company);
            $data["website"]       = clean_string($website);
            $data["user_budget"]     = clean_string($user_budget);
            $data["inq_service"]      = clean_string($service);
            $data["information"]      = clean_string($information);
            $data["year"]      = date('Y');
            $data["base_url"]      = 'https://www.startdesigns.in/startdesigns2019';

            $template = file_get_contents("respond_get_quote_template.html");
            $responder_template = file_get_contents("get_quote_template.html");

            foreach($data as $key => $value)
            {
                $template = str_replace('{{ '.$key.' }}', $value, $template);
                $responder_template = str_replace('{{ '.$key.' }}', $value, $responder_template);
            }
        }
        //$message .= $template;
    require 'phpmailer/class.phpmailer.php';
    $mail = new PHPMailer;
  
    $mail->From = $from;                  //Sets the From email address for the message
    $mail->FromName = $_POST["name"];               //Sets the From name of the message
    $mail->AddAddress($email_to);     //Adds a "To" address
    //$mail->AddAddress($email_from); 
    $mail->WordWrap = 50;                           //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);                            //Sets message type to HTML
    $mail->AddAttachment($path);                    //Adds an attachment from a path on the filesystem
    $mail->Subject = 'Get-quote';             //Sets the Subject of the message
    $mail->Body = $responder_template;                         //An HTML or plain text message body

    if($mail->Send())                               //Send an Email. Return true on success or false on error
    {
    $responder_email_message .= $responder_template;
    $responder_mail = new PHPMailer;
    $responder_mail->From = $from;                  //Sets the From email address for the message
    $responder_mail->FromName = "Start designs Career";               //Sets the From name of the message
    $responder_mail->AddAddress($email_to_reponder);     //Adds a "To" address
    $responder_mail->AddReplyTo($from);
    $responder_mail->IsHTML(true);                            //Sets message type to HTML
    $responder_mail->Subject = 'Start Desgins quotes';             //Sets the Subject of the message
    $responder_mail->Body = $template; 
        $responder_mail->send();
        $response['status'] = true;
        $response['message'] = 'Thank you.We will contact you soon.';
        echo json_encode($response); die; 
        unlink($path);
    }
    else
    {   
        $message = '<div class="alert alert-danger">There is an Error</div>';
    }
}
 
?>