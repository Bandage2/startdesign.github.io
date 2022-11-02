<?php
require('constant.php');
if(isset($_POST['submit'])) {
  //
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@startdesigns.com";    
    $email_to_reponder = $_POST['email'];
    $email_subject = "Project Enquiry";
    $email_subject_responder = "Project Enquiry";
    $from = 'no-reply@startdesigns.com';
    //echo($from); die();
    $error = false;
    $error_message = '';
    $response = [];
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['subject']) 
        //!isset($_POST['message'])
        ) {
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
 
    
    $first_name = $_POST['name']; // required
    $email_from_template = $_POST['email']; // required
    $email_from = $from; // required
    $number = $_POST['phone']; //  required
    $subject = $_POST['subject']; //   required
    $bname = $_POST['bname']; //   required
    $pbudget = $_POST['pbudget']; //   required
    $timeline = $_POST['timeline']; //   required
    $message = $_POST['message']; //   required
    $page_url = isset($_POST['page_url']) ? $_POST['page_url'] : '';
   $thank_you_template = '';
   $data_template = '';

    function clean_text($string)
    {
        $string = trim($string);
        $string = stripslashes($string);
        $string = htmlspecialchars($string);
        return $string;
    }

   // $path = 'upload_document/' . $_FILES["attachment"]["name"][0];
   // move_uploaded_file($_FILES["attachment"]["tmp_name"][0], $path);
    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }


      if($error) {
        $response['status'] = false;
        $response['message'] = $error_message;
        echo json_encode($response); die;
      }else{

            $data["name"]   = clean_string($first_name);
            $data["email"]   = clean_string($email_from_template);
            $data["phone"]       = clean_string($number);
            $data["subject"]   = clean_string($subject);
            $data["bname"]      = clean_string($bname);
            $data["pbudget"]      = clean_string($pbudget);
            $data["timeline"]      = clean_string($timeline);
            $data["message"]      = clean_string($message);
            $data["year"]      = date('Y');
            $data["page_url"]      = clean_string($page_url);

            $thank_you_template = file_get_contents("project_enquiry.html");
            $data_template = file_get_contents("start_project_responder_enquiry.html");

            foreach($data as $key => $value)
            {
                $data_template = str_replace('{{ '.$key.' }}', $value, $data_template);
                $thank_you_template = str_replace('{{ '.$key.' }}', $value, $thank_you_template);
            }
        }

    require 'phpmailer/class.phpmailer.php';
    $mail = new PHPMailer;
    $mail->From = $from;// $_POST["cemail"];                  //Sets the From email address for the message
    $mail->FromName = $_POST["name"];               //Sets the From name of the message
    $mail->AddAddress($email_to);     //Adds a "To" address
    //$mail->AddCC('hr@startdesigns.com');     //Adds a "To" address
    $mail->AddReplyTo($from);
    $mail->WordWrap = 50;                           //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);                            //Sets message type to HTML
    //$mail->AddAttachment($path);                    //Adds an attachment from a path on the filesystem
    $mail->Subject = 'Project Enquiry';             //Sets the Subject of the message
    $mail->Body = $data_template;                         //An HTML or plain text message body

    //Auto-responder
  //  $responder_email_message .= $responder_template;
    if($mail->Send())                               //Send an Email. Return true on success or false on error
    {
        
        $responder_email_message = $email_message;
        $responder_mail = new PHPMailer;
        $responder_mail->From = $from;                  //Sets the From email address for the message
        $responder_mail->FromName = "Start Designs";               //Sets the From name of the message
        $responder_mail->AddAddress($email_to_reponder);     //Adds a "To" address
        $responder_mail->AddReplyTo($from);
        $responder_mail->IsHTML(true);                            //Sets message type to HTML
        $responder_mail->Subject = 'Project Enquiry';             //Sets the Subject of the message
        $responder_mail->Body = $thank_you_template;
        $responder_mail->send();
        $response['status'] = true;
        $response['message'] = 'Thank you. We will contact you soon.';
        echo json_encode($response); die; 
    }
    else
    {   
        $email_message = '<div class="alert alert-danger">There is an Error</div>';
    }
}
 
?>