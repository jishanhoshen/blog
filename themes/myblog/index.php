<?php
$title = "My Blog";
include 'head.php';
$head = new head($title,$themeMood);
include 'header.php';
$head = new Header($themeMood);

include 'main_container.php';
$main_container = new Main_Container($ds);

include 'footer.php';
$footer = new Footer();
?>
