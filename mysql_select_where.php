<?php
require_once('config.php') ;

//echo 'hello world' ;
$query_id = 5 ;
$query_name = 'Ganesha' ;
$query_mobile = '5868958748' ;
$query_email = 'kumara@gmai.com' ;
$query_pw = '1234' ;


$stmt = $db->query("
    SELECT * 
    FROM users 
    WHERE id >= '$query_id'  
    LIMIT 3
    ") ;

while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    
echo    $id = $row['id'] . ' - ' ;
echo    $name = $row['name'] . ' - ' ;
echo    $mobile = $row['mobile'] . ' - ' ;
echo    $email = $row['email'] . '<br />' ;

}

?>