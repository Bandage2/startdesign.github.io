<?php

if(isset($_POST['form_submit'])) {
 // print_r($_POST);die;
    // EDIT THE 2 LINES BELOW AS REQUIRED
    //$email_to = "deepak@startdesigns.com";
    $email_to = "info@startdesigns.com";    
    $email_subject = "Get-quote";
    $from = 'no-reply@startdesigns.com';
    //$email_to = "info@startdesigns.com";
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
 
    
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
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
            $data["email"]   = clean_string($email_from);
            $data["number"]       = clean_string($number);
            $data["company"]   = clean_string($company);
            $data["website"]       = clean_string($website);
            $data["user_budget"]     = clean_string($user_budget);
            $data["inq_service"]      = clean_string($service);
            $data["information"]      = clean_string($information);
            $data["year"]      = date('Y');
            $data["base_url"]      = 'https://www.startdesigns.in/startdesigns2019';

            $template = file_get_contents("get_quote_template.html");

            foreach($data as $key => $value)
            {
                $template = str_replace('{{ '.$key.' }}', $value, $template);
            }
        }
        $message .= $template;
    require 'phpmailer/class.phpmailer.php';
    $mail = new PHPMailer;
  
    $mail->From = $_POST["email"];                  //Sets the From email address for the message
    $mail->FromName = $_POST["name"];               //Sets the From name of the message
    $mail->AddAddress($email_to);     //Adds a "To" address
    //$mail->AddAddress($email_from); 
    $mail->WordWrap = 50;                           //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);                            //Sets message type to HTML
    $mail->AddAttachment($path);                    //Adds an attachment from a path on the filesystem
    $mail->Subject = 'Get-quote';             //Sets the Subject of the message
    $mail->Body = $message;                         //An HTML or plain text message body
    if($mail->Send())                               //Send an Email. Return true on success or false on error
    {
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