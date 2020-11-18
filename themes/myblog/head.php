<?php
/**
 * head link
 */
class head
{
	public $head;
	public $title;
	function __construct($title,$themeMood)
	{	
		$this->head = $this->HeadLink($title,$themeMood);
	}
	public function HeadLink($title,$themeMood)
	{
	?>
	<html>
		<head>
			<meta charset="UTF-8">
			<meta name="description" content="blog ">
			<meta name="keywords" content="blog">
			<meta name="author" content="Jishan">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title><?php echo $title;?></title>
			<!-- favicon -->
			<link rel="apple-touch-icon" sizes="57x57" href="themes/myblog/img/ico/apple-icon-57x57.png">
			<link rel="apple-touch-icon" sizes="60x60" href="themes/myblog/img/ico/apple-icon-60x60.png">
			<link rel="apple-touch-icon" sizes="72x72" href="themes/myblog/img/ico/apple-icon-72x72.png">
			<link rel="apple-touch-icon" sizes="76x76" href="themes/myblog/img/ico/apple-icon-76x76.png">
			<link rel="apple-touch-icon" sizes="114x114" href="themes/myblog/img/ico/apple-icon-114x114.png">
			<link rel="apple-touch-icon" sizes="120x120" href="themes/myblog/img/ico/apple-icon-120x120.png">
			<link rel="apple-touch-icon" sizes="144x144" href="themes/myblog/img/ico/apple-icon-144x144.png">
			<link rel="apple-touch-icon" sizes="152x152" href="themes/myblog/img/ico/apple-icon-152x152.png">
			<link rel="apple-touch-icon" sizes="180x180" href="themes/myblog/img/ico/apple-icon-180x180.png">
			<link rel="icon" type="image/png" sizes="192x192"  href="themes/myblog/img/ico/android-icon-192x192.png">
			<link rel="icon" type="image/png" sizes="32x32" href="themes/myblog/img/ico/favicon-32x32.png">
			<link rel="icon" type="image/png" sizes="96x96" href="themes/myblog/img/ico/favicon-96x96.png">
			<link rel="icon" type="image/png" sizes="16x16" href="themes/myblog/img/ico/favicon-16x16.png">
			<link rel="manifest" href="themes/myblog/img/ico/manifest.json">
			<meta name="msapplication-TileColor" content="#ffffff">
			<meta name="msapplication-TileImage" content="themes/myblog/img/ico/ms-icon-144x144.png">
			<meta name="theme-color" content="#ffffff">
			<!-- favicon -->
			<link rel="stylesheet" type="text/css" href="themes/myblog/css/style.css">
			<link rel="stylesheet" type="text/css" href="themes/myblog/css/fontawesome.all.min.css">
			<script type="text/javascript" src="themes/myblog/js/jquery-3.5.1.min.js"></script>
			<script type="text/javascript" src="themes/myblog/js/fontawesome.all.min.js"></script>
			<script type="text/javascript" src="themes/myblog/js/script.js"></script>
		</head>
		<body class="<?php echo $themeMood;?>">
	<?php
	}
}
?>