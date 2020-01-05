Date : <select name="date">

<?php
$start = 1 ;
$stop = 31 ;


while ( $start <= $stop ) {
    $date = $start++ ;
    echo '<option value="'.$date.'"> '.$date.' </option>' ;

}


?>  

</select>

Month : <select name="month">

<?php
$start = 1 ;
$stop = 12 ;


while ( $start <= $stop ) {
    $month = $start++ ;
    echo '<option value="'.$month.'"> '.$month.' </option>' ;

}


?>  

</select>

Year : <select name="year">

<?php
$start = 2018 ;
$stop = $start - 60 ; //1990 ;


while ( $start >= $stop ) {
    $year = $start-- ;
    echo '<option value="'.$year.'"> '.$year.' </option>' ;

}


?>  

</select>

