<?php
    
   function isEmptyArray( array $array ) {
  return count( $array ) === 0 or strlen( $array[0] ) === 0;
}


function arraySize( array $array ) {
  return count($array);
}


function message( array $names ) {
  
  if(isEmptyArray($names)) {
      
      return "no one likes this";
     }
  
  
  if(arraySize( $names ) === 1 ) {
       
       return  implode(",", $names)." likes this";
     }
  
  
  if(arraySize( $names ) === 2 or arraySize( $names ) === 3 ) {
    
      $lastName = array_pop( $names );
       
       return  implode(", ", $names)." and {$lastName} like this";
     }
  
  
  $twoFirst = [];
  
  for( $i = 0; $i < 2; $i++ ) {
    
    $towFirst[] = $names[$i];
    unset($names[$i]);
  }
  
  return implode(", ", $towFirst)." and ".arraySize( $names )." others like this";
  
}

function likes( array $names = [] ) {
  
  return message( $names ); 
}
echo likes(["Alex", "Jacob", "Mark", "Max", "Forlan"]);
