<?php
class TopHtml {

    protected $location;
    protected $outP;

//        är det index filen så säger ni "true" annars "false".

    function __construct($location) {
        $this->location = $location;
    }

    function displayTopHtml() {
        if ($this->location === true) {
            $this->outP = (
                    '<!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <link type="text/css" href="Recources/css/Main.css"  rel="stylesheet">
        <link type="text/css" href="Recources/css/topBar.css" rel="stylesheet">
        <title>spiksoppa.se Ditt skaffer, Dina recept</title>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        </head>');
            echo("<script>console.log('Första alternativet');</script>");
        };
        if ($this->location === false) {
            $this->outP = (
                    '<!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <link type="text/css" href="../Recources/css/Main.css"  rel="stylesheet">
        <link type="text/css" href="../Recources/css/topBar.css" rel="stylesheet">
        <title>spiksoppa.se Ditt skaffer, Dina recept</title>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        </head>');
        
        }
        return $this->outP;
    }

}
