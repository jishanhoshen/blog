<?php
/**
 * header
 */
class Header
{
	public $header;
	function __construct($themeMood)
	{
		$this->header = $this->Header($themeMood);
	}
	public function Header($themeMood)
	{
		?>
		<div class="header <?php echo $themeMood?>">
			<div class="logo"><a href="#" class="<?php echo $themeMood?>"><h1>TEXT LOGO</h1></a></div>
			<div class="log"><a href="#" class="<?php echo $themeMood?>">login</a></div>
		</div>
		<?php
	}
}
?>