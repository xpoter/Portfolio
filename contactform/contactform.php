<?php
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $message    = $_POST['message'];

    $subject    = 'Personal from '.$name;
    $message    = nl2br($message);
if(isset($message) && !empty($message) && isset($name) && !empty($name)){
    //check whether message and sender name is set before being sent
    mail('aminukano585@gmail.com', $subject, $message);
}else{
    echo "Message cannot be blank";
}
    
