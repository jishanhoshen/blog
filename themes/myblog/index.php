<?php
$title = "My Blog";
include 'head.php';
$head = new head($title,$themeMood,$siteUrl);
include 'header.php';
$head = new Header($themeMood,$siteUrl);

include 'main_container.php';
$main_container = new Main_Container($ds,$themeMood,$siteUrl);

include 'footer.php';
$footer = new Footer();
?>
