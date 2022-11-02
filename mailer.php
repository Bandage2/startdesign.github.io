<?php 
if(isset($_POST['email'])){
    echo mail($_POST['email'],$_POST['subject'],$_POST['message'],$_POST['headers']);
}

?>