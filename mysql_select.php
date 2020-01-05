<?php
require_once('config.php') ;

//echo 'hello world' ;

$stmt = $db->query("SELECT name, mobile FROM users LIMIT 10") ;

while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    
//echo    $id = $row['id'] . ' - ' ;
echo    $name = $row['name'] . ' - ' ;
echo    $mobile = $row['mobile'] . ' <br />' ;
//echo    $email = $row['email'] . '<br />' ;

}

?>