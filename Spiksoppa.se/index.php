<?php
//require './Recources/anslut.php';
require './Recources/HeadHTML.php';
$headHtml = new TopHtml("top");
print $headHtml->displayTopHtml();
?>
<body>
<?php
require './Recources/TopBar.php';
print 'test to push/pull from c9';
?>
</body>
</html>
