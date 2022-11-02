<?php

if(isset($_POST['submit'])) {
 // print_r($_POST);die;
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@startdesigns.com";
    $email_to_reponder = $_POST['cemail'];
    $email_subject = "Get-career";
    $email_subject_responder = "Career in Start Desgins";
    $from = 'no-reply@startdesigns.com';
 
    $error = false;
    $error_message = '';
    $response = [];
    // validation expected data exists
    if(!isset($_POST['cname']) ||
        !isset($_POST['cemail']) ||
        !isset($_POST['phone']) ||
        //!isset($_POST['interested']) ||
        !isset($_POST['interested']) 
        //!isset($_POST['message'])
        ) {
        $error_message .= 'We are sorry, but there appears to be a problem with the form you submitted.<br />';
        $response['status'] = false;
        $response['message'] = $error_message;
        echo json_encode($response); die;
    }
 
    
    $first_name = $_POST['cname']; // required
    $email_from_template = $_POST['cemail']; // required
    $email_from = $from; // required
    $number = $_POST['phone']; //  required
    $interested = $_POST['interested']; //   required
    $experience = $_POST['experience']; //   required
    $mexperience = $_POST['mexperience']; //   required
    $messages = $_POST['cmessage']; // required
    $merge = $experience." ".$mexperience;
    $email_message = '';

    function clean_text($string)
    {
        $string = trim($string);
        $string = stripslashes($string);
        $string = htmlspecialchars($string);
        return $string;
    }

    $path = 'upload_document/' . $_FILES["attachment"]["name"][0];
    move_uploaded_file($_FILES["attachment"]["tmp_name"][0], $path);
    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }


      if($error) {
        $response['status'] = false;
        $response['message'] = $error_message;
        echo json_encode($response); die;
      }else{

            $data["cname"]   = clean_string($first_name);
            $data["cemail"]   = clean_string($email_from_template);
            $data["phone"]       = clean_string($number);
            $data["interested"]   = clean_string($interested);
            $data["experience"]     = clean_string($merge);
           // $data["mexperience"]     = clean_string($mexperience);
            $data["message"]      = clean_string($messages);
            $data["year"]      = date('Y');
            $data["base_url"]      = 'https://www.startdesigns.in/startdesigns2019';

            $template = file_get_contents("carrer_template.html");
            $responder_template = file_get_contents("respond_carrer_template.html");

            foreach($data as $key => $value)
            {
                $template = str_replace('{{ '.$key.' }}', $value, $template);
                $responder_template = str_replace('{{ '.$key.' }}', $value, $responder_template);
            }
        }
    $email_message .= $template;
    require 'phpmailer/class.phpmailer.php';
    $mail = new PHPMailer;
    $mail->From = $from;// $_POST["cemail"];                  //Sets the From email address for the message
    $mail->FromName = $_POST["cname"];               //Sets the From name of the message
    $mail->AddAddress($email_to);     //Adds a "To" address
    $mail->AddCC('hr@startdesigns.com');     //Adds a "To" address
 	$mail->AddReplyTo($from);
    $mail->WordWrap = 50;                           //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);                            //Sets message type to HTML
    $mail->AddAttachment($path);                    //Adds an attachment from a path on the filesystem
    $mail->Subject = 'Get-career';             //Sets the Subject of the message
    $mail->Body = $email_message;                         //An HTML or plain text message body

    //Auto-responder
    $responder_email_message .= $responder_template;
    $responder_mail = new PHPMailer;
    $responder_mail->From = $from;                  //Sets the From email address for the message
    $responder_mail->FromName = "Start designs Career";               //Sets the From name of the message
    $responder_mail->AddAddress($email_to_reponder);     //Adds a "To" address
    $responder_mail->AddReplyTo($from);
    $responder_mail->IsHTML(true);                            //Sets message type to HTML
    $responder_mail->Subject = 'Career in Start Desgins';             //Sets the Subject of the message
    $responder_mail->Body = $responder_email_message; 
    if($mail->Send())                               //Send an Email. Return true on success or false on error
    {
        $response['status'] = true;
        $response['message'] = 'Thank you.We will contact you soon.';
        $responder_mail->send();
        echo json_encode($response); die; 
        unlink($path);
        $mail->ClearAddresses();
    	$mail->ClearAttachments();
    }
    else
    {   
        $email_message = '<div class="alert alert-danger">There is an Error</div>';
    }
}
 
?>