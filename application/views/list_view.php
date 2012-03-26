<!DOCTYPE html>
<html>
<head>
	<title>Bookmarks</title>
	<link href="../custom.css" rel="stylesheet">
	<style type="text/css" media="screen">
	label {display: block;}
	</style>
</head>

<body>

<h2>Your Favorites</h2>
	<?php if(isset($bookmarks)) : foreach($bookmarks as $row) :?>

	<h4><?php echo $row->Name; ?> </h4>
	<div><?php echo $row->URL; ?> </div>
	<div><?php echo $row->Comments; ?></div>
		<div><?php echo anchor("site/delete/$row->id", "Delete"); ?></div>
	<?php endforeach; ?>

	<?php else : ?>

	<h2>No Favorites were returned. </h2>

	<?php endif; ?>

</body>
</html>