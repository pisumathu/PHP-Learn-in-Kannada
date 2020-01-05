<?php

require_once('config.php') ;

if ( isset($_POST['user_name'])) {
	
	//$id = '' ;
	$name = $_POST['user_name'] ;
	$mobile = $_POST['user_mobile'] ;
	$email = $_POST['user_email'] ;
	$password = $_POST['user_password'] ;
	//$date = '' ;

	$stmt = $db->prepare("INSERT INTO users ( name, mobile, email, password ) VALUES ( :name, :mobile, :email, :password ) ") ;
	$stmt->execute(array( ':name'=>$name, ':mobile'=>$mobile, ':email'=>$email, ':password'=>$password )) ;

	//echo 'data row inserted!' ;

	header('Location: php-register.html?form-submitted') ;

} else {
	header('Location: php-register.html?form-submit-fail') ;
}



$db = null ;




?>