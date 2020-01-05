<?php

//if
//else
//else if

$amount = 25 ; // rupees
$user_name = 'Ravi Kiran' ;

if ( $user_name == '' ) {

    echo 'Please login' ;

} else {
    
    if ( $amount < 100  ) {
    
        if ( $amount < 50 ) {

            if ( $user_name == 'Ravi Kiran' ) {
                
                echo 'He is ravi Kiran' ;

            } else {

                echo 'He is not Ravi Kiran' ;
            }

        } else {
            
            echo '50 to 99' ;
        }
    
    } else if ( $amount >= 100 AND $amount <= 199 ) { // 101 - 199
    
        echo '1 tshirt' ;
    
    } else if ( $amount >= 200 AND $amount <= 299 ) {
        
        echo '2 tshirt' ;
        
    } else {
    
        echo '3+ tshirts' ;
    }
    
}


/*

*/

?>