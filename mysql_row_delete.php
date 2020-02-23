<?php
require_once('config.php') ;

$id = '4' ;
$mobile = '8958685478' ;
$email = 'ganesha@gmai.com' ;


$stmt = $db->prepare("DELETE FROM users WHERE mobile = :mobile AND email = :email ") ;
$stmt->bindValue( ':mobile', $mobile, PDO::PARAM_STR  ) ;
$stmt->bindValue( ':email', $email, PDO::PARAM_STR  ) ;
$stmt->execute() ;

echo 'row deleted' ;

?>