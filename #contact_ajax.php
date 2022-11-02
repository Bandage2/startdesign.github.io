	<?php

if(isset($_POST['form_submit'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    //$email_to = "deepak@startdesigns.com";
    $email_to = "info@startdesigns.com";
    $email_subject = "Contact-us";
    $from = 'no-reply@startdesigns.com';
 
    $error = false;
    $error_message = '';
    $response = [];
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        //!isset($_POST['interested']) ||
        !isset($_POST['skype_id']) 
        //!isset($_POST['message'])
        ) {
        $error_message .= 'We are sorry, but there appears to be a problem with the form you submitted.<br />';
        $response['status'] = false;
        $response['message'] = $error_message;
        echo json_encode($response); die;
    }
 
    
    $first_name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $number = $_POST['phone']; //  required
    $interested = $_POST['interested']; //   required
    $skype_id = $_POST['skype_id']; //   required
    $message = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    $error = true;
  }
        
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
    $error = true;
  }
 /* 
  if(!preg_match($string_exp,$interested)) {
    $error_message .= 'The interested you entered does not appear to be valid.<br />';
    $error = true;
  } 
    
  if(strlen($message) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    $error = true;
  }
    */
  
 /* $string_expt = "/^[A-Za-z0-9.-]+$/";
  if(!preg_match($string_expt,$skype_id)) {
    $error_message .= 'The skype id you entered does not appear to be valid.<br />';
    $error = true;
  } */


  function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
  }


  if($error) {
    $response['status'] = false;
    $response['message'] = $error_message;
    echo json_encode($response); die;
  }else{

    $data["first_name"]   = clean_string($first_name);
    $data["email"]   = clean_string($email_from);
    $data["phone_number"]       = clean_string($number);
    $data["interested"]   = clean_string($interested);
    $data["skype"]     = clean_string($skype_id);
    $data["message"]      = clean_string($message);
    $data["year"]      = date('Y');
    $data["base_url"]      = 'https://www.startdesigns.in/startdesigns2019';

    $template = file_get_contents("template.html");

    foreach($data as $key => $value)
    {
        $template = str_replace('{{ '.$key.' }}', $value, $template);
    }

    $email_message = $template;
    // create email headers
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
    // Create email headers
    $headers .= 'From: '.$email_from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    $response['status'] = true;
    $response['message'] = 'Thank you.We will contact you soon.';
    echo json_encode($response); die; 
  }
}
 


?>