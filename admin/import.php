<?php
$connection = mysqli_connect('localhost','root','','blog');
$result = mysqli_query($connection,"SELECT * from `backup_db`");
if ($result !== FALSE) {
	while($row = mysqli_fetch_row($result)){
		$dbfilename = $row[1];
	}
}else{
	$dbfilename = "";
}

$dir    = 'sql';
$files1 = scandir($dir);
echo "<table>";
foreach ($files1 as $value) {
	if ($dbfilename == $value) {
		$backupfile = $dir."/".$value;
		echo "<tr>";
		echo "<td style='padding:4px'>";
		echo $value;
		echo "</td>";
		echo "<td style='padding:4px'>";
		//echo date("Y-m-d H.i.s", fileatime($backupfile));
		echo "</td>";
		echo "</tr>";
		file_import_to_db($backupfile);
	}else if ($value == "blog_backup.sql") {
		file_import_to_db("sql/".$value);
	}
}
echo "</table>";
function file_import_to_db($filename){
$connection = mysqli_connect('localhost','root','','blog');
	$handle = fopen($filename,"r+");
	$contents = fread($handle,filesize($filename));
	$sql = explode(';',$contents);
	foreach($sql as $query){
	  $result = mysqli_query($connection,$query);
	  if($result){
	      echo '<tr><td><br></td></tr>';
	      echo '<tr><td>'.$query.' <b>SUCCESS</b></td></tr>';
	      echo '<tr><td><br></td></tr>';
	  }
	}
	fclose($handle);
}
?>