<?php

//if
//else
//else if

$amount = 3000 ; // rupees

if ( $amount < 100 ) {
    
    echo 'no Tshirt' ;

} else if ( $amount >= 100 AND $amount <= 199 ) { // 101 - 199

    echo '1 tshirt' ;

} else if ( $amount >= 200 AND $amount <= 299 ) {
    
    echo '2 tshirt' ;
    
} else {

    echo '3+ tshirts' ;
}


?>