<?php
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $message    = $_POST['message'];

    $subject    = 'Personal from '.$name;
    $message    = nl2br($message);

    mail('aminukano585@gmail.com', $subject, $message);
