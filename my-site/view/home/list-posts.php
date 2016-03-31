<?php require_once('shared/header.php'); ?>
<?php foreach($posts as $post): ?>
	<h3><?php echo (!empty($post['title'])? htmlspecialchars($post['title']): 'Post #'.htmlspecialchars($post['id'])); ?></h3>
		<p><?php echo implode(' ', array_slice(explode(' ', strip_tags($post['content'])), 0, 10)); ?> [...]</p>
		<a href="<?php echo $this->base->url."/my-site/?id=".$post['id']; ?>" class="btn btn-primary">Read More</a><p>comments: <?php echo $post['comments']; ?></p>
	<hr/>
<?php endforeach; ?>

<?php require_once('shared/footer.php'); ?>