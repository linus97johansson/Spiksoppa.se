<?php
//require './Recources/anslut.php';
require './Recources/HeadHTML.php';
$headHtml = new TopHtml("top");
print $headHtml->displayTopHtml();
?>
<body>
<?php
require './Recources/TopBar.php';
?>
</body>
</html>
