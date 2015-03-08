<?php

	$firstname	=	$_POST['firstname'];
	$lastname   =	$_POST['lastname'];
	$email	    =	$_POST['email'];
	$phoneno	=	$_POST['phoneno'];
	$company	=	$_POST['company'];
	
	$to = 'mail@shanidkv.com';
	$subject = 'Contact Form';
	$msg = "First Name: $firstname\nLast Name: $lastname\nEmail: $email\nPhone No: $phoneno\nCompany: $company";
	mail($to, $firstname, $msg);

?>