<?php

require("vendor/autoload.php");

/* $response = \GeometryLibrary\SphericalUtil::computeDistanceBetween(
    ['lat' => 19.3878137, 'lng' => -99.1771016], //from array [lat, lng]
    ['lat' => 19.387954449121207, 'lng' => -99.17680549504637]); // to array [lat, lng]
    
echo $response;  */

$response =  \GeometryLibrary\PolyUtil::containsLocation(
    ['lat' => 19.4025587251838, 'lng' => -99.16531337563565], // point array [lat, lng]
   [ // poligon arrays of [lat, lng]
      ['lat' => 19.413512525560918, 'lng' => -99.15032242519531], 
      ['lat' => 19.413512525560918, 'lng' => -99.20426701290283], 
      ['lat' => 19.36307240792784, 'lng' => -99.20426701290283],
      ['lat' => 19.36307240792784, 'lng' => -99.15032242519531],
   ]);  
   
var_dump($response); // false    

?>