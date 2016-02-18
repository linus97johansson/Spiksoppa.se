<?php
class TopHtml{
    
    protected $location;
    protected $outP;
            
//        $location är sökvägen för själva filen som du arbetar med. 
//        Te.x om du jobbar i "/html/grund/sida.php" så ska den vara
//        "/html/grund/" med ALLA snedsträcken!
    
    function __construct($location) {
        $this->location = $location;
    }
    function displayTopHtml() {
        
        $this->outP = ('<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" href="Recources/css/Main.css"  rel="stylesheet">
        <link type="text/css" href="Recources/css/topBar.css" rel="stylesheet">
        <title>spiksoppa.se Ditt skaffer, Dina recept</title>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    </head>');
        return $this->outP;
    }

}