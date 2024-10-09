<?php
// include Barcode39 class 
include "Barcode39.php"; 

// set Barcode39 object 
$bc = new Barcode39("12345678"); 

// display new barcode 
$bc->draw();

// save barcode GIF file 
$bc->draw("barcode.gif");

?>