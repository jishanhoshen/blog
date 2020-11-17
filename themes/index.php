<?php
//database conn
include_once 'dataSource.php';
$ds = new DataSource();
//database
//theme name and mood selection
$query = "SELECT * FROM `thememood`";
$paramType = "";
$paramArray = array();
$theme = $ds->select($query, $paramType, $paramArray);
$themeMood = $theme[0]['themeMood'];
$themeName = $theme[0]['themeName'];
$dir    = 'themes';
$files1 = scandir($dir);
foreach ($files1 as $value) {
	if ($themeName == $value) {
		$themeDir = "themes/".$value;
	}
}
include_once $themeDir."/index.php";
?>