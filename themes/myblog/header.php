<?php
/**
 * header
 */
class Header
{
	public $header;
	function __construct($themeMood,$siteUrl)
	{
		$this->header = $this->Header($themeMood,$siteUrl);
	}
	public function Header($themeMood,$siteUrl)
	{
		?>
		<div class="header <?php echo $themeMood?>">
			<div class="logo"><a href="<?php echo $siteUrl?>" class="<?php echo $themeMood?>"><h1>TEXT LOGO</h1></a></div>
			<div class="log"><a href="#" class="<?php echo $themeMood?>">login</a></div>
		</div>
		<?php
	}
}
?>