<?php
//$start = 2018 ;
//$stop = 2000 ;

$seasons = array( "Autumn", "Winter", "Spring", "Summer" );

//echo $seasons[3] ;

/*
if ( in_array( 'Autumn', $seasons ) ) {
    echo 'yes' ;
}
*/


$random = array_rand($seasons);
//echo $seasons[$random] ;


$array_count = count($seasons);
echo $array_count ;

?>