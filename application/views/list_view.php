<body>

<div class="favorites_list">	

<h2>Your Favorites</h2>

<ul class="favorites">
	<?php if(isset($bookmarks)) : foreach($bookmarks as $row) :?>

	<li>
		<h4><?php echo $row->Name; ?> </h4>
		<div><?php echo $row->URL; ?> </div>
		<div><?php echo $row->Comments; ?></div>
			<h4 class="btn-small"><?php echo anchor("site/delete/$row->id", "Delete"); ?></h4>
		<?php endforeach; ?>
	</li>
</ul>

	<?php else : ?>

	<h2>No Favorites were returned. </h2>

	<?php endif; ?>

	<h4 class='btn'><?php echo anchor("site/index", "Enter a new Favorite"); ?></h4>
</div>	

</body>
</html>