<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contact us. As early as possible  we will contact you '
	);

    $firstname       = @trim(stripslashes($_POST['firstname'])); 
    $lastname        = @trim(stripslashes($_POST['lastname']));
    $email           = @trim(stripslashes($_POST['email'])); 
    $phone           = @trim(stripslashes($_POST['phone']));
    $message         = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'info@srrtemple.ca';//replace with your email

    $body = 'FirstName: ' . $firstname . "\n\n" . 'LastName: ' . $lastname . "\n\n" .  "\n\n" . 'Email: ' . $email . 'Phone: ' . $phone . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $phone, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;
