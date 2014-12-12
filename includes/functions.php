<?php


//This is where we will store all our php functions

function prep_mysql( $input) {  // this assumes PHP >= v4.3.0
    $input = mysql_real_escape_string(  $input );  //old working

    return $input;
}


?>
