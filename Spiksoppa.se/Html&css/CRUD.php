<?php
session_start();
require '../Recources/HeadHTML.php';
?>
<body>
<?php
require '../Recources/TopBar.php';
?>
<div class='Container'>
    <div id="wrapper">
<form method="post" name="FORM" id="form" enctype="multipart/form-data">
    <input type="text" name="Namn" placeholder="Namn">
        <textarea form="FORM" name="Ingredienser" placeholder="Ingredienser"></textarea>
        <input type="text" name="Utgivare" placeholder="Utgivare">
        <textarea form="FORM" name="Instruktioner" placeholder="Instruktioner"></textarea><br>
        <input type="file" name="Bild"><br>
    <input type="text" name="taggar" placeholder="taggar">
    <hr>
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
                        . '<input name="Utgivare" value="'.$Separ["Utgivare"].'" placeholder="Utgivare" type="hidden">
                        </li>
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
    </form>
</div>
</div>
</body>
</html>
