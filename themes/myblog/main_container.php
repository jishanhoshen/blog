<?php
/**
 * Main_Container
 */
class Main_Container
{
	public $main_container;
	function __construct($ds,$themeMood,$siteUrl)
	{
		$this->main_container = $this->Main_Container($ds,$themeMood,$siteUrl);
	}
	public function Main_Container($ds,$themeMood,$siteUrl)
	{
	?>
<div class="main_container">
	<?php
	//select post
	$query = "SELECT * FROM `post`";
	$paramType = "";
	$paramArray = array();
	$postResult = $ds->select($query, $paramType, $paramArray);
	//select post
	if (!empty($postResult)) {
		foreach ($postResult as $key => $post) {
			$username = $post['username'];
			$postId = $post['postId'];
			//select user
			$query = "SELECT * FROM user where username = ?";
			$paramType = "s";
			$paramArray = array($username);
			$userResult = $ds->select($query, $paramType, $paramArray);
			//select user
			if (!empty($userResult)) {
				foreach ($userResult as $key => $user) {
					$user;
				}
			}
			//select post
			$query = "SELECT * FROM postReview where postId = ? ";
			$paramType = "i";
			$paramArray = array($postId);
			$postReviewResult = $ds->select($query, $paramType, $paramArray);
			//select post
			if (!empty($postReviewResult)) {
				foreach ($postReviewResult as $key => $postReview) {
					$postReview;
				}
			}
	?>
	<div class="post <?php echo $themeMood?>">
		<div class="post_header <?php echo $themeMood?>">
			<div class="profile_box" style="background-image: url(<?php echo $siteUrl?>uploads/users/<?php echo $user['profile'];?>);"></div>
			<div class="profile_title_box">
				<div class="username <?php echo $themeMood?>">
					<?php
					if ($post['username'] == $user['username']) {
						$displayName = $user['displayName'];
						$username = $user['username'];
					}
					?>
					<a href="<?php echo $siteUrl?>profile.php?user=<?php echo $username?>">
						<h3>
							<?php echo $displayName?>
						</h3>
					</a>
				</div>
				<div class="post_time">
					<p><?php echo $post['postTime']?></p>
				</div>
			</div>
			<div class="menu_box <?php echo $themeMood?>" id="menu_box_id_<?php echo $post['postId']?>">
				<i class="fas fa-ellipsis-v"></i>
				<div class="action_menu <?php echo $themeMood?>" id="action_menu_id_<?php echo $post['postId']?>">
					<ul>
						<li>
							<a  id="copyButton<?php echo $post['postId']?>" class="<?php echo $themeMood?>">Copy</a>
						</li>
						<li><a href="" class="<?php echo $themeMood?>">action</a></li>
					</ul>
				</div>
				<script type="text/javascript">
					$(document).ready(function(){
						$("#menu_box_id_<?php echo $post['postId']?>").click(function(){
							$("#action_menu_id_<?php echo $post['postId']?>").slideToggle();
						});
						document.getElementById("copyButton<?php echo $post['postId']?>").addEventListener("click", function() {
						    copyToClipboard(document.getElementById("copyTarget<?php echo $post['postId']?>"));
						});
					});
				</script>
			</div>
		</div>
		<div class="post_body">
			<div class="post_container">
				<div class="post_text_area">
					<?php
					if (!$post['postTitle'] == "") {
						echo '
						<input id="copyTarget'.$post['postId'].'" value="'.$siteUrl.'post.php?id='.$post['postId'].'" style="height:0;border:0;">
						<a href="post.php?id='.$post['postId'].'">
							<h2 class="'.$themeMood.'">'.$post['postTitle'] .'</h2>
						</a>';
					}
					if (!$post['postPara3'] == "") {
						echo "    <p>".$post['postPara1']."</p>";
						echo "<br><p>".$post['postPara2']."</p>";
						echo "<br><p>".$post['postPara3']."</p>";
					}else if (!$post['postPara2'] == "") {
						echo "    <p>".$post['postPara1']."</p>";
						echo "<br><p>".$post['postPara2']."</p>";
					}else if (!$post['postPara1'] == "") {
						echo "    <p>".$post['postPara1']."</p>";
					}
					?>
				</div>
				<div class="post_image_area">
					<?php
					$countImageClass = "";
					if (!$post['postImage4'] == "") {
						echo '<style type="text/css">';
						$countImageClass = "q-img";
						for ($postImageCount=1; $postImageCount <= 4; $postImageCount++) {
						$postIdimage = "#postId".$post['postId']."img".$postImageCount;
						$postImageCounting = "postImage".$postImageCount;
						$postImage = $post[$postImageCounting];
							echo $postIdimage.'{
								background-image: url('.$siteUrl."uploads/post/".$postImage.');
							}';
						}
						echo '</style>';
						echo '<div class="images '.$countImageClass.'">';
			
						for ($postImageCount=1; $postImageCount <= 4; $postImageCount++) {
							$postIdimage = "postId".$post['postId']."img".$postImageCount;
							echo '<div class="img" id="'.$postIdimage.'"></div>';
					 	}
						echo '</div>';
					}else if (!$post['postImage3'] == "") {
						echo '<style type="text/css">';
						$countImageClass = "t-img";
						for ($postImageCount=1; $postImageCount <= 3; $postImageCount++) {
						$postIdimage = "#postId".$post['postId']."img".$postImageCount;
						$postImageCounting = "postImage".$postImageCount;
						$postImage = $post[$postImageCounting];
							echo $postIdimage.'{
								background-image: url('.$siteUrl."uploads/post/".$postImage.');
							}';
						}
						echo '</style>';
						echo '<div class="images '.$countImageClass.'">';
			
						for ($postImageCount=1; $postImageCount <= 3; $postImageCount++) {
							$postIdimage = "postId".$post['postId']."img".$postImageCount;
							echo '<div class="img" id="'.$postIdimage.'"></div>';
					 	}
						echo '</div>';
					}else if (!$post['postImage2'] == "") {
						echo '<style type="text/css">';
						$countImageClass = "d-img";
						for ($postImageCount=1; $postImageCount <= 2; $postImageCount++) {
						$postIdimage = "#postId".$post['postId']."img".$postImageCount;
						$postImageCounting = "postImage".$postImageCount;
						$postImage = $post[$postImageCounting];
							echo $postIdimage.'{
								background-image: url('.$siteUrl."uploads/post/".$postImage.');
							}';
						}
						echo '</style>';
						echo '<div class="images '.$countImageClass.'">';
			
						for ($postImageCount=1; $postImageCount <= 2; $postImageCount++) {
							$postIdimage = "postId".$post['postId']."img".$postImageCount;
							echo '<div class="img" id="'.$postIdimage.'"></div>';
					 	}
						echo '</div>';
					}else if (!$post['postImage1'] == "") {
						echo '<style type="text/css">';
						$countImageClass = "s-img";
						for ($postImageCount=1; $postImageCount <= 1; $postImageCount++) {
						$postIdimage = "#postId".$post['postId']."img".$postImageCount;
						$postImageCounting = "postImage".$postImageCount;
						$postImage = $post[$postImageCounting];
							echo $postIdimage.'{
								background-image: url('.$siteUrl."uploads/post/".$postImage.');
							}';
						}
						echo '</style>';
						echo '<div class="images '.$countImageClass.'">';
			
						for ($postImageCount=1; $postImageCount <= 1; $postImageCount++) {
							$postIdimage = "postId".$post['postId']."img".$postImageCount;
							echo '<div class="img" id="'.$postIdimage.'"></div>';
					 	}
						echo '</div>';
					} ?>
				</div>
			</div>
		</div>
		<div class="post_footer count_footer <?php echo $themeMood?>">
			<?php
				$reactCount	=	$postReview['unlikeCount'] +
								$postReview['wowCount'] +
								$postReview['angryCount'] +
								$postReview['hahaCount'] +
								$postReview['loveCount'] +
								$postReview['likeCount'];
			?>
			<div class="reacts_count">
				<div class="reacts">
					<?php if ($postReview['unlikeStatus'] == 1) {?>
					<div class="react r-unlike" style="background-image: url(<?php echo $siteUrl;?>/themes/myblog/img/react/unlike.png);"></div>
					<?php }?>
					<?php if ($postReview['wowStatus'] == 1) {?>
					<div class="react r-unlike" style="background-image: url(<?php echo $siteUrl;?>/themes/myblog/img/react/wow.png);"></div>
					<?php }?>
					<?php if ($postReview['angryStatus'] == 1) {?>
					<div class="react r-unlike" style="background-image: url(<?php echo $siteUrl;?>/themes/myblog/img/react/angry.png);"></div>
					<?php }?>
					<?php if ($postReview['hahaStatus'] == 1) {?>
					<div class="react r-unlike" style="background-image: url(<?php echo $siteUrl;?>/themes/myblog/img/react/haha.png);"></div>
					<?php }?>
					<?php if ($postReview['loveStatus'] == 1) {?>
					<div class="react r-unlike" style="background-image: url(<?php echo $siteUrl;?>/themes/myblog/img/react/love.png);"></div>
					<?php }?>
					<?php if ($postReview['likeStatus'] == 1) {?>
					<div class="react r-unlike" style="background-image: url(<?php echo $siteUrl;?>/themes/myblog/img/react/like.png);"></div>
					<?php }?>
				</div>
				<div class="r-count"><p><?php echo $reactCount?></p></div>
			</div>
			<div class="comment_count">
					<p><?php if(!$postReview['commentCount'] == 0){ echo $postReview['commentCount'];}?> comments</p>
			</div>
			<div class="share_count">
				<p><?php if(!$postReview['shareCount'] == 0){ echo $postReview['shareCount'];}?> share</p>
			</div>
		</div>
		<div class="post_footer input_footer <?php echo $themeMood?>"></div>
	</div>
	<?php 
		$lastId = $post['postId'];
		} } 
	?>
</div>
	<?php
	}
}
?>
