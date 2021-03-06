<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!');
if (!empty($post->post_password)) { // if there's a password
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>

<h2><?php _e('Password Protected'); ?></h2>
<p><?php _e('Enter the password to view comments.'); ?></p>

<?php return;
	}
}

	/* This variable is for alternating comment background */

$oddcomment = 'alt';

?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
	<h5 id="comments"><?php comments_number('暂无回复', '1条回复', '% 条回复' );?>  </h5>

<ol class="commentlist">
<?php foreach ($comments as $comment) : ?>

	<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">

<div class="commentmetadata">
<strong><i class="fa fa-user-circle-o" aria-hidden="true"></i><?php comment_author_link() ?></strong> <?php _e(''); ?> <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> </a> 
 		<?php if ($comment->comment_approved == '0') : ?>
		<small><?php _e('此留言审核中'); ?></small>
 		<?php endif; ?>
</div>

<?php comment_text() ?>
	</li>

<?php /* Changes every other comment to a different class */
	if ('alt' == $oddcomment) $oddcomment = '';
	else $oddcomment = 'alt';
?>

<?php endforeach; /* end for each comment */ ?>
	</ol>

<?php else : // this is displayed if there are no comments so far ?>

<?php if ('open' == $post->comment_status) : ?>
	<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>

	<!-- If comments are closed. -->
<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

		<h5 id="respond"><i class="fa fa-comment-o" aria-hidden="true"></i>说点啥</h5>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>请 <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">登录</a>后留言</p>

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>

<p>当前登录用户 <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">登出</a></p>

<?php else : ?>
<ul id="comments-input">
	<li><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="40" tabindex="1" />
	<label for="author"><small><i class="fa fa-user-o" aria-hidden="true"></i>昵称<?php if ($req) echo "(必填)"; ?></small></label></li>

	<li><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="40" tabindex="2" />
	<label for="email"><small><i class="fa fa-envelope-o" aria-hidden="true"></i>邮箱<?php if ($req) echo "(必填)"; ?></small></label></li>

	<li><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="40" tabindex="3" />
	<label for="url"><small><i class="fa fa-laptop" aria-hidden="true"></i>网址</small></label></li>
</ul>
<?php endif; ?>



<p><textarea name="comment" id="comment" cols="60" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="发布看法" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>

<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>