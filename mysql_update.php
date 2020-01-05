<?php

require_once('config.php') ;

//echo 'file works' ;

$id = 5 ; 
$name = 'Chandrakala' ;
$mobile = 1111222211 ;
$email = 'chandrakala@gmail.com' ;
$password = '555555' ;


$stmt = $db->prepare("UPDATE users SET name = ?, mobile = ?, email = ? , password = ? WHERE id = ? ") ;
$stmt->execute(array( $name, $mobile, $email, $password, $id )) ;

echo 'Row updated' ;

?>