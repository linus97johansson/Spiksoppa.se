<?php
require "../Recources/anslut.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test: Formulär</title>
    </head>
    <body>
        <form method="post" name="FORM" id="form" enctype="multipart/form-data">
            <input type="text" name="Namn" placeholder="Namn">
            <textarea form="FORM" name="Ingredienser" placeholder="Ingredienser"></textarea>
            <input type="text" name="Utgivare" placeholder="Utgivare">
            <textarea form="FORM" name="Instruktioner" placeholder="Instruktioner"></textarea><br>
            <input type="file" name="Bild"><br>
            <input type="text" name="taggar" placeholder="taggar">
        </form>
    </body>
</html>
