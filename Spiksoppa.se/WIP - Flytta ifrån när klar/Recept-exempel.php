<?php
require "../Recources/anslut.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <?php
            $sql = "SELECT * FROM `Spiksoppa-Recept` WHERE 1";

            $stmt = $dbh->prepare($sql);

            $stmt->execute();

            $Resultat = $stmt->fetchAll();

            foreach ($Resultat as $Separ) {
                print '
                    <ul>
                        <li>
                            ' . $Separ["Namn"]
                        . '</li>
                            <li>' .
                        $Separ["ingredienser"]
                        . '</li>
                            <li>' .
                        $Separ["Utgivare"]
                        . '</li>
                            <li>' .
                        $Separ["Instruktion"]
                        . '</li>
                            <li>
                            <img src="data:image/jpeg;base64,' . base64_encode($Separ['Bild']) . '"/>
                            </li>
                            <li>' .
                        $Separ["taggar"]
                        . '</li>
                            <li>' .
                        $Separ["Pris"]
                        . '</li>
                        </ul>
                    <hr>';
                }
            ?>
        </table>
    </body>
</html>
