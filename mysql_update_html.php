<?php

require_once('config.php') ;

if ( isset($_POST['id'])) {
    
    $id = $_POST['id'] ;
    $name = $_POST['name'] ;
    $mobile = $_POST['mobile'] ;
    
    $stmt = $db->prepare("UPDATE users SET name = ?, mobile = ? WHERE id = ? ") ;
    $stmt->execute(array( $name, $mobile, $id )) ;
    
    echo 'Row updated' ;

} else {

    echo 'Something wrong!' ;

}




?>